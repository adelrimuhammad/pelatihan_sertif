<?php
session_start();
require 'asset/config.php';

//cek cookie
if(isset($_COOKIE['apa']) && isset($_COOKIE['ini'])){
   $apa= $_COOKIE['apa'];
  $ini=$_COOKIE['ini'];
    //mengambil username berdasarkan id
   $query= mysqli_query($conn,"SELECT email FROM users WHERE id= $apa");
   $row = mysqli_fetch_assoc($query);

    // cek cookie dan username 
    if ($ini === hash('sha256', $row['email'])) {
      $_SESSION ['login']=true;
    }
}
//cek session
if (isset($_SESSION["login"])) {
    header("Location:../index.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" alt="" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="register.php">Register</a>
                    </li>
                   
                </ul>
                
            </div>
        </div>
    </nav>

    <div class="card w-50" style="left:25%; top:10%; ">

        <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Login</h5>

            <form action="login_proses.php" method="POST">

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="remember" name="remember">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember Me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
        </div>
    </div>




    <?php include('asset/footer.php'); ?>