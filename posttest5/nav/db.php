<?php 
    require "../db/conn.php";
    require "../db/tb_s.php";
    require "../php/header.php";
?>
<nav>
    <div class="fnav">
        <a href="../index.php"> Home </a>
    </div>
    <a href="db.php" id="Activenav"> Database </a>
    <a href="me.php"> About me </a>
    <div class="lnav">
        <a href="fiction.php"> Stories </a>
    </div>
</nav>
<main>
    <hr>
    <h1> Database </h1>
    <button type=""> <a href="../page/add_db.php"> Tambah Data </a> </button>
    <button type=""> <a href="../db/del_all.php" onclick = "return confirm('Konfirmasi Hapus Semua?')"> Hapus Semua </a> </button>
    <hr>
    <table id=dataview>
        <tr>
            <th> No </th>
            <th> Judul </th>
            <th> Genre </th>
            <th> Email </th>
            <th> Paragraf </th>
            <th> File </th>
            <th> Aksi </th>
        </tr>
        <?php $i = 1; foreach ($story as $s): ?>
            <tr>
                <td> <?php echo $i ?> </td>
                <td> <?php echo $s['judul'] ?> </td>
                <td> <?php echo $s['genre'] ?> </td>
                <td> <?php echo $s['email'] ?> </td>
                <td> <?php echo $s['paragraf'] ?> </td>
                <td> <?php echo $s['fl'] ?> </td>
                <td>
                    <button> <a href="../page/edit_db.php?id=<?php echo $s["id"]; ?>"> Edit </a> </button>
                    <button> <a href="../db/del.php?id=<?php echo $s["id"]; ?>" onclick = "return confirm('Konfirmasi Hapus?')"> Hapus </a> </button>
                </td>
            </tr>
        <?php $i++; endforeach ?>
    </table>
    <hr>
</main>
<?php require "../php/footer.php"?>