<!DOCTYPE html>
<html>

<?php include 'includes/header.php'?>

<body id="page-top">
    <?php include 'includes/navbar.php';?>
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner">
            <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/IMG-20190512-WA0015.jpg" alt="Slide Image" width="100%" height="100%"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/20190528_115135.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/20190528_115134.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/IMG-20190506-WA0020.jpg" alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
        </ol>
    </div>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Ready to start your academic year with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center ml-auto"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true" style="color: var(--blue) !important;"></i>
                    <p style="color: var(--blue) !important;">012 299 1234</p>
                </div>
                <div class="col-lg-4 text-center mr-auto"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true" style="color: var(--blue) !important;"></i>
                    <p><a href="mailto:your-email@your-domain.com" style="color: var(--blue) !important;">academicsupport@tut.ac.za</a></p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'includes/scripts.php';?>
</body>

</html>