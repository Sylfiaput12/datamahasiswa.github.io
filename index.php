<?php
include "tampilkan_data.php";
include "edit_data.php";

error_reporting(0);

$data_edit = mysqli_fetch_assoc($proses_ambil);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap PBW Pert 14</title>
    <link href="Library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="Library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="Library/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="Library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="Library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <div class="span9" id="content">
        <!-- morris stacked chart -->
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Nilai Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">

                        <?php
                        if ($_GET['id'] != "") {
                        ?>
                            <form action="edit_data.php?id=<?php echo $data_edit['id'] ?>&proses=1;" method="POST">
                            <?php
                        } else {
                            ?>
                                <form action="proses_pertemuan_12.php" method="POST">
                                <?php
                            }
                                ?>

                                <fieldset>
                                    <legend>Input Nilai Mahasiswa</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">NAMA MAHASISWA : </label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" id="Nama" type="hidden" name="nama" value="<?php if ($data_edit['id'] != "") echo $data_edit['id']; ?>">
                                            <input class="input-xlarge focused" id="Nama" type="text" name="nama" value="<?php if ($data_edit['nama_mahasiswa'] != "") echo $data_edit['nama_mahasiswa']; ?>">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">PRODI MAHASISWA : </label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" id="Prodi" type="text" name="prodi" value="<?php if ($data_edit['prodi'] != "") echo $data_edit['prodi']; ?>">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Ulangi : </label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" id="Ulangi" type="text" name="ulangi" value="">
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Proses Data</button>
                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                                </fieldset>
                                </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Data Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID Mahasiswa</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Prodi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($data = mysqli_fetch_assoc($proses)) {
                                ?>

                                    <tr>
                                        <td><?php echo $data['id'] ?></td>
                                        <td><?php echo $data['nama_mahasiswa'] ?></td>
                                        <td><?php echo $data['prodi'] ?></td>
                                        <td><a href="index.php?id=<?php echo $data['id']; ?>">Edit</a> | <a href="hapus_data.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
                                    </tr>

                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>
</body>

</html>