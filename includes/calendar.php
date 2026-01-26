<?php
// Calendar logic extracted from soy-mercante.php

date_default_timezone_set('UTC');
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
        for($d=1;$d<=$lastDay;$d++){
            $dateKey = sprintf('%04d-%02d-%02d', $year, $month, $d);
            $evs = $eventsByDate[$dateKey] ?? [];
            $dt = new DateTimeImmutable($dateKey);
            $weekday = $dt->format('N'); // 1=Mon, 2=Tue, ..., 7=Sun
            $isWeekend = (int)$weekday >= 6;
            $isHoliday = in_array($dateKey, $bankHolidays);
            $dayTopClass = ($isWeekend || $isHoliday) ? 'text-red-500' : 'text-gray-800';
            $bgClass = (in_array((int)$weekday, [1,2,7])) ? 'bg-gray-100' : '';
            $dayContent = '<span class="' . $dayTopClass . ' text-sm font-semibold">' . h($d) . '</span>';
            if(count($evs)){
                $i = 0;
                foreach(array_slice($evs, 0, 3) as $ev){
                    $labelId = $ev['labelId'] ?? null;
                    $color = ($labelId && isset($legendById[$labelId]['color'])) ? h($legendById[$labelId]['color']) : '#F59E0B';
                    $title = (isset($ev['time']) ? $ev['time'].' - ' : '') . ($ev['title'] ?? '');
                    $dayContent .= '<span class="inline-block align-middle ml-1 w-2.5 h-2.5 rounded-full" style="background:' . $color . '" title="' . h($title) . '"></span>';
                    $i++;
                }
                if(count($evs) > 3) $dayContent .= '<span class="text-xs text-gray-600 ml-1">+' . (count($evs)-3) . '</span>';
            }
            // Half-cell overlays for Wed (top half) and Sat (bottom half)
            $halfOverlay = '';
            $debugBg = '';
            if ((int)$weekday === 3) { // Wed
                $halfOverlay = '<span class="halfcell-wed"></span>';
                $debugBg = 'debug-wed';
            } elseif ((int)$weekday === 6) { // Sat
                $halfOverlay = '<span class="halfcell-sat"></span>';
                $debugBg = 'debug-sat';
            }
            // Determine closure class
            $closureClass = '';
            $overlayDiv = '';
            if (in_array((int)$weekday, [1,2,7])) { // Mon, Tue, Sun fully closed
                $closureClass = 'closed-day';
            } elseif ((int)$weekday === 3) { // Wed morning closed
                $closureClass = 'closed-morning';
                $overlayDiv = '<div style="position:absolute;top:0;left:0;width:100%;height:50%;background:#f3f4f6;z-index:1;pointer-events:none;"></div>';
            } elseif ((int)$weekday === 6) { // Sat evening closed
                $closureClass = 'closed-evening';
                $overlayDiv = '<div style="position:absolute;left:0;bottom:0;width:100%;height:50%;background:#f3f4f6;z-index:1;pointer-events:none;"></div>';
            }
            $html[] = '<div class="border rounded day-cell p-3 flex flex-col justify-between ' . $bgClass . ' ' . $closureClass . ' relative">'
                . $overlayDiv
                . '<div class="daycell-content" style="position:relative;z-index:2;display:flex;align-items:center;">' . $dayContent . '</div>'
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
        <h3 class="text-lg font-medium mb-2">Legend</h3>
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
        <h3 class="text-lg font-medium mb-2">Upcoming events</h3>
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
                    $monthNum = $dt ? (int)$dt->format('n') : 0;
                    $yearNum = $dt ? (int)$dt->format('Y') : 0;
                    $monthKey = $yearNum . '-' . $monthNum;
                    if($monthKey !== $currentMonth && $monthNum > 0){
                        $currentMonth = $monthKey;
                        echo '<div class="mt-3 mb-1 font-semibold text-base text-blue-900">' . h($monthsEs[$monthNum-1]) . ' ' . h($yearNum) . '</div>';
                    }
                    $isPast = $dt && $dt < $today;
                    $eventClass = $isPast ? 'text-gray-400 italic' : 'text-gray-700';
                    $dayName = $dt ? $dt->format('D') : '';
                    $dayNameEs = $weekdaysEs[$dayName] ?? $dayName;
                    $dayNumber = $dt ? (int)$dt->format('j') : '';
                    $timeText = !empty($ev['time']) ? str_replace(':00','h',$ev['time']) : '';
                    echo '<div class="py-1 ' . $eventClass . '"><strong class="pr-2">' . h($dayNameEs . ' ' . $dayNumber) . '.</strong> ';
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
