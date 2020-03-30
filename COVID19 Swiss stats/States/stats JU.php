<?php
// Julien Muggli
// info@muggli.one
$url = file_get_contents('https://covid19-rest.herokuapp.com/api/openzh/v1/country/CH/area/JU');
$json = json_decode($url, true);

$ncumul_conf = 0;
$ncumul_hosp = 0;
$ncumul_ICU = 0;
$ncumul_released = 0;
$ncumul_tested = 0;
$ncumul_vent = 0;
$ncumul_deceased = 0;
$date = "";
$time = "";

if (end($json['records']) ['ncumul_conf'] == '')
{
    unset(end($json['records']) ['ncumul_conf']);
}
else
{
    $ncumul_conf = end($json['records']) ['ncumul_conf'];
}

if (end($json['records']) ['ncumul_hosp'] == '')
{
    unset(end($json['records']) ['ncumul_hosp']);
}
else
{
    $ncumul_hosp = end($json['records']) ['ncumul_hosp'];
}

if (end($json['records']) ['ncumul_ICU'] == '')
{
    unset(end($json['records']) ['ncumul_ICU']);
}
else
{
    $ncumul_ICU = end($json['records']) ['ncumul_ICU'];
}

if (end($json['records']) ['ncumul_released'] == '')
{
    unset(end($json['records']) ['ncumul_released']);
}
else
{
    $ncumul_released = end($json['records']) ['ncumul_released'];
}

if (end($json['records']) ['ncumul_tested'] == '')
{
    unset(end($json['records']) ['ncumul_tested']);
}
else
{
    $ncumul_tested = end($json['records']) ['ncumul_tested'];
}

if (end($json['records']) ['ncumul_vent'] == '')
{
    unset(end($json['records']) ['ncumul_vent']);
}
else
{
    $ncumul_vent = end($json['records']) ['ncumul_vent'];
}

if (end($json['records']) ['ncumul_deceased'] == '')
{
    unset(end($json['records']) ['ncumul_deceased']);
}
else
{
    $ncumul_deceased = end($json['records']) ['ncumul_deceased'];
}

if (end($json['records']) ['date'] == '')
{
    unset(end($json['records']) ['date']);
}
else
{
    $date = end($json['records']) ['date'];
}

if (end($json['records']) ['time'] == '')
{
    unset(end($json['records']) ['time']);
}
else
{
    $time = end($json['records']) ['time'];
}

$sums = array(
    "sums " . end($json['records']) ['abbreviation_canton_and_fl'] => array(
        "date" => $date,
        "time" => $time,
        "ncumul_tested" => $ncumul_tested,
        "ncumul_conf" => $ncumul_conf,
        "ncumul_hosp" => $ncumul_hosp,
        "ncumul_ICU" => $ncumul_ICU,
        "ncumul_vent" => $ncumul_vent,
        "ncumul_released" => $ncumul_released,
        "ncumul_deceased" => $ncumul_deceased
    )
);
echo json_encode($sums);
?>