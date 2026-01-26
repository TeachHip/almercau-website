<?php
// calendar.inc.php
// Usage: require_once 'includes/calendar.inc.php'; echo render_events_calendar($options);
// $options keys:
//  - eventsPath (string) : server FS path to events.json (required)
//  - legend (assoc array) : optional static legend, format: [ 'reading' => ['label'=>'Reading','color'=>'#8BC34A'], ... ]
//  - cacheMinutes (int) : optional small server-side cache for rendered HTML (default 0 = no cache)

function render_events_calendar(array $opts = []): string {
    $eventsPath = $opts['eventsPath'] ?? (__DIR__ . '/../data/events.json'); // default relative to includes/
    $legendOverride = $opts['legend'] ?? null;
    $cacheMinutes = isset($opts['cacheMinutes']) ? (int)$opts['cacheMinutes'] : 0;

    // Simple cache (file-based) to avoid re-rendering on every request (useful if many requests)
    $cacheKey = 'ecal_' . md5($eventsPath . '|' . json_encode($legendOverride));
    $cacheFile = sys_get_temp_dir() . DIRECTORY_SEPARATOR . $cacheKey . '.html';

    if($cacheMinutes > 0 && file_exists($cacheFile)) {
        $age = time() - filemtime($cacheFile);
        if($age < ($cacheMinutes * 60)) {
            return file_get_contents($cacheFile);
        }
    }

    // load events.json
    $events = [];
    $jsonError = null;
    if(is_readable($eventsPath)) {
        $raw = file_get_contents($eventsPath);
        $data = json_decode($raw, true);
        if(json_last_error() === JSON_ERROR_NONE && is_array($data)) {
            $events = $data;
        } else {
            $jsonError = json_last_error_msg();
        }
    } else {
        $jsonError = 'events.json not found or not readable at: ' . htmlspecialchars($eventsPath, ENT_QUOTES);
    }

    // map by date
    $eventsByDate = [];
    foreach($events as $ev) {
        if(empty($ev['date'])) continue;
        $d = $ev['date'];
        $eventsByDate[$d][] = $ev;
    }

    // default static legend (hardcoded) — supply legendOverride to change
    $defaultLegend = [
        'reading' => ['label'=>'Reading', 'color'=>'#8BC34A'],
        'promo'   => ['label'=>'Promo',   'color'=>'#FF9800'],
        'music'   => ['label'=>'Music',   'color'=>'#E91E63'],
    ];
    $legend = $legendOverride ?? $defaultLegend;

    // compute current and next month
    $today = new DateTimeImmutable('today');
    $y1 = (int)$today->format('Y'); $m1 = (int)$today->format('n');
    $next = $today->modify('first day of next month');
    $y2 = (int)$next->format('Y'); $m2 = (int)$next->format('n');

    // helper closures
    $isoDate = function($Y,$M,$D){ return sprintf('%04d-%02d-%02d',$Y,$M,$D); };
    $ordinal = function($n){
        $n = intval($n); $v = $n % 100; $s = ['th','st','nd','rd'];
        return $n . ($s[($v-20)%10] ?? ($s[$v] ?? $s[0]));
    };

    ob_start();
    ?>
    <div class="ecal" aria-label="Events calendar">
      <div class="ecal-wrapper">
        <div class="ecal-header">
          <h3 class="ecal-title">Events calendar</h3>
          <div class="ecal-sub">Current month and next month</div>
        </div>

        <div class="ecal-calendars">
          <?php
          // renderMonth: server-side DOM building
          $renderMonth = function($year, $month) use ($eventsByDate, $isoDate) {
              $first = new DateTimeImmutable("$year-$month-01");
              $lastDay = (int)$first->format('t');
              $startIndex = ((int)$first->format('N') - 1); // 0=Mon..6=Sun
              $monthName = $first->format('F Y');
              ?>
              <div class="month" role="group" aria-label="<?= htmlspecialchars($monthName) ?>">
                <div class="month-heading"><?= htmlspecialchars($monthName) ?></div>
                <div class="weekdays">
                  <?php foreach(['Mon','Tue','Wed','Thu','Fri','Sat','Sun'] as $wd): ?>
                    <div class="weekday"><?= htmlspecialchars($wd) ?></div>
                  <?php endforeach; ?>
                </div>
                <div class="days">
                  <?php for($i=0;$i<$startIndex;$i++): ?>
                    <div class="day empty" aria-hidden="true"></div>
                  <?php endfor; ?>

                  <?php for($d=1;$d<=$lastDay;$d++):
                      $dateKey = sprintf('%04d-%02d-%02d', $year, $month, $d);
                      $evs = $eventsByDate[$dateKey] ?? [];
                      $isWeekend = ((int)(new DateTimeImmutable($dateKey))->format('N')) >= 6;
                      $dayClasses = 'day' . ($isWeekend ? ' weekend' : '');
                  ?>
                    <div class="<?= $dayClasses ?>" data-date="<?= $dateKey ?>">
                      <div class="day-number"><?= $d ?></div>
                      <div>
                        <?php if(!empty($evs)): ?>
                          <div class="dot-row">
                            <?php foreach(array_slice($evs,0,3) as $ev): 
                                $sw = htmlspecialchars($ev['color'] ?? '#F59E0B', ENT_QUOTES);
                                $title = htmlspecialchars((($ev['time'] ?? '') ? $ev['time'] . ' - ' : '') . ($ev['title'] ?? ''), ENT_QUOTES);
                            ?>
                              <span class="dot" title="<?= $title ?>" style="background:<?= $sw ?>"></span>
                            <?php endforeach; ?>
                            <?php if(count($evs) > 3): ?>
                              <span class="more">+<?= count($evs) - 3 ?></span>
                            <?php endif; ?>
                          </div>
                          <div class="first-title"><?= htmlspecialchars($evs[0]['title'] ?? '') ?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endfor; ?>

                  <?php
                  $totalCells = $startIndex + $lastDay;
                  $trailing = (7 - ($totalCells % 7)) % 7;
                  for($i=0;$i<$trailing;$i++): ?>
                    <div class="day empty" aria-hidden="true"></div>
                  <?php endfor; ?>
                </div>
              </div>
          <?php
          };

          // output two months
          $renderMonth($y1, $m1);
          $renderMonth($y2, $m2);
          ?>
        </div>

        <div class="ecal-footer">
          <aside class="legend">
            <h4>Legend</h4>
            <?php foreach($legend as $k => $v): ?>
              <div class="legend-item">
                <span class="legend-swatch" style="background:<?= htmlspecialchars($v['color'] ?? '#888', ENT_QUOTES) ?>"></span>
                <span class="legend-label"><?= htmlspecialchars($v['label'] ?? $k) ?></span>
              </div>
            <?php endforeach; ?>
          </aside>

          <div class="events-list" aria-live="polite">
            <h4>Upcoming events</h4>
            <?php
            if($jsonError): ?>
              <div class="diag"><?= htmlspecialchars($jsonError) ?></div>
            <?php endif;

            if(empty($events)): ?>
              <div><em>No events</em></div>
            <?php else:
                // sort events
                usort($events, function($a,$b){
                    $cmp = strcmp($a['date'] ?? '', $b['date'] ?? '');
                    return $cmp === 0 ? strcmp($a['time'] ?? '', $b['time'] ?? '') : $cmp;
                });
                foreach($events as $ev):
                    $date = $ev['date'] ?? '';
                    $dt = DateTimeImmutable::createFromFormat('Y-m-d', $date);
                    $dayName = $dt ? $dt->format('D') : '';
                    $dayNumber = $dt ? intval($dt->format('j')) : '';
                    $timeText = (!empty($ev['time'])) ? str_replace(':00','h',$ev['time']) : '';
                    ?>
                    <div class="event-line">
                      <strong><?= htmlspecialchars("{$dayName} {$ordinal($dayNumber)}.") ?></strong>
                      <?= $timeText ? htmlspecialchars(" {$timeText}. ") : ' ' ?>
                      <?= htmlspecialchars($ev['title'] ?? '') ?>
                      <?php if(!empty($ev['note'])): ?>
                        <span class="event-note">– <?= htmlspecialchars($ev['note']) ?></span>
                      <?php endif; ?>
                    </div>
                <?php endforeach;
            endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php
    $html = ob_get_clean();

    // write cache file atomically
    if($cacheMinutes > 0){
        $tmp = $cacheFile . '.tmp';
        @file_put_contents($tmp, $html);
        @rename($tmp, $cacheFile);
    }

    return $html;
}
?>