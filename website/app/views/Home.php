<?php include_once VIEWS.'component/header.php'; ?>

<!-- Banner Image  -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center flex-column justify-content-evenly"
     style="background-image: url(<?= url('images/home-2.jg') ?>); background-size: cover;">
        <img class="banner-image" src="<?=url('images/home-2.jpg')?>" alt="#" style="filter: brightness(.7);">
    <div class="mb-xxl-1"></div>
    <div></div>
    <div></div>
    <div class="container content text-center animate1">
        <h1 class="text" style="color: whitesmoke; text-shadow: rgb(123, 188, 209) 2px 2px 10px;">
            Are you into the seas and the cruisers,
            <br>
            ShipCruiseTour is the best choice for you !</h1>
    </div>
    <div class="container seach animate2">
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
                                        class='bx bx-search-alt'></i>Search Now
                            </button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


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


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include_once VIEWS.'component/footer.php'?>