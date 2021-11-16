<html>

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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <div class="d-flex">
                    <a class="btn btn-primary" aria-current="page" href="login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="card w-50 mt-5" style="left:25%; top:10%; ">

        <div class="card-body">
            <h2 class="card-title fw-bold text-center mt-4">Registrasi</h2>
            <div class="container px-4">
                <form action="asset/register_proses.php" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="user@mail.com">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="konfirmasi_password" class="form-label fw-bold">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password">
                    </div>
                    <center>
                        <button class="btn btn-primary px-5 mt-3 mb-5" type="submit" name="register">Register</button>
                    </center>
                </form>
            </div>
            <a class="nav-link text-center" href="login.php">Login Here!</a>
        </div>
    </div>



    <?php include('asset/footer.php'); ?>