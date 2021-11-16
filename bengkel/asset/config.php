<?php 

    // connection 

    // $dbhost = "localhost";
    // $dbuser = "root";
    // $dbname = "modul3";
    // $dbpass = "";

    // bisa diisi variable diatas
    $conn = mysqli_connect("localhost","root","","pelatihan_sertifikasi");
    
    // ngga harus ada
    if(!$conn) {
        echo "<script>
                alert('Failed Connect into Database')'
              </script>";
    }

?>