<?php

    include('config.php');

        $id = $_GET['id'];

        $query = "DELETE FROM bengkel WHERE id='$id'";
        $delete = mysqli_query($conn, $query);
        
        header('Location: ../history.php');

?>