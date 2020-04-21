<?php
// Julien Muggli
// info@muggli.one

$url = file_get_contents('https://stats.foldingathome.org/api/team/250950'); /* <--- Replace "250950" with your team number and that's it !*/
$json = json_decode($url, true);
$data = [
            'frames' => [
                [
                    'index' => 0,
                    'text'  => ' Folding@home stats from ' . $json['name'],
                    'icon'  => 'i36106'
                ],
                [
                    'index' => 1,
                    'text'  => "#1: " . $json['donors'][0]['name'] . " - Total WUS: " . number_format($json['donors'][0]['wus'], 0, '', "'") . " - Total credits: " . number_format($json['donors'][0]['credit'], 0, '', "'") . " - Actual rank: " . number_format($json['donors'][0]['rank'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 2,
                    'text'  => "#2: " . $json['donors'][1]['name'] . " - Total WUS: " . number_format($json['donors'][1]['wus'], 0, '', "'") . " - Total credits: " . number_format($json['donors'][1]['credit'], 0, '', "'") . " - Actual rank: " . number_format($json['donors'][1]['rank'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 3,
                    'text'  => "#3: " . $json['donors'][2]['name'] . " - Total WUS: " . number_format($json['donors'][2]['wus'], 0, '', "'") . " - Total credits: " . number_format($json['donors'][2]['credit'], 0, '', "'") . " - Actual rank: " . number_format($json['donors'][2]['rank'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 4,
                    'text'  => "#4: " . $json['donors'][3]['name'] . " - Total WUS: " . number_format($json['donors'][3]['wus'], 0, '', "'") . " - Total credits: " . number_format($json['donors'][3]['credit'], 0, '', "'") . " - Actual rank: " . number_format($json['donors'][3]['rank'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 5,
                    'text'  => "#5: " . $json['donors'][4]['name'] . " - Total WUS: " . number_format($json['donors'][4]['wus'], 0, '', "'") . " - Total credits: " . number_format($json['donors'][4]['credit'], 0, '', "'") . " - Actual rank: " . number_format($json['donors'][4]['rank'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 6,
                    'text'  => "#6: " . $json['donors'][5]['name'] . " - Total WUS: " . number_format($json['donors'][5]['wus'], 0, '', "'") . " - Total credits: " . number_format($json['donors'][5]['credit'], 0, '', "'") . " - Actual rank: " . number_format($json['donors'][5]['rank'], 0, '', "'"),
                    'icon'  => ''
                ],
                [
                    'index' => 7,
                    'text'  => "Team rank: " . $json['rank'],
                    'icon'  => ''
                ],
                [
                    'index' => 8,
                    'text'  => "Total team credits: " . $json['total_teams'],
                    'icon'  => ''
                ]
            ]
        ];
echo json_encode($data);
?>