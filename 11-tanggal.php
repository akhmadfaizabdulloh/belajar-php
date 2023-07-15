<!-- Menampilkan Tanggal Pada PHP -->
<!-- Menggunakan fungsi date() -->
<!-- format tanggal bisa diatur di dalam tanda kurung -->
<!-- data tanggal yg diambil adalah tanggal dari server-->

<!-- 

date(format, timestamp);
parameter format >> di isi dengan format penulisan tanggal yg ingin di tampilkan
parameter timestamp >> optional (diisi/dikosongi)

format & Keterangan
l = nama hari (huruf)
D = nama hari (3 huruf)
d = tanggal (angka 1-31)
M = bulan (angka 1-12)
m = bulan (huruf)
Y = tahun (angka 4 digit)
y = tahun (2 angka terakhir)

karakter tambahan
garis miring >>> (/)
titik >>> (.)
strip >>> (-)
koma >>> (,) 

-->
<?php
echo date('l, d-m-Y');

echo "<br/>\n";

echo date('d / M / y');

echo "<br/>\n";

echo date('D - M / Y')

?>

<!-- Menampilkan Waktu -->
<!-- menggunakan fungsi date() juga -->

<!--  

format & Keterangan
s = detik (angka 0 - 59)
i = menit (angka 0 - 59)
h = jam (angka 1 - 12)
H = jam (angka 24 jam)
a = waktu AM / PM

-->

<?php
// menampilkan jam sekarang
echo date('H:i:s a');

echo "<br/>\n";

// kombinasi format tanggal dan jam
echo date('l, d-m-Y  h:i:s a');

?>