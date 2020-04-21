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
                    'text'  => "#1: " . $json['results'][0]['name'] . " - Total credits: " . number_format($json['results'][0]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 2,
                    'text'  => "#2: " . $json['results'][1]['name'] . " - Total credits: " . number_format($json['results'][1]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 3,
                    'text'  => "#3: " . $json['results'][2]['name'] . " - Total credits: " . number_format($json['results'][2]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 4,
                    'text'  => "#4: " . $json['results'][3]['name'] . " - Total credits: " . number_format($json['results'][3]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 5,
                    'text'  => "#5: " . $json['results'][4]['name'] . " - Total credits: " . number_format($json['results'][4]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 6,
                    'text'  => "#6: " . $json['results'][5]['name'] . " - Total credits: " . number_format($json['results'][5]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 7,
                    'text'  => "#7: " . $json['results'][6]['name'] . " - Total credits: " . number_format($json['results'][6]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 8,
                    'text'  => "#8: " . $json['results'][7]['name'] . " - Total credits: " . number_format($json['results'][7]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 9,
                    'text'  => "#9: " . $json['results'][8]['name'] . " - Total credits: " . number_format($json['results'][8]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 10,
                    'text'  => "#10: " . $json['results'][9]['name'] . " - Total credits: " . number_format($json['results'][9]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 11,
                    'text'  => "#11: " . $json['results'][10]['name'] . " - Total credits: " . number_format($json['results'][10]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 12,
                    'text'  => "#12: " . $json['results'][11]['name'] . " - Total credits: " . number_format($json['results'][11]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 13,
                    'text'  => "#13: " . $json['results'][12]['name'] . " - Total credits: " . number_format($json['results'][12]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 14,
                    'text'  => "#14: " . $json['results'][13]['name'] . " - Total credits: " . number_format($json['results'][13]['credit'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 15,
                    'text'  => "#15: " . $json['results'][14]['name'] . " - Total credits: " . number_format($json['results'][14]['credit'], 0, '', "'"),
                    'icon'  => ''
                ]
            ]
        ];
echo json_encode($data);
?>