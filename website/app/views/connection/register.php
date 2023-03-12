<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= url('css/sweetalert2.min.css?v=') . time() ?>"/>

    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css?v=') . time() ?>">

</head>

<body>

<section class="vh-100" style="height: 100vh">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-2">
                        <div class="row justify-content-center">
                            <p class="text-center h1 fw-bold mb-1 mx-1 mx-md-3 mt-1">Sign up</p>
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <form class="form mx-1 mx-md-4" action="<?= url('register/connect') ?>" method="post">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c"><i
                                                        class="bi bi-person-circle"></i> Your First Name</label>
                                            <input type="text"
                                                   class="form-control form-control-lg py-1" name="first_name"
                                                   autocomplete="off" placeholder="enter your name"
                                                   style="border-radius:25px ;"/>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c"><i
                                                        class="bi bi-person-circle"></i> Your Last Name</label>
                                            <input type="text"
                                                   class="form-control form-control-lg py-1" name="last_name"
                                                   autocomplete="off" placeholder="enter your name"
                                                   style="border-radius:25px ;"/>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c"><i
                                                        class="bi bi-envelope-at-fill"></i> Your Email</label>
                                            <input type="email" id="form3Example3c"
                                                   class="form-control form-control-lg py-1" name="username"
                                                   autocomplete="off" placeholder="enter your username"
                                                   style="border-radius:25px ;"/>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4c"><i
                                                        class="bi bi-chat-left-dots-fill"></i> Password</label>
                                            <input type="password" id="form3Example4c"
                                                   class="form-control form-control-lg py-1" name="password"
                                                   autocomplete="off" placeholder="enter your password"
                                                   style="border-radius:25px ;"/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button class="btn btn-lg text-light my-2 py-1" type="submit"
                                                style="width:100% ; border-radius: 30px; font-weight:600; border-radius:25px ; background: rgba(123, 188, 209, 50);">
                                            Register
                                        </button>
                                    </div>

                                </form>
                                <p align="center">i have already account <a href="<?= url('Login') ?>" class="text"
                                                                            style="font-weight:600; text-decoration:none; color: rgba(123, 188, 209, 50);">Login</a>
                                </p>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="<?= url('images/connection/register.svg') ?>" class="img-fluid"
                                     alt="Sample image" style="width:500px!important;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="<?= url('js/plugins/bootstrap.bundle.min.js') . '?v=' . time() ?>"></script>

<script src="<?= url('js/plugins/sweetalert2.min.js') . '?v=' . time() ?>"></script>

<script src="<?= url('js/plugins/jquery-3.4.1.min.js') . '?v=' . time() ?>"></script>

<script>
    const form = document.getElementsByClassName('form')[0];
    form.addEventListener('submit', event => {
        event.preventDefault();

        let flag = true;
        const hasError = $('input,select').toArray().some(function (element) {
            if (element.value === '' || element.value === null) {
                flag = false;
                $(element).removeClass('is-valid')
                $(element).addClass('is-invalid')
            } else {
                $(element).removeClass('is-invalid')
                $(element).addClass('is-valid')
            }
        })
        if (flag) {
            form.submit();
        }
    })
</script>
</body>

</html>