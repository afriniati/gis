<?php
 
//koneksi ke server
 
$server="mysql.idhostinger.com";
 
$username="u753231895_root";
 
$password="afriniati";
 
$konek=mysql_connect($server,$username,$password);
 
//cek koneksi
 
if(!$konek){
 
echo "Koneksi Gagal";
 
}
 
//memilih database
 
$db=mysql_select_db("u753231895_gis");
 
//cek database
 
if(!$db){
 
echo "database Gagal";
 
}
 
?>