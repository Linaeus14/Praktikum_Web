<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css" />
    <title> Ungkapan Pikiran </title>
</head>
<body>
    <header>
        <hr>
        <h1> Ungkapan Pikiran </h1>
    </header>
    <hr>
    <nav>
        <div class="fnav">
            <a href="index.php" id="Activenav"> Home </a>
        </div>
        <a href="nav\me.php"> About me </a>
        <div class="lnav">
            <a href="nav\fiction.php"> Stories </a>
        </div>
    </nav>
    <main>
        <hr>
        <img src="image/Logo1.png" alt="Logo1" height="25%" width="25%">
        <h3> Tempat dimana, isi pikiran penulis tersampaikan dalam tulisan </h3>
        <hr>
        <form id="request" action="./php/view.php" method="post">
            <table>
                <h2> Submit Cerita </h2>
                <tr>
                    <td> Judul </td>
                    <td> <input type="text" name="judul" placeholder="enter the title here" required> </td>
                </tr>
                <tr>
                    <td> Genre </td>
                    <td>
                        <input type="radio" name="genre" value="sedih" required> Senang
                        <input type="radio" name="genre" value="senang" required> Sedih
                        <input type="radio" name="genre" value="senang" required> Netral
                    </td>
                </tr>
                <tr>
                    <td> Email </td>
                    <td> <input type="email" name="email" id="email" placeholder="enter your email here" required></td>
                </tr>
                <tr>
                    <td> Jumlah Paragraf </td>
                    <td> <input type="number" name="paragraf" required> </td>
                </tr>
            </table>
            <hr>
            <input type="file" name="file" accept=".doc, .docx, text/plain, application/pdf" required>
            <input type="submit" value="Submit File">
        </form>
        <hr>
    </main>
<?php require "php/footer.php"?>