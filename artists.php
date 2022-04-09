<?php

include "header.php";
include "database.php";

$artists = $db->query("SELECT * FROM artists ORDER BY `artists`.`id` ASC");

?>


<div class="container">
    <div class="row mt-3">
        <h2 class="text-light">خوانندگان</h2>
        <hr class="text-light">

        <?php
        foreach ($artists as $artist):
            ?>
            <div class="col-lg-2 col-md-6 col-sm-10">
                <a href="albums.php?artist=<?php echo $artist["id"] ?>" class="text-decoration-none link-dark ">
                <div class="card card_hovar mt-4">
                    <img src="<?php echo $artist["image"] ?>" class="card-img-top" alt="<?php echo $artist["name"] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $artist["name"] ?></h5>
                    </div>
                </div>
                </a>
            </div>

        <?php endforeach; ?>

    </div>
</div>

<?php

include "footer.php"

?>


