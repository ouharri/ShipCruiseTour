<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

<div class="container-fluid py-4">
    <!--    ROM TYPES TABLE  -->
    <div class="row" id="Rom">
        <div class="col-12" id="Rom">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>users table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    First Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Last Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    email
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    role
                                </th>
                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $u) : ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= $u['firstName'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $u['lastName'] ?></p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?= $u['login'] ?></p>
                                    </td>
                                    <td>
                                        <span class="badge badge-sm <?= $u['is_admin'] ? 'bg-gradient-success' : 'bg-gradient-secondary' ?>">
                                            <?= $u['is_admin'] ? 'ADMIN' : 'CLIENT' ?>
                                        </span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= url('dashboard/editUsers/' . $u['id']) ?>"
                                           class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a onclick="deletItem('<?= url('dashboard/deletUser/' . $u['id']) ?>')"
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
