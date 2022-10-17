<?php
    require "../db/conn.php";

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM story WHERE id = $id");

    if ( $result ){
        echo"
            <script>
                alert('Data Berhasil Dihapus');
                window.location.href='../nav/db.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data Gagal Dihapus');
                window.location.href='../nav/db.php';
            </script>
        ";
    }
?>