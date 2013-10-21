<?php

require ('config.php');

$sql = mysql_query("SELECT nama,lat,longitude from ibadah");

while ($row = mysql_fetch_assoc($sql)) 
$cabang[] = $row;

$json = json_encode($cabang);

echo $json;
?>