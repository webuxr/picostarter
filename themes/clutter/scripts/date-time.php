<?php
$tzoneId = 'America/Chicago';
$scriptTzGet = date_default_timezone_get();
$scriptTzSet = date_default_timezone_set($tzoneId);

$date = date_create(); // Now()
$todayNow = date_timestamp_get($date); // Current timestamp.
