<?php
echo "Belajar Pemrograman PHP di malasngoding.com";


echo "<h1>WWW.MALASNGODING.COM</h1>";
 
$data = array("Andi","Budi","Caca","faiz");

for($x=count($data)-1;$x>=0;$x--){
	echo $data[$x]."<br/>";
}


$teman = "andi";
if($teman == "andi"){
	echo "Budi adalah teman saya";
}

if($teman == "andi"){
	echo "Andi adalah teman saya";
}else{
	echo "Saya tidak punya teman";
}

?>