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

$output_json = json_encode($start_json);
echo $output_json;
?>