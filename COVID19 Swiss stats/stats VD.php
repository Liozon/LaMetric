<?php
// Julien Muggli
// info@muggli.one

$url = file_get_contents('https://covid19-rest.herokuapp.com/api/openzh/v1/country/CH/area/VD');
$json = json_decode($url, true);
$ncumul_hosp = 0;
$ncumul_deceased = 0;
$ncumul_released = 0;
foreach ( $json['records'] as $record )
{
    if ($record['ncumul_hosp'] == '') {
        unset ($record['ncumul_hosp']);
    } else {
        $ncumul_hosp += $record['ncumul_hosp'];
    }
    
};
foreach ( $json['records'] as $record )
{
    if ($record['ncumul_deceased'] == '') {
        unset ($record['ncumul_deceased']);
    } else {
        $ncumul_deceased += $record['ncumul_deceased'];
    }
    
};
foreach ( $json['records'] as $record )
{
    if ($record['ncumul_released'] == '') {
        unset ($record['ncumul_released']);
    } else {
        $ncumul_released += $record['ncumul_released'];
    }
    
};

$sums_vd = array(
    "sums " . $record['abbreviation_canton_and_fl'] => array(
        array(
            "ncumul_hosp" => $ncumul_hosp,
            "ncumul_deceased" => $ncumul_deceased,
            "ncumul_released" => $ncumul_released
        )
    )
);
echo json_encode($sums_vd);
?>