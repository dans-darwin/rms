<?php

if(!isset($_SESSION)){
    session_start();
}
include 'pages/koneksi.php';


if ($_SESSION['level'] == "admin")
{
    // tampilkan menu untuk admin
	header("location:index.php");
}
else if ($_SESSION['level'] == "user")
{
    // tampilkan menu untuk user biasa
 	header("location:index_user.php");
}  


?>