<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $nomor_telepon=$_POST['nomor_telepon'];
    $agama=$_POST['agama'];  
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $gejala=$_POST['gejala'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $no_kamar=$_POST['no_kamar'];


    $sql = "INSERT INTO tb_pasien( nama, alamat, jk, nomor_telepon, agama, tanggal_masuk, gejala, 
    tempat_lahir, tanggal_lahir, no_kamar) 
    VALUES ('$nama','$alamat','$jk','$nomor_telepon','$agama','$tanggal_masuk','$gejala','$tempat_lahir',
    '$tanggal_lahir','$no_kamar')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:pasien.php?status=sukses');
    }else{
        header('location:pasien.php?status=gagal');
    }
}
?>