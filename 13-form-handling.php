<!-- Form Handling 

ada 2 metode untuk mengolah form inputan.
yaitu GET dan POST.

-->

<!-- Form Handling dengan metode GET -->
<!-- index.php -->

<form method="get" action="tampil.php">
	<label>Masukkan Nama</label><br/>
	<input type="text" name="nama"><br/>
	<label>Masukkan Usia</label><br/>
	<input type="text" name="usia"><br/>	
	<input type="submit" value="oke">
</form>

<!--
tanpa syntax <?php ?> 
karna browser otomatis membaca script html
-->


<!-- tampil.php -->
<?php
// menangkap data nama dengan method nama
$nama = $_GET['nama'];

// menangkap data usia dengan method usia
$usia = $_GET['usia'];


// menampilkan data nama
echo "Nama anda adalah " . $nama;
echo "<br/>";

// menampilkan data usia
echo "Usia anda adalah " . $usia;
?>