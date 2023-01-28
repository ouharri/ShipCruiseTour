</main>
</body>
</html>


<script>
    const dash = document.querySelector('.sidenav');
    const menu = document.querySelector('.menubtn');
    const iconSidenav = document.getElementById('iconSidenav');
    const TableCont = document.getElementById('TableCont');
    const AddCont = document.getElementById('AddCont');

    const Dashbtn = document.getElementById('Dashbtn');
    const Tablebtn = document.getElementById('Tablebtn');
    const Addbtn = document.getElementById('Addbtn');
    const pagesbtn = document.getElementById('pagesbtn');
    const usersbtn = document.getElementById('usersbtn');
    const countriebtn = document.getElementById('countriebtn');
    const profilebtn = document.getElementById('profilebtn');

    const CuirsesBtn = document.getElementById('CuirsesBtn');
    const NavireBtn = document.getElementById('NavireBtn');
    const RomBtn = document.getElementById('RomBtn');
    const TypeRomBtn = document.getElementById('TypeRomBtn');
    const PortBtn = document.getElementById('PortBtn');

    const AddCuirsesBtn = document.getElementById('AddCuirsesBtn');
    const AddNavireBtn = document.getElementById('AddNavireBtn');
    const AddRomBtn = document.getElementById('AddRomBtn');
    const AddTypeRomBtn = document.getElementById('AddTypeRomBtn');
    const AddPortBtn = document.getElementById('AddPortBtn');

    const Cuirses = document.getElementById('Cuirses');
    const Navire = document.getElementById('Navire');
    const Rom = document.getElementById('Rom');
    const TypeRom = document.getElementById('TypeRom');
    const Port = document.getElementById('Port');

    function upload_image_check() {
        const upl = document.getElementById("Image");
        const max = 5;

        if (upl.files[0].size / 1024 / 1024 > max) {
            document.getElementById("imageTextAlert").innerHTML = "size image too big !";
            upl.value = "";
        } else {
            document.getElementById("imageTextAlert").innerHTML = "";
        }
    }

    window.addEventListener("load", () => {
        if (localStorage.getItem('TableCont') === '1') {
            TableCont.classList.remove('d-none');
            AddCont.classList.add('d-none');
        } else iconSidenav.classList.add('d-none');

        if (localStorage.getItem('AddCont') === '1') {
            AddCont.classList.remove('d-none');
            TableCont.classList.add('d-none');
        } else iconSidenav.classList.add('d-none');

        document.getElementById(localStorage.getItem('TableContItem'))?.classList.add('active');
        document.getElementById(localStorage.getItem('AddContItem'))?.classList.add('active');
        document.getElementById(localStorage.getItem('DashPages')).classList.add('active');
    });


    menu.onclick = () => {
        dash.classList.toggle('dash-bar');
        iconSidenav.classList.toggle('d-none');
    };
    iconSidenav.onclick = () => {
        dash.classList.toggle('dash-bar');
        iconSidenav.classList.toggle('d-none');
    };

    Tablebtn.onclick = () => {
        Tablebtn.classList.toggle('active');
        TableCont.classList.toggle('d-none');
        AddCont.classList.add('d-none');
        Addbtn.classList.remove('active');
        pagesbtn.classList.remove('active');
        localStorage.setItem('DashPages', 'Tablebtn');
        if (TableCont.classList.contains("d-none")) {
            localStorage.setItem('TableCont', '0');
        } else {
            localStorage.setItem('TableCont', '1');
        }
    };
    Addbtn.onclick = () => {
        Addbtn.classList.toggle('active');
        AddCont.classList.toggle('d-none');
        TableCont.classList.add('d-none');
        Tablebtn.classList.remove('active');
        pagesbtn.classList.remove('active');
        localStorage.setItem('DashPages', 'Addbtn');
        if (AddCont.classList.contains("d-none")) {
            localStorage.setItem('AddCont', '0');
        } else {
            localStorage.setItem('AddCont', '1');
        }
    };
    Dashbtn.onclick = () => {
        localStorage.setItem('DashPages', 'Dashbtn');
        localStorage.removeItem('TableContItem');
    }
    usersbtn.onclick = () => {
        localStorage.setItem('DashPages', 'usersbtn');
        localStorage.removeItem('TableContItem');
    }
    pagesbtn.onclick = () => {
        localStorage.setItem('DashPages', 'pagesbtn');
        localStorage.removeItem('TableContItem');
    }
    countriebtn.onclick = () => {
        localStorage.setItem('DashPages', 'countriebtn');
        localStorage.removeItem('TableContItem');
    }
    profilebtn.onclick = () => {
        localStorage.setItem('DashPages', 'profilebtn');
        localStorage.removeItem('TableContItem');
    }

    CuirsesBtn.onclick = () => {
        CuirsesBtn.classList.add('active');
        NavireBtn.classList.remove('active');
        RomBtn.classList.remove('active');
        TypeRomBtn.classList.remove('active');
        PortBtn.classList.remove('active');

        localStorage.setItem('TableContItem', 'CuirsesBtn');
        localStorage.removeItem('AddContItem');
    };
    NavireBtn.onclick = () => {
        NavireBtn.classList.add('active');
        CuirsesBtn.classList.remove('active');
        RomBtn.classList.remove('active');
        TypeRomBtn.classList.remove('active');
        PortBtn.classList.remove('active');

        localStorage.setItem('TableContItem', 'NavireBtn');
        localStorage.removeItem('AddContItem');
    };
    RomBtn.onclick = () => {
        RomBtn.classList.add('active');
        NavireBtn.classList.remove('active');
        CuirsesBtn.classList.remove('active');
        TypeRomBtn.classList.remove('active');
        PortBtn.classList.remove('active');

        localStorage.setItem('TableContItem', 'RomBtn');
        localStorage.removeItem('AddContItem');
    };
    TypeRomBtn.onclick = () => {
        TypeRomBtn.classList.add('active');
        NavireBtn.classList.remove('active');
        RomBtn.classList.remove('active');
        CuirsesBtn.classList.remove('active');
        PortBtn.classList.remove('active');

        localStorage.setItem('TableContItem', 'TypeRomBtn');
        localStorage.removeItem('AddContItem');

    };
    PortBtn.onclick = () => {
        PortBtn.classList.add('active');
        NavireBtn.classList.remove('active');
        RomBtn.classList.remove('active');
        CuirsesBtn.classList.remove('active');
        TypeRomBtn.classList.remove('active');

        localStorage.setItem('TableContItem', 'PortBtn');
        localStorage.removeItem('AddContItem');

    };

    AddCuirsesBtn.onclick = () => {
        AddCuirsesBtn.classList.add('active');
        AddNavireBtn.classList.remove('active');
        AddRomBtn.classList.remove('active');
        AddTypeRomBtn.classList.remove('active');
        AddPortBtn.classList.remove('active');

        localStorage.setItem('AddContItem', 'AddCuirsesBtn');
        localStorage.removeItem('TableContItem');

    };
    AddNavireBtn.onclick = () => {
        AddNavireBtn.classList.add('active');
        AddCuirsesBtn.classList.remove('active');
        AddRomBtn.classList.remove('active');
        AddTypeRomBtn.classList.remove('active');
        AddPortBtn.classList.remove('active');

        localStorage.setItem('AddContItem', 'AddNavireBtn');
        localStorage.removeItem('TableContItem');

    };
    AddRomBtn.onclick = () => {
        AddRomBtn.classList.add('active');
        AddNavireBtn.classList.remove('active');
        AddCuirsesBtn.classList.remove('active');
        AddTypeRomBtn.classList.remove('active');
        AddPortBtn.classList.remove('active');

        localStorage.setItem('AddContItem', 'AddRomBtn');
        localStorage.removeItem('TableContItem');

    };
    AddTypeRomBtn.onclick = () => {
        AddTypeRomBtn.classList.add('active');
        AddNavireBtn.classList.remove('active');
        AddRomBtn.classList.remove('active');
        AddCuirsesBtn.classList.remove('active');
        AddPortBtn.classList.remove('active');

        localStorage.setItem('AddContItem', 'AddTypeRomBtn');
        localStorage.removeItem('TableContItem');

    };
    AddPortBtn.onclick = () => {
        AddPortBtn.classList.add('active');
        AddNavireBtn.classList.remove('active');
        AddRomBtn.classList.remove('active');
        AddCuirsesBtn.classList.remove('active');
        AddTypeRomBtn.classList.remove('active');

        localStorage.setItem('AddContItem', 'AddPortBtn');
        localStorage.removeItem('TableContItem');

    };

</script>
<script src="<?= url('js/index.js') . '?v=' . time() ?>"></script>

<script src="<?= url('js/bootstrap.bundle.min.js') . '?v=' . time() ?>"></script>

<script src="<?= url('js/sweetalert2.min.js') . '?v=' . time() ?>"></script>

<script src="<?= url('js/jquery-3.4.1.min.js') . '?v=' . time() ?>"></script>

<script src="<?= url('js/chartjs.min.js') . '?v=' . time() ?>"></script>


<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

<script>
    $('#RomType')?.on('change', function () {
        $.ajax(
            {
                type: "POST",
                url: "<?=BURL . 'dashboard' . '/getMaxRomType/'?>" + this.value,
                data: {
                    value: this.value
                },
                datatype: "json",
                success: function (response) {
                    $('#typeRomCapacity')?.val( response );
                }
            }
        )
    });
</script>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<footer style="position: relative;">
    <div class="Waves" style="width: 100% !important;background: transparent !important;">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
    </div>
</footer>