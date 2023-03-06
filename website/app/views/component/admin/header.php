<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>ship Dash</title>


    <!--    bootstrap  css-->
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css?v=') . time() ?>">

    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css?v=') . time() ?>">
    <!--    custumer css-->
    <link rel="stylesheet" href="<?= url('css/style.css?v=') . time() ?>">

    <link rel="stylesheet" href="<?= url('css/footer.css?v=') . time() ?>">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?= url('css/swiper-bundle.min.css?v=') . time() ?>">

    <link rel="stylesheet" href="<?= url('css/argon-dashboard.css?v=') . time() ?>"/>

    <link rel="stylesheet" href="<?= url('css/nucleo-icons.css?v=') . time() ?>"/>

    <link rel="stylesheet" href="<?= url('css/nucleo-svg.css?v=') . time() ?>"/>

    <link rel="stylesheet" href="<?= url('css/sweetalert2.min.js?v=') . time() ?>"/>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://kit.fontawesome.com/3d582d9974.js" crossorigin="anonymous"></script>

</head>


<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 sticky position-absolute w-100">
    <!--    <div></div>-->

</div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 h-auto"
       id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand text-center m-0" href="<?= url('dashboard') ?>"
           target="_blank">
            <img src="<?= url('images/logo.svg') ?>" alt="logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="Dashbtn" href="<?= url('dashboard') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link cursor-pointer" id="Tablebtn">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tables</span>
                </a>
                <div id="TableCont" class="d-none p-1 ps-4">
                    <a class="nav-link" id="CuirsesBtn" href="<?= url('dashboard/Cruise') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text text-secondary ms-1">Cuirses table</span>
                    </a>
                    <a class="nav-link" id="NavireBtn" href="<?= url('dashboard/Navire') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text text-secondary ms-1">Navire table</span>
                    </a>
                    <a class="nav-link" id="RomBtn" href="<?= url('dashboard/Rom') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text text-secondary ms-1">Rom table</span>
                    </a>
                    <a class="nav-link" id="TypeRomBtn" href="<?= url('dashboard/typeRom') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text text-secondary ms-1">Type Rom table</span>
                    </a>
                    <a class="nav-link" id="PortBtn" href="<?= url('dashboard/Port') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text text-secondary ms-1">Port table</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link cursor-pointer" id="Addbtn">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-ui-04 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Add</span>
                </a>
                <div id="AddCont" class="d-none p-1 ps-4">
                    <a class="nav-link" id="AddCuirsesBtn" href="<?= url('dashboard/addCruises') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text text-secondary ms-1">Add Cuirses</span>
                    </a>
                    <a class="nav-link" id="AddNavireBtn" href="<?= url('dashboard/AddNavire') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text text-secondary ms-1">Add Navire</span>
                    </a>
                    <a class="nav-link" id="AddRomBtn" href="<?= url('dashboard/AddRom') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text text-secondary ms-1">Add Rom</span>
                    </a>
                    <a class="nav-link" id="AddTypeRomBtn" href="<?= url('dashboard/AddtypeRom') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text text-secondary ms-1">Add Type Rom</span>
                    </a>
                    <a class="nav-link" id="AddPortBtn" href="<?= url('dashboard/AddPort') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text text-secondary ms-1">Add Port</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="usersbtn" href="<?= url('dashboard/user') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="pagesbtn" href="<?= url('dashboard/pages') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="countriebtn" href="#">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Countries</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="profilebtn" href="<?= url('dashboard/user') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?= url('Login/deconnect') ?>">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Log out</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
         data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                                           href="javascript:;"><?= explode('/', $_SERVER['REQUEST_URI'])[1] ?? 'pages' ?></a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active"
                        aria-current="page"><?= explode('/', $_SERVER['REQUEST_URI'])[2] ?? 'pages' ?></li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0"><?= explode('/', $_SERVER['REQUEST_URI'])[2] ?? 'pages' ?></h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" name="search" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link text-white font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none"><?= $_SESSION['firstName_c'] ?? ' ' . $_SESSION['lastName_c'] ?? '' ?></span>
                        </a>
                    </li>
                    <li class="nav-item d-flex align-items-center text-center mx-3">
                        <a class="nav-link text-white font-weight-bold px-0 menubtn d-xl-none">
                            <i class='bx bx-menu bx-md'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

