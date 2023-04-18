<?php
if(!isset($_SESSION)){
    session_start();
}
include 'pages/koneksi.php';

// cek apakah user yang mengakses halaman ini sudah melalui login atau belum
// logikanya jika user telah login dan sukses, maka SESSION level dan SESSION username ini pasti sudah ada
// jika ada user yang mencoba akses halaman ini tanpa login, maka logikanya kedua SESSION belum ada

if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
   // tampilkan menu.
   // menu hanya ditampilkan bila halaman ini diakses oleh user yang telah login

   include "menus.php";

   // cek level user apakah admin atau bukan

   if ($_SESSION['level'] == "admin")
   {
       // tampilkan konten halaman 1 jika levelnya admin

       echo "<h1>Halaman 1</h1>";
       echo "<p>Selamat datang di halaman satu wahai user : ".$_SESSION['username']."</p>";
       echo "<p>Ini adalah konten halaman 1</p>";
   }
   else
   {
       // jika levelnya bukan admin, tampilkan pesan
       echo "<h1>Maaf.. Anda bukan user berlevel Administrator</h1>";
   }
}
else
{
   echo "<h1>Nah.. Anda pasti mencoba akses halaman ini tanpa login ya?</h1>";
}

?>
