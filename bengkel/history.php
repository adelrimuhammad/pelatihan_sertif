<?php
include('asset/config.php');
$query = "SELECT * FROM bengkel";
$select = mysqli_query($conn, $query);
?>


<?php include('asset/header.php'); ?>

<div class="container-fluid my-5 py-5">
    <div class="container">
        <h2 class="fw-bold text-center mt-4">History Pemesamam Bengkel ESD</h2>
        <center>
            <div class="container mt-4">
                <?php if ($select->num_rows > 0) { ?>
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Plat Nomor</th>
                            <th>Jenis Kendaraan</th>
                            <th>Keluhan</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php while ($selects = mysqli_fetch_assoc($select)) { ?>
                                <tr>
                                    <td><?= $selects['id'] ?></td>
                                    <td><?= $selects['nama'] ?></td>
                                    <td><?= $selects['noHp'] ?></td>
                                    <td><?= $selects['alamat'] ?></td>
                                    <td><?= $selects['platNomor'] ?></td>
                                    <td><?= $selects['jenisKendaraan'] ?></td>
                                    <td><?= $selects['keluhan'] ?></td>
                                    <td>
                                        <a name="detail" id="edit" class="btn btn-primary" href="edit.php?id=<?= $selects['id'] ?>" role="button">Edit</a>
                                        <a name="detail" id="delete" class="btn btn-danger" href="asset/delete.php?id=<?= $selects['id'] ?>" role="button">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <div class="container mt-5">
                                <h3 class="text-center mt-5">Belum ada pesanan</h3>
                                <hr class="border border-2 border-primary rounded">
                                <p class="text-center">Silahkan memesan</p>
                            </div>
                        <?php } ?>
                        </tbody>
                    </table>
        </center>
    </div>
</div>

<?php include('asset/footer.php'); ?>