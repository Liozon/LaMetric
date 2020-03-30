<?php
// Julien Muggli
// info@muggli.one

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

$output = array();

foreach ($sources as $sourcenum)
{
    $source = "https://muggli.one/LaMetric/COVID19%20Swiss%20stats/States/stats%20$sourcenum.php";
    $source_json = file_get_contents($source);

    $source_array = json_decode($source_json, true);

    array_push($output, $source_array['stats']);
}

$start_json = array(
    "statistics" => array(
        $output
    )
);

//echo json_encode($start_json);

$request = array();

$start_request = "$" . "start_json['statistics'][0][";
$end_request = "]['state']";

for ($i = 0; $i <= 25; $i++){
    $sentence = $start_request . $i . $end_request;
    $request = $sentence;
}

//echo json_encode($request);

$data = [
    'frames' => [
        [
            'index' => 0,
            'text'  => ' Coronavirus numbers in Switzerland',
            'icon'  => 'i36106'
        ],
        [
            'index' => 1,
            'text'  => "Total cases - " . $request,
            'icon'  => ''
        ],
    ]
];
echo json_encode($data); 
?>