<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - Brand</title>
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
    <section class="text-center" style="margin-top: 80px;">
        <header>
            <h2 class="text-uppercase fw-bolder text-center text-primary border rounded">Before applying please read this carefully!</h2><small class="form-text">Help text for a form field.</small>
        </header>
    </section>
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row g-0 mb-4 mb-lg-5" style="border-top-left-radius: 3px;border-top-right-radius: 10px;border-top: 30px solid var(--bs-purple) ;border-right: 1px solid var(--bs-indigo) ;">
                <div class="col-md-8 col-xl-6 text-center mx-auto" style="padding-top: 40px;padding-bottom: 10px;border-bottom-left-radius: 1px;border-bottom-right-radius: 1px;box-shadow: inset 0px 20px 20px 0px rgb(224,228,239);border-bottom: 3px solid #87ceeb ;">
                    <h2 class="fw-bold">Became a tutor at Chatrabash</h2>
                </div>
            </div>
            <form class="row g-3" style="margin-right: 0px;margin-top: 0px;margin-left: 0px;border-bottom-right-radius: 6px;border-right: 1px solid var(--bs-purple);border-bottom: 10px solid var(--bs-purple);border-left-width: 0px;border-left-color: var(--bs-blue);box-shadow: 40px 40px 20px 20px rgb(223,228,239);">
                <div class="col-md-4"><label class="form-label" for="Firstname">First Name</label><input class="form-control" type="text" id="Fast-name" name="Fast name" autocomplete="on" required="" value="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-4"><label class="form-label" for="Lastname"><span style="color: rgb(33, 37, 41); background-color: transparent;">Last name</span><br></label><input class="form-control" type="text" id="Last-name" name="Last name" autocomplete="on" required="" value="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-4" style="border-top-color: var(--bs-blue);"><label class="form-label" for="Lastname"><span style="color: rgb(33, 37, 41);">Date of Birth</span><br></label><input class="form-control" type="date" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-6"><label class="form-label">Email</label><input class="form-control" type="email" id="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-6"><label class="form-label">Phone Number</label><input class="form-control" type="tel" required="" pattern="(?:(?:\+|00)88|01)?\d{11}" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-12"><label class="form-label">Present Address</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-12"><label class="form-label">Permanent Address</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-4"><label class="form-label">College</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-2"><label class="form-label">Year/HSC</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-3"><label class="form-label">Result</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-3"><label class="form-label">Subject</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-4"><label class="form-label">University</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-2"><label class="form-label">Semester</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-3"><label class="form-label">Result</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-3"><label class="form-label">Subject</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-6"><label class="form-label">City</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-3"><label class="form-label">Thana</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-3"><label class="form-label">Zip Code&nbsp;</label><input class="form-control" type="text" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-4"><label class="form-label">Recently Clicked Image</label><input class="form-control" type="file" required="" accept="image/*" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-md-4"><label class="form-label">Attached NID &amp; Student ID</label><input class="form-control" type="file" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div id="fileupload" class="col-md-4"><label class="form-label">CV</label><input class="form-control" type="file" required="" style="border-radius: 6px;">
                    <div class="valid-feedback" valid=""></div>
                    <div class="invalid-feedback" invalid=""></div>
                </div>
                <div class="col-12" style="margin-top: 30px;margin-bottom: 30px;padding: 0px;padding-right: 0px;">
                    <div class="form-check" style="margin-top: 40px;">
                        <div class="form-check form-switch" style="margin-top: 10px;"><input class="form-check-input" type="checkbox" id="formCheck-1" required=""><label class="form-check-label" for="formCheck-1"><span style="color: rgb(33, 37, 41); background-color: transparent;">Agree to terms and conditions.</span><br></label></div>
                    </div>
                    <div class="form-check" style="padding-top: 20px;margin-top: 0px;"><button class="btn btn-primary shadow" type="submit" style="border-radius: 6px;border-bottom-left-radius: 6px;border-top-left-radius: 6px;background: #48b4e0;border-style: none;border-bottom-style: none;">Submit</button></div>
                </div>
            </form>
        </div>
    </section>
    <footer class="bg-primary-gradient" style="background: rgb(235,247,255);border-top-left-radius: 0px;border-top-right-radius: 0px;border-top: 6px solid #87ceeb;">
        <div class="container py-4 py-lg-5">
            <div class="row">
                <div class="col item">
                    <h3 class="fs-6 fw-bold">Services</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Property Rents</a></li>
                        <li><a href="#">Tutor</a></li>
                        <li><a href="#">Verified Post</a></li>
                    </ul>
                </div>
                <div class="col item">
                    <h3 class="fs-6 fw-bold">About</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col item">
                    <h3 class="fs-6 fw-bold">Careers</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee</a></li>
                        <li><a href="apt.html"><span style="text-decoration: underline;">Apply for tutor</span></a></li>
                    </ul>
                </div>
                <div class="col item social">
                    <div class="fw-bold d-flex align-items-center mb-2"><span class="d-flex justify-content-center align-items-center bs-icon me-2"><img class="img-fluid" src="assets/img/icons8-home-96.png"></span><span><strong><span style="color: rgba(0, 0, 0, 0.9);">Chatrabasah</span></strong><br></span></div>
                    <p class="text-muted copyright"><span style="color: rgba(0, 0, 0, 0.9);">Chatrabasah</span>&nbsp;is a leading letting-property and tutor portal web-site.</p>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2022 ||&nbsp;<strong><em>Chatrabasah</em></strong></p>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Bold-BS4-Animated-Back-To-Top.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>