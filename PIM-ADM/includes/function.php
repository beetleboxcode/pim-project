<?php
defined('_BDZ') or die;

// Fungsi Database
function bukaKoneksi() {
	global $dbhost;
	global $dbuser;
	global $dbpass;
	global $dbname;
	
	$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno()) {
		die('Gagal mengakses database! Periksa konfigurasi database!');
	}

	return $link;
}

function queryData($query) {
	$link = bukaKoneksi();
	$queryData = mysqli_query($link,$query);

	return $queryData;
}

function resultData($query) {
	$link = bukaKoneksi();
	$queryData = mysqli_query($link,$query);
	$resultData = mysqli_fetch_array($queryData);

	return $resultData;
}

function tampilTanggal ($waktu) {
	$namaHari = array('Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu');
	$namaBulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
	$waktuDatabase = date('w-j-n-Y',strtotime($waktu));
	$dataWaktu = explode('-',$waktuDatabase);
	$displayWaktu = $namaHari[$dataWaktu[0]].', '.$dataWaktu[1].' '.$namaBulan[$dataWaktu[2]-1].' '.$dataWaktu[3];

	return $displayWaktu;
}

function tampilTanggalLengkap ($waktu) {
	$namaHari = array('Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu');
	$namaBulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
	$waktuDatabase = date('w-j-n-Y-H-i',strtotime($waktu));
	$dataWaktu = explode('-',$waktuDatabase);
	$displayWaktu = $namaHari[$dataWaktu[0]].', '.$dataWaktu[1].' '.$namaBulan[$dataWaktu[2]-1].' '.$dataWaktu[3].' '.$dataWaktu[4].':'.$dataWaktu[5].' WIB';

	return $displayWaktu;
}

?>