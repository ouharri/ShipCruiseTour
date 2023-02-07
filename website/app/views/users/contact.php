<?php include_once VIEWS . 'component' . DS . 'user' . DS . 'header.php'; ?>

<div class="d-grid justify-content-center align-content-center waterAnimate"
     style="height: 60vh !important; background-image: url(<?= url('images/Home-12.jpg') ?>); background-size: cover;background-position: center">
</div>

<link rel="stylesheet" href="<?= url('css/contact.css') ?>">

<div class="content">
    <div class="container">
        <div class="row align-items-stretch no-gutters contact-wrap">
            <div class="col-md-8">
                <div class="form h-100">
                    <h3>Send us a message</h3>
                    <form class="mb-5" method="post" id="contactForm" name="contactForm">
                        <div class="row">
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Name *</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name"
                                       required>
                            </div>
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Email *</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Your email"
                                       required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #">
                            </div>
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Company</label>
                                <input type="text" class="form-control" name="company" id="company"
                                       placeholder="Company  name">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group mb-5">
                                <label for="message" class="col-form-label">Message *</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="4"
                                          placeholder="Write your message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="submit" value="Send Message" class="btn btn-login rounded-0 py-2 px-4">
                                <span class="submitting"></span>
                            </div>
                        </div>
                    </form>

                    <div id="form-message-warning mt-4"></div>
                    <div id="form-message-success">
                        Your message was sent, thank you!
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info h-100">
                    <h3>Contact Information</h3>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, magnam!</p>
                    <ul class="list-unstyled">
                        <li class="d-flex">
                            <span class="wrap-icon icon-room mr-3"></span>
                            <span class="text">9757 Aspen Lane South Richmond Hill, NY 11419</span>
                        </li>
                        <li class="d-flex">
                            <span class="wrap-icon icon-phone mr-3"></span>
                            <span class="text">+1 (291) 939 9321</span>
                        </li>
                        <li class="d-flex">
                            <span class="wrap-icon icon-envelope mr-3"></span>
                            <span class="text">info@mywebsite.com</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= url('js/contact.js') . '?v=' . time() ?>"></script>
<?php include_once VIEWS . 'component' . DS . 'user' . DS . 'footer.php'; ?>
