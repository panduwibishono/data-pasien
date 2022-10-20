<?php
include("koneksi.php");
?>
<form action="pasien.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">         
</form>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>


<html>
<head>
</head>
<body>
<h1>Data pasien</h1>
<h4> <a href=index.php>ke halaman utama</a></h4>
<table border="1">
    <tr>
        <th>id_pasien</th>
        <th>nama</th>
        <th>alamat</th>
        <th>jk</th>
        <th>notelp</th>
        <th>agama</th>
        <th>tanggal_masuk</th>
        <th>gejala</th>
        <th>tempat_lahir</th>
        <th>tanggal_lahir</th>
        <th>no_kamar</th>
</tr>


<?php
include("koneksi.php");
$sql="SELECT * FROM tb_pasien where nama like '%".$cari."%'";
$query = mysqli_query($koneksi, $sql);




while($pasien=mysqli_fetch_array($query)){
echo "<tr>";
          echo "<td>".$pasien['id']."</td>";
          echo "<td>".$pasien['nama']."</td>";
          echo "<td>".$pasien['alamat']."</td>";
          echo "<td>".$pasien['jk']."</td>";
          echo "<td>".$pasien['nomor_telepon']."</td>";
          echo "<td>".$pasien['agama']."</td>";
          echo "<td>".$pasien['tanggal_masuk']."</td>";
          echo "<td>".$pasien['gejala']."</td>";
          echo "<td>".$pasien['tempat_lahir']."</td>";
          echo "<td>".$pasien['tanggal_lahir']."</td>";
          echo "<td>".$pasien['no_kamar']."</td>";
          echo "<td>";
          echo "<a href='proses_edit.php?id=".$pasien['id']."'>Edit</a> |";
          echo "<a href='proses_hapus.php?id=".$pasien['id']."'>Hapus</a>";
          echo "</td>";
          echo "</tr>";

}
?>
</table>
</body>
</html>
