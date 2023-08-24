<?php 

// $mahasiswa = [
//     [
//         "nama" => "Sandhika Galih",
//         "nrp" => "043040023",
//         "email" => "sandhikagalih@unpas.ac.id"
//     ],
//     [
//         "nama" => "Erik Doank",
//         "nrp" => "023040001",
//         "email" => "erik@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM siswa');
$db->execute();
$siswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($siswa);
echo $data;

?>