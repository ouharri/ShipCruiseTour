<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Document</title>



    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= url('css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= url('css/style.css') ?>">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?= url('css/swiper-bundle.min.css') ?>">

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
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#">Blog</a>
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




<!-- Banner Image  -->
<div
        class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center flex-column justify-content-evenly">
    <img class="banner-image" src="./images/home-1.jpg" alt="#">

    <div class="container content text-center animate">
        <h1 class="text-white" style="text-shadow: rgb(88, 87, 86) 2px 1px 10px;">Are you into the seas and the
            cruisers, ShipCruiseTour is the best choice for you !</h1>
    </div>
    <div class="container seach">
        <div class="col-lg-12">
            <form id="search-form" name="gs" method="submit" role="search" action="#">
                <div class="row">
                    <div class="col-lg-3 align-self-center">
                        <fieldset>
                            <select name="area" class="form-select" aria-label="Area" id="chooseCategory"
                                    onchange="this.form.click()">
                                <option selected>All Areas</option>
                                <option value="New Village">New Village</option>
                                <option value="Old Town">Old Town</option>
                                <option value="Modern City">Modern City</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-3 align-self-center">
                        <fieldset>
                            <input type="address" name="address" class="searchText" placeholder="Enter a location"
                                   autocomplete="on" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-3 align-self-center">
                        <fieldset>
                            <select name="price" class="form-select" aria-label="Default select example"
                                    id="chooseCategory" onchange="this.form.click()">
                                <option selected>Price Range</option>
                                <option value="$100 - $250">$100 - $250</option>
                                <option value="$250 - $500">$250 - $500</option>
                                <option value="$500 - $1000">$500 - $1,000</option>
                                <option value="$1000+">$1,000 or more</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-3">
                        <fieldset>
                            <button class="main-button d-flex justify-content-center align-items-center"><i
                                        class='bx bx-search-alt'></i>Search Now</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <div class="slide-con"> -->
<div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
                <div class="image-content">
                                <span class="overlay"
                                      style="background-image: url('https://i.la-croix.com/1400x933/smart/2022/01/04/1201193112/Photo-dillustration-bateau-croisiere_0.jpg');"></span>
                    <div class="card-image">
                        <!-- <img src="images/profile1.jpg" alt="" class="card-img"> -->
                        <!-- <img class="card-img" src="https://i.la-croix.com/1400x933/smart/2022/01/04/1201193112/Photo-dillustration-bateau-croisiere_0.jpg" alt=""> -->
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">David Dell</h2>
                    <p class="description">The lorem text the section that contains header with having open
                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/profile2.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">David Dell</h2>
                    <p class="description">The lorem text the section that contains header with having open
                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/profile3.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">David Dell</h2>
                    <p class="description">The lorem text the section that contains header with having open
                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/profile4.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">David Dell</h2>
                    <p class="description">The lorem text the section that contains header with having open
                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/profile5.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">David Dell</h2>
                    <p class="description">The lorem text the section that contains header with having open
                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/profile6.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">David Dell</h2>
                    <p class="description">The lorem text the section that contains header with having open
                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/profile7.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">David Dell</h2>
                    <p class="description">The lorem text the section that contains header with having open
                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/profile8.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">David Dell</h2>
                    <p class="description">The lorem text the section that contains header with having open
                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/profile9.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">David Dell</h2>
                    <p class="description">The lorem text the section that contains header with having open
                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>



<!-- Swiper JS -->
<script src="<?= url('js/swiper-bundle.min.js') ?>"></script>
<!-- JavaScript -->
<script src="<?= url('/js/script.js') ?>"></script>
<!-- gsap animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
        integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    gsap.fromTo('.animate', { opacity: 0, y: 600 }, { opacity: 100, y: 0, duration: 2 });
    //gsap.fromTo('.prices', {opacity: 0, x: 600}, {opacity: 100, x: 0, duration: 2});
</script>


<script src="<?= url('/js/bootstrap.bundle.min.js') ?>"></script>
<script type="text/javascript">
    var nav = document.querySelector('nav');

    const header = document.querySelector('nav')
    const Bar = document.querySelector('.navbar')

    let menu = document.querySelector('#menU')

    menu.onclick = () => {
        header.classList.toggle('stickYY')
        menu.classList.toggle('bx-x')
    }

    window.addEventListener('scroll', function () {

        header.classList.toggle('sticky', window.scrollY > 0)
        //   if (window.pageYOffset > 100) {
        //     nav.classList.add('bg-dark', 'shadow');
        //   } else {
        //     nav.classList.remove('bg-dark', 'shadow');
        //   }
    });
</script>
</body>

</html>