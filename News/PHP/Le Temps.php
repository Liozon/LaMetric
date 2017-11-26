<?php
// Julien Muggli
// info@muggli.one

$url = file_get_contents('PATH_TO_JSON_DATA');
$json = json_decode($url, true);
$data = [
            'frames' => [
                [
                    'index' => 0,
                    'text'  => 'Le Temps',
                    'icon'  => 'i6888'
                ],
                [
                    'index' => 1,
                    'text'  => $json['channel']['item'][0]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 2,
                    'text'  => $json['channel']['item'][1]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 3,
                    'text'  => $json['channel']['item'][2]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 4,
                    'text'  => $json['channel']['item'][3]['title'],
                    'icon'  => ''
                ],
                [
                    'index' => 5,
                    'text'  => $json['channel']['item'][4]['title'],
                    'icon'  => ''
                ]
            ]
        ];
echo json_encode($data);
?>