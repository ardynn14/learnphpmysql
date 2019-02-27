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
            <h3 class="text-center">Register Karyawan Baru</h3>
        </div>
    </div>
    <br>
    <br>
<div class="row">
    <div class="container">
    <form id="inputdata" class="form-horizontal col-sm-offset-3" method="post" action="simpan.php">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="name" name="name" placeholder="input your name" required>
            </div>
        </div>
        <div class="form-group">
        <label for="gender" class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-5">
            <select type="gender" class="form-control" id="gender" name="gender" required>
                <option>Choose</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label for="lasteducation" class="col-sm-2 control-label">Last Education</label>
            <div class="col-sm-5">
            <select type="lasteducation" class="form-control" id="lasteducation" name="lasteducation" required>
                <option>Choose</option>
                <option value="S3">S3</option>
                <option value="S2">S2</option>
                <option value="S1">S1</option>
                <option value="D3">D3</option>
                <option value="SMA">SMA</option>
                <option value="SMP">SMP</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-5">
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="input your phone" required>
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-5">
            <input type="address" class="form-control" row="3" id="address" name="address" placeholder="input your address" required>
            </div>
        </div>
        <div class="form-group">
            <label for="division" class="col-sm-2 control-label">Division</label>
            <div class="col-sm-5">
            <select type="division" class="form-control" id="division" name="division" required>
                <option>Choose</option>
                <option value="frontend">Front-End</option>
                <option value="backend">Back-End</option>
                <option value="webdesign">Web-Design</option>
                <option value="rnd">RnD</option>
                <option value="hrd">HRD</option>
                <option value="marketing">Marketing</option>
                <option value="webenginer">Web-Enginer</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-5">
            <input type="email" class="form-control" id="email" name="email" placeholder="input your email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="username" name="username" placeholder="input your username" required>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-5">
            <input type="password" class="form-control" id="password" name="password" placeholder="input your password" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3">
            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Register</button>
            <a href="index.php" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</a>
            </div>
        </div>
    </form>
    </div>
</div>
<?php
    include_once('template/script.php');
?>
<script>
    $.validator.addmethod("alpha",function(value, element){
        return this.optional(element) || value.match(/^[a-zA-z\s]+s/);
    });

    $("#inputmahasiswa").validate({
    rules:{
        username: "required",
        name: {
            required: true,
            alpha: true,
        },
        email: {
            required: true,
            email: true,
        },
        password: {
            required: true,
            minlength: 6,
        },
        messages: {
        username:"Masukan Username",
        name:{
            required: "masukan name",
            alpha: "*hanya masukan huruf dan spasi",
        },
        email: "*masukan email secara benar",
        password: {
            required:"Masukan Password",
            minlength: "*password minimal 6 karakter!",
        }
        }
    }}),

</script>
</body>
