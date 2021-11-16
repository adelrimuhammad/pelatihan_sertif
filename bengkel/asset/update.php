<?php

    include('config.php');

    if(isset($_POST['edit']));{
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $noHp = $_POST['noHp'];
        $alamat = $_POST['alamat'];
        $platNomor = $_POST['platNomor'];
        $jenisKendaraan = $_POST['jenisKendaraan'];
        $keluhan = $_POST['keluhan'];

        $query = "UPDATE bengkel SET nama='$nama', noHp='$noHp', alamat='$alamat', platNomor='$platNomor', jenisKendaraan='$jenisKendaraan', keluhan='$keluhan' WHERE id='$id'";
        $update = mysqli_query($conn, $query);

        header('Location: ../history.php');

    }

?>