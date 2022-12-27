<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

<i class="fa-regular fa-tv"></i>
<div class="container-fluid py-4">
    <!--    CUIRSES TABLE  -->
    <div class="row" id="Cuirses">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Cuirses table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    NAVIRE
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                    ITINERY
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    NUMBER OF NIGHT
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    DATE OF DEPARTURE
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    TIME OF DEPARTURE
                                </th>
                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($croisiere as $c) : ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($c['img']) ?>"
                                                     class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= $c['navire'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold text-center mb-0"><?= $c['departmentPort'] ?></p>
                                        <p class="text-xs text-secondary text-center mb-0"><?= implode('<br>', $c['itinery']) ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $c['numberOfNight'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $c['DateOfDeparture'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $c['TimeOfDeparture'] ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= url('dashboard/deletCruises/' . $c['id']) ?>>"
                                           class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    NAVIRE TABLE  -->
    <div class="row" id="Navire">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Navire table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Number of Rom
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Number of places
                                </th>
                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($Navire as $Nav) : ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($Nav['img']) ?>"
                                                     class="avatar avatar-sm me-3" alt="">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= $Nav['libelle'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $Nav['numberOfRom'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $Nav['numberOfPlaces'] ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= url('dashboard/editNavire/' . $Nav['id']) ?>"
                                           class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= url('dashboard/deletNavire/' . $Nav['id']) ?>"
                                           class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ROM TABLE  -->
    <div class="row" id="Rom">
        <div class="col-12" id="Rom">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Rom table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Types rom
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Navire
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Number rom
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Capacity
                                </th>
                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($Rom as $R) : ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <!--                                            <div>-->
                                            <!--                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"-->
                                            <!--                                                     alt="user1">-->
                                            <!--                                            </div>-->
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= $R['typeRom'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $R['navire'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $R['numberOfRom'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $R['capacity'] ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= url('dashboard/editRom/' . $R['id']) ?>"
                                           class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= url('dashboard/deletRom/' . $R['id']) ?>"
                                           class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    ROM TYPES TABLE  -->
    <div class="row" id="TypeRom">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Type Rom table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    NAME
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    MAX
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    MIN
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    PRICE
                                </th>
                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($RomType as $T) : ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($T['img']) ?>"
                                                     class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= $T['libelle'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $T['max'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $T['min'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $T['price'] ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= url('dashboard/editTypeRom/' . $T['id']) ?>"
                                           class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= url('dashboard/deletTypeRom/' . $T['id']) ?>"
                                           class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    PORT TABLE  -->
    <div class="row" id="Port">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Port table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    NAME
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    countrie
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    MATRICULE
                                </th>
                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($Port as $P) : ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($P['img']) ?>"
                                                     class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= $P['name'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $P['countrie'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $P['matricule'] ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= url('dashboard/editPort/' . $P['id']) ?>"
                                           class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= url('dashboard/deletPort/' . $P['id']) ?>"
                                           class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--    <div class="row">-->
<!--        <div class="col-12">-->
<!--            <div class="card mb-4">-->
<!--                <div class="card-header pb-0">-->
<!--                    <h6>Projects table</h6>-->
<!--                </div>-->
<!--                <div class="card-body px-0 pt-0 pb-2">-->
<!--                    <div class="table-responsive p-0">-->
<!--                        <table class="table align-items-center justify-content-center mb-0">-->
<!--                            <thead>-->
<!--                            <tr>-->
<!--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">-->
<!--                                    Project-->
<!--                                </th>-->
<!--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">-->
<!--                                    Budget-->
<!--                                </th>-->
<!--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">-->
<!--                                    Status-->
<!--                                </th>-->
<!--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">-->
<!--                                    Completion-->
<!--                                </th>-->
<!--                                <th></th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-spotify.svg"-->
<!--                                                 class="avatar avatar-sm rounded-circle me-2" alt="spotify">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Spotify</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$2,500</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">working</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">60%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-info" role="progressbar"-->
<!--                                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"-->
<!--                                                     style="width: 60%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-invision.svg"-->
<!--                                                 class="avatar avatar-sm rounded-circle me-2" alt="invision">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Invision</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$5,000</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">done</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">100%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-success" role="progressbar"-->
<!--                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"-->
<!--                                                     style="width: 100%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"-->
<!--                                            aria-expanded="false">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-jira.svg"-->
<!--                                                 class="avatar avatar-sm rounded-circle me-2" alt="jira">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Jira</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$3,400</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">canceled</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">30%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-danger" role="progressbar"-->
<!--                                                     aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"-->
<!--                                                     style="width: 30%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"-->
<!--                                            aria-expanded="false">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-slack.svg"-->
<!--                                                 class="avatar avatar-sm rounded-circle me-2" alt="slack">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Slack</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$1,000</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">canceled</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">0%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-success" role="progressbar"-->
<!--                                                     aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"-->
<!--                                                     style="width: 0%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"-->
<!--                                            aria-expanded="false">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-webdev.svg"-->
<!--                                                 class="avatar avatar-sm rounded-circle me-2" alt="webdev">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Webdev</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$14,000</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">working</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">80%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-info" role="progressbar"-->
<!--                                                     aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"-->
<!--                                                     style="width: 80%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"-->
<!--                                            aria-expanded="false">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/small-logos/logo-xd.svg"-->
<!--                                                 class="avatar avatar-sm rounded-circle me-2" alt="xd">-->
<!--                                        </div>-->
<!--                                        <div class="my-auto">-->
<!--                                            <h6 class="mb-0 text-sm">Adobe XD</h6>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-sm font-weight-bold mb-0">$2,300</p>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <span class="text-xs font-weight-bold">done</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <div class="d-flex align-items-center justify-content-center">-->
<!--                                        <span class="me-2 text-xs font-weight-bold">100%</span>-->
<!--                                        <div>-->
<!--                                            <div class="progress">-->
<!--                                                <div class="progress-bar bg-gradient-success" role="progressbar"-->
<!--                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"-->
<!--                                                     style="width: 100%;"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"-->
<!--                                            aria-expanded="false">-->
<!--                                        <i class="fa fa-ellipsis-v text-xs"></i>-->
<!--                                    </button>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-12">-->
<!--            <div class="card mb-4">-->
<!--                <div class="card-header pb-0">-->
<!--                    <h6>Authors table</h6>-->
<!--                </div>-->
<!--                <div class="card-body px-0 pt-0 pb-2">-->
<!--                    <div class="table-responsive p-0">-->
<!--                        <table class="table align-items-center mb-0">-->
<!--                            <thead>-->
<!--                            <tr>-->
<!--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">-->
<!--                                    Author-->
<!--                                </th>-->
<!--                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">-->
<!--                                    Function-->
<!--                                </th>-->
<!--                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">-->
<!--                                    Status-->
<!--                                </th>-->
<!--                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">-->
<!--                                    Employed-->
<!--                                </th>-->
<!--                                <th class="text-secondary opacity-7"></th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2 py-1">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"-->
<!--                                                 alt="user1">-->
<!--                                        </div>-->
<!--                                        <div class="d-flex flex-column justify-content-center">-->
<!--                                            <h6 class="mb-0 text-sm">John Michael</h6>-->
<!--                                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-xs font-weight-bold mb-0">Manager</p>-->
<!--                                    <p class="text-xs text-secondary mb-0">Organization</p>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center text-sm">-->
<!--                                    <span class="badge badge-sm bg-gradient-success">Online</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"-->
<!--                                       data-toggle="tooltip" data-original-title="Edit user">-->
<!--                                        Edit-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2 py-1">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3"-->
<!--                                                 alt="user2">-->
<!--                                        </div>-->
<!--                                        <div class="d-flex flex-column justify-content-center">-->
<!--                                            <h6 class="mb-0 text-sm">Alexa Liras</h6>-->
<!--                                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-xs font-weight-bold mb-0">Programator</p>-->
<!--                                    <p class="text-xs text-secondary mb-0">Developer</p>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center text-sm">-->
<!--                                    <span class="badge badge-sm bg-gradient-secondary">Offline</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <span class="text-secondary text-xs font-weight-bold">11/01/19</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"-->
<!--                                       data-toggle="tooltip" data-original-title="Edit user">-->
<!--                                        Edit-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2 py-1">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3"-->
<!--                                                 alt="user3">-->
<!--                                        </div>-->
<!--                                        <div class="d-flex flex-column justify-content-center">-->
<!--                                            <h6 class="mb-0 text-sm">Laurent Perrier</h6>-->
<!--                                            <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-xs font-weight-bold mb-0">Executive</p>-->
<!--                                    <p class="text-xs text-secondary mb-0">Projects</p>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center text-sm">-->
<!--                                    <span class="badge badge-sm bg-gradient-success">Online</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <span class="text-secondary text-xs font-weight-bold">19/09/17</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"-->
<!--                                       data-toggle="tooltip" data-original-title="Edit user">-->
<!--                                        Edit-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2 py-1">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3"-->
<!--                                                 alt="user4">-->
<!--                                        </div>-->
<!--                                        <div class="d-flex flex-column justify-content-center">-->
<!--                                            <h6 class="mb-0 text-sm">Michael Levi</h6>-->
<!--                                            <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-xs font-weight-bold mb-0">Programator</p>-->
<!--                                    <p class="text-xs text-secondary mb-0">Developer</p>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center text-sm">-->
<!--                                    <span class="badge badge-sm bg-gradient-success">Online</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <span class="text-secondary text-xs font-weight-bold">24/12/08</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"-->
<!--                                       data-toggle="tooltip" data-original-title="Edit user">-->
<!--                                        Edit-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2 py-1">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"-->
<!--                                                 alt="user5">-->
<!--                                        </div>-->
<!--                                        <div class="d-flex flex-column justify-content-center">-->
<!--                                            <h6 class="mb-0 text-sm">Richard Gran</h6>-->
<!--                                            <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-xs font-weight-bold mb-0">Manager</p>-->
<!--                                    <p class="text-xs text-secondary mb-0">Executive</p>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center text-sm">-->
<!--                                    <span class="badge badge-sm bg-gradient-secondary">Offline</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <span class="text-secondary text-xs font-weight-bold">04/10/21</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"-->
<!--                                       data-toggle="tooltip" data-original-title="Edit user">-->
<!--                                        Edit-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <div class="d-flex px-2 py-1">-->
<!--                                        <div>-->
<!--                                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3"-->
<!--                                                 alt="user6">-->
<!--                                        </div>-->
<!--                                        <div class="d-flex flex-column justify-content-center">-->
<!--                                            <h6 class="mb-0 text-sm">Miriam Eric</h6>-->
<!--                                            <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <p class="text-xs font-weight-bold mb-0">Programtor</p>-->
<!--                                    <p class="text-xs text-secondary mb-0">Developer</p>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center text-sm">-->
<!--                                    <span class="badge badge-sm bg-gradient-secondary">Offline</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle text-center">-->
<!--                                    <span class="text-secondary text-xs font-weight-bold">14/09/20</span>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"-->
<!--                                       data-toggle="tooltip" data-original-title="Edit user">-->
<!--                                        Edit-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

</div>


<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>


