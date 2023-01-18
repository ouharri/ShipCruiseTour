<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

    <div class="container-fluid py-4">
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
                                            <a onclick="deletItem('<?= url('dashboard/deletPort/' . $P['id']) ?>')"
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