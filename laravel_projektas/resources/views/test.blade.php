<?php

$year = 2025;
$month = 1;


$first_day = strtotime("$year-$month-01");
$last_day = strtotime("$year-$month-" . date('t', $first_day));


for ($current_day = $first_day; $current_day <= $last_day; $current_day = strtotime('+1 day', $current_day)) {
    $day_of_week = date('N', $current_day); // 1  pirmadienis, 7  sekmadienis
    if ($day_of_week == 6 || $day_of_week == 7) {
        $color = 'red';
    } else {
        $color = 'black';
    }


    echo '<span style="color: ' . $color . ';">' . date('Y-m-d', $current_day) . ' (' . date('N', $current_day) . ')</span><br>';
}
?>
