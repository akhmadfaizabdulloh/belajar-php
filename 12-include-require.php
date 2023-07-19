<!-- 

Fungsi include() dan require() berfungsi untuk
menyisipkan sebuah file PHP kedalam file PHP lainnya.

-->


<?php
// jika file php terletak pada satu folder
include('header.php');
require('header.php');

// jika diluar folder
include('../header.php');
require('../header.php');

// jika di folder lain
include('namafolder/header.php')

?>

<!-- 
perbedaan dari fungsi include() dan require()

adalah jika file yang di sisipkan dengan menggunakan fungsi include
tidak tersedia atau salah dalam peletakan lokasi,
maka file akan tetap di jalankandengan mengabaikan error.

tetapi jika menggunakan require() 
dan file yang di sisipkan tidak tersedia atau salah 
dalam peletakan lokasi maka isi dari file
tidak akan di lanjutkan dan akan di hentikan penyisipannya pada letak error.

-->

<!-- 

dengan penggunaan include_once() atau require_once()
maka berarti penyisipan hanya di panggil sekali saja.
walaupun di sisipkan beberapa kali di dalam sebuah file
maka dengan menggunakan fungsi include_once() atau require_once()
penyisipan tetap di panggil sekali saja. 
beda dengan include() dan require() yang jika di sisipkan 
beberapa kali pada sebuah file maka akan menyebabkan error 
atau redeclare(deklarasi ganda).

-->
<?php

include_once('tes.php');
require_once('tes.php');

?>