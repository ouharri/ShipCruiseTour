</main>
</body>
</html>


<script>
    const dash = document.querySelector('.sidenav');
    const menu = document.querySelector('.menubtn');
    const iconSidenav = document.getElementById('iconSidenav');
    const TableCont = document.getElementById('TableCont');
    const Tablebtn = document.getElementById('Tablebtn');

    const CuirsesBtn = document.getElementById('CuirsesBtn');
    const NavireBtn = document.getElementById('NavireBtn');
    const RomBtn = document.getElementById('RomBtn');
    const TypeRomBtn = document.getElementById('TypeRomBtn');
    const PortBtn = document.getElementById('PortBtn');

    const Cuirses = document.getElementById('Cuirses');
    const Navire = document.getElementById('Navire');
    const Rom = document.getElementById('Rom');
    const TypeRom = document.getElementById('TypeRom');
    const Port = document.getElementById('Port');


    if (localStorage.getItem('TableCont') === '1') iconSidenav.classList.remove('d-none');
    else iconSidenav.classList.add('d-none');


    menu.onclick = () => {
        dash.classList.toggle('dash-bar');
        iconSidenav.classList.toggle('d-none');
    };
    iconSidenav.onclick = () => {
        dash.classList.toggle('dash-bar');
        iconSidenav.classList.toggle('d-none');
    };
    Tablebtn.onclick = () => {
        TableCont.classList.toggle('d-none');

        if (TableCont.classList[0] === 'd-none') {
            localStorage.setItem('TableCont', '1');
        } else {
            localStorage.setItem('TableCont', '0');
        }
        // Cuirses.classList.remove('d-none') ;
        // Navire.classList.remove('d-none') ;
        // Rom.classList.remove('d-none') ;
        // TypeRom.classList.remove('d-none') ;
        // Port.classList.remove('d-none') ;
    };
    CuirsesBtn.onclick = () => {
        CuirsesBtn.classList.add('active');
        NavireBtn.classList.remove('active');
        RomBtn.classList.remove('active');
        TypeRomBtn.classList.remove('active');
        PortBtn.classList.remove('active');

        Cuirses.classList.remove('d-none') ;
        Navire.classList.add('d-none') ;
        Rom.classList.add('d-none') ;
        TypeRom.classList.add('d-none') ;
        Port.classList.add('d-none') ;
    };
    NavireBtn.onclick = () => {
        NavireBtn.classList.add('active');
        CuirsesBtn.classList.remove('active');
        RomBtn.classList.remove('active');
        TypeRomBtn.classList.remove('active');
        PortBtn.classList.remove('active');

        Cuirses.classList.add('d-none') ;
        Navire.classList.remove('d-none') ;
        Rom.classList.add('d-none') ;
        TypeRom.classList.add('d-none') ;
        Port.classList.add('d-none') ;
    };
    RomBtn.onclick = () => {
        RomBtn.classList.add('active');
        NavireBtn.classList.remove('active');
        CuirsesBtn.classList.remove('active');
        TypeRomBtn.classList.remove('active');
        PortBtn.classList.remove('active');

        Cuirses.classList.add('d-none') ;
        Navire.classList.add('d-none') ;
        Rom.classList.remove('d-none') ;
        TypeRom.classList.add('d-none') ;
        Port.classList.add('d-none') ;
    };
    TypeRomBtn.onclick = () => {
        TypeRomBtn.classList.add('active');
        NavireBtn.classList.remove('active');
        RomBtn.classList.remove('active');
        CuirsesBtn.classList.remove('active');
        PortBtn.classList.remove('active');

        Cuirses.classList.add('d-none') ;
        Navire.classList.add('d-none') ;
        Rom.classList.add('d-none') ;
        TypeRom.classList.remove('d-none') ;
        Port.classList.add('d-none') ;
    };
    PortBtn.onclick = () => {
        PortBtn.classList.add('active');
        NavireBtn.classList.remove('active');
        RomBtn.classList.remove('active');
        CuirsesBtn.classList.remove('active');
        PortBtn.classList.remove('active');

        Cuirses.classList.add('d-none') ;
        Navire.classList.add('d-none') ;
        Rom.classList.add('d-none') ;
        TypeRom.classList.add('d-none') ;
        Port.classList.remove('d-none') ;
    };

</script>