<?php
// Julien Muggli
// info@muggli.one

$qoqaUrl = file_get_contents('https://muggli.one/LaMetric/QoQa/JSON/QoQa.php');
$qwineUrl = file_get_contents('https://muggli.one/LaMetric/QoQa/JSON/Qwine.php');
$qbeerUrl = file_get_contents('https://muggli.one/LaMetric/QoQa/JSON/Qbeer.php');
$qsportUrl = file_get_contents('https://muggli.one/LaMetric/QoQa/JSON/Qsport.php');
$qookingUrl = file_get_contents('https://muggli.one/LaMetric/QoQa/JSON/Qooking.php');
$qidsUrl = file_get_contents('https://muggli.one/LaMetric/QoQa/JSON/Qids.php');

$jsonQoqa = json_decode($qoqaUrl, true);
$jsonQwine = json_decode($qwineUrl, true);
$jsonQbeer = json_decode($qbeerUrl, true);
$jsonQsport = json_decode($qsportUrl, true);
$jsonQooking = json_decode($qookingUrl, true);
$jsonQids = json_decode($qidsUrl, true);

$date = strtotime($jsonQoqa['channel']['item']['pubDate']);
$date_formatted = strftime("%d.%m.%Y", $date);
$data = [
            'frames' => [
                [
                    'index' => 0,
                    'text'  => ' Offres du jour sur QoQa',
                    'icon'  => 'i36651'
                ],
                [
                    'index' => 1,
                    'text'  => 'Sur QoQa: ' . $jsonQoqa['channel']['item']['title'] . ". " . $jsonQoqa['channel']['item']['description'],
                    'icon'  => ''
                ],
                [
                    'index' => 2,
                    'text'  => $jsonQwine['channel']['item']['title'] . ". " . $jsonQwine['channel']['item']['description'],
                    'icon'  => ''
                ],
                [
                    'index' => 3,
                    'text'  => $jsonQbeer['channel']['item']['title'] . ". " . $jsonQbeer['channel']['item']['description'],
                    'icon'  => ''
                ],
                [
                    'index' => 4,
                    'text'  => 'Sur Qsport: ' . $jsonQsport['channel']['item']['title'] . ". " . $jsonQsport['channel']['item']['description'],
                    'icon'  => ''
                ],
                [
                    'index' => 5,
                    'text'  => 'Sur Qooking: ' . $jsonQooking['channel']['item']['title'] . ". " . $jsonQooking['channel']['item']['description'],
                    'icon'  => ''
                ],
                [
                    'index' => 6,
                    'text'  => 'Sur Qids: ' . $jsonQids['channel']['item']['title'] . ". " . $jsonQids['channel']['item']['description'],
                    'icon'  => ''
                ],
                [
                    'index' => 7,
                    'text'  => "Offres valables le " . $date_formatted,
                    'icon'  => ''
                ]
            ]
        ];
echo json_encode($data);
?>