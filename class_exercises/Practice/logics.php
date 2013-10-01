<?php
date_default_timezone_set('US/Eastern');
$time = date('g:i a');
$hour = date('G');

if ($hour > 6 && $hour < 21) {
    $class="day";
}
else {
    $class="night";
}
?>

