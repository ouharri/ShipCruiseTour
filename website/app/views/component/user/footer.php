
<footer class="footer">
    <div class="Waves" style="width: 100% !important;">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
        <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-facebook"></ion-icon>
            </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-twitter"></ion-icon>
            </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a></li>
    </ul>
    <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
        <li class="menu__item"><a class="menu__link" href="#">About</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p>&copy;2021 Nadine Coelho | All Rights Reserved</p>
</footer>


<script src="<?= url('js/bootstrap.bundle.min.js') . '?v=' . time() ?>"></script>
<!-- Swiper JS -->
<script src="<?= url('js/swiper-bundle.min.js') . '?v=' . time() ?>"></script>
<!-- JavaScript -->
<script src="<?= url('js/script.js') . '?v=' . time() ?>"></script>
<script src="<?= url('js/pagination.js') . '?v=' . time() ?>"></script>
<!-- gsap animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
        integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
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

<script>
    gsap.fromTo('.animate1', {opacity: 0, y: 400}, {opacity: 100, y: 0, duration: 1});
    gsap.fromTo('.animate2', {opacity: 0, y: 500}, {opacity: 100, y: 0, duration: 2});
    //gsap.fromTo('.prices', {opacity: 0, x: 600}, {opacity: 100, x: 0, duration: 2});
</script>

<script type="text/javascript">
    const nav = document.querySelector('nav');
    const header = document.querySelector('nav');
    const Bar = document.querySelector('.navbar');
    const WavesContainer = document.querySelector('.WavesContainer');
    const waves = document.getElementById('waves');

    let menu = document.querySelector('#menU')

    menu.onclick = () => {
        header.classList.toggle('stickYY')
        menu.classList.toggle('bx-x')
        nav.classList.toggle('fixed-top')
    }

    window.addEventListener('scroll', function () {

        header.classList.toggle('sticky', window.scrollY > 0);
        waves.classList.toggle('d-none', window.scrollY > 0);
        WavesContainer.classList.toggle('WavesContainerR', window.scrollY > 0);
    });
</script>
</body>

</html>