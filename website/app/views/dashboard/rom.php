<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

    <div class="container-fluid py-4">
        <!--    ROM TYPES TABLE  -->
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
                                            <a onclick="deletItem('<?= url('dashboard/deletRom/' . $R['id']) ?>')"
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