<!DOCTYPE html>
<html lang="en">

<?php
include_once('template/head.php');
?>

<body>
    <form id="inputdata" class="form-horizontal" method="post" action="simpan.php">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">name</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukan name" required>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" required>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-4">
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-foffset-2 col-sm-4">
            <button type="submit" class="btn btn-info">Tambah</button>
            </div>
        </div>
    </form>
    
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
