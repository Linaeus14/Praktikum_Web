<?php
    $result = mysqli_query($conn, "SELECT * FROM story");

    $story = [];

    while ($row = mysqli_fetch_assoc($result)){
        $story[] = $row;
    }
?>