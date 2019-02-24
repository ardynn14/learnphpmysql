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
            <h3 class="text-center">Proses Pembuatan Data</h3>
        </div>
    </div>
    <br>
    <br>
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
$phone      = $_POST['phone'];
$address    = $_POST['address'];






if($name=='' || $username=='' || $email=='' || $password=='' || $phone=='' || $address==''){
    echo "<p class='text-center'>Mohon cek kembali, pastikan semua telah terisi</p></br>";
    echo '<p class="text-center"><ahref="input.php">kembali</a></p>';
    return;
}
// $query1 = "select * from input_data where username='$username' or email='$email' or phone='$phone'";
// $count = $koneksi->query($query1);
// if($count->num_rows > 0){
//     echo "<p class='text-center'>Mohon cek kembali, Username,Email atau nomor telepon telah terdaftar!</p></br>";
//     echo'<p class="text-center"><a href="input.php">kembali</a></p>';
//     return;
// }
$query = "insert into input_data (name, username, email, password,phone,address) values ('$name','$username','$email','$password','$phone','$address')";
if($koneksi->query($query)===true){
    echo "<p class='text-center'><br>Data ".$name.' berhasil disimpan</p>';
}else {
    "<p class='text-center'><br>Data gagal disimpan</p>";
}
echo "<br>";
echo "<p class='text-center'><a href='index.php'>Kembali ke Halaman Utama</a></p>";
$koneksi->close();
include_once('template/script.php');
?>
</body>

</html>

