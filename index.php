<?php
require('include/config.php');
session_start();
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Chatrabasah</title>
    <link rel="icon" href="assets/img/icons8-home-96.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/animated-services.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Animated-Back-To-Top.css">
    <link rel="stylesheet" href="assets/css/Features-Cards.css">
    <link rel="stylesheet" href="assets/css/Filter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Latest-Events.css">
    <link rel="stylesheet" href="assets/css/Responsive-Client-Two.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Ultimate-Testimonial-Slider-BS5.css">
    <link rel="stylesheet" href="assets/css/User-rating.css">
</head>

<body>
    <?php
        include('include/navbar.php');
    ?>
    <header class="">
        <div class="container-fluid pt-4 pt-xl-5" data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="1" style="background-image: url(&quot;assets/img/t.png&quot;);background-position: center;background-size: cover;">
            <div class="row pt-5">
                <div class="col-md-8 text-center text-md-start mx-auto" style="backdrop-filter: blur(30px);padding-bottom: 100px;padding-top: 60px;">
                    <div class="text-center">
                        <p class="lead fw-semibold mb-2" style="color: var(--bs-light);">The best accommodation fender for university students<br></p>
                        <h1 class="display-4 fw-semibold mb-5" style="color: var(--bs-warning);padding-bottom: 20px;"><span style="color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) ;">Selected #1 Countrywide</span><br></h1>
                        <p class="fs-5 text-muted mb-5">Metus quisque ultricies vehicula proin, magna nullam.</p>
                        <form class="d-flex justify-content-center flex-wrap" method="post" style="padding-bottom: 100px;">
                            <div class="shadow-lg mb-3"><input class="form-control form-control-lg" type="search" placeholder="🔍 City, University"></div>
                            <div class="shadow-lg mb-3"><button class="btn btn-primary btn-lg" type="submit">Search</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto" style="backdrop-filter: blur(30px);">
                    <div class="text-center position-relative"></div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center" style="padding-top: 20px;padding-bottom: 20px;"><button class="btn btn-danger fs-4 shadow-lg" type="submit" data-bs-toggle="modal" data-bs-target="#modal-1"><img class="img-fluid" id="im-1" src="assets/img/arrowwhite.gif" style="width: 32px;" width="32" height="29">&nbsp;Request for a Room&nbsp;<img class="img-fluid" id="im4" src="assets/img/arrowwhite.gif" style="width: 32px;" width="32" height="29"></button>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-1" aria-labelledby="modal-1" aria-hidden="true" style="filter: blur(0px);">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header text-primary shadow-lg" style="border-top-left-radius: 0px;border-top-right-radius: 0px;border-width: 4px;color: var(--bs-blue);">
                        <h4 class="modal-title">Submit a&nbsp; request to us !</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="filter: blur(0px);">
                        <section class="position-relative py-4 py-xl-5" style="color: var(--bs-blue);filter: blur(0px);padding-bottom: 0px;">
                            <div class="container position-relative">
                                <div class="row d-flex">
                                    <div class="col-lg-12">
                                        <div class="card mb-5">
                                            <div class="card-body p-sm-5" style="border-style: none;">
                                                <form data-bss-redirect-url="index.html">
                                                    <div class="mb-3"><small class="form-text">100TK</small><input class="form-control form-control-sm" type="text" placeholder="Ref ID"></div>
                                                    <div class="mb-3"><small class="form-text">Gender</small><select class="form-select form-select-sm" style="border-width: 1px;" required="" name="Gender ">
                                                            <option value="12">Male</option>
                                                            <option value="13">Female</option>
                                                        </select></div>
                                                    <div class="mb-3"><small class="form-text">Fixed a meting date and time</small><input class="form-control form-control-sm" type="datetime-local" required="">
                                                        <div class="mb-3"></div>
                                                    </div>
                                                    <div class="mb-3"><input class="form-control form-control-sm" type="number" required="" placeholder="Rent Range"></div>
                                                    <div class="mb-3"><input class="form-control form-control-sm" type="text" id="name-2" name="name" placeholder="University" required=""></div>
                                                    <div class="mb-3"><input class="form-control form-control-sm" type="text" id="name-1" name="name" placeholder="Preferable Area" required=""></div>
                                                    <div class="mb-3"><input class="form-control form-control-sm" type="text" id="name-3" name="name" placeholder="Your Name" required=""></div>
                                                    <div class="mb-3"><input class="form-control form-control-sm" type="email" id="email-2" name="email" placeholder="Your Email  (Optional)"></div>
                                                    <div class="mb-3"><input class="form-control form-control-sm" type="tel" placeholder="Your Number" name="number" required="" maxlength="12" minlength="8"></div>
                                                    <div class="mb-3"><textarea class="form-control form-control-sm" id="message-2" name="message" rows="6" placeholder="Full Address"></textarea></div>
                                                    <div><button class="btn btn-primary btn-sm shadow-lg d-block w-100" type="submit">Send </button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="card border-light border-1 d-flex justify-content-center p-4">
                        <div class="card-body">
                            <div class="bs-icon-lg d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon"><img class="img-fluid" src="assets/img/clipboard-image-2.png" style="height: 64px;width: 64px;"></div>
                            <div>
                                <h4 class="fw-bold"><span style="border-bottom: 4px solid var(--bs-yellow) ;">UGC</span></h4>
                                <p class="text-muted">University Grants Commission of Bangladesh was established on 16 December 1972. It was created according to the Presidential Order of the Government of People's Republic of Bangladesh.&nbsp;Under the Ministry of Human Resources Development &amp; affiliated with the ministry of higher education.<br></p><button class="btn btn-sm px-0" type="button">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg><br></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-light border-1 d-flex justify-content-center p-4">
                        <div class="card-body">
                            <div class="bs-icon-lg bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon"><img class="img-fluid" src="assets/img/clipboard-image-1.png"></div>
                            <div>
                                <h4 class="fw-bold"><span style="border-bottom: 4px solid var(--bs-yellow) ;">IEEE</span></h4>
                                <p class="text-muted">The Institute of Electrical and Electronics Engineers is a 501 professional association for electronic engineering and electrical engineering with its corporate office in New York City and its operations center in Piscataway, New Jersey. The main scope of the IEEE is dedicated to advancing technology for the benefit of humanity.<br></p><button class="btn btn-sm px-0" type="button">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg><br></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-light border-1 d-flex justify-content-center p-4">
                        <div class="card-body">
                            <div class="bs-icon-lg d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon"><img class="img-fluid" src="assets/img/qsa.png"></div>
                            <div>
                                <h4 class="fw-bold"><span style="border-bottom: 4px solid var(--bs-yellow) ;">QS</span></h4>
                                <p class="text-muted">QS World University Rankings is an annual publication of university rankings by Quacquarelli Symonds. The QS system comprises three parts: the global overall ranking, the subject rankings, and five independent regional tables—namely Asia, Latin America, Emerging Europe and Central Asia, the Arab Region, and BRICS.<br></p><button class="btn btn-sm px-0" type="button">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg><br></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="display-6 fw-bold pb-md-4">Our Service</h3>
                </div>
                <div class="col-md-6 pt-4">
                    <p class="text-muted mb-4">Donation make better</p>
                </div>
            </div>
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <div class="row gy-2 row-cols-1 row-cols-sm-2">
                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-sun fs-3 text-primary bg-warning">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2"><strong>Verified Rent post</strong><br></h5>
                                </div>
                                <p class="text-muted my-3">Auctor nisi et, habitant gravida ad lectus posuere.</p>
                            </div>
                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-sun fs-3 text-primary bg-warning">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2"><strong>Spatial Request</strong><br></h5>
                                </div>
                                <p class="text-muted my-3">Auctor nisi et, habitant gravida ad lectus posuere.</p>
                            </div>
                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-sun fs-3 text-primary bg-warning">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2"><strong>Owner and Tenant&nbsp;</strong><br></h5>
                                </div>
                                <p class="text-muted my-3">Auctor nisi et, habitant gravida ad lectus posuere.</p>
                            </div>
                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-sun fs-3 text-primary bg-warning">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2"><strong>Rental Agreement</strong><br></h5>
                                </div>
                                <p class="text-muted my-3">Auctor nisi et, habitant gravida ad lectus posuere.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-first order-md-last">
                    <div><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="assets/img/svg/Desert%20Island.svg"></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div><img class="rounded img-fluid fit-cover" style="min-height: 300px;" src="assets/img/svg/Sea%20sunset.svg" width="800"></div>
                </div>
                <div class="col">
                    <div style="max-width: 450px;">
                        <h3 class="fw-bold pb-md-4">We provide&nbsp;</h3>
                        <p class="text-muted py-4 py-md-0">It helps to know our service</p>
                        <div class="row gy-4 row-cols-2 row-cols-md-2">
                            <div class="col">
                                <div><span class="fs-2 fw-bold text-primary bg-warning">40+</span>
                                    <p class="fw-normal text-muted">Agreement</p>
                                </div>
                            </div>
                            <div class="col">
                                <div><span class="fs-2 fw-bold text-primary bg-warning">100+</span>
                                    <p class="fw-normal text-muted">Accommodation Post</p>
                                </div>
                            </div>
                            <div class="col">
                                <div><span class="fs-2 fw-bold text-primary bg-warning">5+</span>
                                    <p class="fw-normal text-muted">University Add</p>
                                </div>
                            </div>
                            <div class="col">
                                <div><span class="fs-2 fw-bold text-primary bg-warning">20+</span>
                                    <p class="fw-normal text-muted">Area Coverage</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">What people say<br><span class="underline pb-2">about us</span></h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center">
                <div class="col mb-4">
                    <div class="d-flex align-items-center align-items-sm-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-quote fs-1 text-warning flex-shrink-0">
                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                        </svg>
                        <div>
                            <p class="fs-6 mb-3 ms-2">Nisi sit justo faucibus nec ornare amet, tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                            <div class="d-flex ms-2">
                                <div class="d-flex">
                                    <p class="fw-bold me-2">John Smith</p>
                                    <p class="text-muted mb-0">Erat netus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="d-flex align-items-center align-items-sm-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-quote fs-1 text-warning flex-shrink-0">
                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                        </svg>
                        <div>
                            <p class="fs-6 mb-3 ms-2">Nisi sit justo faucibus nec ornare amet, tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                            <div class="d-flex ms-2">
                                <div class="d-flex">
                                    <p class="fw-bold me-2">John Smith</p>
                                    <p class="text-muted mb-0">Erat netus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="d-flex align-items-center align-items-sm-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-quote fs-1 text-warning flex-shrink-0">
                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                        </svg>
                        <div>
                            <p class="fs-6 mb-3 ms-2">Nisi sit justo faucibus nec ornare amet, tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                            <div class="d-flex ms-2">
                                <div class="d-flex">
                                    <p class="fw-bold me-2">John Smith</p>
                                    <p class="text-muted mb-0">Erat netus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-bg-light py-4 py-xl-5 mb-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="display-6 fw-bold mb-5"><span class="pb-3 underline">FAQ<br></span></h2>
                    <p class="text-muted mb-5">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-8 mx-auto">
                    <div class="accordion text-muted" role="tablist" id="accordion-1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true" aria-controls="accordion-1 .item-1">Aenean arcu euismod aliquam, volutpat consequat?</button></h2>
                            <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p>Maecenas diam volutpat, erat quis enim cras lobortis vivamus donec tempor. Congue ultrices donec turpis vivamus. Laoreet aenean metus, mi nunc massa feugiat duis. Pharetra erat consequat purus curae quisque, etiam accumsan class.</p>
                                    <p class="mb-0">Commodo rutrum quisque curabitur habitasse, suspendisse etiam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2">Lorem quam erat placerat mollis, rhoncus senectus?</button></h2>
                            <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3">Iaculis accumsan id, facilisis proin ipsum velit neque?</button></h2>
                            <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('include/footer.php');
    ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/ssmodern.js"></script>
</body>
</html>