<?php

$URL = "http://futar.bkk.hu/bkk-utvonaltervezo-api/ws/otp/api/where/arrivals-and-departures-for-stop.json?includeReferences=agencies,routes,trips,stops&stopId=BKK_F02768&minutesBefore=1&minutesAfter=30&key=bkk-web&version=3&appVersion=2.3.3-20170810153906";

$V1 = file_get_contents($URL);

$V1 = json_decode($V1);

$dataBase = $V1->data;
$routes = $dataBase->references->routes;
//$stops = $dataBase->references->stops;
$trips = $dataBase->references->trips;
$stopTime = $dataBase->entry->stopTimes;
// #routes->shortName: Járat Száma
// #stopTimes: Hova tart
// #predictedDepartureTime, departureTime: Valós idejű érkezés, tervezett érkezés
//   ______________________
//  [stopTime              ]      ________
//  [----------------------]     [trips   ]      _________
//  [stopHeading           ]     [--------]     [routes   ]
//  [tripId                ]-----[id      ]     [---------]
//  [departureTime         ]     [routID  ]-----[id       ]
//  [predictedDepartureTime]                    [shortName]
//
//

for ($i = 3;$i<4;$i++){
    //print_r($routes[$i]->shortName);
    print_r($stopTime[$i]->stopHeadsign);
    echo '<br>';

}


?>
