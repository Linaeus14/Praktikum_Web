<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css" />
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
            <a id="Activenav" href="index.php"> Login </a>
        </div>
        <div class="fnav">
            <a href = "page/sign_up.php"> Sign Up </a>
        </div>
    </nav>
    <main>
        <hr>
        <form id="login" action="./db/login.php" method="post">
            <table>
                <h2> Log In </h2>
                <tr>
                    <td> Username </td>
                    <td> <input type="text" name="username" placeholder="masukan username anda" required> </td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> <input type="password" name="pass" placeholder="masukan passwrod anda" required> </td>
                </tr>
            </table>
            <hr>
            <input type="submit" name = "Login" value="login">
        </form>
        <hr>
    </main>
<?php require "php/footer.php"?>