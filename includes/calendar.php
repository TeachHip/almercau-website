<?php
if (!function_exists('isColorDark')) {
    function isColorDark($hex) {
        $hex = ltrim($hex, '#');
        if(strlen($hex) === 3) $hex = $hex[0].$hex[0].$hex[1].$hex[1].$hex[2].$hex[2];
        $r = hexdec(substr($hex,0,2));
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));
        // Perceived brightness
        return (($r*299 + $g*587 + $b*114) / 1000) < 128;
    }
}


// Calendar logic extracted from soy-mercante.php

function isoDate($y, $m, $d){ return sprintf('%04d-%02d-%02d', $y, $m, $d); }
function ordinal($n){
    $n = (int)$n;
    $v = $n % 100;
    $s = ['th','st','nd','rd'];
    return $n . (($s[($v-20)%10] ?? $s[$v] ?? $s[0]));
}
function h($str){ return htmlspecialchars((string)$str, ENT_QUOTES|ENT_SUBSTITUTE); }

$eventsFile = __DIR__ . '/../data/events.json';

$events = [];
$legendLabels = [];
$jsonError = null;
if(is_readable($eventsFile)){
    $raw = file_get_contents($eventsFile);
    $data = json_decode($raw, true);
    if(json_last_error() === JSON_ERROR_NONE && is_array($data)){
        $legendLabels = $data['legendLabels'] ?? [];
        $events = $data['events'] ?? [];
    } else {
        $jsonError = json_last_error_msg();
    }
} else {
    $jsonError = 'events.json not found or not readable';
}


$eventsByDate = [];
foreach($events as $ev){
    if(empty($ev['date'])) continue;
    $d = $ev['date'];
    $eventsByDate[$d][] = $ev;
}

// Spanish weekday names (short), available globally in this file
$weekdaysEs = [
    'Mon' => 'Lun',
    'Tue' => 'Mar',
    'Wed' => 'Mié',
    'Thu' => 'Jue',
    'Fri' => 'Vie',
    'Sat' => 'Sáb',
    'Sun' => 'Dom',
];

$today = new DateTimeImmutable('today');
$y1 = (int)$today->format('Y');
$m1 = (int)$today->format('n');
$next = $today->modify('first day of next month');
$y2 = (int)$next->format('Y');
$m2 = (int)$next->format('n');

function renderMonthHTML($year, $month, $eventsByDate){
    global $weekdaysEs, $legendById;
    $first = new DateTimeImmutable("$year-$month-01");
    $lastDay = (int)$first->format('t');
    $startIndex = ((int)$first->format('N') - 1);
    $monthsEs = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    $monthName = $monthsEs[(int)$first->format('n')-1] . ' ' . $first->format('Y');
    $html = [];
    $html[] = "<div class=\"month-wrapper border rounded-lg p-4 bg-white\">";
    $html[] = "<div class=\"flex items-center justify-between mb-3\"><div class=\"font-medium text-lg\">" . h($monthName) . "</div></div>";
    // Render weekday headers in order: Mon-Sun
    $html[] = '<div class="grid grid-cols-7 gap-1 text-xs text-gray-500 mb-2">';
    foreach(['Mon','Tue','Wed','Thu','Fri','Sat','Sun'] as $w) $html[] = '<div class="text-center">'.h($weekdaysEs[$w]).'</div>';
    $html[] = '</div>';
    $html[] = '<div class="grid grid-cols-7 gap-2">';
    for($i=0;$i<$startIndex;$i++) $html[] = '<div class="text-center text-sm muted p-1"></div>';
        // List of Gijón (Asturias, Spain) 2026 bank holidays (YYYY-MM-DD)
        $bankHolidays = [
            '2026-01-01', // Año Nuevo
            '2026-01-06', // Reyes
            '2026-02-17', // Martes de Carnaval (local)
            '2026-04-02', // Jueves Santo
            '2026-04-03', // Viernes Santo
            '2026-05-01', // Día del Trabajo
            '2026-06-29', // San Pedro (local)
            '2026-08-15', // Asunción
            '2026-09-08', // Día de Asturias
            '2026-10-12', // Fiesta Nacional
            '2026-11-02', // Lunes siguiente a Todos los Santos
            '2026-12-07', // Lunes siguiente a Constitución
            '2026-12-08', // Inmaculada
            '2026-12-25', // Navidad
        ];
        $today = new DateTimeImmutable('today');
        for($d=1;$d<=$lastDay;$d++){
            $dateKey = sprintf('%04d-%02d-%02d', $year, $month, $d);
            $evs = $eventsByDate[$dateKey] ?? [];
            $dt = new DateTimeImmutable($dateKey);
            $weekday = $dt->format('N'); // 1=Mon, 2=Tue, ..., 7=Sun
            $isWeekend = (int)$weekday >= 6;
            $isHoliday = in_array($dateKey, $bankHolidays);
            $dayTopClass = ($isWeekend || $isHoliday) ? 'text-red-500' : 'text-gray-800';
            $isToday = $dt->format('Y-m-d') === $today->format('Y-m-d');
            $todayClass = $isToday ? 'today border-2 border-black' : '';
            $dayContent = '<span class="' . $dayTopClass . ' text-sm font-semibold">' . h($d) . '</span>';
            $dots = '';
            if(count($evs)){
                $i = 0;
                foreach(array_slice($evs, 0, 3) as $ev){
                    $labelId = $ev['labelId'] ?? null;
                    $color = ($labelId && isset($legendById[$labelId]['color'])) ? h($legendById[$labelId]['color']) : '#F59E0B';
                    $title = (isset($ev['time']) ? $ev['time'].' - ' : '') . ($ev['title'] ?? '');
                    $dots .= '<span class="inline-block w-2.5 h-2.5 rounded-full flex-shrink-0 flex-grow-0 border-2 border-white box-content" style="background:' . $color . ';margin-left:2px;" title="' . h($title) . '"></span>';
                    $i++;
                }
                if(count($evs) > 3) $dots .= '<span class="text-xs text-gray-600 ml-1">+' . (count($evs)-3) . '</span>';
            }
            // Dynamic open/closed/half-closed logic using opening-times.php
            $currentTimes = getOpeningTimesForDate($dateKey);
            $dayMap = [1=>'Mon',2=>'Tue',3=>'Wed',4=>'Thu',5=>'Fri',6=>'Sat',7=>'Sun'];
            $dayKey = $dayMap[(int)$weekday];
            $hours = $currentTimes && !empty($currentTimes['opening'][$dayKey]) ? $currentTimes['opening'][$dayKey] : null;
            $closureClass = '';
            $overlayDiv = '';
            if (!$hours) {
                // Fully closed (full grey)
                $closureClass = 'closed-day';
            } else {
                // Split into time blocks
                $blocks = preg_split('/[,\/]/', $hours);
                $blockCount = count($blocks);
                if ($blockCount === 1) {
                    $block = trim($blocks[0]);
                    if (preg_match('/^(\d{2}):(\d{2})\s*-\s*(\d{2}):(\d{2})/', $block, $m)) {
                        $start = (int)$m[1];
                        $end = (int)$m[3];
                        // If block is only morning (before 15:00)
                        if ($end <= 15) {
                            $closureClass = 'closed-evening';
                            $overlayDiv = '<div style="position:absolute;left:0;bottom:0;width:100%;height:50%;background:#f3f4f6;z-index:1;pointer-events:none;"></div>';
                        // If block is only evening (starts at or after 15:00)
                        } elseif ($start >= 15) {
                            $closureClass = 'closed-morning';
                            $overlayDiv = '<div style="position:absolute;top:0;left:0;width:100%;height:50%;background:#f3f4f6;z-index:1;pointer-events:none;"></div>';
                        } else {
                            // Open all day (white)
                        }
                    }
                } elseif ($blockCount > 1) {
                    // If there are both morning and evening blocks, open all day (white)
                }
            }
            $bgClass = '';
            if (!$hours) {
                $bgClass = 'bg-gray-100';
            }
            $html[] = '<div class="border rounded day-cell p-3 flex flex-col justify-between ' . $bgClass . ' ' . $closureClass . ' ' . $todayClass . ' relative">'
                . $overlayDiv
                . ($dots ? '<span class="absolute top-0.5 right-0.5 flex flex-row z-20 space-x-0.5 pointer-events-none">' . $dots . '</span>' : '')
                . '<div class="daycell-content" style="position:relative;z-index:10;display:flex;align-items:center;">' . $dayContent . '</div>'
                . '</div>';
    }
    $totalCells = $startIndex + $lastDay;
    $trailing = (7 - ($totalCells % 7)) % 7;
    for($i=0;$i<$trailing;$i++) $html[] = '<div class="text-center text-sm muted p-1"></div>';
    $html[] = '</div>';
    $html[] = '</div>';
    return implode("\n", $html);
}



// Build legend lookup by id
$legendById = [];
foreach($legendLabels as $lbl) {
    if (!empty($lbl['id'])) {
        $legendById[$lbl['id']] = $lbl;
    }
}

// Build types array for legend rendering (color from legendLabels)
$types = [];
foreach($legendLabels as $lbl) {
    if (!empty($lbl['id'])) {
        $types[$lbl['id']] = [
            'color' => $lbl['color'] ?? '#F59E0B',
            'label' => $lbl['label']
        ];
    }
}

// Output the calendar and legend HTML
?>
<div id="calendars" class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <?= renderMonthHTML($y1, $m1, $eventsByDate) ?>
    <?= renderMonthHTML($y2, $m2, $eventsByDate) ?>
</div>
<div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
    <aside id="legendArea" class="md:col-span-1">
        <h3 class="text-lg font-medium mb-2">Leyenda</h3>
        <div id="legend" class="mt-2 flex flex-row flex-wrap gap-x-6 gap-y-2 text-sm text-gray-700">
            <?php foreach($types as $k => $t): ?>
                <span class="flex items-center gap-2 mb-2">
                    <span class="w-3 h-3 rounded-sm inline-block" style="background:<?= h($t['color']) ?>"></span>
                    <span class="text-sm whitespace-nowrap"><?= h($t['label']) ?></span>
                </span>
            <?php endforeach; ?>
        </div>
    </aside>
    <div id="listArea" class="md:col-span-1">
        <h3 class="text-lg font-medium mb-2">Próximos eventos</h3>
        <div id="eventsList" class="text-sm text-gray-700">
            <?php
            if($jsonError){
                echo '<div class="text-red-600">Error loading events.json: ' . h($jsonError) . '</div>';
            }
            if(empty($events)){
                echo '<em>No events</em>';
            } else {
                usort($events, function($a,$b){
                    $cmp = strcmp($a['date'] ?? '', $b['date'] ?? '');
                    if($cmp === 0) return strcmp($a['time'] ?? '', $b['time'] ?? '');
                    return $cmp;
                });
                $monthsEs = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
                $currentMonth = '';
                $today = new DateTimeImmutable('today');
                foreach($events as $ev){
                    $d = $ev['date'] ?? '';
                    $dt = DateTimeImmutable::createFromFormat('Y-m-d', $d);
                    if (!$dt) continue;
                    // Only show events from current or next month
                    $eventYear = (int)$dt->format('Y');
                    $eventMonth = (int)$dt->format('n');
                    $show = false;
                    if (($eventYear === $y1 && $eventMonth === $m1) || ($eventYear === $y2 && $eventMonth === $m2)) {
                        $show = true;
                    }
                    if (!$show) continue;
                    $monthNum = $eventMonth;
                    $yearNum = $eventYear;
                    $monthKey = $yearNum . '-' . $monthNum;
                    if($monthKey !== $currentMonth && $monthNum > 0){
                        $currentMonth = $monthKey;
                        echo '<div class="mt-3 mb-1 font-semibold text-base text-blue-900">' . h($monthsEs[$monthNum-1]) . ' ' . h($yearNum) . '</div>';
                    }
                    $isPast = $dt && $dt < $today;
                    $eventClass = $isPast ? 'text-gray-400 italic' : 'text-gray-700';
                    $dayName = $dt ? $dt->format('D') : '';
                    $dayNameEs = $weekdaysEs[$dayName] ?? $dayName;
                    $dayNumber = $dt ? str_pad($dt->format('j'), 2, '0', STR_PAD_LEFT) : '';
                    $timeText = !empty($ev['time']) ? str_replace(':00','h',$ev['time']) : '';
                    // Get label color for event
                    $labelId = $ev['labelId'] ?? null;
                    $color = ($labelId && isset($legendById[$labelId]['color'])) ? h($legendById[$labelId]['color']) : '#F59E0B';
                    $dateTextClass = isColorDark($color) ? 'text-white' : 'text-gray-900';
                    echo '<div class="py-1 ' . $eventClass . '">';
                    echo '<span class="pr-2 px-2 py-0.5 rounded font-semibold font-mono tracking-tight ' . $dateTextClass . '" style="background:' . $color . '">' . h($dayNameEs . ' ' . $dayNumber) . '</span> ';
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
