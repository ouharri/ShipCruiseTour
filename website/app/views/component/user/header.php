<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Document</title>


    <!--    bootstrap  css-->
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css?v=') . time() ?>">
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css?v=') . time() ?>">
    <!--    custumer css-->
    <link rel="stylesheet" href="<?= url('css/style.css?v=') . time() ?>">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?= url('css/swiper-bundle.min.css?v=') . time() ?>">

    <link rel="stylesheet" href="<?= url('css/card.css?v=') . time() ?>"/>


</head>

<body>

<!-- Navbar  -->
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 d-flex justify-content-between"
         style="opacity: 95%;">
        <div class="container">
            <a class="navbar-brand" href="#">LoGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class='bx bx-menu bx-md' id="menU" style="transition: all 0.38s ease;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?=url()?>">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?=url('cuirses')?>">Cuirses</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white btn btn-primary" href="#">Login</a>
                    </li>
                </ul>
            </div>
    </nav>
</header>
