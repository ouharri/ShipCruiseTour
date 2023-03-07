<!-- ======= Footer ======= -->
<br><br><br><br><br><br><br>
<footer id="footer">
    <div class="Waves" style="width: 100% !important;">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row d-flex align-items-center">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>
                        <a class="navbar-brand" href="<?= url() ?>">
                            <img src="<?= url('images/logo.svg') ?>" alt="logo">
                        </a>
                    </h3>
                    <p>
                        A108 Adam Street <br>
                        New Safi, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +212 631198914<br>
                        <strong>Email:</strong> ouharrioutman@gmail.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Ship</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>POPULAR PORTS</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Miami, Florida</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Galveston, Texas</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Baltimore, Maryland</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Fort Lauderdale, Florida</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Los Angeles, California​</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3 d-flex flex-wrap gap-2">
                        <a href="#"
                           class="twitter d-flex justify-content-center align-items-center text-decoration-none"><i
                                    class="bx bxl-twitter"></i></a>
                        <a href="#"
                           class="facebook d-flex justify-content-center align-items-center text-decoration-none"><i
                                    class="bx bxl-facebook"></i></a>
                        <a href="#"
                           class="instagram d-flex justify-content-center align-items-center text-decoration-none"><i
                                    class="bx bxl-instagram"></i></a>
                        <a href="#"
                           class="google-plus d-flex justify-content-center align-items-center text-decoration-none"><i
                                    class="bx bxl-skype"></i></a>
                        <a href="#"
                           class="linkedin d-flex justify-content-center align-items-center text-decoration-none"><i
                                    class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            Copyright <strong><span>ShipCruiseTour</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://github.com/OUHARRI">ouharri</a>
        </div>
    </div>
</footer>
<!-- End Footer -->


<script defer src="<?= url('js/plugins/bootstrap.bundle.min.js') . '?v=' . time() ?>"></script>
<!-- Swiper JS -->
<script defer src="<?= url('js/plugins/swiper-bundle.min.js') . '?v=' . time() ?>"></script>
<!-- JavaScript -->
<script defer src="<?= url('js/script.js') . '?v=' . time() ?>"></script>

<script defer src="<?= url('js/index.js') . '?v=' . time() ?>"></script>
<!-- sweetalert -->
<script defer src="<?= url('js/plugins/sweetalert2.min.js') . '?v=' . time() ?>"></script>

<!-- aos js-->
<script src="<?= url('js/plugins/aos.js') . '?v=' . time() ?>"></script>


<script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

<script defer>
    AOS.init();
    try {
        $(".waterAnimate").ripples({
            resolution: 1080,
            perturbance: 0.01,
            interactive: true
        });
    } catch (e) {
        $(".error")
            .show()
            .text(e);
    }
</script>

<script type="text/javascript" defer>
    const header = document.querySelector('nav');
    const menu = document.querySelector('#menU');
    const Bar = document.querySelector('.navbar');
    const btnLogin = document.getElementById('btnLogin');


    menu.onclick = () => {
        header.classList.toggle('stickYY')
        menu.classList.toggle('bx-x')
        btnLogin.classList.toggle('btn-login-bK');
    }

    window.addEventListener('scroll', function () {
        header.classList.toggle('sticky', window.scrollY > 0);
        btnLogin.classList.toggle('btn-login-bk', window.scrollY > 0);
    });

    $('#submit').on('click', function () {
        const hasError = $('input,select').toArray().some(function (element) {
            if (element.value === '' || element.value === null) {
                $(element).addClass('is-invalid')
                return true
            } else {
                return false
            }

        })
        if (hasError) {
            return
        }
        $('form').each(function () {
            $(this).trigger('submit')
            // $(this).submit()
        })

    })
</script>
</body>

</html>