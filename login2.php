<?php
    session_start();
    include "config_db.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $query = mysqli_query($connection, "SELECT * FROM petugas WHERE username='$username' && password='$password'") or die (mysqli_error($connection));

    $cek = mysqli_num_rows($query);

    if($cek>0)
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location:tampilan1.php");
    }
    else{
        echo "
            <script>
                alert('Login gagal! Username atau password Anda salah.');
                document.location.href = 'login.php';
            </script>
        ";
    }
?>