<?php
    require '../db/conn.php';

    if(isset($_POST['Login'])){
        $username = $_POST["username"];
        $pass = $_POST["pass"];
        $hasil = mysqli_query($conn, "SELECT username, pass, sta FROM akun WHERE username = '$username' OR email = '$username'");

        if(mysqli_num_rows($hasil)== 1){
            $row = mysqli_fetch_assoc($hasil);

            if(password_verify($pass, $row['pass'])){

                if($row['sta'] == 'admin') {    
                    session_start();
                    if(isset($_SESSION["sida"])) {
                        header("Location: ../dashboard/admin.php", TRUE, 301);
                        die();
                    }
                    else {
                        $_SESSION["start"] = time(); 
                        $_SESSION["expire"] = $_SESSION['start'] + (30 * 60) ;
                        $_SESSION["sida"] = session_id();
                        header("Location: ../dashboard/admin.php", TRUE, 301);
                        die();
                    }
                }
                elseif ($row['sta'] == 'user') {
                    session_start();
                    if(isset($_SESSION["sidu"])) {
                        header("Location: ../dashboard/user.php", TRUE, 301);
                        die();
                    }
                    else {
                        $_SESSION["start"] = time(); 
                        $_SESSION["expire"] = $_SESSION['start'] + (30 * 60) ;
                        $_SESSION["sidu"] = session_id();
                        header("Location: ../dashboard/user.php", TRUE, 301);
                        die();
                    }
                }
                else {
                    header("Location: ../index.php", TRUE, 301);
                    die();
                }
            }
            else{
                echo "<script LANGUAGE='JavaScript'>
                        window.alert('Password salah');
                        window.location.href='../index.php';
                    </script>";
                die();
            }
        }
        else{
            echo "<script LANGUAGE='JavaScript'>
                    window.alert('Username atau Password Salah!');
                    window.location.href='../index.php';
                </script>";
            die();
        }
    }
?>