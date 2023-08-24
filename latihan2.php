<?php 

$data = file_get_contents('coba.json');
$siswa = json_encode($data, true);

var_dump($siswa);

?>