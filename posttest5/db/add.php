<?php
    if(isset($_POST["tambah"])){
        $judul = $_POST["judul"];
        $genre = $_POST["genre"];
        $email = $_POST["email"];
        $paragraf = $_POST["paragraf"];
        $fl = $_POST["fl"];

        $sql = "INSERT INTO story VALUES ('', '$judul', '$genre', '$email', '$paragraf', '$fl')";
        $result = mysqli_query($conn, $sql);

        if ( $result ){
            echo "<script LANGUAGE='JavaScript'>
                    window.alert('Data Berhasil Ditambah');
                    window.location.href='../nav/db.php';
                </script>";
        }
        else{
            echo "<script LANGUAGE='JavaScript'>
                    window.alert('Data Gagal Ditambah');
                    window.location.href='../nav/db.php';
                </script>";
                
        }
    }
?>