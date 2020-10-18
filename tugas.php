<?php
$nilai = 65;
if ($nilai > 85){
	echo "Selamat.. proses belajarmu sangat baik , tingkatkan terus kemampuan codingnya..";
}
else if ($nilai > 70){
	echo "Selamat... kamu sudah mulai memahami pemograman PHP, tingkatkan terus skil codingmu...";
}
else if ($nilai >= 60){
	echo "Upssss.. skil codingmu perlu diasah lagi, tetep semangat belajar dan explore kemampuanmu yaa..";
}


function pengulangan_data(){
	echo "<p>Haii, perkenalkan nama saya Laras Ayu Suwandini<br>
	Saya adalah mahasiswi Program Studi Sistem Informasi<br>
	Saya sangat tertarik mempelajari Pemograman Internet</p>";
}

pengulangan_data();
pengulangan_data();
pengulangan_data();


function rekursif($bil){
	if($bil == 20) {
		echo "Bilangan Genap";
	}
	else{
		echo "Bilangan : " .$bil. "<br>";
		$bil += 2;
		rekursif($bil);
	}
}

$jumlah = 2;
rekursif($jumlah);
?>
