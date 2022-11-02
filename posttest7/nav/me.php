<?php
    require "../php/session.php";
    require "../php/header.php";
?>  
<nav>
    <div class="fnav">
        <a href="../dashboard/user.php"> Home </a>
    </div>
    <a href="me.php" id="Activenav"> About me </a>
    <div class="lnav">
        <a href="../nav/fiction.php"> Stories </a>
    </div>
    <a href="../php/logout.php" id="Logout"> Log Out </a>
</nav>
<main>
    <div class="me">
        <img src="https://tinyurl.com/profilepictitod" width = 20% height = 20% alt="Profilepic" id="Profilepic" \>
        <h1> Tito Darmawan </h1>
        <p><strong> Mahasiswa </strong></p>
        <hr>
    </div>
    <div class="me2">
        <p> NIM : 2109106042 <br> Web ini dibuat demi memenuhi tugas UTS praktikum pemrograman web </p>
    </div>
</main>
<?php require "../php/footer.php"?>  