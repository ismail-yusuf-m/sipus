<?php
$host       = 'localhost';
$user       = 'root';
$pass       = '';
$database   = 'dbpus';

$con=mysqli_connect($host, $user, $pass);

// if ($con){
//     echo "koneksi host berhasil</br>";
// }else{
//     echo "koneksi host gagal</br>";
// }

$db=mysqli_select_db($con, $database);

//if($db){
//     echo "koneksi database berhasil";
// }else{
//     echo "koneksi database gagal";
// }
?>