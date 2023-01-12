<?php include_once VIEWS . 'component' . DS . 'user' . DS . 'header.php'; ?>


<div class="d-grid justify-content-center align-content-center hover"
     style="height: 40vh !important; background-image: url(<?= url('images/res2.jpg') ?>); background-size: cover; background-position-y: center">
</div>
<div class="container-fluid d-flex align-items-center justify-content-center" style="background-color: #EFEFEF;border-radius: 50px; height: 80px; width: 50%; transform: translateY(-50%);">
    <h1 class="text-center">Mes réservations :</h1>
</div>

<main style="background-color: #eee;" id="cruisesMain">
    <div id="paginated-list" data-current-page="1" aria-live="polite" class="container-fluid pb-5 hover">
        <?php foreach ($reservation as $c) : ?>
            <div id="cruisesBox" class="row justify-content-center mb-5">
                <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                        <div id="cruisesColor">
                        </div>
                        <div class="" id="cruiseBox">
                            <div class="row p-1">
                                <div class="col-md-12 col-lg-3 col-xl-3" id="cruiseImg">
                                    <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($c['img']) ?>"
                                         class="w-100 h-100" id="cruisesImg" decoding="auto"
                                         style="aspect-ratio: 1; object-fit: cover; border-radius: 10px">
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 p-10 card-body">
                                    <h5 class="mt-3"
                                        style="color: rgba(123, 188, 209, 100);"><?= $c['numberOfNight'] . ' NIGHT' ?></h5>
                                    <h5 class="mb-3"
                                        style="color: #061556; font-size: 35px; font-weight: unset"><?= $c['nameCruise'] ?></h5>
                                    <div class="d-flex flex-column m-0 p-0 gap-0">
                                        <div class="d-flex flex-row m-0">
                                            <svg width="20" height="20" viewBox="0 0 12 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8538 10.808C11.6639 10.6213 11.3624 10.6267 11.1797 10.8219C10.9434 11.0749 10.5251 11.0745 10.2888 10.8223C10.2169 10.7451 10.1386 10.6776 10.0558 10.6174C10.0794 8.95863 10.4015 8.29743 11.0793 6.91793C11.2003 6.67142 11.3314 6.40525 11.4718 6.10975L11.6321 5.77298C11.6935 5.64375 11.6969 5.49368 11.6414 5.36175C11.586 5.22982 11.477 5.12952 11.3437 5.08747L9.52219 4.51268L9.52257 2.21931C9.52257 2.08931 9.47239 1.96432 9.38326 1.87212C9.29376 1.78031 9.17242 1.72823 9.04622 1.72823L6.47647 1.72784V0.490693C6.47647 0.2195 6.26339 0 6.00012 0C5.73686 0 5.52377 0.219886 5.52377 0.490693V1.72784L2.9544 1.72746C2.8282 1.72746 2.70686 1.77915 2.61736 1.87135C2.52823 1.96355 2.47768 2.08853 2.47768 2.21854V4.51191L0.656158 5.08632C0.522839 5.12836 0.413864 5.22866 0.358439 5.36021C0.303015 5.49214 0.306384 5.6422 0.367801 5.77143L0.527708 6.10821C0.668142 6.4037 0.798838 6.6695 0.919423 6.91561C1.59687 8.29588 1.91931 8.95747 1.94253 10.6178C1.86014 10.6776 1.78225 10.7447 1.71072 10.8215C1.47479 11.0753 1.05574 11.0753 0.820184 10.8215C0.637433 10.6259 0.335969 10.6205 0.146478 10.8076C-0.0433885 10.9955 -0.0493799 11.3064 0.132622 11.502C0.432214 11.8229 0.834416 12 1.26545 12C1.69649 12 2.09869 11.8229 2.39828 11.5016C2.63421 11.2485 3.05289 11.2481 3.28882 11.502C3.58841 11.8229 3.99061 12 4.42165 12C4.85269 12 5.25526 11.8229 5.55448 11.502C5.79078 11.2489 6.20909 11.2493 6.44539 11.5016C6.74498 11.8229 7.14718 12 7.57822 12C8.00888 12 8.41146 11.8229 8.71068 11.5016C8.94735 11.2481 9.36528 11.2481 9.60121 11.502C9.90118 11.8229 10.3034 12 10.734 12C11.1647 12 11.5673 11.8229 11.8669 11.502C12.0492 11.3068 12.0436 10.9959 11.8538 10.808ZM3.43038 2.70962L5.99937 2.71L8.56949 2.71039L8.56912 4.21217L6.13906 3.44527C6.13307 3.44334 6.12745 3.44527 6.12146 3.44334C6.06828 3.42868 6.0136 3.42174 5.95855 3.42675C5.94882 3.42752 5.93983 3.43061 5.93009 3.43215C5.9065 3.43562 5.88328 3.43794 5.86006 3.44527L3.43 4.2114L3.43038 2.70962ZM3.97601 10.8223C3.68728 10.5125 3.30193 10.3404 2.88812 10.3285C2.82745 8.63266 2.43611 7.83065 1.76951 6.47314C1.67552 6.28142 1.57516 6.07773 1.46917 5.85669L5.52302 4.57826L5.52227 10.4079C5.27736 10.4886 5.05117 10.624 4.86654 10.8219C4.63099 11.0757 4.21194 11.0753 3.97601 10.8223ZM8.02311 10.8223C7.78644 11.0753 7.36851 11.0749 7.13258 10.8219C6.94758 10.624 6.72101 10.4882 6.47535 10.4076L6.4761 4.57826L10.5299 5.85746C10.4236 6.0785 10.3232 6.28257 10.2289 6.4743C9.56227 7.83142 9.17092 8.63304 9.10988 10.3285C8.69682 10.3408 8.31184 10.5125 8.02311 10.8223Z"
                                                      fill="#061556"></path>
                                            </svg>
                                            <p class="ms-2 mb-1"><?= $c['nameNavire'] ?></p>
                                        </div>
                                        <div class="d-flex m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 24 24"
                                                 style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path d="m22 15-3-4-3 4h1.906c-.436 2.469-2.438 4.471-4.906 4.906V13h2v-2h-2V9.336c1.543-.459 2.714-1.923 2.714-3.621C15.714 3.666 14.048 2 12 2S8.286 3.666 8.286 5.715c0 1.698 1.171 3.162 2.714 3.621V11H9v2h2v6.906C8.531 19.471 6.529 17.469 6.094 15H8l-3-4-3 4h2.073c.511 3.885 3.929 7 7.927 7s7.416-3.115 7.927-7H22zM10.286 5.715C10.286 4.77 11.055 4 12 4s1.714.77 1.714 1.715c0 .951-.801 1.785-1.714 1.785s-1.714-.834-1.714-1.785z"
                                                      fill="#061556"></path>
                                            </svg>
                                            <p class="ms-2 mb-1"><?= $c['departmentPort'] ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M7.61481 2.78181C5.762 3.39368 4.22464 4.69903 3.31007 6.39049C4.14907 6.05775 5.09104 5.80121 6.08741 5.61872C6.45828 4.59775 6.96675 3.63645 7.61481 2.78181ZM2.41829 9.46665C2.46156 8.84264 2.58015 8.23937 2.76504 7.66587C3.60193 7.22141 4.63152 6.87581 5.76891 6.63315C5.52312 7.55424 5.38177 8.50916 5.34353 9.46665H2.41829ZM6.27763 9.46665C6.32184 8.43408 6.49447 7.41316 6.79349 6.44659C7.65211 6.31561 8.55367 6.23855 9.46657 6.21693V9.46665H6.27763ZM10.5332 9.46665V6.21693C11.4768 6.23927 12.4083 6.32084 13.2927 6.45995C13.5991 7.42279 13.776 8.43911 13.8215 9.46665H10.5332ZM10.5332 5.28336C11.337 5.30165 12.1399 5.36139 12.9204 5.46352C12.4295 4.32765 11.742 3.29607 10.8615 2.44833C10.7527 2.43607 10.6433 2.42609 10.5332 2.41845V5.28336ZM14.7556 9.46665C14.7164 8.5158 14.5725 7.56773 14.3225 6.65296C15.4236 6.89445 16.4203 7.23331 17.2347 7.66575C17.4196 8.23928 17.5381 8.8426 17.5815 9.46665H14.7556ZM13.9945 5.63393C14.9605 5.81535 15.8737 6.06684 16.6896 6.3904C15.7817 4.71129 14.2601 3.41272 12.4254 2.79529C13.0913 3.65067 13.6137 4.61249 13.9945 5.63393ZM7.15365 5.45396C7.91083 5.35765 8.68825 5.30108 9.46657 5.28336V2.41845C9.35777 2.426 9.2496 2.43583 9.14211 2.44791C8.29268 3.29313 7.62861 4.32141 7.15365 5.45396ZM5.34353 10.5333H2.41829C2.45393 11.0476 2.54073 11.5477 2.67364 12.0287C3.50981 12.4879 4.54827 12.845 5.69988 13.0959C5.49649 12.2591 5.37804 11.3973 5.34353 10.5333ZM5.99175 14.1075C4.9652 13.9139 3.99849 13.6411 3.14528 13.2866C4.03289 15.1345 5.64576 16.568 7.61495 17.2183C6.90919 16.2876 6.36897 15.2304 5.99175 14.1075ZM7.04471 14.2759C7.83615 14.3808 8.65087 14.442 9.46657 14.4605V17.5816C9.35781 17.5741 9.24969 17.5643 9.14224 17.5521C8.22569 16.6401 7.52495 15.5151 7.04471 14.2759ZM9.46657 13.5271C8.52551 13.5047 7.59648 13.4235 6.71415 13.2851C6.46379 12.3987 6.31777 11.4708 6.27763 10.5333H9.46657V13.5271ZM10.5332 14.4605V17.5816C10.6433 17.574 10.7527 17.564 10.8614 17.5517C11.8115 16.6371 12.5369 15.5083 13.0331 14.2653C12.2172 14.3767 11.3757 14.4415 10.5332 14.4605ZM13.3745 13.2709C12.4658 13.418 11.506 13.504 10.5332 13.5271V10.5333H13.8215C13.7803 11.4656 13.6308 12.3887 13.3745 13.2709ZM14.0931 14.0912C13.7059 15.2151 13.1507 16.2731 12.4253 17.2048C14.376 16.5484 15.9729 15.1219 16.8544 13.2867C16.0248 13.6313 15.088 13.8988 14.0931 14.0912ZM17.326 12.0289C16.5127 12.4755 15.5077 12.8256 14.3935 13.0753C14.5999 12.2451 14.7203 11.3903 14.7556 10.5333H17.5815C17.5459 11.0476 17.4589 11.5478 17.326 12.0289ZM1.19987 10C1.19987 5.13993 5.13976 1.20003 9.99987 1.20003C14.86 1.20003 18.7999 5.13993 18.7999 10C18.7999 14.8601 14.86 18.8 9.99987 18.8C5.13976 18.8 1.19987 14.8601 1.19987 10Z"
                                                      fill="#061556"/>
                                            </svg>
                                            <p class="ms-2 mb-1"><?= $c['portCountrie'] ?></p>
                                        </div>
                                        <div class="d-flex mt-2 mb-0">
                                            <p class="mb-1" style="color: rgb(14,86,110)">ROUNDTRIP FROM: </p>
                                            <p class="ms-2 mb-1"><?= $c['portCity'] ?>
                                                - <?= $c['cruiseItinery'][count($c['cruiseItinery']) - 1]['city'] ?></p>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-0">
                                        <p style="color: rgb(123, 188, 209);">VISITING:</p>
                                        <div class="mb-0 text-muted small ms-1"
                                             style="align-self: flex-start !important;display: flex !important;grid-auto-flow: row !important;align-content: end !important;gap: 10px 8px !important;margin-bottom: 5px !important;grid-template-columns: repeat(3, 1fr) !important;">
                                            <ul class="p-0">
                                                <?php $i = 0;
                                                foreach ($c['cruiseItinery'] as $it) : $i++; ?>
                                                    <li class="d-inline">
                                                        <?= $it['NAME'] . ", " . $it['city'] ?>
                                                    </li>
                                                    <?php if ($i != count($c['cruiseItinery'])) echo '<span style="color: rgb(39,109,130);"> • </span>'; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                            <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"
                                                  fill="#061556"></path>
                                            <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"
                                                  fill="rgb(23, 106, 133)"></path>
                                        </svg>
                                        <p class="ms-2 mt-1"> <?= $c['DateOfDeparture'] ?> </p>
                                        <p class="ms-2 mt-1 text-muted small">( <?= $c['TimeOfDeparture'] ?> )</p>
                                    </div>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        <?= $c['desc'] ?>
                                    </p>
                                </div>
                                <div class="card-body col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start d-flex flex-column justify-content-center align-items-center">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4 class="mb-1 me-1" style="color: #061556; font-size: 50px;"><?= $c['resPrice'] ?>
                                            DH</h4>
                                    </div>
                                    <h6 class="text" style="color: rgb(123, 188, 209); opacity: 50%;">
                                        <?=$c['typeRom']?>
                                    </h6>
                                    <div class="d-flex flex-column mt-4">
<!--                                        <a class="btn btn-outline-primary btn-sm mt-2 btn-reservation"-->
<!--                                                type="button" href="--><?php //= url('reservation/annuler/'. $c['idReservation'] ."'") ?><!--">-->
<!--                                            Annuler-->
<!--                                        </a>-->
                                        <button class="btn btn-outline-primary btn-sm mt-2 btn-reservation"
                                                type="button" onclick="deletReservation('<?= url('reservation/annuler/'. $c['idReservation'] ) ?>')">
                                            Annuler
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <nav class="pagination-container">
        <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
            &lt;
        </button>

        <div id="pagination-numbers">
        </div>

        <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
            &gt;
        </button>
    </nav>
</main>

<script>
    function deletReservation(link) {
        Swal.fire({
            title: `<p style='color: rgb(123, 188, 209)'>Are you sure?</p>`,
            text: "If you cancel this reservation you may regret afterwards !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: 'rgb(83, 157, 182)',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, cancel this reservation'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = link;
            }
        })
    }
</script>













<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include_once VIEWS . 'component' . DS . 'user' . DS . 'footer.php'; ?>
