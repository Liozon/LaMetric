<?php
// Julien Muggli
// info@muggli.one
$ncumul_tested = 0;
$ncumul_conf = 0;
$ncumul_hosp = 0;
$ncumul_ICU = 0;
$ncumul_vent = 0;
$ncumul_released = 0;
$ncumul_deceased = 0;
$date;
$date_today = date('d.m.Y');

$sources = array(
    "AG",
    "AI",
    "AR",
    "BE",
    "BL",
    "BS",
    "FR",
    "GE",
    "GL",
    "GR",
    "JU",
    "LU",
    "NE",
    "NW",
    "OW",
    "SG",
    "SH",
    "SO",
    "SZ",
    "TG",
    "TI",
    "UR",
    "VD",
    "VS",
    "ZG",
    "ZH"
);

foreach ($sources as $sourcenum)
{
    $source = "https://muggli.one/LaMetric/COVID19%20Swiss%20stats/States/stats%20$sourcenum.php";
    $source_json = file_get_contents($source);

    $source_array = json_decode($source_json, true);

    //array_push($output, $source_array['stats']);
    $ncumul_tested = $ncumul_tested + $source_array['stats']['ncumul_tested'];
    $ncumul_conf = $ncumul_conf + $source_array['stats']['ncumul_conf'];
    $ncumul_hosp = $ncumul_hosp + $source_array['stats']['ncumul_hosp'];
    $ncumul_ICU = $ncumul_ICU + $source_array['stats']['ncumul_ICU'];
    $ncumul_vent = $ncumul_vent + $source_array['stats']['ncumul_vent'];
    $ncumul_released = $ncumul_released + $source_array['stats']['ncumul_released'];
    $ncumul_deceased = $ncumul_deceased + $source_array['stats']['ncumul_deceased'];
    $date = date('d.m.Y', strtotime($source_array['stats']['date']));
}

$data = [
    'frames' => [
        [
            'index' => 0,
            'text'  => ' Coronavirus numbers in Switzerland at ' . $date_today,
            'icon'  => 'i36365'
        ],
        [
            'index' => 1,
            'text'  => "Tested - " . $ncumul_tested,
            'icon'  => ''
        ],
        [
            'index' => 2,
            'text'  => "Confirmed cases - " . $ncumul_conf,
            'icon'  => ''
        ],
        [
            'index' => 3,
            'text'  => "Hospitalized - " . $ncumul_hosp,
            'icon'  => ''
        ],
        [
            'index' => 4,
            'text'  => "Intensive care unit cases- " . $ncumul_ICU,
            'icon'  => ''
        ],
        [
            'index' => 5,
            'text'  => "Under assisted ventilation - " . $ncumul_vent,
            'icon'  => ''
        ],
        [
            'index' => 6,
            'text'  => "Cured - " . $ncumul_released,
            'icon'  => ''
        ],
        [
            'index' => 7,
            'text'  => "Deceased - " . $ncumul_deceased,
            'icon'  => ''
        ],
    ]
];
echo json_encode($data);
?>