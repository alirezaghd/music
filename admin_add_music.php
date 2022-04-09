<?php
include "header.php";
include "database.php";
session_start();

$albums = $db->query("SELECT * FROM musics");

?>


<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>


    <div class="container">
        <h3 class="text-light">افزودن آهنگ جدید</h3>
        <hr class="text-light">

        <div class="row mt-5">
            <div class="col-3">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="admin_add_music_process.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label  class="form-label">نام آهنگ</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">بارگذاری عکس</label>
                                <input type="file" name="image" class="form-control"  >
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">بارگذاری mp3</label>
                                <input type="file" name="mp3" class="form-control"  >
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">ایدی آلبوم</label>
                                <input type="number" min="1" max="30" name="albums_id" class="form-control" >
                            </div>

                            <button type="submit" class="btn btn-primary">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php else:
    header("Location: admin_login.php");
endif;
?>

<?php include "footer.php" ?>
