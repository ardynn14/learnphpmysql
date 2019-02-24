<?php
require_once('koneksi.php');
$koneksiObj = new Koneksi();
$koneksi =$koneksiObj->getKoneksi();
if($koneksi->connect_eror){
    echo "Gagal koneksi : ". $koneksi->connect_error;
}
$name       = $_POST['name'];
$username   = $_POST['username'];
$email      = $_POST['email'];
$password   = $_POST['password'];






if($name=='' || $username=='' || $email=='' || $password==''){
    echo "Mohon cek kembali, pastikan semua telah terisi</br>";
    echo '<a href="input.php">kembali</a>';
    return;
}
$query1 = "select * form input _data where username='$username' or email='$email'";
$count = $koneksi->query($query1);
if($count->num_rows > 0){
    echo "Mohon cek kembali, Username atau Email telah terdaftar!<br>";
    echo'<a href="input.php">kembali</a>';
    return;
}
$query = "insert into input_data (name, username, email, password) values ('$name','$username','$email','$password')";
if($koneksi->query($query)===true){
    echo "<br>Data ".$name.' berhasil disimpan';
}else {
    '<br>Data gagal disimpan';
}
echo "<br>";
echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
$koneksi->close();
?>

