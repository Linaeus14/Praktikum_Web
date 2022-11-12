<?php 
    require "../db/conn.php";
    require "../db/tb_s.php";
    require "../php/sessionu.php";
    require "../php/header.php";
?>    
<nav>
    <div class="fnav">
        <a href="../dashboard/user.php"> Home </a>
    </div>
        <a href="me.php"> About me </a>
    <div class="lnav">
        <a href="fiction.php" id="Activenav"> Stories </a>
    </div>
    <a href="../php/logout.php" id="Logout"> Log Out </a>
</nav>
<main>
    <form id = "search" action = "" method = "get">
        <table id="searchbar">
            <tr> 
                <?php if(isset($key)){?>
                    <td> <input type="text" name='key' placeholder="judul/penulis" value="<?php echo $key?>" > </td> 
                <?php }else{ ?>
                    <td> <input type="text" name='key' placeholder="judul/penulis"> </td>
                <?php } ?>
                <td> <button type="submit" name='sdb'> Cari </button> </td>
            </tr>
        </table>
    </form>
    <table id=dataview>
        <?php while ($s = mysqli_fetch_assoc($result)) { ?>
                <td > <?php $path = '../file/'.$s['filename']; echo "<img src=$path alt='cover' height='100' width='180''>" ?> </td>
                <td> 
                <div class="stories">
                    <h3><a href="../page/story.php?id=<?php echo $s["id"]; ?>"><?php echo $s['judul']?></a></h3>
                    <h6><?php echo $s['penulis'] ?> </h6>
                    <div class="sinmo3"> <?php echo $s['sinopsis'] ?> </div>
                </div>
                </td >
            </tr>
        </div>
        <?php }?>
    </table>
    <p><b> Halaman <?php echo $page ?> </b></p>
    <hr>
    <?php
        for ($i=1; $i<=$pages ; $i++){
            if(isset($key)){
    ?>
        <a href="?halaman=<?php echo $i ?>&key=<?php echo $key ?>"> <?php echo $i; ?></a>
    <?php 
            }
            else{
    ?>
        <a href="?halaman=<?php echo $i ?>"> <?php echo $i; ?> </a>
    <?php
            }
        }
    ?>
    <hr>
</main>
<?php require "../php/footer.php"?>