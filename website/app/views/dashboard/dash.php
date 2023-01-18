<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

    <div class="container-fluid py-4">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row h-100">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Reservation</p>
                                        <h5 class="font-weight-bolder">
                                            <?=$statistic['Res']?>
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-<?=$statistic['%']>0?'success':'danger'?> text-sm font-weight-bolder"><?=($statistic['%']>0? '+':'') . $statistic['%']?>%</span>
                                            since yesterday
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow-primary rounded-circle p-1 text-center" style="width: 50px; height: 50px">
                                        <i class="ni ni-money-coins text-lg opacity-10"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card h-100">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                                        <h5 class="font-weight-bolder">
                                            2,300
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+3%</span>
                                            since last week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle p-1 text-center" style="width: 50px; height: 50px">
                                        <i class="ni ni-world text-lg opacity-10"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card h-100">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                                        <h5 class="font-weight-bolder">
                                            +3,462
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                            since last quarter
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle p-1 text-center" style="width: 50px; height: 50px">
                                        <i class="ni ni-paper-diploma text-lg opacity-10"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card h-100">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                                        <h5 class="font-weight-bolder">
                                            $103,430
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+5%</span> than last
                                            month
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circlep-1 text-center" style="width: 50px; height: 50px">
                                        <i class="ni ni-cart text-lg opacity-10"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 d-flex flex-wrap">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="text-capitalize">number of cruises per month</h6>
                            <div class="form-group">
                                <select class="form-control border-0" onchange="getStatistic(this.value)">
                                    <option>Select Year</option>
                                    <?php foreach ($years as $year) : ?>
                                        <option value="<?= $year; ?>"><?= $year; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <p class="text-sm mb-0">
                            <i class="fa-solid fa-ship text-primary"></i>
                            <span class="font-weight-bold">cruises</span>
                            <span id="yearCruiseStatistic"> in <?=date('Y')?></span>
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="height: 423px !important;">
                <div class="card card-carousel overflow-hidden h-100 p-0">
                    <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner border-radius-lg h-100">
                            <div class="carousel-item h-100 active"
                                 style="background-image: linear-gradient(rgba(123, 188, 209, .7), rgba(40, 58, 90, .5)),url('<?= url('images/home-11.jpg') ?>');background-size: cover;background-position: center">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <h5 class="text-white mb-1">Get started with Argon</h5>
                                    <p>There’s nothing I really wanted to do in life that I wasn’t able to get good
                                        at.</p>
                                </div>
                            </div>
                            <div class="carousel-item h-100"
                                 style="background-image:linear-gradient(rgba(123, 188, 209, .7), rgba(40, 58, 90, .5)), url('<?= url('images/home-7.jpg') ?>');background-size: cover;background-position: center">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <h5 class="text-white mb-1">Faster way to create web pages</h5>
                                    <p>That’s my skill. I’m not really specifically talented at anything except for the
                                        ability to learn.</p>
                                </div>
                            </div>
                            <div class="carousel-item h-100"
                                 style="background-image:linear-gradient(rgba(123, 188, 209, .7), rgba(40, 58, 90, .5)), url('<?= url('images/home-5.jpg') ?>');background-size: cover;background-position: center">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <h5 class="text-white mb-1">Share with us your design tips!</h5>
                                    <p>Don’t be afraid to be wrong because you can’t learn anything from a
                                        compliment.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev w-5 me-3" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next w-5 me-3" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= url('js/plugins/chartjs.min.js') . '?v=' . time() ?>"></script>
    <script src="<?= url('js/plugins/Chart.extension.js') . '?v=' . time() ?>"></script>
    <script>
        let myChart;

        function getStatistic(year) {
            $.ajax(
                {
                    type: "POST",
                    url: "<?=BURL . 'dashboard' . '/statistic'?>",
                    data: {
                        value: year
                    },
                    datatype: "json",
                    success: function (response) {
                        response.sort((a,b) => a.MONTH - b.MONTH);
                        const data = response.map(item => item.COUNT);
                        document.getElementById('yearCruiseStatistic').innerText = 'in ' + year;

                        const ctx1 = document.getElementById("chart-line").getContext("2d");
                        const gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

                        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
                        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
                        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
                        myChart?.destroy();
                        myChart = new Chart(ctx1, {
                            type: "line",
                            data: {
                                labels: ["jan", "fev", "mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                datasets: [{
                                    label: "cruises by month",
                                    tension: 0.4,
                                    pointRadius: 0,
                                    borderColor: "#5e72e4",
                                    backgroundColor: gradientStroke1,
                                    borderWidth: 3,
                                    fill: true,
                                    data: data,
                                    maxBarThickness: 6

                                }],
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: false,
                                    }
                                },
                                interaction: {
                                    intersect: false,
                                    mode: 'index',
                                },
                                scales: {
                                    y: {
                                        grid: {
                                            drawBorder: false,
                                            display: true,
                                            drawOnChartArea: true,
                                            drawTicks: false,
                                            borderDash: [5, 5]
                                        },
                                        ticks: {
                                            display: true,
                                            padding: 10,
                                            color: '#fbfbfb',
                                            font: {
                                                size: 11,
                                                family: "Open Sans",
                                                style: 'normal',
                                                lineHeight: 2
                                            },
                                        }
                                    },
                                    x: {
                                        grid: {
                                            drawBorder: false,
                                            display: false,
                                            drawOnChartArea: false,
                                            drawTicks: false,
                                            borderDash: [5, 5]
                                        },
                                        ticks: {
                                            display: true,
                                            color: '#ccc',
                                            padding: 20,
                                            font: {
                                                size: 11,
                                                family: "Open Sans",
                                                style: 'normal',
                                                lineHeight: 2
                                            },
                                        }
                                    },
                                },
                            },
                        });
                    }
                }
            )
        }

        window.addEventListener("load", () => {
            getStatistic(new Date().getFullYear());
        });
    </script>

<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>