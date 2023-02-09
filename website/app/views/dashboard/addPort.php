<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <form class="form px-5 py-1" method="post" enctype="multipart/form-data"
                              action="<?= url('dashboard/addport') ?>">
                            <div class="card-header px-0 pb-5 d-flex align-items-center">
                                <h6>add Port</h6>
                            </div>
                            <div class="form-group">
                                <label for="portName" class="form-control-label">Name</label>
                                <input class="form-control" type="text" placeholder="enter name of this port"
                                       name="portName" id="portName"
                                >
                            </div>
                            <div class="form-group">
                                <label for="Image" class="form-control-label">Image</label>
                                <p id="imageTextAlert" class="opacity-75 fst-italic fs-6 m-0 ms-2"
                                   style="color: red !important; font-size: 13px !important; opacity: 50% !important;"></p>
                                <input class="form-control" type="file" id="Image"
                                       onchange="upload_image_check()"
                                       accept="image/png, image/jpg, image/gif, image/jpeg" name="image">
                            </div>
                            <div class="form-group">
                                <label for="countrie" class="form-control-label">countrie</label>
                                <select class="form-control" name="countrie" id="countrie">
                                    <option selected="selected" value="" disabled> chose countrie</option>
                                    <?php foreach ($countrie as $a) : ?>
                                        <option value="<?= $a['abv']; ?>"><?= $a['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="City" class="form-control-label">City</label>
                                <input class="form-control" type="text" placeholder="Enter City for this port" id="City"
                                       name="city">
                            </div>
                            <div class="form-group">
                                <label for="matricule" class="form-control-label">Matricule</label>
                                <input class="form-control" type="number" step="any" placeholder="enter Port matricule"
                                       id="matricule"
                                       name="matricule">
                            </div>

                            <div class="card-header px-0 pb-0 d-flex align-items-end">
                                <button type="submit" class="btn btn-sm ms-auto"
                                        style="color: white ;background: rgba(123, 188, 209, 50) !important;">add
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>

