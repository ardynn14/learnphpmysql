<!DOCTYPE html>
<html lang="en">

<?php
include_once('template/head.php');
?>
<body>
<div class="row">
        <div class="container">
            <h2 class="text-center"><i class="fa fa-home"></i> MyCoworker</h2>
            <hr style="width:220px;height:3px;border:none;color:#333;background-color:#333;">
            <h3 class="text-center">Proses Penghapusan Data</h3>
        </div>
    </div>
    <br>
    <br>
<?php
require_once('koneksi.php');

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();
if($koneksi->connect-error){
    echo"Gagal Koneksi :".$koneksi->connect_error;
}
$id = $_GET['id'];
// ?qwe=100&asd=asu&zxc=babi

if($id==''){
    echo "<p class='text-center'>Data Gagal di hapus!<br></p>";
    echo '<p class="text-center"><a href="index.php">kembali</a></p>';
    return;
}
$query = "delete from input_data where id ='$id'";

if($koneksi->query($query)===true){
    echo "<br><p class='text-center'>Data berhasil dihapus</p>";
}else{
    echo '<br><p class="text-center"><br>Data gagal dihapus</p>';
}
echo "<br>";
echo "<p class='text-center'><a href='index.php'>Kembali ke Halaman Utama</a></p>";
$koneksi->close();
 include_once('template/script.php');
?>
</body>

</html>