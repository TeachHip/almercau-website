<?php
// calendar.php - server-rendered two-month events calendar (reads ./events.json)
// Requirements: PHP 7+, Tailwind via CDN (no npm/build).
// Place calendar.php and events.json in same folder served by Apache.

date_default_timezone_set('UTC'); // adjust if needed

function isoDate($y, $m, $d){ return sprintf('%04d-%02d-%02d', $y, $m, $d); }
function ordinal($n){
    $n = (int)$n;
    $v = $n % 100;
    $s = ['th','st','nd','rd'];
    return $n . (($s[($v-20)%10] ?? $s[$v] ?? $s[0]));
}
function h($str){ return htmlspecialchars((string)$str, ENT_QUOTES|ENT_SUBSTITUTE); }

// load events.json
$eventsFile = __DIR__ . '/events.json';
$events = [];
$jsonError = null;
if(is_readable($eventsFile)){
    $raw = file_get_contents($eventsFile);
    $data = json_decode($raw, true);
    if(json_last_error() === JSON_ERROR_NONE && is_array($data)){
        $events = $data;
    } else {
        $jsonError = json_last_error_msg();
    }
} else {
    $jsonError = 'events.json not found or not readable';
}

// map events by date
$eventsByDate = [];
foreach($events as $ev){
    if(empty($ev['date'])) continue;
    $d = $ev['date'];
    $eventsByDate[$d][] = $ev;
}

// find current and next month
$today = new DateTimeImmutable('today');
$y1 = (int)$today->format('Y');
$m1 = (int)$today->format('n');
$next = $today->modify('first day of next month');
$y2 = (int)$next->format('Y');
$m2 = (int)$next->format('n');

// helper to render a month
function renderMonthHTML($year, $month, $eventsByDate){
    $first = new DateTimeImmutable("$year-$month-01");
    $lastDay = (int)$first->format('t');
    // ISO weekday: PHP N gives 1 (Mon) .. 7 (Sun)
    $startIndex = ((int)$first->format('N') - 1); // 0=Mon..6=Sun
    // month name
    $monthName = $first->format('F Y');

    $html = [];
    $html[] = "<div class=\"month-wrapper border rounded-lg p-4 bg-white\">";
    $html[] = "<div class=\"flex items-center justify-between mb-3\"><div class=\"font-medium text-lg\">" . h($monthName) . "</div></div>";

    $weekdays = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
    $html[] = '<div class="grid grid-cols-7 gap-1 text-xs text-gray-500 mb-2">';
    foreach($weekdays as $w) $html[] = '<div class="text-center">'.h($w).'</div>';
    $html[] = '</div>';

    $html[] = '<div class="grid grid-cols-7 gap-2">';
    // leading blanks
    for($i=0;$i<$startIndex;$i++) $html[] = '<div class="text-center text-sm muted p-1"></div>';

    for($d=1;$d<=$lastDay;$d++){
        $dateKey = sprintf('%04d-%02d-%02d', $year, $month, $d);
        $evs = $eventsByDate[$dateKey] ?? [];
        $isWeekend = (int)(new DateTimeImmutable($dateKey))->format('N') >= 6; // Sat(6), Sun(7)
        $dayTopClass = $isWeekend ? 'text-red-500' : 'text-gray-800';
        $html[] = '<div class="border rounded day-cell p-3 flex flex-col justify-between">';
        $html[] = '<div><div class="' . $dayTopClass . ' text-sm font-semibold">' . h($d) . '</div></div>';
        // bottom: dots and first title
        $bottom = '<div class="flex flex-col gap-1"><div class="flex items-center gap-2">';
        if(count($evs)){
            $i = 0;
            foreach(array_slice($evs, 0, 3) as $ev){
                $color = isset($ev['color']) ? h($ev['color']) : '#F59E0B';
                $title = (isset($ev['time']) ? $ev['time'].' - ' : '') . ($ev['title'] ?? '');
                $bottom .= '<span class="inline-block w-2.5 h-2.5 rounded-full" style="background:' . $color . '" title="' . h($title) . '"></span>';
                $i++;
            }
            if(count($evs) > 3) $bottom .= '<span class="text-xs text-gray-600 ml-1">+' . (count($evs)-3) . '</span>';
            $bottom .= '</div>';
            $bottom .= '<div class="text-xs text-gray-600 truncate">' . h($evs[0]['title'] ?? '') . '</div></div>';
        } else {
            $bottom .= '</div></div>';
        }
        $html[] = $bottom;
        $html[] = '</div>';
    }

    // trailing blanks
    $totalCells = $startIndex + $lastDay;
    $trailing = (7 - ($totalCells % 7)) % 7;
    for($i=0;$i<$trailing;$i++) $html[] = '<div class="text-center text-sm muted p-1"></div>';

    $html[] = '</div>'; // days grid
    $html[] = '</div>'; // wrapper

    return implode("\n", $html);
}

// build legend from events
$types = [];
foreach($events as $ev){
    $key = $ev['type'] ?? ($ev['title'] ?? ($ev['color'] ?? $ev['date']));
    if(!isset($types[$key])){
        $types[$key] = [
            'color' => $ev['color'] ?? '#F59E0B',
            'label' => $ev['type'] ?? $ev['title'] ?? $key
        ];
    }
}

?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Events calendar (PHP)</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .day-cell { min-height: 96px; }
    .muted { color: #9CA3AF; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">
  <main class="max-w-6xl mx-auto p-6">
    <header class="mb-4">
      <h1 class="text-2xl font-semibold">Events calendar</h1>
      <p class="text-sm text-gray-600">Server-rendered calendar (current + next month). Events loaded from <code class="bg-gray-100 px-1 rounded">events.json</code>.</p>
    </header>

    <section class="bg-white shadow rounded-lg p-4">
      <div id="calendars" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <?= renderMonthHTML($y1, $m1, $eventsByDate) ?>
        <?= renderMonthHTML($y2, $m2, $eventsByDate) ?>
      </div>

      <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        <aside id="legendArea" class="md:col-span-1">
          <h2 class="text-lg font-medium mb-2">Legend</h2>
          <div id="legend" class="mt-2 flex flex-col gap-2 text-sm text-gray-700">
            <?php foreach($types as $k => $t): ?>
              <div class="flex items-center gap-3 mb-2">
                <span class="w-3 h-3 rounded-sm" style="background:<?= h($t['color']) ?>"></span>
                <span class="text-sm"><?= h($t['label']) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </aside>

        <div id="listArea" class="md:col-span-2">
          <h2 class="text-lg font-medium mb-2">Upcoming events</h2>
          <div id="eventsList" class="text-sm text-gray-700">
            <?php
            if($jsonError){
                echo '<div class="text-red-600">Error loading events.json: ' . h($jsonError) . '</div>';
            }
            if(empty($events)){
                echo '<em>No events</em>';
            } else {
                // sort events by date/time
                usort($events, function($a,$b){
                    $cmp = strcmp($a['date'] ?? '', $b['date'] ?? '');
                    if($cmp === 0) return strcmp($a['time'] ?? '', $b['time'] ?? '');
                    return $cmp;
                });
                foreach($events as $ev){
                    $d = $ev['date'] ?? '';
                    $dt = DateTimeImmutable::createFromFormat('Y-m-d', $d);
                    $dayName = $dt ? $dt->format('D') : '';
                    $dayNumber = $dt ? (int)$dt->format('j') : '';
                    $timeText = !empty($ev['time']) ? str_replace(':00','h',$ev['time']) : '';
                    echo '<div class="py-1"><strong class="pr-2">' . h($dayName . ' ' . ordinal($dayNumber)) . '.</strong> ';
                    echo ($timeText ? h($timeText) . '. ' : '') . h($ev['title'] ?? '');
                    if(!empty($ev['note'])) echo ' <span class="text-gray-500">– ' . h($ev['note']) . '</span>';
                    echo '</div>';
                }
            }
            ?>
          </div>
          <?php if($jsonError): ?>
            <div class="mt-3 text-xs text-red-600"><?= h($jsonError) ?></div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>
</body>
</html>