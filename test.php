<?php
require_once "dataorang.php";
$data = new data ('Udin Ujang','17','Futsal','Pegawai');
echo "Nama Lengkap : " . $data->get_nama()."<br>";
echo "Umur : " . $data->get_umur()."<br>";
echo "Hobi : " . $data->get_hobi()."<br>";
echo "Jabatan di perusahaan : " . $data->get_statuspekerjaan()."<br>";
?>