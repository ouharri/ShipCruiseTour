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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                    Completion
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
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="me-2 text-xs font-weight-bold"><?=$c['statistic']?>%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar <?=$c['statistic']>60? 'bg-gradient-success' : ( ($c['statistic']>40)? 'bg-gradient-info' : 'bg-gradient-danger') ?>"
                                                         style="width: <?=$c['statistic']?>%;"></div>
                                                </div>
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
                                        <p class="text-xs font-weight-bold mb-0 text-center mb-1"><?= $c['DateOfDeparture']?></p>
                                        <p class="text-xs text-secondary text-center mb-0"><?= $c['TimeOfDeparture'] ?></p>
                                    </td>
                                    <!--                                    <td>-->
                                    <!--                                        <p class="text-xs font-weight-bold mb-0">--><?php //= $c['TimeOfDeparture'] ?><!--</p>-->
                                    <!--                                    </td>-->
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a onclick="deletItem('<?= url('dashboard/deletCruises/' . $c['id']) ?>')"
                                           class="text-secondary font-weight-bold text-xs cursor-pointer"
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
