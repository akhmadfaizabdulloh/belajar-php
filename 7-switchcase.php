<?php
$angka = 3;

// jika pengecekan tidak terpenuhi, maka yg di jalankan nilai default
// $angka = 8;
// output >> Isi variabel tidak ditemukan!

switch($angka){
  case 1:
    echo "Isi variabel angka adalah satu";
    // break berfungsi untuk menghentikan pengecekan jika sudah terpenuhi
    break;
  case 2:
    echo "Isi variabel angka adalah dua";
    break;
  case 3:
    echo "Isi variabel angka adalah tiga";
    break;
  case 4:
    echo "Isi variabel angka adalah empat";
    break;
  case 5:
    echo "Isi variabel angka adalah lima";
    break;
  case 6:
    echo "Isi variabel angka adalah enam";
    break;
  default:
    echo "Isi variabel tidak ditemukan!";
    break;
}
?>