<?php
// includes/opening-times.php
// Loads opening times from JSON and provides current timings by date

function getOpeningTimesForDate($date = null) {
    $jsonFile = __DIR__ . '/../data/opening-times.json';
    if (!is_readable($jsonFile)) return null;
    $json = file_get_contents($jsonFile);
    $seasons = json_decode($json, true);
    if (!is_array($seasons)) return null;

    $dt = $date ? new DateTimeImmutable($date) : new DateTimeImmutable('today');
    foreach ($seasons as $season) {
        $start = isset($season['start']) ? new DateTimeImmutable($season['start']) : null;
        $end = isset($season['end']) ? new DateTimeImmutable($season['end']) : null;
        if ($start && $end && $dt >= $start && $dt <= $end) {
            return [
                'season' => $season['season'],
                'opening' => $season['opening']
            ];
        }
    }
    return null; // No matching season found
}

// Example usage (not executed unless called):
// $currentTimes = getOpeningTimesForDate();
// $todayOpen = $currentTimes['opening']['Wed'] ?? null;
