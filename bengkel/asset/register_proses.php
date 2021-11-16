<?php
require 'config.php';

function registrasi($data) {
    global $conn;
    $nama = $data["nama"];
    $email = strtolower($data["email"]);
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $konfirmasi_password= mysqli_real_escape_string($conn,$data["konfirmasi_password"]);

    //cek email sudah ada atau belum
$result =mysqli_query($conn,"SELECT email FROM users WHERE email='$email'");
if(mysqli_fetch_assoc($result)){
    echo "<script> 
    alert ('username sudah ada')
    </script>";
    return false;
}
//cek konfirmasi password
if ($password != $konfirmasi_password) {
    echo " <script> 
    alert('konfirmasi password tidak sesuai')
    </script>";
    return false;
}

//enkripsi password
$password= password_hash($password,PASSWORD_DEFAULT);

//tambahkan user baru ke database
mysqli_query($conn,"INSERT INTO users VALUES('','$nama','$email','$password')");

return mysqli_affected_rows($conn);

}

if(isset($_POST["register"])) {
    if(registrasi($_POST)>0){
        
        header("location:../login.php");
       
    } else {
        echo mysqli_error($conn);
    }
    
    
}
?>

