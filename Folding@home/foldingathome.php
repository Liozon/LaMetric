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
                    'text'  => "#1: " . $json['donors'][0]['name'] . " - Total WUS: " . $json['donors'][0]['wus'] . " - Total credits: " . $json['donors'][0]['credit'] . " - Actual rank: " . $json['donors'][0]['rank'],
                    'icon'  => ''
                ],
                [
                    'index' => 2,
                    'text'  => "#2: " . $json['donors'][1]['name'] . " - Total WUS: " . $json['donors'][1]['wus'] . " - Total credits: " . $json['donors'][1]['credit'] . " - Actual rank: " . $json['donors'][1]['rank'],
                    'icon'  => ''
                ],
                [
                    'index' => 3,
                    'text'  => "#3: " . $json['donors'][2]['name'] . " - Total WUS: " . $json['donors'][2]['wus'] . " - Total credits: " . $json['donors'][2]['credit'] . " - Actual rank: " . $json['donors'][2]['rank'],
                    'icon'  => ''
                ],
                [
                    'index' => 4,
                    'text'  => "#4: " . $json['donors'][3]['name'] . " - Total WUS: " . $json['donors'][3]['wus'] . " - Total credits: " . $json['donors'][3]['credit'] . " - Actual rank: " . $json['donors'][3]['rank'],
                    'icon'  => ''
                ],
                [
                    'index' => 5,
                    'text'  => "#5: " . $json['donors'][4]['name'] . " - Total WUS: " . $json['donors'][4]['wus'] . " - Total credits: " . $json['donors'][4]['credit'] . " - Actual rank: " . $json['donors'][4]['rank'],
                    'icon'  => ''
                ],
                [
                    'index' => 6,
                    'text'  => "Team rank: " . $json['rank'],
                    'icon'  => ''
                ],
                [
                    'index' => 7,
                    'text'  => "Total team credits: " . $json['total_teams'],
                    'icon'  => ''
                ],
            ]
        ];
echo json_encode($data);
?>