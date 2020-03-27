<?php
// Julien Muggli
// info@muggli.one

$url = file_get_contents('https://stats.foldingathome.org/api/team/250950');
$json = json_decode($url, true);
$data = [
            'frames' => [
                [
                    'index' => 0,
                    'text'  => ' Folding@home stats',
                    'icon'  => 'i7165'
                ],
                [
                    'index' => 1,
                    'text'  => "#1 " . $json['donors'][0]['name'],
                    'icon'  => ''
                ],
                [
                    'index' => 2,
                    'text'  => "Total WUS: " . $json['donors'][0]['wus'],
                    'icon'  => ''
                ],
                [
                    'index' => 3,
                    'text'  => "Total rank " . $json['donors'][0]['wus'],
                    'icon'  => ''
                ],
            ]
        ];
echo json_encode($data);
?>