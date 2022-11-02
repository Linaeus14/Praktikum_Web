<?php 
    require "../db/conn.php";
    require "../db/add.php";
    require "../php/session.php";
    require "../php/header.php";
?>
<nav>
    <div class="fnav">
        <a href="../dashboard/admin.php"> Home </a>
    </div>
    <div class="lnav">
        <a href="../nav/db.php" id="Activenav"> Database </a>
    </div>
    <a href="../php/logout.php" id="Logout"> Log Out </a>
</nav>
<main>
    <hr>
    <form id="submit" action="" method="post" enctype="multipart/form-data">
        <table>
            <h2> Submit Cerita </h2>
            <tr>
                <td> Judul </td>
                <td> <input type="text" name="judul" placeholder="enter the title here" required> </td>
            </tr>
            <tr>
                <td> Penulis </td>
                <td> <input type="text" name="penulis" placeholder="enter the author here" required> </td>
            </tr>
            <tr>
                <td> Sinopsis </td>
                <td> <textarea name="sinopsis" id="sinopsis" cols="30" rows="5" form="submit" placeholder="enter the synopsis here" required></textarea> </td>
            </tr>
            <tr>
                <td> Cerita </td>
                <td> <textarea name="cerita" id="cerita" cols="30" rows="5" form="submit" placeholder="enter the story here" required></textarea> </td>
            </tr>
        </table>
        <hr>
        <label for="fl"> Cover </label>
        <input type="file" name="fl" accept="image/png, image/jpeg" required>
        <input type="submit" name="tambah" value="Submit"></input>
    </form>
    <hr>
</main>
<?php require "../php/footer.php"?>