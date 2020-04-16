<?php
// Julien Muggli
// info@muggli.one

$url = file_get_contents('https://muggli.one/LaMetric/QoQa/JSON/QoQa%20RSS.php');
$json = json_decode($url, true);
$data = [
            'frames' => [
                [
                    'index' => 0,
                    'text'  => ' Produit du jour sur QoQa',
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
                    'index' => 3,
                    'text'  => "Offre du " . $json['channel']['pubDate'],
                    'icon'  => ''
                ]
            ]
        ];
echo json_encode($data);
?>