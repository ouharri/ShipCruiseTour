<!doctype html>
<html lang="en">

<head>
    <title>ShipCruiseTour Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css?v=') . time() ?>">


    <link rel="stylesheet" href="<?= url('css/sweetalert2.min.css?v=') . time() ?>"/>

    <link rel="stylesheet" href="style.css">
</head>

<body>


<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="<?= url('images/connection/login.svg') ?>"
                     class="img-fluid" alt="Phone image" width="500px">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form action="<?= url('login/connect'); ?>" method="post" class="form">
                    <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Login</p>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i>
                            Username : </label>
                        <input type="email" id="form1Example13" class="form-control form-control-lg py-3"
                               name="username" autocomplete="off" placeholder="enter your e-mail"
                               style="border-radius:25px ;"/>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i>
                            Password :</label>
                        <input type="password" id="form1Example23"
                               class="form-control form-control-lg py-3"
                               name="password" autocomplete="off" placeholder="enter your password"
                               style="border-radius:25px ;"/>
                    </div>

                    <!-- Submit button -->
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button class="btn btn-lg text-light my-2 py-2" type="submit"
                                style="width:100% ; border-radius: 30px; font-weight:600; border-radius:25px ; background: rgba(123, 188, 209, 50);">
                            login
                        </button>
                    </div>
                </form>
                <br>
                <p class="align-items-center">
                    i don't have any account
                    <a href="<?= url('register') ?>" class="text"
                       style="font-weight:600;text-decoration:none; color: rgba(123, 188, 209, 100);">
                        Register Here
                    </a>
                </p>
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