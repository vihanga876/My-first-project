<?php
$server="nvtibaddegama.tech";
$username="nvtibad1_VUParanawithana";
$password="group4@nvtiBaddegama";
$dbName="nvtibad1_group4";

$con=mysqli_connect($server,$username,$password,$dbName);
if(!$con){
    die("Connection fail" . mysqli_connect_error());
}
?>