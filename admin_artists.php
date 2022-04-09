<?php
include "header.php";
include "database.php";


$artists = $db->query("SELECT * FROM artists");
?>


<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>


    <div class="container">
        <h3 class="text-light">خواننده ها</h3>
        <hr class="text-light">
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-9">
                <a href="admin_add_artist.php" class="btn btn-success mt-2 mt-sm-3 mt-md-3 mt-lg-0"> <i class="fas fa-plus"></i></a>
                <br class="text-light">
                <table class="table list-table table-secondary table-nowrap align-middle table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" style="width:50px;">#</th>
                        <th scope="col">عکس</th>
                        <th scope="col">نام</th>
                        <th scope="col" style="width: 150px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($artists as $artist): ?>
                        <tr class=" mt-2">
                            <th scope="row"> <?php echo $artist["id"]; ?> </th>
                            <td>
                                <img src="<?php echo $artist["image"]; ?>" class="img-fluid" width="80px">

                            </td>
                            <td><?php echo $artist["name"]; ?></td>
                            <td>
                                <a class="btn btn-sm btn-outline-success">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger"
                                   href="admin_remove_artists.php?artist_id=<?php echo $artist["id"]; ?>">
                                    <i class="fas fa-trash"></i>
                                </a>

                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php else:
    header("Location: admin_login.php");
endif;
?>

<?php include "footer.php" ?>
