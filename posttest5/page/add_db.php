<?php 
    require "../db/conn.php";
    require "../db/add.php";
    require "../php/header.php";
?>
<nav>
    <div class="fnav">
        <a href="../index.php"> Home </a>
    </div>
    <a href="../nav/db.php" id="Activenav"> Database </a>
    <a href="../nav/me.php"> About me </a>
    <div class="lnav">
        <a href="../nav/fiction.php"> Stories </a>
    </div>
</nav>
<main>
    <hr>
    <form id="submit" action="" method="post">
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
                    <input type="radio" name="genre" value="netral" required> Netral
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
        <input type="file" name="fl" accept=".doc, .docx, text/plain, application/pdf" required>
        <input type="submit" name="tambah" value="Submit"></input>
    </form>
    <hr>
</main>
<?php require "../php/footer.php"?>