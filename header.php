<?php
session_start();

?>

<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>وب سایت موزیک</title>

    <meta name="keywords" content=" music,radio,radiojavan,ebi,shadmehr">
    <meta name="description" content="به روزترین مرجع دانلود موسیقی">
    <meta name="author" content="Alireza Gholamrezaei">


</head>

<body class="bg-dark">

<div class="container">
    <!-- منو -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">رادیو جوان</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-lg-auto me-lg-auto justify-content-center ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">صفحه اصلی</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="artists.php">خواننده ها</a>
                    </li>


                </ul>
                <?php if ($_SESSION["login_status"] == null && $_SESSION["login_status"] == false): ?>

                    <div class="text-start">
                        <a type="button" class="btn btn-outline-secondary me-2 fs-6" href="admin_login.php">
                            <span class="fas fa-user-circle text-light fa-lg p-1 ">  </span> ورود
                        </a>
                    </div>

                <?php endif;?>

                <?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>

                    <div class="dropdown text-start">
                        <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="40" height="40" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                            <li><a class="dropdown-item" href="admin_dashboard.php">داشبورد</a></li>
                            <li><a class="dropdown-item" href="#">پروفایل</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="admin_logout.php">خروج</a></li>
                        </ul>
                    </div>

                <?php endif;?>

            </div>
        </div>
    </nav>

</div>
<hr class="text-light">

