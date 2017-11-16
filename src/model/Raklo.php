<?php

$URL = 'http://futar.bkk.hu/bkk-utvonaltervezo-api/ws/otp/api/where/arrivals-and-departures-for-stop.json?includeReferences=agencies,routes,trips,stops&stopId=BKK_F02768&minutesBefore=1&minutesAfter=30&key=bkk-web&version=3&appVersion=2.3.3-20170810153906';

$V1 = file_get_contents($URL);

$V1 = json_decode($V1);

$dataBase = $V1->data->entry->stopTimes;
$routes = $dataBase->routes;
$stops = $dataBase->stops;
$trips = $dataBase->trips;
?>
