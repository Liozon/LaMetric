<?php
// Julien Muggli
// info@muggli.one

$url = file_get_contents('https://muggli.one/LaMetric/QoQa/JSON/QoQa%20RSS.php');
$json = json_decode($url, true);
$date = strtotime($json['channel']['item']['pubDate']);
$date_formatted = strftime("%d.%m.%Y", $date);
$data = [
            'frames' => [
                [
                    'index' => 0,
                    'text'  => ' Produits du jour sur QoQa',
                    'icon'  => 'i7165'
                ],
                [
                    'index' => 1,
                    'text'  => $json['channel']['item']['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 2,
                    'text'  => $json['channel']['item']['description'],
                    'icon'  => ''
                ],
                [
                    'index' => 50,
                    'text'  => "Offre valable le " . $date_formatted,
                    'icon'  => ''
                ]
            ]
        ];
echo json_encode($data);
?>