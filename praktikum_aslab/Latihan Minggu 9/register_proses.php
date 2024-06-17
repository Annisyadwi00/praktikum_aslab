<?php
    session_start();

    include_once("./koneksi.php");

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "Email sudah terdaftar";
        }else{
            // Hindari serangan SQL Injection dengan menggunakan mysqli_real_escape_string()
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            
            if(mysqli_query($db, $sql) === TRUE){
                echo "Registrasi berhasil. Silahkan <a href = 'login.php'>Login</a>.";
            }else{
                echo "Registrasi Gagal!";
            }
        }
    }
?>