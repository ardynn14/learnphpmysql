<!DOCTYPE html>
<html lang="en">

<?php
include_once('template/head.php');

require_once('koneksi.php');

$id = $_GET['id'];
if($id==''){
    echo "User not exist!<br>";
    echo '<a href="index.php">kembali</a>';
    return;
}

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();
if($koneksi->connect_error){
    echo "Gagal koneksi : ". $koneksi->connect_error;
}
$query = "select * from input_data where id ='$id'";
$data = $koneksi->query($query);
while ($row = $data->fetch_assoc()) {
    $name = $row['name'];
    $username = $row['username'];
    $password = $row['password'];
    $email = $row['email'];
}

?>
 <form class="form-horizontal" method="post" action="update.php">
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
    <div class="form-group">
        <label for="name" class="col-sm-2 control label">Name</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan name" value="<?php echo $name; ?>" required>        </div>
    </div>
    <div class="form-group">
        <label for="username" class="col-sm-2 control label">Username</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?php echo $username; ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control label">Email</label>
        <div class="col-sm-4">
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?php echo $email; ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control label">Password</label>
        <div class="col-sm-4">
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" value="<?php echo $password; ?>" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Simpan</button>
        </div>
    </div>
 </form>
 <?php
 include_once('template/script.php');
?>
</body>

</html>