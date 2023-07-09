<!-- Kondisi If-Else pada PHP -->

<?php
if(kondisi){
  // jika kondisi terpenuhi
}else{
  // jika kondisi tidak terpenuhi
}



// Contoh 1
$teman = "andi";
if($teman == "andi"){
  echo "dia adalah teman saya";
}else{
  echo "dia bukan teman saya";
}
// output >> dia adalah teman saya


// Contoh 2
$teman = "andi";
if($teman == "Budi"){
	echo "dia adalah teman saya";
}else{
	echo "dia bukan teman saya";
}
// output >> dia bukan teman saya


// Kondisi If-Elseif-Else
$teman = "andi";
if($teman == "Budi"){
	echo "Budi adalah teman saya";
}elseif($teman == "andi"){
	echo "Andi adalah teman saya";
}else{
	echo "Saya tidak punya teman";
}
// output >> Andi adalah teman saya

?>