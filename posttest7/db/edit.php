<?php
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM story LEFT JOIN files ON story.file_id = files.id WHERE file_id = $id");
    
    $s = [];
    
    while ($row = mysqli_fetch_assoc($result)){
        $s[] = $row;
    }

    $s = $s[0];

    if(isset($_POST["edit"])){
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

            $delfile =  mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM files WHERE id = '$id'"));
            $delfile_name = $delfile['filename'];
            $delfile_name = "../file/".$delfile_name;
            unlink($delfile_name);
            move_uploaded_file($file_tmp,"../file/".$file_name);

            date_default_timezone_set("Asia/Singapore");
            $tanggal = date("d/m/20y");
            $sql1 = "UPDATE files SET filename =  '$file_name', tanggal_up = '$tanggal' WHERE id = '$id'";
            $result1 = mysqli_query($conn, $sql1);

            $judul = $_POST["judul"];
            $penulis = $_POST["penulis"];
            $sinopsis = $_POST["sinopsis"];
            $cerita = $_POST["cerita"];

            $sql2 = "UPDATE story SET judul = '$judul', penulis = '$penulis', sinopsis = '$sinopsis', cerita = '$cerita' WHERE file_id = $id";
            $result2 = mysqli_query($conn, $sql2);

            if ( $result1 & $result2 ){
                echo "<script LANGUAGE='JavaScript'>
                        window.alert('Data Berhasil Diedit');
                        window.location.href='../nav/db.php';
                    </script>";
                die();
            }
            else{
                echo "<script LANGUAGE='JavaScript'>
                        window.alert('Data Gagal Diedit');
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