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
            <a href="input.php" class="btn btn-info"><i class="fa fa-plus"></i> Input Data</a>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <table class="table col-sm-10" id="tb-mahasiswa">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Name</center></th>
                        <th><center>Username</center></th>
                        <th><center>gender</center></th>
                        <th><center>Division</center></th>
                        <th><center>Phone</center></th>
                        <th><center>Action</center></th>
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
                    echo "<td colspan='12' class='text-center'><i>Tidak Ada Data</i></td>";
                    echo "</tr>";
                }else{
                    while ($row = $data->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='text-center'>".$no++."</td>";
                        echo "<td class='text-center'>".$row['name']."</td>";
                        echo "<td class='text-center'>".$row['username']."</td>";
                        echo "<td class='text-center'>".$row['gender']."</td>";
                        echo "<td class='text-center'>".$row['division']."</td>";
                        echo "<td class='text-center'>".$row['phone']."</td>";
                        echo '<td class="text-center"><a href="form-edit.php?id='.$row['id'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil"> edit</i><a>';
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