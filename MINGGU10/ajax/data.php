<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No. Telp</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include('koneksi.php');
        $sql = "SELECT * FROM anggota ORDER BY id DESC";
        $stmt = $db1->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["jenis_kelamin"]; ?></td>
                    <td><?php echo $row["alamat"]; ?></td>
                    <td><?php echo $row["no_telp"]; ?></td>
                    <td>
                        <button id="<?php echo $row["id"]; ?>" class="btn btn-success btn-sm edit_data" data-toggle="tooltip"
                            data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                        <button id="<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm hapus_data" data-toggle="tooltip"
                            data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="6">Tidak ada data ditemukan</td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    // Initialize DataTable
    $(document).ready(function() {
        $('#example').DataTable();
    });

    // Function to reset error messages
    function reset() {
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = "";
        document.getElementById("err_alamat").innerHTML = "";
        document.getElementById("err_no_telp").innerHTML = "";
    }

    // Edit data functionality
    $(document).on('click', '.edit_data', function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');

        var id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "get_data.php",
            data: { id: id },
            dataType: 'json',
            success: function(response) {
                reset();
                $('html, body').animate({ scrollTop: 30 }, 'slow');
                document.getElementById("id").value = response.id;
                document.getElementById("nama").value = response.nama;
                document.getElementById("alamat").value = response.alamat;
                document.getElementById("no_telp").value = response.no_telp;
                if (response.jenis_kelamin == "L") {
                    document.getElementById("jenkel1").checked = true;
                } else {
                    document.getElementById("jenkel2").checked = true;
                }
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });

    $(document).on('click', '.hapus_data', function() {
  var id = $(this).attr('id');

  $.ajax({
    type: 'POST',
    url: "hapus_data.php",
    data: {id: id},
    success: function() {
      $('.data').load("data.php");
    },
    error: function(response) {
      console.log(response.responseText);
    }
  });
});
</script>

<style>
    /* Custom CSS to align the search input and pagination to the right */
    .dataTables_wrapper .dataTables_paginate {
        float: right;
    }

    .dataTables_wrapper .dataTables_filter {
        float: right;
    }
</style>