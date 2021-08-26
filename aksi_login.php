<?php

// memulai session
session_start();
$_SESSION['sesi'] = NULL;
include "koneksi.php";

if(isset($_POST['submit']))
{
    $user   = isset($_POST['user']) ? $_POST['user'] : "";
    $pass   = isset($_POST['pass']) ? $_POST['pass'] : "";
    $qry    = mysqli_query($con, "SELECT * FROM admin WHERE username = '$user' AND pass = '$pass'");
    $sesi   = mysqli_num_rows($qry);

    if ($sesi == 1)
    {
        $data_admin             = mysqli_fetch_array($qry);
        $_SESSION['id_admin']   = $data_admin['id_admin'];
        $_SESSION['sesi']       = $data_admin['nm_admin'];

        echo "<script>alert('Anda berhasil Log In');</script>";
        echo "<meta http-equiv='refresh' content='0; url=blank.php?user=$sesi'>";
    }else
    {
        echo "<script>alert('Username atau Password Anda salah, Anda gagal login');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
}
else
{

}
?>