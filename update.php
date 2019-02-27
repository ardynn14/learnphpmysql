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
            <h3 class="text-center">Proses Pengkinian Data</h3>
        </div>
    </div>
    <br>
    <br>
<?php
require_once('koneksi.php');
$koneksiObj =  new Koneksi();
$koneksi = $koneksiObj->getkoneksi();
if($koneksi->connect_error){
    echo "Gagal koneksi :".$koneksi->connect_error;
}
$id             = $_POST['id'];
$name           = $_POST['name'];
$gender         = $_POST['gender'];
$lasteducation  = $_POST['lasteducation'];
$phone          = $_POST['phone'];
$address        = $_POST['address'];
$division       = $_POST['division'];
$email          = $_POST['email'];
$username       = $_POST['username'];
$password       = $_POST['password'];



if($id=='' || $name==''|| $gender==''|| $lasteducation=='' || $phone=='' || $address==''|| $division=='' || $email=='' || $username=='' || $password==''){
    echo "<p class='text-center'>Gagal update,pastikan semua kolom di form telah terisi!</p><br>";
    echo '<p class="text-center"><a href="index.php">kembali</a>';
    return;
}

// $query1 = "select * from input_data where username='$username' or email='$email' or phone='$phone'";
// $count = $koneksi->query($query1);
// if($count->num_rows > 0){
//     echo "<p class='text-center'>Mohon cek kembali, Username,Email atau nomor telepon sudah digunakan!</p></br>";
//     echo'<p class="text-center"><a href="index.php">kembali</a></p>';
//     return;
// }
$query = "update input_data set name='$name', gender='$gender', lasteducation='$lasteducation', phone='$phone',
address='$address', email='$email', division='$division', username='$username', password='$password' where id='$id'";

if ($koneksi->query($query)===true){
    echo "<p class='text-center'><br>Data " .$name.' berhasil diupdate</p>';
}else {
    echo '<p class="text-center"><br>Mohon cek kembali, Username,Email atau nomor telepon telah terdaftar!</p>';
}

echo "<br>";
echo "<p class='text-center'><a href='index.php'>Kembali ke halaman Utama</a></p>";
$koneksi->close();
include_once('template/script.php');
?>
</body>

</html>