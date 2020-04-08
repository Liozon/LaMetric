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
            'text' => "Confirmed cases - " . $ncumul_conf,
            'icon' => ''
        ],
        [
            'index' => 2,
            'text' => "Tested - " . $ncumul_tested,
            'icon' => ''
        ],
        [
            'index' => 3,
            'text' => "Hospitalized - " . $ncumul_hosp,
            'icon' => ''
        ],
        [
            'index' => 4,
            'text' => "Intensive care unit cases- " . $ncumul_ICU,
            'icon' => ''
        ],
        [
            'index' => 5,
            'text' => "Under assisted ventilation - " . $ncumul_vent,
            'icon' => ''
        ],
        [
            'index' => 6,
            'text' => "Cured - " . $ncumul_released,
            'icon' => ''
        ],
        [
            'index' => 7,
            'text' => "Deceased - " . $ncumul_deceased,
            'icon' => ''
        ]
        ]
    ];
echo json_encode($data);
?>