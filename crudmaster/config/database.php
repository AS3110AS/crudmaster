 <!-- Aplikasi CRUD
 ************************************************
 * Developer    : Indra Styawantoro
 * Company      : Indra Studio
 * Release Date : 1 Maret 2016
 * Website      : http://www.indrasatya.com, http://www.kulikoding.net
 * E-mail       : indra.setyawantoro@gmail.com
 * Phone        : +62-856-6991-9769
 * BBM          : 7679B9D9
 -->
 
<?php
// deklarasi parameter koneksi database
$server   = "localhost";
$username = "root";
$password = "root";
$database = "i_siswa";

// Koneksi dan memilih database di server
$con = new mysqli ("localhost","root","","AS") or die(mysqli_error($con));
?>
