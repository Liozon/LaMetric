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
                    'text'  => "Actual rank " . $json['donors'][0]['wus'],
                    'icon'  => ''
                ],
                [
                    'index' => 4,
                    'text'  => "Total credits " . $json['donors'][0]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 5,
                    'text'  => "#2 " . $json['donors'][1]['name'],
                    'icon'  => ''
                ],
                [
                    'index' => 6,
                    'text'  => "Total WUS: " . $json['donors'][01]['wus'],
                    'icon'  => ''
                ],
                [
                    'index' => 7,
                    'text'  => "Actual rank " . $json['donors'][1]['wus'],
                    'icon'  => ''
                ],
                [
                    'index' => 8,
                    'text'  => "Total credits " . $json['donors'][1]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 9,
                    'text'  => "#3 " . $json['donors'][2]['name'],
                    'icon'  => ''
                ],
                [
                    'index' => 10,
                    'text'  => "Total WUS: " . $json['donors'][2]['wus'],
                    'icon'  => ''
                ],
                [
                    'index' => 11,
                    'text'  => "Actual rank " . $json['donors'][2]['wus'],
                    'icon'  => ''
                ],
                [
                    'index' => 12,
                    'text'  => "Total credits " . $json['donors'][2]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 13,
                    'text'  => "#4 " . $json['donors'][3]['name'],
                    'icon'  => ''
                ],
                [
                    'index' => 14,
                    'text'  => "Total WUS: " . $json['donors'][3]['wus'],
                    'icon'  => ''
                ],
                [
                    'index' => 15,
                    'text'  => "Actual rank " . $json['donors'][3]['wus'],
                    'icon'  => ''
                ],
                [
                    'index' => 16,
                    'text'  => "Total credits " . $json['donors'][3]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 17,
                    'text'  => "#5 " . $json['donors'][4]['name'],
                    'icon'  => ''
                ],
                [
                    'index' => 18,
                    'text'  => "Total WUS: " . $json['donors'][4]['wus'],
                    'icon'  => ''
                ],
                [
                    'index' => 19,
                    'text'  => "Actual rank " . $json['donors'][4]['wus'],
                    'icon'  => ''
                ],
                [
                    'index' => 20,
                    'text'  => "Total credits " . $json['donors'][4]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 21,
                    'text'  => "Team rank " . $json['rank'],
                    'icon'  => ''
                ],
                [
                    'index' => 22,
                    'text'  => "Total team credits " . $json['total_teams'],
                    'icon'  => ''
                ],
            ]
        ];
echo json_encode($data);
?>