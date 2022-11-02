<?php
    require "../db/conn.php";

    $result1 = mysqli_query($conn, "DELETE FROM story");
    $result2 = mysqli_query($conn, "DELETE FROM files");

    $folder_path = "../file";
    $files = glob($folder_path.'/*'); 
    
    foreach($files as $file) {
        if(is_file($file)) {
            unlink($file); 
        }
    }

    if ( $result1 & $result2 ){
        echo"
            <script>
                window.alert('Data Berhasil Dihapus');
                window.location.href='../nav/db.php';
            </script>";
        die();
    }
    else{
        echo"
            <script>
                window.alert('Data Gagal Dihapus');
                window.location.href='../nav/db.php';
            </script>";
        die();
    }
?>