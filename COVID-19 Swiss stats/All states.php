<?php
// Julien Muggli
// info@muggli.one
// All data are from https://github.com/apfeuti/covid19-rest

$ncumul_conf = 0;
$ncumul_hosp = 0;
$ncumul_ICU = 0;
$ncumul_released = 0;
$ncumul_tested = 0;
$ncumul_vent = 0;
$ncumul_deceased = 0;
$date = "";
$time = "";
$date_today = date('d.m.Y');

$source = "https://covid19-rest.herokuapp.com/api/openzh/v1/country/CH";
$source_json = file_get_contents($source);

$json = json_decode($source_json, true);
$ncumul_conf = $json['totals']['ncumul_conf_fwd'];
$ncumul_hosp = $json['totals']['ncumul_hosp_fwd'];
$ncumul_ICU = $json['totals']['ncumul_ICU_fwd'];
$ncumul_released = $json['totals']['ncumul_released_fwd'];
$ncumul_tested = $json['totals']['ncumul_tested_fwd'];
$ncumul_vent = $json['totals']['ncumul_vent_fwd'];
$ncumul_deceased = $json['totals']['ncumul_deceased_fwd'];

$data = [
    'frames' => [
        [
            'index' => 0,
            'text' => ' Coronavirus numbers in Switzerland at ' . $date_today,
            'icon' => 'i36365'
        ],
        [
            'index' => 1,
            'text' => "Confirmed cases - " . number_format($ncumul_conf, 0, '', "'"),
            'icon' => ''
        ],
        [
            'index' => 2,
            'text' => "Tested - " . number_format($ncumul_tested, 0, '', "'"),
            'icon' => ''
        ],
        [
            'index' => 3,
            'text' => "Hospitalized - " . number_format($ncumul_hosp, 0, '', "'"),
            'icon' => ''
        ],
        [
            'index' => 4,
            'text' => "Intensive care unit cases- " . number_format($ncumul_ICU, 0, '', "'"),
            'icon' => ''
        ],
        [
            'index' => 5,
            'text' => "Under assisted ventilation - " . number_format($ncumul_vent, 0, '', "'"),
            'icon' => ''
        ],
        [
            'index' => 6,
            'text' => "Cured - " . number_format($ncumul_released, 0, '', "'"),
            'icon' => ''
        ],
        [
            'index' => 7,
            'text' => "Deceased - " . number_format($ncumul_deceased, 0, '', "'"),
            'icon' => ''
        ]
        ]
    ];
echo json_encode($data);
?>