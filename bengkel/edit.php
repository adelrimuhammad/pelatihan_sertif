<?php
include('asset/config.php');
$id = $_GET['id'];

$query = "SELECT * FROM bengkel WHERE id = '$id'";
$select = mysqli_query($conn, $query);
$display = mysqli_fetch_assoc($select);

?>

<?php include('asset/header.php'); ?>

<div class="container-fluid my-5 py-5">
    <div class="container">
        <h2 class="fw-bold text-center mt-4">Form Edit Pemesanan</h2>
        <div class="conteiner px-5">
            <div class="conteiner px-5">
                <form action="asset/update.php" method="POST">
                    <div class="mb-3" hidden>
                        <label class="form-label fw-bold" hidden>Id</label>
                        <input type="text" class="form-control rounded" id="id" name="id" value="<?= $display['id']; ?>" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Nama</label>
                        <input type="text" required class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="<?= $display['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="noHp" class="form-label fw-bold">No HP</label>
                        <input type="text" required min="10" class="form-control" id="noHp" placeholder="08XXXXXXXXXXXX" name="noHp" value="<?= $display['noHp']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label fw-bold">Alamat</label>
                        <input type="text" required class="form-control" id="alamat" placeholder="Jl. Merdeka No. 1" name="alamat" value="<?= $display['alamat']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="platNomor" class="form-label fw-bold">Plat Nomer</label>
                        <input type="text" required class="form-control" id="platNomor" placeholder="D1234ABC" name="platNomor" value="<?= $display['platNomor']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="jenisKendaraan" class="form-label me-3 fw-bold">Jenis Kendaraan</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKendaraan" id="jenisKendaraan" value="Motor" <?php if ($display['jenisKendaraan'] == "Motor") echo "checked"; ?>>
                            <label class="form-check-label" for="jenisKendaraan">Motor</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKendaraan" id="jenisKendaraan" value="Mobil" <?php if ($display['jenisKendaraan'] == "Mobil") echo "checked"; ?>>
                            <label class="form-check-label" for="jenisKendaraan">Mobil</label>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="keluhan" class="form-label fw-bold">Keluhan</label>
                        <textarea class="form-control" required id="keluhan" name="keluhan" rows="3"><?= $display['keluhan']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <center>
                            <button class="btn btn-primary px-5" type="submit" name="edit">Pesan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('asset/footer.php'); ?>