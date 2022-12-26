</main>
</body>
</html>


<script>
    const dash = document.querySelector('.sidenav');
    const menu = document.querySelector('.menubtn');
    const iconSidenav = document.getElementById('iconSidenav');

    menu.onclick = () => {
        dash.classList.toggle('dash-bar');
        iconSidenav.classList.toggle('d-none');
    };
    iconSidenav.onclick = () => {
        dash.classList.toggle('dash-bar');
        iconSidenav.classList.toggle('d-none');
    }
</script>