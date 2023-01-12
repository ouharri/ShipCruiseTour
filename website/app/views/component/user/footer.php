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
                    <h3>Logo</h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +212 631198914<br>
                        <strong>Email:</strong> ouharrioutman@gmail.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
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
                        <a href="#" class="twitter d-flex justify-content-center align-items-center text-decoration-none"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook d-flex justify-content-center align-items-center text-decoration-none"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram d-flex justify-content-center align-items-center text-decoration-none"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus d-flex justify-content-center align-items-center text-decoration-none"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin d-flex justify-content-center align-items-center text-decoration-none"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>ShipCruiseTour</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://github.com/OUHARRI">ouharri</a>
        </div>
    </div>
</footer>
<!-- End Footer -->


<script src="<?= url('js/bootstrap.bundle.min.js') . '?v=' . time() ?>"></script>
<!-- Swiper JS -->
<script src="<?= url('js/swiper-bundle.min.js') . '?v=' . time() ?>"></script>
<!-- JavaScript -->
<script src="<?= url('js/script.js') . '?v=' . time() ?>"></script>

<script src="<?= url('js/index.js') . '?v=' . time() ?>"></script>
<!-- sweetalert -->
<script src="<?= url('js/sweetalert2.min.js') . '?v=' . time() ?>"></script>
<!-- gsap animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
        integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
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
</script>

<script>
    gsap.fromTo('.animate1', {opacity: 0, y: 400}, {opacity: 100, y: 0, duration: 1});
    gsap.fromTo('.animate2', {opacity: 0, y: 500}, {opacity: 100, y: 0, duration: 2});
    //gsap.fromTo('.prices', {opacity: 0, x: 600}, {opacity: 100, x: 0, duration: 2});
</script>

<script type="text/javascript">
    const header = document.querySelector('nav');
    const menu = document.querySelector('#menU');
    const Bar = document.querySelector('.navbar');
    const btnLogin = document.getElementById('btnLogin');


    menu.onclick = () => {
        header.classList.toggle('stickYY')
        menu.classList.toggle('bx-x')
        btnLogin.classList.toggle('btn-login-bK');
        // nav.classList.toggle('fixed-top')
    }

    window.addEventListener('scroll', function () {
        header.classList.toggle('sticky', window.scrollY > 0);
        btnLogin.classList.toggle('btn-login-bk', window.scrollY > 0);
    });
</script>
</body>

</html>