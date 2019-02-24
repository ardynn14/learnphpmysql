<?php
require_once('koneksi.php');
$koneksiObj =  new Koneksi();
$koneksi = $koneksiObj->getkoneksi();
if($koneksi->connect_error){
    echo "Gagal koneksi :".$koneksi->connect_error;
}
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password =$_POST['password'];

if( $id=='' || $name=='' || $username=='' || $email=='' || $password==''){
    echo "Gagal update,pastikan semua kolom di form telah terisi!<br>";
    echo '<a href="index.php">kembali</a>';
    return;
}

$query = "update input_data set name='$name',username='$username',email='$email',password='$password' where id='$id'";

if ($koneksi->query($query)===true){
    echo "<br>Data " .$name.' berhasil diupdate';
}else {
    echo '<br>Data gagal di update';
}

echo "<br>";
echo "<a href='index.php'>Kembali ke halaman Utama</a>";
$koneksi->close();
?>