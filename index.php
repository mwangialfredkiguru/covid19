<?php
include 'api.php';
 $data = json_decode(ReturnCovid19Smmary(), false);
 print_r($data);
?>