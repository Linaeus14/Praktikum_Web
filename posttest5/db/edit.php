<?php
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM story WHERE id = $id");
    
    $s = [];
    
    while ($row = mysqli_fetch_assoc($result)){
        $s[] = $row;
    }

    $s = $s[0];

    if(isset($_POST["edit"])){
        $judul = $_POST["judul"];
        $genre = $_POST["genre"];
        $email = $_POST["email"];
        $paragraf = $_POST["paragraf"];
        $fl = $_POST["fl"];

        $sql = "UPDATE story SET judul = '$judul', genre = '$genre',email = '$email', paragraf = '$paragraf', fl = '$fl' WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if ( $result ){
            echo"
                <script>
                    window.alert('Data Berhasil Diubah');
                    window.location.href='../nav/db.php';
                </script>
            ";
        }
        else{
            echo"
                <script>
                    window.alert('Data Gagal Ditambah');
                    window.location.href='../nav/db.php';
                </script>
            ";
        }
    }
?>