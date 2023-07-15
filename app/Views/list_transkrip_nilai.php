<!-- app/Views/list_transkrip_nilai.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Transkrip Nilai</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/maps/jquery-jvectormap-2.0.3'); ?>">

</head>
<body>
    <h1>Daftar Transkrip Nilai</h1>

    <table id="datatable">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Taruna</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transkrip_nilai as $index => $nilai) { ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $nilai['nama_taruna']; ?></td>
                    <td>
                        <a href="<?php echo base_url('transkrip/edit/' . $nilai['id']); ?>">Edit</a>
                        <a href="<?php echo base_url('transkrip/delete/' . $nilai['id']); ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="<?php echo base_url('js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/daterangepicker.js'); ?>"></script>
    
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>

</body>
</html>
