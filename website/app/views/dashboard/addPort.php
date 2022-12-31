<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <?php if (isset($success)): ?>
                            <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
                        <?php endif; ?>
                        <?php if (isset($error)): ?>
                            <h3 class="alert alert-danger text-center"><?php echo $error; ?></h3>
                        <?php endif; ?>

                        <form class="px-5 py-1" method="post" action="<?=url('dashboard/addport')?>">
                            <div class="card-header px-0 pb-5 d-flex align-items-center">
                                <h6>add Port</h6>
                            </div>
                            <div class="form-group">
                                <label for="portName" class="form-control-label">Name</label>
                                <input class="form-control" type="text" value="tanger med" name="portName" id="portName" required>
                            </div>
                            <div class="form-group">
                                <label for="countrie" class="form-control-label">countrie</label>
                                <select class="form-control" name="countrie" id="countrie">
                                    <?php foreach($countrie as $a) :?>
                                    <option value="<?=$a['abv'];?>"><?=$a['name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="City" class="form-control-label">City</label>
                                <input class="form-control" type="text" placeholder="City" id="City" name="City" required>
                            </div>
                            <div class="form-group">
                                <label for="matricule" class="form-control-label">Matricule</label>
                                <input class="form-control" type="number" step="any" value="678" id="matricule" name="matricule" required>
                            </div>

                            <div class="card-header px-0 pb-0 d-flex align-items-end">
                                <button type="submit" class="btn btn-sm ms-auto" name="submit"
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

