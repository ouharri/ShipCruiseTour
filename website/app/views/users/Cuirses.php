<?php include_once VIEWS . 'component' . DS . 'user' . DS . 'header.php'; ?>
<div class="d-grid justify-content-center align-content-center hover"
     style="height: 60vh !important; background-image: url(<?= url('images/Home-6.jpg') ?>); background-size: cover">
</div>

<div class="WavesContainer">
    <div class="container seach"
         style="transform: translateY(-50%); opacity: 100 !important; filter: drop-shadow(0 10px 30px rgba(123, 188, 209, 70%));">
        <div class="col-lg-12">
            <form id="search-form" name="gs" method="submit" role="search" action="#">
                <div class="row">
                    <div class="col-lg-3 align-self-center">
                        <fieldset>
                            <select name="area" class="form-select" aria-label="Area" id="chooseCategory"
                                    onchange="this.form.click()">
                                <option selected disabled>Port</option>
                                <option value="New Village">New Village</option>
                                <option value="Old Town">Old Town</option>
                                <option value="Modern City">Modern City</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-3 align-self-center">
                        <fieldset>
                            <select name="price" class="form-select" aria-label="Default select example"
                                    id="chooseCategory" onchange="this.form.click()">
                                <option selected disabled>Navire</option>
                                <option value="$100 - $250">$100 - $250</option>
                                <option value="$250 - $500">$250 - $500</option>
                                <option value="$500 - $1000">$500 - $1,000</option>
                                <option value="$1000+">$1,000 or more</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-3 align-self-center">
                        <fieldset>
                            <select name="price" class="form-select" aria-label="Default select example"
                                    id="chooseCategory" onchange="this.form.click()">
                                <option selected disabled>Month</option>
                                <option value='1'>Janaury</option>
                                <option value='2'>February</option>
                                <option value='3'>March</option>
                                <option value='4'>April</option>
                                <option value='5'>May</option>
                                <option value='6'>June</option>
                                <option value='7'>July</option>
                                <option value='8'>August</option>
                                <option value='9'>September</option>
                                <option value='10'>October</option>
                                <option value='11'>November</option>
                                <option value='12'>December</option>
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
    <h1 class="cruisesh1 text-primary">youre cruises</h1>
    <!--Waves Container-->
    <div class="wavescnt opacity-75" id="waves">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"/>
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"/>
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"/>
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"/>
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"/>
            </g>
        </svg>
    </div>
    <!--Waves end-->
</div>

<section style="background-color: #eee;">
    <div class="container py-5 hover">
        <?php foreach ($croisiere as $c) : ?>
            <div style="filter: drop-shadow(0 0 1px rgba(123, 188, 209, 70%));"
                 class="row justify-content-center mb-5" id="cruisesBox">
                <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                        <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($c['img']) ?>"
                                             class="w-100 me-3" id="cruisesImg"
                                             style="aspect-ratio: 1; object-fit: cover; border-radius: 10px">
                                        <a href="#!">
                                            <div class="hover-overlay">
                                                <div class="mask"
                                                     style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5><?= $c['nameCroisier'] ?></h5>
                                    <div class="d-flex flex-row">
                                        <i class='bx bx-anchor'></i>
                                        <i class="fa-regular fa-ship"></i>
                                        <span class="fa-imag"></span>
                                        <div class="text-danger mb-1 me-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span>310</span>
                                    </div>
                                    <div class="mt-1 mb-0 text-muted small">
                                        <span>100% cotton</span>
                                        <span class="text-primary"> • </span>
                                        <span>Light weight</span>
                                        <span class="text-primary"> • </span>
                                        <span>Best finish<br/></span>
                                    </div>
                                    <div class="mb-2 text-muted small">
                                        <span>Unique design</span>
                                        <span class="text-primary"> • </span>
                                        <span>For men</span>
                                        <span class="text-primary"> • </span>
                                        <span>Casual<br/></span>
                                    </div>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4 class="mb-1 me-1">$<?=$c['prix']?></h4>
                                        <span class="text-danger"><s>$20.99</s></span>
                                    </div>
                                    <h6 class="text-success">Free shipping</h6>
                                    <div class="d-flex flex-column mt-4">
                                        <button class="btn btn-primary btn-sm" type="button">Details</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                            Add to wishlist
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <div class="row justify-content-center mb-3">
            <div class="col-md-12 col-xl-10">
                <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp"
                                         class="w-100"/>
                                    <a href="#!">
                                        <div class="hover-overlay">
                                            <div class="mask"
                                                 style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <h5>Quant olap shirts</h5>
                                <div class="d-flex flex-row">
                                    <div class="text-danger mb-1 me-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span>289</span>
                                </div>
                                <div class="mt-1 mb-0 text-muted small">
                                    <span>100% cotton</span>
                                    <span class="text-primary"> • </span>
                                    <span>Light weight</span>
                                    <span class="text-primary"> • </span>
                                    <span>Best finish<br/></span>
                                </div>
                                <div class="mb-2 text-muted small">
                                    <span>Unique design</span>
                                    <span class="text-primary"> • </span>
                                    <span>For men</span>
                                    <span class="text-primary"> • </span>
                                    <span>Casual<br/></span>
                                </div>
                                <p class="text-truncate mb-4 mb-md-0">
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable.
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                <div class="d-flex flex-row align-items-center mb-1">
                                    <h4 class="mb-1 me-1">$14.99</h4>
                                    <span class="text-danger"><s>$21.99</s></span>
                                </div>
                                <h6 class="text-success">Free shipping</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button class="btn btn-primary btn-sm" type="button">Details</button>
                                    <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                        Add to wishlist
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-xl-10">
                <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(5).webp"
                                         class="w-100"/>
                                    <a href="#!">
                                        <div class="hover-overlay">
                                            <div class="mask"
                                                 style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <h5>Quant ruybi shirts</h5>
                                <div class="d-flex flex-row">
                                    <div class="text-danger mb-1 me-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span>145</span>
                                </div>
                                <div class="mt-1 mb-0 text-muted small">
                                    <span>100% cotton</span>
                                    <span class="text-primary"> • </span>
                                    <span>Light weight</span>
                                    <span class="text-primary"> • </span>
                                    <span>Best finish<br/></span>
                                </div>
                                <div class="mb-2 text-muted small">
                                    <span>Unique design</span>
                                    <span class="text-primary"> • </span>
                                    <span>For women</span>
                                    <span class="text-primary"> • </span>
                                    <span>Casual<br/></span>
                                </div>
                                <p class="text-truncate mb-4 mb-md-0">
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable.
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                <div class="d-flex flex-row align-items-center mb-1">
                                    <h4 class="mb-1 me-1">$17.99</h4>
                                    <span class="text-danger"><s>$25.99</s></span>
                                </div>
                                <h6 class="text-success">Free shipping</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button class="btn btn-primary btn-sm" type="button">Details</button>
                                    <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                        Add to wishlist
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
<script>
    // try {
    //     $(".hover").ripples({
    //         resolution: 1080,
    //         perturbance: 0.01,
    //         interactive: true
    //     });
    // } catch (e) {
    //     $(".error")
    //         .show()
    //         .text(e);
    // }
</script>
<?php include_once VIEWS . 'component' . DS . 'user' . DS . 'footer.php'; ?>























<?php include_once VIEWS . 'component' . DS . 'user' . DS . 'footer.php'; ?>

