<?php
// Julien Muggli | https://github.com/Liozon?tab=repositories
// Getting data
$url = 'http://transport.opendata.ch/v1/stationboard?id=8504178&limit=1&to=lausanneflon';   // Data from opendata.ch
$ch = curl_init();
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it prints the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$response = curl_exec($ch);
curl_close($ch);
$obj = json_decode($response);  // Object
// $obj = json_decode($response, true); // Associative array

//Navigating to the targeted infos 
$stationboard = $obj->stationboard[0];  // Navigation to the station details and infos
$text = $stationboard->number . ' -> ';
$now = new DateTime();
$now->setTimezone(new DateTimeZone('Europe/Zurich'));
$nextDeparture = $stationboard->stop->departureTimestamp;   // Getting the departure timestamp info
$dep = date_create_from_format('U', $nextDeparture);
//$dep = new DateTime();
//$dep->setTimestamp($nextDeparture);

//Converting seconds to readable time
$dep->setTimezone(new DateTimeZone('Europe/Zurich'));
$diff = date_diff($dep, $now);
$minutes = $diff->days * 24 * 60;
$minutes += $diff->h * 60;
$minutes += $diff->i;

//Formatting the data for LaMetric Time
//$text = $text . $minutes . 'm ' . $diff->s . 's';
$text = 'Prochain départ dans ' . $minutes . ' minutes et ' . ($diff->s < 10 ? '0' . $diff->s : $diff->s) . ' secondes';
$out = array('frames'=>array(
               array('index'=>0,
                     'text'=>'Ligne 60 direction Lausanne-Flon',
                     'icon'=>'a4717')
               ,array('index'=>1,
                     'text'=>$text,
                     'icon'=>'')
          ));
echo json_encode($out, JSON_PRETTY_PRINT);
?>