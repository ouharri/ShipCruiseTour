<?php include_once VIEWS . 'component' . DS . 'user' . DS . 'header.php'; ?>
<div class="d-grid justify-content-center align-content-center hover"
     style="height: 60vh; background-image: url(<?= url('images/Home-6.jpg') ?>); background-size: cover">
</div>
<section style="background-color: #eee;">
    <div class="container py-5 hover">
        <?php foreach ($croisiere as $c) : ?>
            <div style="filter: drop-shadow(0 0 30px rgba(123, 188, 209, 70%));"
                 class="row justify-content-center mb-3">
                <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
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
                                    <h5><?=$c['name']?></h5>
                                    <div class="d-flex flex-row">
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
                                        <h4 class="mb-1 me-1">$13.99</h4>
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
    try {
        $(".hover").ripples({
            resolution: 1080,
            perturbance: 0.01,
            interactive: true
        });
    } catch (e) {
        $(".error")
            .show()
            .text(e);
    }

    // setInterval(function () {
    //     var $el = $(".automattic");
    //     var x = Math.random() * $el.outerWidth();
    //     var y = Math.random() * $el.outerHeight();
    //     var dropRadius = 30;
    //     var strength = 0.04 + Math.random() * 0.04;
    //
    //     $el.ripples("drop", x, y, dropRadius, strength);
    // }, 4000);
</script>
<?php include_once VIEWS . 'component' . DS . 'user' . DS . 'footer.php'; ?>























<?php include_once VIEWS . 'component' . DS . 'user' . DS . 'footer.php'; ?>

