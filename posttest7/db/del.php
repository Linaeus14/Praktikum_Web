<?php
    require "../db/conn.php";

    $id = $_GET['id'];
    $delfile =  mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM files WHERE id = '$id'"));
    $delfile_name = $delfile['filename'];
    $delfile_name = "../file/".$delfile_name;

    $result1 = mysqli_query($conn, "DELETE FROM story WHERE file_id = '$id'");
    $result2 = mysqli_query($conn, "DELETE FROM files WHERE id = '$id'");
    unlink($delfile_name);

    if ( $result1 & $result2 ){
        echo"
            <script>
                alert('Data Berhasil Dihapus');
                window.location.href='../nav/db.php';
            </script>";
        die();
    }
    else{
        echo"
            <script>
                alert('Data Gagal Dihapus');
                window.location.href='../nav/db.php';
            </script>";
        die();
    }
?>