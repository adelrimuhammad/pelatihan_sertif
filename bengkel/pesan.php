

<?php include('asset/header.php'); ?>

<div class="container-fluid my-5 py-5">
    <div class="container">
        <h2 class="fw-bold text-center mt-4">Form Pemesanan</h2>
        <div class="conteiner px-5">
            <div class="conteiner px-5">
                <form action="asset/create.php" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Nama</label>
                        <input type="text" required class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="">
                    </div>
                    <div class="mb-3">
                        <label for="noHp" class="form-label fw-bold">No HP</label>
                        <input type="text" required min="10" class="form-control" id="noHp" placeholder="08XXXXXXXXXXXX" name="noHp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label fw-bold">Alamat</label>
                        <input type="text" required class="form-control" id="alamat" placeholder="Jl. Merdeka No. 1" name="alamat" value="">
                    </div>
                    <div class="mb-3">
                        <label for="platNomor" class="form-label fw-bold">Plat Nomor</label>
                        <input type="text" required class="form-control" id="platNomor" placeholder="D1234ABC" name="platNomor" value="">
                    </div>
                    <div class="mb-2">
                        <label for="jenisKendaraan" class="form-label me-3 fw-bold">Jenis Kendaraan</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKendaraan" id="jenisKendaraan" value="Motor">
                            <label class="form-check-label" for="jenisKendaraan">Motor</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKendaraan" id="jenisKendaraan" value="Mobil">
                            <label class="form-check-label" for="jenisKendaraan">Mobil</label>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="keluhan" class="form-label fw-bold">Keluhan</label>
                        <textarea class="form-control" required id="keluhan" name="keluhan" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <center>
                            <button class="btn btn-primary px-5" type="submit" name="pesan">Pesan</button>  
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('asset/footer.php'); ?>