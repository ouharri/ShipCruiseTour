<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>shipcruisetour</title>

    <!--    bootstrap  css-->
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css?v=') . time() ?>">

    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css?v=') . time() ?>">
    <!--    custum css-->
    <link rel="stylesheet" href="<?= url('css/style.css?v=') . time() ?>">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?= url('css/swiper-bundle.min.css?v=') . time() ?>">

    <link rel="stylesheet" href="<?= url('css/sweetalert2.min.css?v=') . time() ?>"/>

    <link rel="stylesheet" href="<?= url('css/footer.css?v=') . time() ?>"/>

    <link rel="stylesheet" href="<?= url('css/card.css?v=') . time() ?>"/>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <script src="<?= url('js/plugins/sweetalert2.min.js') . '?v=' . time() ?>"></script>


</head>

<body>

<!-- Navbar  -->
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 d-flex justify-content-between"
         style="opacity: 95%;">
        <div class="container">
            <a class="navbar-brand" href="<?= url() ?>">
                <img src="<?= url('images/logo.svg') ?>" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class='bx bx-menu bx-md' id="menU" style="transition: all 0.38s ease;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?= url() ?>">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?= url('about') ?>">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?= url('cuirses') ?>">Cuirses</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?= url('contact') ?>">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav align-items-center">
                    <?php if (!isset($_SESSION['id_c'])) : ?>
                        <li class="nav-item">
                            <a class="text-white text-decoration-none btn-login" href="<?= url('Login') ?>"
                               id="btnLogin">Login</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button" id="btnLogin" class="btn dropdown-toggle btn-login"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    <?= $_SESSION['firstName_c']; ?>
                                </button>
                                <ul class="dropdown-menu text-center">
                                    <?php if ($_SESSION['admin_c']) : ?>
                                        <li>
                                            <a class="dropdown-item" href="<?= url('dashboard') ?>">dashboard</a>
                                        </li>
                                    <?php endif; ?>
                                    <li>
                                        <a class="dropdown-item" href="<?= url('reservation') ?>">reservation</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= url('Login/deconnect') ?>"><i
                                                    class='bx bx-log-out'></i> Log out</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
    </nav>
</header>
