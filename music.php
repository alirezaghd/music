<?php
include "header.php";
include "database.php";


$album_id = $_GET["album"];

$album = $db->query("SELECT * FROM albums WHERE id = $album_id")->fetch_assoc();
$artists_id = $album["artist_id"];
$artist = $db->query("SELECT * FROM artists WHERE id = $artists_id")->fetch_assoc();

$musics = $db->query("SELECT * FROM musics WHERE album_id = $album_id");

?>

<div class="container">
    <div class="row mt-3 ">
        <h2 class="text-light">آهنگ ها</h2>
        <hr class="text-light">
        <?php if ($musics->num_rows == 0): ?>
            <div class="alert alert-danger" role="alert">
                هنوز آهنگ های این آلبوم به سایت اضافه نشده است
            </div>
        <?php else: ?>
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <?php foreach ($musics as $music): ?>

                    <a href="#" class="text-decoration-none link-dark">
                        <ul class="list-group">
                            <li class="list-group-item d-flex mt-1 align-items-center"
                                onclick="playmusic('<?php echo $music["mp3"]; ?>','<?php echo $music["image"]; ?>')">
                                <div class="col-lg ">
                                    <h6 class="text-nowrap"> <?php echo $artist["name"] ?></h6>

                                    <p class="text-nowrap"> <?php echo $music["name"] ?></p>

                                </div>
                                <span class="col-lg">
                                    <img class="img-thumbnail  float-end w-50" src="<?php echo $music["image"] ?>"
                                         alt="<?php echo $music["name"] ?>">
                                </span>
                            </li>
                        </ul>
                    </a>


                <?php endforeach; ?>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12 mt-3 mt-sm-3 mt-md-3 mt-lg-auto d-flex flex-column justify-content-center align-items-center">
                <img id="image_music_player" class="img-fluid  " width="300px" src="<?php echo $music["image"] ?>"
                     alt="<?php echo $music["name"] ?>">
                <br>
                <audio src="" id="music_player" class="mt-5" controls></audio>
            </div>

        <?php endif; ?>


    </div>
</div>

<script>
    function playmusic(music_path,image_path) {
        var musci_player = document.getElementById("music_player");
        musci_player.setAttribute("src", music_path);
        musci_player.play();

        var image_music_player = document.getElementById("image_music_player");
        image_music_player.setAttribute("src", image_path);


    }
</script>

<?php include "footer.php" ?>
