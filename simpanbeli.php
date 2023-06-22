<?php
$conn = mysqli_connect("localhost","root","","db_mie");

mysqli_query($conn,"INSERT INTO pesanan(Meja,Nama,Jenis_Menu,Jumlah) VALUES('$_POST[meja]','$_POST[nama]','$_POST[jenis_menu]'
,'$_POST[jumlah]')");

?>