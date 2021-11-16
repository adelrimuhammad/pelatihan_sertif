<?php

    include('config.php');

    if(isset($_POST['pesan'])){
        $nama = $_POST['nama'];
        $noHp = $_POST['noHp'];
        $alamat = $_POST['alamat'];
        $platNomor = $_POST['platNomor'];
        $jenisKendaraan = $_POST['jenisKendaraan'];
        $keluhan = $_POST['keluhan'];

        $query = "INSERT INTO bengkel (nama, noHp, alamat, platNomor, jenisKendaraan, keluhan) VALUES ('$nama', '$noHp', '$alamat', '$platNomor', '$jenisKendaraan', '$keluhan')";
        $insert = mysqli_query($conn, $query);
        
        header('Location: ../history.php');    
    }

?>