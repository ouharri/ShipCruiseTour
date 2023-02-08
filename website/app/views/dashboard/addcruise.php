<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <form class="form px-5 py-1" method="post" enctype="multipart/form-data"
                              action="<?= url('dashboard/addCruises') ?>">
                            <div class="card-header px-0 pb-0 d-flex align-items-center">
                                <h6>add cuirse</h6>
                                <button type="submit" class="btn btn-sm ms-auto"
                                        style="color: white ;background: rgba(123, 188, 209, 50) !important;">add
                                </button>
                            </div>
                            <div class="form-group">
                                <label for="matricule" class="form-control-label">Matricule</label>
                                <input class="form-control" type="number" step="any" value="<?= $matricule ?>"
                                       id="matricule" name="matricule" readonly>
                            </div>
                            <div class="form-group">
                                <label for="cruisesName" class="form-control-label">Name</label>
                                <input class="form-control" type="text" placeholder="cuirses name" name="cruisesName"
                                       id="cruisesName">
                            </div>
                            <div class="form-group">
                                <label for="navire" class="form-control-label">Navire</label>
                                <select class="form-control" name="navire" id="navire">
                                    <option selected="selected" value="" disabled> chose Navire</option>
                                    <?php foreach ($Navire as $a) : ?>
                                        <option value="<?= $a['id'] ?>"> <?= $a['libelle'] ?> </option>
                                    <?php endforeach ?>
                                </select>
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
                                <label for="desc">Description</label>
                                <textarea class="form-control" id="desc" rows="1"
                                          placeholder="Add description for this cruise" name="desc"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="nbrnuit" class="form-control-label">Nombre de nuit</label>
                                <input class="form-control" name="nbrnuit" type="number"
                                       placeholder="how mush night in this cruise" min=1 id="nbrnuit">
                            </div>
                            <div class="form-group">
                                <label for="departport" class="form-control-label">Port de départ</label>
                                <select class="form-control" name="departport" id="departport">
                                    <option selected="selected" value="" disabled> chose depart Port</option>
                                    <?php foreach ($Port as $a) : ?>
                                        <option value="<?= $a['id'] ?>"> <?= $a['name'] ?> </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group" id="addCruisescnt">
                                <label for="cruiseitinery1"
                                       class="form-control-label d-flex justify-content-between align-items-center">Cruise
                                    Itinery<i class="fa-solid fa-plus fa-xl cursor-pointer"
                                              onclick="AddPortInput()"></i></label>
                                <select class="form-control flex-grow-1" name="cruiseitinery1" id="cruiseitinery1">
                                    <option selected="selected" value="" disabled> Port 1</option>
                                    <?php foreach ($Port as $a) : ?>
                                        <option value="<?= $a['id'] ?>"> <?= $a['name'] ?> </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="DateOfDeparture" class="form-control-label">Date de départ</label>
                                <input class="form-control" type="date" id="DateOfDeparture"
                                       name="DateOfDeparture">
                            </div>
                            <div class="form-group">
                                <label for="TimeOfDeparture" class="form-control-label">heure de départ</label>
                                <input class="form-control" type="time" id="TimeOfDeparture"
                                       name="TimeOfDeparture">
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
</main>

<script>
    let count = 2;
    const addCruisesbtn = document.getElementById('addCruisesbtn');
    const addCruisescnt = document.getElementById('addCruisescnt');

    function addCruisesinput(i) {
        return `
        <div class="position-relative d-flex align-items-center" id="cruiseitinery${i}">
            <select class="form-control" name="cruiseitinery${i}">
                <option disabled>PORT ${i}</option>
                    <option selected="selected" value="" disabled> chose ship</option>
                    <?php foreach($Port as $a) :?>
                        <option value="<?=$a['id']?>"> <?=$a['name']?> </option>
                    <?php endforeach?>
            </select>
            <i class="fa-solid fa-x cursor-pointer p-2 text-danger position-absolute" onclick="removePortInput(${i})" style="right:5px; "></i>
        </div>`
    }

    function AddPortInput() {
        let item = document.createElement("div");
        item.className = "my-1";
        item.innerHTML += (addCruisesinput(count));
        addCruisescnt.appendChild(item);
        count++;
    }

    function removePortInput(id) {
        let tmp;
        count--;
        let idTmp = id + 1;

        const elem = document.getElementById(`cruiseitinery${id}`);
        elem.parentNode.removeChild(elem);

        while (tmp = document.getElementById(`cruiseitinery${idTmp}`)) {
            tmp.id = `cruiseitinery${idTmp - 1}`;
            tmp.firstElementChild.name = `cruiseitinery${idTmp - 1}`;
            tmp.lastElementChild.setAttribute("onClick", `javascript: removePortInput(${idTmp - 1});`);
            //  = `cruiseitinery${idTmp - 1}`;
            idTmp++;
        }
        // addCruisescnt.removeChild(elem);
    }

</script>

<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>



