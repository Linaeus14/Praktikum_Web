<?php require "header.php"?>  
    <hr>
    <nav>
        <div class="fnav">
            <a href="../index.php" id="Activenav"> Home </a>
        </div>
        <a href="../nav/me.php"> About me </a>
        <div class="lnav">
            <a href="../nav/fiction.php"> Stories </a>
        </div>
    </nav>
    <main>
        <hr>
        <h3> Telah Disubmit </h3>
        <hr>
        <table>
            <tr>
                <td> Judul </td>
                <td> <?= $_POST["judul"]; ?> </td>
            </tr>
            <tr>
                <td> Genre </td>
                <td> <?= $_POST["genre"]; ?> </td>
            </tr>
            <tr>
                <td> Email </td>
                <td> <?= $_POST["email"]; ?> </td>
            </tr>
            <tr>
                <td> Jumlah Paragraf </td>
                <td> <?= $_POST["paragraf"]; ?> </td>
            </tr>
        </table>
        <hr>
        <?= $_POST["file"]; ?> <br>
        <button> <a href="../index.php"> Kembali</a> </button>
        <hr>
    </main>
<?php require "footer.php"?>  