<?php
    require "../db/conn.php";

    $result = mysqli_query($conn, "DELETE FROM story");

    if ( $result ){
        echo"
            <script>
                window.alert('Data Berhasil Dihapus');
                window.location.href='../nav/db.php';
            </script>
        ";
    }else{
        echo"
            <script>
                window.alert('Data Gagal Dihapus');
                window.location.href='../nav/db.php';
            </script>
        ";
    }
?>