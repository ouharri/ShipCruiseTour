<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <form class="form px-5 py-1" method="post" action="<?= url('dashboard/addrom') ?>">
                            <div class="card-header px-0 pb-5 d-flex align-items-center">
                                <h6>add Port</h6>
                            </div>
                            <div class="form-group">
                                <label for="RomType" class="form-control-label">Rom Type</label>
                                <select class="form-control" name="RomType" id="RomType">
                                    <option selected="true" value="" disabled> chose Rom</option>
                                    <?php foreach ($RomType as $a) : ?>
                                        <option value="<?= $a['id'] ?>"> <?= $a['libelle'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="typeRomCapacity" class="form-control-label">capacity</label>
                                <input class="form-control" type="number" step="any" placeholder="enter capacity of rom"
                                       id="typeRomCapacity" name="capacity">
                            </div>
                            <div class="form-group">
                                <label for="navire" class="form-control-label">Navire</label>
                                <select class="form-control" name="Navire" id="Navire">
                                    <option selected="selected" value="NULL" disabled> chose ship</option>
                                    <?php foreach ($Navire as $a) : ?>
                                        <option value="<?= $a['id'] ?>"> <?= $a['libelle'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nbrRom" class="form-control-label">Numéro de chambre</label>
                                <input class="form-control" type="number" step="any" placeholder="enter Number od rom"
                                       id="nbrRom" name="nbrRom">
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

