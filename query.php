<?php
include_once("classes/class.RDRData.php");

$RDRData = new RDRData();
$results = $RDRData->getRandomDataFromStore();

echo $results;