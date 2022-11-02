<?php
    if(isset($_POST["tambah"])){
        if (isset($_FILES['fl']['name'])) {
            $file_name = $_FILES['fl']['name'];
            $file_tmp = $_FILES['fl']['tmp_name'];
            $check = mysqli_query($conn, "SELECT * FROM files WHERE filename = '$file_name'");

            while( mysqli_fetch_assoc($check) ){
                $x = explode('.', $file_name);
                $fname = $x[0];
                $fname = $fname."o.";
                $ext = strtolower(end($x));
                $file_name = $fname.$ext;
                $check = mysqli_query($conn, "SELECT * FROM files WHERE filename = '$file_name'");
            }

            move_uploaded_file($file_tmp,"../file/".$file_name);

            date_default_timezone_set("Asia/Singapore");
            $tanggal = date("d/m/20y");
            $sql1 = "INSERT INTO files VALUES('', '$file_name', '$tanggal')";
            $result1 = mysqli_query($conn, $sql1);

            $judul = $_POST["judul"];
            $penulis = $_POST["penulis"];
            $sinopsis = $_POST["sinopsis"];
            $cerita = $_POST["cerita"];
            $fl = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM files WHERE filename = '$file_name'"));
            $fl_id = $fl['id'];

            $sql2 = "INSERT INTO story VALUES ('', '$judul', '$penulis', '$sinopsis', '$cerita', '$fl_id')";
            $result2 = mysqli_query($conn, $sql2);

            if ( $result1 & $result2 ){
                echo "<script LANGUAGE='JavaScript'>
                        window.alert('Data Berhasil Ditambah');
                        window.location.href='../nav/db.php';
                    </script>";
                die();
            }
            else{
                echo "<script LANGUAGE='JavaScript'>
                        window.alert('Data Gagal Ditambah');
                        window.location.href='../nav/db.php';
                    </script>";       
                die();
            }
		}
		else {
            echo "<script LANGUAGE='JavaScript'>
                    window.alert('File Gagal Diuploud!');
                    window.location.href='../nav/db.php';
                </script>";
            die();
		}
    }
?>