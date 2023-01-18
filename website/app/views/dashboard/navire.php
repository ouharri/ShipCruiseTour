<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

    <div class="container-fluid py-4">
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
                                <?php if (isset($Navire)) {
                                    foreach ($Navire as $Nav) : ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($Nav['img'])?>"
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
                                                <a onclick="deletItem('<?= url('dashboard/deletNavire/' . $Nav['id']) ?>')"
                                                   class="text-secondary font-weight-bold text-xs cursor-pointer"
                                                   data-toggle="tooltip" data-original-title="Edit user">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach;
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>