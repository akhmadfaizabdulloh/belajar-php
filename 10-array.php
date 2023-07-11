<?php
// membuat array yg berisi nama buah-buahan
$buah = array('semangka','jeruk','apel','anggur');

// menampilkan data array dengan nomor urut 2
echo $buah[2];
//output >> apel

// penomoran isi array dimulai dari 0
?>

<?php
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "isinya manis";
$buah['apel'] = "warnanya merah";
$buah['anggur'] = "harganya mahal";

// menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];
?>

<!-- atau menggunakan syntax berikut -->
<?php
$mahasiswa = array(
  'nindi' => "2015720",
  'nanda' => "2015770",
  'mirza' => "123123",
  'lily' => "345543"
);

// menampilkan isi array yang bernama jeruk
echo $buah['mirza'];
?>

<!-- menerapkan array dengan for -->
<?php
$buah = array('semangka','jeruk','apel','anggur');

echo count($buah);

// count untuk menghitung isi array
for($x=0;$x<count($buah);$x++){
  echo $buah[$x]."<br/>";
}
?>