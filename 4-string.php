<?php
$kalimat = "Belajar pemrograman di pasuruan.dev\n";

// menghitung jumlah karakter
echo strlen($kalimat);

// menghitung jumlah kata
echo str_word_count($kalimat);

// membalik urutan karakter
echo strrev($kalimat);

// memfilter dan mengganti string
str_replace("yang ingin di ganti","pengganti","isi string");

echo str_replace("Belajar","Tutorial",$kalimat);

?>