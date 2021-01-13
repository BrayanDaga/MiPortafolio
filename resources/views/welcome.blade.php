<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="py-3 navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="my-2 ml-auto navbar-nav my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="text-center row h-100 align-items-center justify-content-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-white text-uppercase font-weight-bold">Your Favorite Source of Free Bootstrap Themes</h1>
                        <hr class="my-4 divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="mb-5 text-white-75 font-weight-light">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center col-lg-8">
                        <h2 class="mt-0 text-white">We've got what you need!</h2>
                        <hr class="my-4 divider light" />
                        <p class="mb-4 text-white-50">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="mt-0 text-center">At Your Service</h2>
                <hr class="my-4 divider" />
                <div class="row">
                    <div class="text-center col-lg-3 col-md-6">
                        <div class="mt-5">
                            <i class="mb-4 fas fa-4x fa-gem text-primary"></i>
                            <h3 class="mb-2 h4">Sturdy Themes</h3>
                            <p class="mb-0 text-muted">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                    </div>
                    <div class="text-center col-lg-3 col-md-6">
                        <div class="mt-5">
                            <i class="mb-4 fas fa-4x fa-laptop-code text-primary"></i>
                            <h3 class="mb-2 h4">Up to Date</h3>
                            <p class="mb-0 text-muted">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="text-center col-lg-3 col-md-6">
                        <div class="mt-5">
                            <i class="mb-4 fas fa-4x fa-globe text-primary"></i>
                            <h3 class="mb-2 h4">Ready to Publish</h3>
                            <p class="mb-0 text-muted">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="text-center col-lg-3 col-md-6">
                        <div class="mt-5">
                            <i class="mb-4 fas fa-4x fa-heart text-primary"></i>
                            <h3 class="mb-2 h4">Made with Love</h3>
                            <p class="mb-0 text-muted">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="p-0 container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="" />
                            <div class="p-3 portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="text-white page-section bg-dark">
            <div class="container text-center">
                <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center col-lg-8">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="my-4 divider" />
                        <p class="mb-5 text-muted">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-5 ml-auto text-center col-lg-4 mb-lg-0">
                        <i class="mb-3 fas fa-phone fa-3x text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                    <div class="mr-auto text-center col-lg-4">
                        <i class="mb-3 fas fa-envelope fa-3x text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-light">
            <div class="container"><div class="text-center small text-muted">Copyright © 2020 - Start Bootstrap</div></div>
        </footer>

    </body>
</html>
