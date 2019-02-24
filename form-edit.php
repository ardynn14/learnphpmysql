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
            <h3 class="text-center">Perbarui Data Karyawan</h3>
        </div>
    </div>
    <br>
    <br>
<?php
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
    $phone = $row['phone'];
    $address = $row['address'];
}

?>
<div class="row">
    <div class="container">
 <form class="form-horizontal col-sm-offset-3" method="post" action="update.php">
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="name" name="name" placeholder="input you new name" value="<?php echo $name; ?>" required>        </div>
    </div>
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="username" name="username" placeholder="input you new username" value="<?php echo $username; ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-5">
        <input type="email" class="form-control" id="email" name="email" placeholder="input you new email" value="<?php echo $email; ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-5">
        <input type="password" class="form-control" id="password" name="password" placeholder="input you new password" value="<?php echo $password; ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-5">
        <input type="phone" class="form-control" id="phone" name="phone" placeholder="input you new phone" value="<?php echo $phone; ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-2 control-label">address</label>
        <div class="col-sm-5">
        <input type="address" class="form-control" id="address" name="address" placeholder="input you new address" value="<?php echo $address; ?>" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3">
        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
        <a href="index.php" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</a>
        </div>
    </div>
 </form>
 </div>
</div>
 <?php
 include_once('template/script.php');
?>
</body>

</html>