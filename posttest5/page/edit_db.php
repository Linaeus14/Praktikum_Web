<?php 
    require "../db/conn.php";
    require "../db/edit.php";
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
    <form id="request" action="" method="post">
        <table>
            <h2> Ubah Data </h2>
            <tr>
                <td> Judul </td>
                <td> <input type="text" name="judul" placeholder="enter the title here" value="<?php echo $s["judul"] ?>" required> </td>
            </tr>
            <tr>
                <td> Genre </td>
                <td>
                    <input type="radio" name="genre" value="senang" required> Senang
                    <input type="radio" name="genre" value="sedih" required> Sedih
                    <input type="radio" name="genre" value="netral" required> Netral
                </td>
            </tr>
            <tr>
                <td> Email </td>
                <td> <input type="email" name="email" id="email" placeholder="enter your email here" value="<?php echo $s["email"] ?>" required></td>
            </tr>
            <tr>
                <td> Jumlah Paragraf </td>
                <td> <input type="number" name="paragraf" value="<?php echo $s["paragraf"] ?>" required> </td>
            </tr>
        </table>
        <hr>
        <input type="file" name="fl" accept=".doc, .docx, text/plain, application/pdf" value="<?php echo $s["fl"] ?>"  required>
        <input type="submit" name="edit" value="Ubah"></input>
    </form>
    <hr>
</main>
<?php require "../php/footer.php"?>