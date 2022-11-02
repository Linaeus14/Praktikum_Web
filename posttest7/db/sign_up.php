<?php
    require "../db/conn.php";

    if(isset($_POST["signup"])){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];
        $email = $_POST["email"];

        $check = mysqli_query($conn, "SELECT username FROM akun WHERE username = '$user' ");
        if( mysqli_fetch_assoc($check) ){
            echo "<script LANGUAGE='JavaScript'>
                    window.alert('Username telah digunakan!');
                    window.location.href='../page/sign_up.php';
                </script>";
            die();
        }
        else{
            if($pass === $cpass){
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO akun VALUES ('', '$user', '$pass', '$email', 'user')";
                $result = mysqli_query($conn, $sql);
    
                if ( $result ){
                    echo "<script LANGUAGE='JavaScript'>
                            window.alert('Akun Berhasil Ditambah');
                            window.location.href='../index.php';
                        </script>";
                    die();
                }
                else{
                    echo "<script LANGUAGE='JavaScript'>
                            window.alert('Akun Gagal Ditambah');
                            window.location.href='../page/sign_up.php';
                        </script>";  
                    die();
                }
            }
            else{
                echo "<script LANGUAGE='JavaScript'>
                        window.alert('Password tidak sama');
                        window.location.href='../page/sign_up.php';
                    </script>";
                die();
            }
        }
    }
?>