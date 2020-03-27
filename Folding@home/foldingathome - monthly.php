<?php
// Julien Muggli
// info@muggli.one

$url = file_get_contents('https://stats.foldingathome.org/api/teams-monthly');
$json = json_decode($url, true);
$data = [
            'frames' => [
                [
                    'index' => 0,
                    'text'  => ' Folding@home monthly stats - Top 15',
                    'icon'  => 'i36106'
                ],
                [
                    'index' => 1,
                    'text'  => "#1: " . $json['results'][0]['name'] . " - Total credits: " . $json['results'][0]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 2,
                    'text'  => "#2: " . $json['results'][1]['name'] . " - Total credits: " . $json['results'][1]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 3,
                    'text'  => "#3: " . $json['results'][2]['name'] . " - Total credits: " . $json['results'][2]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 4,
                    'text'  => "#4: " . $json['results'][3]['name'] . " - Total credits: " . $json['results'][3]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 5,
                    'text'  => "#5: " . $json['results'][4]['name'] . " - Total credits: " . $json['results'][4]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 6,
                    'text'  => "#6: " . $json['results'][5]['name'] . " - Total credits: " . $json['results'][5]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 7,
                    'text'  => "#7: " . $json['results'][6]['name'] . " - Total credits: " . $json['results'][6]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 7,
                    'text'  => "#7: " . $json['results'][6]['name'] . " - Total credits: " . $json['results'][6]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 8,
                    'text'  => "#8: " . $json['results'][7]['name'] . " - Total credits: " . $json['results'][7]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 9,
                    'text'  => "#9: " . $json['results'][8]['name'] . " - Total credits: " . $json['results'][8]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 10,
                    'text'  => "#10: " . $json['results'][9]['name'] . " - Total credits: " . $json['results'][9]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 11,
                    'text'  => "#11: " . $json['results'][10]['name'] . " - Total credits: " . $json['results'][10]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 12,
                    'text'  => "#12: " . $json['results'][11]['name'] . " - Total credits: " . $json['results'][11]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 13,
                    'text'  => "#13: " . $json['results'][12]['name'] . " - Total credits: " . $json['results'][12]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 14,
                    'text'  => "#14: " . $json['results'][13]['name'] . " - Total credits: " . $json['results'][13]['credit'],
                    'icon'  => ''
                ],
                [
                    'index' => 15,
                    'text'  => "#15: " . $json['results'][14]['name'] . " - Total credits: " . $json['results'][14]['credit'],
                    'icon'  => ''
                ],
            ]
        ];
echo json_encode($data);
?>