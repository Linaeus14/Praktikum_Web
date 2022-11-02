<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css" />
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
            <a href="../index.php"> Login </a>
        </div>
        <div class="lnav">
            <a href="sign_up.php" id="Activenav"> Sign Up </a>
        </div>
    </nav>
    <main>
        <hr>
        <form id="signup" action="../db/sign_up.php" method="post">
            <table>
                <h2> Sign Up </h2>
                <tr>
                    <td> Username </td>
                    <td> <input type="text" name="user" placeholder="masukan username anda" required> </td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> <input type="password" name="pass" placeholder="masukan password anda" required> </td>
                </tr>
                <tr>
                    <td> Konfirmasi Password </td>
                    <td> <input type="password" name="cpass" placeholder="masukan password anda" required> </td>
                </tr>
                <tr>
                    <td>  Email </td>
                    <td> <input type="email" name="email" placeholder="masukan email valid" required> </td>
                </tr>
            </table>
            <hr>
            <input type="submit" name = 'signup' value="Sign Up">
        </form>
        <hr>
    </main>
<?php require "../php/footer.php"?>