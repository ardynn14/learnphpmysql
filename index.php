<!DOCTYPE html>
<html lang="en">

<?php
include_once('template/head.php');
?>

<body>
    <div class="row">
        <div class="container">
        <h2><i class="fa fa-home"></i>CRUD</h2>
        <hr>
        <a href="input.php" class="btn btn-info"><i class="fa fa-heart"></i> Input Data</a>
        <br><br>
            <table class="table" id="tb-mahasiswa">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th><center>Aksi</center></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    require_once('koneksi.php');
                    $no = 1;

                    $koneksiObj = new Koneksi();
                    $koneksi = $koneksiObj->getKoneksi();

                    if ($koneksi->connect_error) {
                    echo "Gagal Koneksi : ". $koneksi->connect_error;
                    echo "</td></tr>";
                    }
                $query = "select * from input_data";
                $data = $koneksi->query($query);
                if($data->num_rows <=0){
                    echo "<tr>";
                    echo "<td colspan='5' class='text-center'><i>Tidak Ada Data</i></td>";
                    echo "</tr>";
                }else{
                    while ($row = $data->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td class='center'>".$row['name']."</td>";
                        echo "<td>".$row['username']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo '<td class="text-center"><a href="form-edit.php?id='.$row['id'].'" class="btn btn info btn-xs"><i class="fa fa-pencil"> edit</i><a>';
                        echo ' <a href="hapus.php?id='.$row['id'].'"class="btn btn-danger btn-xs"><i class="fa fa-trash"> hapus</i></a></td>';
                        echo "</tr>";
                    }
                }
                ?>
                </tbody>
            </table>       
        </div>
    </div>
<?php
    include_once('template/script.php');
?>
</body>

</html>