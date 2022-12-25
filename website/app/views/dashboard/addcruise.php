<?php include_once VIEWS . 'component'.DS.'admin'.DS.'header.php'; ?>


<main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
         data-scroll="false">

        <div class="d-flex w-100 justify-content-end">
            <div class="m-5 menubtn">
                <i class='bx bx-menu'></i>
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                <i class="fas fa-menu" aria-hidden="true"></i>
            </div>

        </div>
    </nav>


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
<!--                    <div class="card-header pb-0 d-flex align-items-center">-->
<!--                        <h6 >add cuirse</h6>-->
<!--                        <button class="btn btn-sm ms-auto" style="color: white ;background: rgba(123, 188, 209, 50) !important;">add</button>-->
<!--                    </div>-->
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">

                            <form class="px-5 py-1 ">
                                <div class="card-header px-0 pb-0 d-flex align-items-center">
                                    <h6 >add cuirse</h6>
                                    <button type="submit" class="btn btn-sm ms-auto" style="color: white ;background: rgba(123, 188, 209, 50) !important;">add</button>
                                </div>
                                <div class="form-group">
                                    <label for="navir" class="form-control-label">Navir</label>
                                    <input class="form-control" type="text" value="morooco avocat" name="navir" id="navir">
                                </div>
                                <div class="form-group">
                                    <label for="prix" class="form-control-label">Prix</label>
                                    <input class="form-control" type="number" step="any" value="678" id="prix">
                                </div>
                                <div class="form-group">
                                    <label for="image" class="form-control-label">Email</label>
                                    <input class="form-control" type="file"  id="image" accept="image/png, image/jpg, image/gif, image/jpeg" required>
                                </div>
                                <div class="form-group">
                                    <label for="nbrnuit" class="form-control-label">Nombre de nuit</label>
                                    <input class="form-control" name="nbrnuit" type="number" value="" id="nbrnuit" required>
                                </div>
                                <div class="form-group">
                                    <label for="departport" class="form-control-label">Port de départ</label>
                                    <input class="form-control" name="departport" type="op" value="40-(770)-888-444" id="departport">
                                </div>

                                <div class="form-group">
                                    <label for="example-date-input" class="form-control-label">Date de départ</label>
                                    <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
                                </div>


                                <div class="form-group">
                                    <label for="example-time-input" class="form-control-label">heure de départ</label>
                                    <input class="form-control" type="time" value="10:30:00" id="example-time-input">
                                </div>

                                <div class="card-header px-0 pb-0 d-flex align-items-end">
                                    <button type="submit" class="btn btn-sm ms-auto" style="color: white ;background: rgba(123, 188, 209, 50) !important;">add</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Projects table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Project
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Budget
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Status
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Completion
                                    </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                     class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Spotify</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">$2,500</p>
                                    </td>
                                    <td>
                                        <span class="text-xs font-weight-bold">working</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="me-2 text-xs font-weight-bold">60%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info" role="progressbar"
                                                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <button class="btn btn-link text-secondary mb-0">
                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-invision.svg"
                                                     class="avatar avatar-sm rounded-circle me-2" alt="invision">
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Invision</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">$5,000</p>
                                    </td>
                                    <td>
                                        <span class="text-xs font-weight-bold">done</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="me-2 text-xs font-weight-bold">100%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar"
                                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-jira.svg"
                                                     class="avatar avatar-sm rounded-circle me-2" alt="jira">
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Jira</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">$3,400</p>
                                    </td>
                                    <td>
                                        <span class="text-xs font-weight-bold">canceled</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="me-2 text-xs font-weight-bold">30%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                         aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"
                                                         style="width: 30%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-slack.svg"
                                                     class="avatar avatar-sm rounded-circle me-2" alt="slack">
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Slack</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">$1,000</p>
                                    </td>
                                    <td>
                                        <span class="text-xs font-weight-bold">canceled</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="me-2 text-xs font-weight-bold">0%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar"
                                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"
                                                         style="width: 0%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-webdev.svg"
                                                     class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Webdev</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">$14,000</p>
                                    </td>
                                    <td>
                                        <span class="text-xs font-weight-bold">working</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="me-2 text-xs font-weight-bold">80%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info" role="progressbar"
                                                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"
                                                         style="width: 80%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-xd.svg"
                                                     class="avatar avatar-sm rounded-circle me-2" alt="xd">
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Adobe XD</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">$2,300</p>
                                    </td>
                                    <td>
                                        <span class="text-xs font-weight-bold">done</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="me-2 text-xs font-weight-bold">100%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar"
                                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<script>
    const dash = document.querySelector('.sidenav');
    const menu = document.querySelector('.menubtn');
    const iconSidenav = document.getElementById('iconSidenav');

    menu.onclick = () => {
        // dash.classList.toggle('bg-white');
        dash.classList.toggle('dash-bar');
        iconSidenav.classList.toggle('d-none');
    };
    iconSidenav.onclick = () => {
        dash.classList.toggle('dash-bar');
    }

</script>


