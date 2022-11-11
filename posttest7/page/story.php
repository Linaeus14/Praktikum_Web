<?php 
    require "../db/conn.php";
    require "../db/edit.php";
    require "../php/sessionu.php";
    require "../php/header.php";
?>    
<nav>
    <div class="fnav">
        <a href="../dashboard/user.php"> Home </a>
    </div>
        <a href="../nav/me.php"> About me </a>
    <div class="lnav">
        <a href="../nav/fiction.php" id="Activenav"> Stories </a>
    </div>
    <a href="../php/logout.php" id="Logout"> Log Out </a>
</nav>
<main>             
    <p style="margin-top: 20px;"></p>
            <?php $path = '../file/'.$s['filename']; echo "<img src=$path alt='cover' height='160vh' width='130vw'>" ?> 
                <div class="stories">
                    <h3><?php echo $s['judul'] ?></a> </h3>
                    <h6><?php echo $s['penulis'] ?> </h6>
                    <div class="sinmo4"> <?php echo $s['cerita'] ?> </div>
                </div>
                </td >
            </tr>
        </div>
</main>
<?php require "../php/footer.php"?>