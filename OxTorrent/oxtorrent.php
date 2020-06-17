<?php
// Julien Muggli
// info@muggli.one

setlocale(LC_ALL, 'fr_FR');
date_default_timezone_set("Europe/Zurich");
$date = date_create('now')->format("d.m.Y");
$heure = date_create('now')->format("H:i:s");

$url = file_get_contents('YOUR_FEED_PATH');
$json = json_decode($url, true);
$data = [
            'frames' => [
                [
                    'index' => 0,
                    'text'  => ' Dernier ajouts sur OxTorrent. Dernière mise à jour le ' . $date . " à " . $heure,
                    'icon'  => 'i38227'
                ],
                [
                    'index' => 1,
                    'text'  => "#1: " . $json['channel']['item'][0]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 2,
                    'text'  => "#2: " . $json['channel']['item'][1]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 3,
                    'text'  => "#3: " . $json['channel']['item'][2]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 4,
                    'text'  => "#4: " . $json['channel']['item'][3]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 5,
                    'text'  => "#5: " . $json['channel']['item'][4]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 6,
                    'text'  => "#6: " . $json['channel']['item'][5]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 7,
                    'text'  => "#7: " . $json['channel']['item'][6]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 8,
                    'text'  => "#8: " . $json['channel']['item'][7]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 9,
                    'text'  => "#9: " . $json['channel']['item'][8]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 10,
                    'text'  => "#10: " . $json['channel']['item'][9]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 11,
                    'text'  => "#11: " . $json['channel']['item'][10]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 12,
                    'text'  => "#12: " . $json['channel']['item'][11]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 13,
                    'text'  => "#13: " . $json['channel']['item'][12]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 14,
                    'text'  => "#14: " . $json['channel']['item'][13]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 15,
                    'text'  => "#15: " . $json['channel']['item'][15]['title'],
                    'icon'  => ''
                ],
            ]
        ];
echo json_encode($data);
?>