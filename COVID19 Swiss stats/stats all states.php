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
    $source = "https://covid19-rest.herokuapp.com/api/openzh/v1/country/CH/area/$sourcenum";
    $source_json = file_get_contents($source);

    $json = json_decode($source_json, true);

    if (end($json['records']) ['ncumul_conf'] == '')
    {
        unset(end($json['records']) ['ncumul_conf']);
    }
    else
    {
        $ncumul_conf = $ncumul_conf + end($json['records']) ['ncumul_conf'];
    }

    if (end($json['records']) ['ncumul_hosp'] == '')
    {
        unset(end($json['records']) ['ncumul_hosp']);
    }
    else
    {
        $ncumul_hosp = $ncumul_hosp + end($json['records']) ['ncumul_hosp'];
    }

    if (end($json['records']) ['ncumul_ICU'] == '')
    {
        unset(end($json['records']) ['ncumul_ICU']);
    }
    else
    {
        $ncumul_ICU = $ncumul_ICU + end($json['records']) ['ncumul_ICU'];
    }

    if (end($json['records']) ['ncumul_released'] == '')
    {
        unset(end($json['records']) ['ncumul_released']);
    }
    else
    {
        $ncumul_released = $ncumul_released + end($json['records']) ['ncumul_released'];
    }

    if (end($json['records']) ['ncumul_tested'] == '')
    {
        unset(end($json['records']) ['ncumul_tested']);
    }
    else
    {
        $ncumul_tested = $ncumul_tested + end($json['records']) ['ncumul_tested'];
    }

    if (end($json['records']) ['ncumul_vent'] == '')
    {
        unset(end($json['records']) ['ncumul_vent']);
    }
    else
    {
        $ncumul_vent = $ncumul_vent + end($json['records']) ['ncumul_vent'];
    }

    if (end($json['records']) ['ncumul_deceased'] == '')
    {
        unset(end($json['records']) ['ncumul_deceased']);
    }
    else
    {
        $ncumul_deceased = $ncumul_deceased + end($json['records']) ['ncumul_deceased'];
    }

    if (end($json['records']) ['date'] == '')
    {
        unset(end($json['records']) ['date']);
    }
    else
    {
        $date = date('d.m.Y', strtotime(end($json['records']) ['date']));
    }

    if (end($json['records']) ['time'] == '')
    {
        unset(end($json['records']) ['time']);
    }
    else
    {
        $time = end($json['records']) ['time'];
    }
}

$data = [
    'frames' => [
        [
            'index' => 0,
            'text' => ' Coronavirus numbers in Switzerland at ' . $date_today,
            'icon' => 'i36365'
        ],
        [
            'index' => 1,
            'text' => "Tested - " . $ncumul_tested,
            'icon' => ''
        ],
        [
            'index' => 2,
            'text' => "Confirmed cases - " . $ncumul_conf,
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