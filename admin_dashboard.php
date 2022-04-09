<?php
include "header.php";

?>


<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>


<div class="container">


    <div class="row ">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <?php include "admin_side.php"; ?>
        </div>

        <div class="col-9">

        </div>
    </div>
</div>

<?php else:
     header("Location: admin_login.php");
     endif;
?>

<?php include "footer.php" ?>
