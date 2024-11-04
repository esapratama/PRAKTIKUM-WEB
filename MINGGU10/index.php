<!DOCTYPE html>
<html>
<head>
<title>Data Anggota</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Data Anggota</h1>
    <a class="btn btn-success mt-2" href="create.php">Tambah Data</a>
    <br><br>

    <?php
    include('koneksi.php');
    $query = "SELECT * FROM anggota ORDER BY id DESC";
    $result = mysqli_query($koneksi, $query);
    ?>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
         <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo ($row['jenis_kelamin'] == 'laki-laki') ? 'Laki-laki' : 'Perempuan'; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['no_telp']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal<?php echo $row['id']; ?>">Hapus</a>

                        <div class="modal fade" id="hapusModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus data dengan nama "<?php echo $row['nama']; ?>" ?
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?php echo $row['id']; ?>">Hapus</a>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?> 
        </tbody>
    </table>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgxOqF0SsOm+FR+LO2Re63Xn<ctrl61>Rj/6tN97IyeReZXR2qOfv+QXJ4" crossorigin="anonymous"></script>
</body>
</html>