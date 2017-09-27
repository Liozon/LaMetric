<?php
//Julien Muggli | https://github.com/Liozon?tab=repositories
// Getting data
$url = 'http://transport.opendata.ch/v1/connections?from=8579255&to=8579254&limit=1';   // Data from opendata.ch
$ch = curl_init();
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it prints the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$response = curl_exec($ch);
curl_close($ch);
$obj = json_decode($response);  // object
// $obj = json_decode($response, true); // associative array

//Navigating to the targeted infos 
$stationboard = $obj->connections[0];   // navigation to the station details and infos
$text = $stationboard->number . ' -> ';
$now = new DateTime();
$now->setTimezone(new DateTimeZone('Europe/Zurich'));
$nextDeparture = $stationboard->from->departureTimestamp;   // getting the departure timestamp info
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
                     'text'=>'Ligne 7 direction St-François',
                     'icon'=>'a4717')
               ,array('index'=>1,
                     'text'=>$text,
                     'icon'=>'')
          ));
echo json_encode($out, JSON_PRETTY_PRINT);
?>