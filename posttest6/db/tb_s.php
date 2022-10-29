<?php
    $result = mysqli_query($conn, "SELECT * FROM story LEFT JOIN files ON story.file_id = files.id");

    $story = [];

    while ($row = mysqli_fetch_assoc($result)){
        $story[] = $row;
    }
?>