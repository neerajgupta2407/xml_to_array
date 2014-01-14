<?php
include('xml_file.php');

$url = "Url of the website";

//getting the xmml content from the url
$http_result = file_get_contents($url);


//parsing the xml contnt to array
$array = XML2Array::createArray($http_result);
echo json_encode($array);