<?php

include "function.php";
include "database.php";

$data = new database();

$username = $_POST['nama'];
$pilihan = $_POST['nourut'];


$query = "INSERT INTO hasil_mps (siswa_user_name, mps_id) VALUES ('$username', '$pilihan')";
$insert = $data->getDb()->query($query);

if ($insert) {
	header("location: ".MAIN_URL."user.php?page=mps");
} else {
	echo "Gagal vote!";
}
