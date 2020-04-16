<?php
// Julien Muggli
// info@muggli.one

class XmlToJsonConverter {
public function ParseXML ($url) {
$fileContents= file_get_contents($url);
$fileContents = trim(str_replace('&#x27;', "'", $fileContents));
$fileContents = trim(str_replace('&#xE7;', "ç", $fileContents));
$fileContents = trim(str_replace('&#039;', "'", $fileContents));
$fileContents = trim(str_replace('&#xAB;', "«", $fileContents));
$fileContents = trim(str_replace('&#xBB;', "»", $fileContents));
$fileContents = trim(str_replace('&#xE0;', "à", $fileContents));
$fileContents = trim(str_replace('&#xE2;', "â", $fileContents));
$fileContents = trim(str_replace('&#xE9;', "é", $fileContents));
$fileContents = trim(str_replace('&#xE8;', "è", $fileContents));
$fileContents = trim(str_replace('&#xEA;', "ê", $fileContents));
$fileContents = trim(str_replace('&#xEF;', "ï", $fileContents));
$fileContents = trim(str_replace('&#xF4;', "ô", $fileContents));
$fileContents = trim(str_replace('&#xFB;', "û", $fileContents));
$fileContents = trim(str_replace('&#xF9;', "ù", $fileContents));
$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
$fileContents = str_replace(array("<![CDATA[", "]]>"), '', $fileContents);
$fileContents = trim(str_replace('"', "'", $fileContents));
$fileContents = trim(str_replace('&', " et ", $fileContents));
$fileContents = str_replace(array(" ", " ", " ", "­"), '', $fileContents);    
$myXml = simplexml_load_string($fileContents);
$json = json_encode($myXml);
return $json;
}
}
//Path of the XML file
$url= 'https://www.qoqa.ch/fr/feed/product';
//Create object of the class
$jsonObj = new XmlToJsonConverter();
//Pass the xml document to the class function
$myjson = $jsonObj->ParseXMl($url);
echo ($myjson);
?>