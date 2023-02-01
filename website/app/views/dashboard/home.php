<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

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
                                    Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">
                                    NAVIRE
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                    ITINERY
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                    NBR NIGHT
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                    DEPARTURE
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
                                                <h6 class="mb-0 text-sm"><?= $c['name'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $c['navire'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold text-center mb-1"><?= $c['departmentPort'] ?></p>
                                        <p class="text-xs text-secondary text-center mb-0"><?= implode('<br>', $c['itinery']) ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0 text-center"><?= $c['numberOfNight'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0 text-center mb-1"><?= $c['DateOfDeparture'] ?></p>
                                        <p class="text-xs text-secondary text-center mb-0"><?= $c['TimeOfDeparture'] ?></p>
                                    </td>
                                    <!--                                    <td>-->
                                    <!--                                        <p class="text-xs font-weight-bold mb-0">-->
                                    <?php //= $c['TimeOfDeparture'] ?><!--</p>-->
                                    <!--                                    </td>-->
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
</div>


<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>


