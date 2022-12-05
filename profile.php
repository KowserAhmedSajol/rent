
<?php
require('include/config.php');

session_start();

$and = "oye";
if(isset($_SESSION['USER_ID'])){
    ?>
    





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Chatrabash3</title>
    <meta name="description" content="Online accommodation system for university students. 
Design by @Sazib.Gub">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dokdo&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/Slider.css">
</head>



<body>
    <?php
        include('include/navbar.php');
    ?>
    <section></section>
    <section>
        <div class="container">
            <div style="margin-top: 10px;">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">User information</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Listing Posted</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel" id="tab-1">
                        <h3 class="text-dark mb-4">Profile</h3>
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="card border-0 mb-3">
                                    <div class="card-body text-center"><img class="rounded-circle mb-3 mt-4" src="assets/img/svg/Campsite.svg" width="160" height="160">
                                        <div class="mb-3"><button class="btn btn-outline-primary btn-sm" type="button">Change Photo</button></div>
                                    </div>
                                </div>

                                <!---------------------------------->
                                <!--./* Update Password starts */.-->
                                <!---------------------------------->


                                <div class="text-center"><a class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">Change Password<br></a>
                                    <div class="collapse" id="collapse-1">
                                        <div class="card" style="margin-top: 10px;">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 fw-bold">Update Password</p>
                                                
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="profile.php" enctype="application/x-www-form-urlencoded">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="p1"><strong>New Password&nbsp;</strong></label><input class="form-control" type="text" id="p1" placeholder="#45pass" name="npass"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="p2"><strong>Old Password&nbsp;</strong></label><input class="form-control" type="text" id="p-2" placeholder="#45pass" name="opass"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3"><input class="btn btn-primary btn-sm" type="submit" name="change" value="Confirmation&nbsp;"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if (isset($_POST['change'])){
                                    $newPass      = sha1($_POST['npass']);
                                    $oldPass      = sha1($_POST['opass']);
                                    $savedPass    = $_SESSION['PASSWORD'];
                                    $id           = $_SESSION['USER_ID'];

                                    if($oldPass == $savedPass){
                                        ?>
                                        <br/>
                                        <div class="card-header py-3">
                                                <p class="text-primary m-0 fw-bold">Password Changed Successfully</p>  
                                        </div>
                                        <?php
                                          $conn=mysqli_connect("localhost","root","", "chatrabash");
                                          if($conn === false){
                                            die("ERROR: Could not connect. " . mysqli_connect_error());
                                        }
                                        $sql = "UPDATE users SET password=? WHERE id=?";
                                        $stmtinsert = $conn->prepare($sql);
                                        $result = $stmtinsert->execute([$newPass, $id ]);
                                          
                                          
                                    }else {
                                        echo "not matched";
                                    }

                                }else {
                                    

                                }
                                ?>




                                
                                <!---------------------------------->
                                <!--./* Update Password Ends */.-->
                                <!---------------------------------->
                            </div>
                            <div class="col-lg-8">
                                <div class="row mb-3 d-none">
                                    <div class="col">
                                        <div class="card text-white bg-primary shadow">
                                            <div class="card-body">
                                                <div class="row mb-2">
                                                    <div class="col">
                                                        <p class="m-0">Peformance</p>
                                                        <p class="m-0"><strong>65.2%</strong></p>
                                                    </div>
                                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                                </div>
                                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card text-white bg-success shadow">
                                            <div class="card-body">
                                                <div class="row mb-2">
                                                    <div class="col">
                                                        <p class="m-0">Peformance</p>
                                                        <p class="m-0"><strong>65.2%</strong></p>
                                                    </div>
                                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                                </div>
                                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card shadow mb-3">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 fw-bold">User Settings</p>
                                            </div>
                                            <div class="card-body">
                                                <form method="get" enctype="application/x-www-form-urlencoded">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><br/><?php echo $_SESSION['USER_F_NAME'];?></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label><br/><?php echo $_SESSION['USER_NAME'];?></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><br/><?php echo $_SESSION['EMAIL'];?></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="username"><strong>Phone number</strong><br></label><br/><?php echo $_SESSION['PHONE'];?></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card shadow">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 fw-bold">Contact Settings</p>
                                            </div>
                                             
                                                <!---------------------------------->
                                                <!--./* Additional Data starts */.-->
                                                <!---------------------------------->



                                            <div class="card-body">
                                                <form method="post" action="profile.php" enctype="application/x-www-form-urlencoded">
                                                    <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><textarea class="form-control" type="text" id="address" rows="6" placeholder="Green Roads" name="address"></textarea></div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input class="form-control" type="text" id="city" placeholder="Dhaka" name="city"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><input class="form-control" type="text" id="country" placeholder="Bangladesh" name="country"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" name="extraSubmit">Save&nbsp;Settings</button></div>
                                                </form>
                                            </div>
                                            <?php

                                        
    if (isset($_POST['extraSubmit'])) {
        $address = $_POST['address'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $id = $_SESSION['USER_ID'];
        $conn=mysqli_connect("localhost","root","", "chatrabash");
        if($conn === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "UPDATE users SET address=?, city=?, country=? WHERE id=?";
        $stmtinsert = $conn->prepare($sql);
        $result = $stmtinsert->execute([$address, $city, $country, $id ]);
    }

                    
                    
                                            ?>
                                  


                                            <!---------------------------------->
                                            <!--./* Additional Data Ends */.-->
                                            <!---------------------------------->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="tab-2">
                        <div class="row g-0" style="margin-top: 10px;">
                            <div class="col">
                                <div>
                                    <ul class="nav nav-pills nav-fill" role="tablist">
                                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="pill" href="#tab-3">My Property</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="pill" href="#tab-4">Submit New Property<br></a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="pill" href="#tab-5">My Packages</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="pill" href="#tab-6">View Contacts</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" role="tabpanel" id="tab-3">
                                            <section>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Title</h4>
                                                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                                                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="tab-4">
                                            <section>
                                                <div class="card">
                                                <?php
                                                    include('include/listing.php');
                                                ?>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="tab-pane active" role="tabpanel" id="tab-5">
                                            <section>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <section class="py-5" style="border-width: 0px;">
                                                            <div class="container py-4 py-xl-5">
                                                                <div class="row mb-5">
                                                                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                                                                        <h2 class="display-6 fw-bold mb-4">Check out<br>our <span class="underline">primum services</span></h2>
                                                                    </div>
                                                                </div>
                                                                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                                                                    <div class="col">
                                                                        <div class="card border-0 h-100">
                                                                            <div class="card-body d-flex flex-column justify-content-between p-4">
                                                                                <div>
                                                                                    <h6 class="fw-bold text-muted">Standard</h6>
                                                                                    <h4 class="display-5 fw-bold mb-4"><span style="text-decoration: line-through;">1500TK</span></h4>
                                                                                    <ul class="list-unstyled">
                                                                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                                    <path d="M5 12l5 5l10 -10"></path>
                                                                                                </svg></span><span>Package Duration&nbsp; 30 days</span></li>
                                                                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                                    <path d="M5 12l5 5l10 -10"></path>
                                                                                                </svg></span><span>Total Properties&nbsp; &nbsp; &nbsp; 02</span></li>
                                                                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                                    <path d="M5 12l5 5l10 -10"></path>
                                                                                                </svg></span><span>Basic Ads on our site</span></li>
                                                                                    </ul>
                                                                                </div><a class="btn btn-outline-primary border-0" role="button" href="inside/comming.html" style="border-width: 0px;">Subscribe</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="card border-warning border-2 h-100" style="background: #eeece4;">
                                                                            <div class="card-body d-flex flex-column justify-content-between p-4"><span class="badge bg-warning position-absolute top-0 end-0 rounded-bottom-left text-uppercase text-primary">Most Popular</span>
                                                                                <div>
                                                                                    <h6 class="fw-bold text-muted">Pro</h6>
                                                                                    <h4 class="display-5 fw-bold mb-4">3500TK</h4>
                                                                                    <ul class="list-unstyled">
                                                                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                                    <path d="M5 12l5 5l10 -10"></path>
                                                                                                </svg></span><span>Package Duration&nbsp; 35 days<br></span></li>
                                                                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                                    <path d="M5 12l5 5l10 -10"></path>
                                                                                                </svg></span><span>Total Properties&nbsp; &nbsp; &nbsp; 08<br></span></li>
                                                                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                                    <path d="M5 12l5 5l10 -10"></path>
                                                                                                </svg></span><span>Post Editorial Request<br></span></li>
                                                                                    </ul>
                                                                                </div><a class="btn btn-warning" role="button" href="inside/comming.html">Subscribe</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="card border-0 h-100">
                                                                            <div class="card-body d-flex flex-column justify-content-between p-4">
                                                                                <div class="pb-4">
                                                                                    <h6 class="fw-bold text-muted">Enterprise</h6>
                                                                                    <h4 class="display-5 fw-bold mb-4">6999</h4>
                                                                                    <ul class="list-unstyled">
                                                                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                                    <path d="M5 12l5 5l10 -10"></path>
                                                                                                </svg></span><span>Package Duration&nbsp; 55 days<br></span></li>
                                                                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                                    <path d="M5 12l5 5l10 -10"></path>
                                                                                                </svg></span><span>Total Properties&nbsp; &nbsp; &nbsp; 20<br></span></li>
                                                                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                                    <path d="M5 12l5 5l10 -10"></path>
                                                                                                </svg></span><span>Post Editorial Request<br></span></li>
                                                                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                                    <path d="M5 12l5 5l10 -10"></path>
                                                                                                </svg></span><span>Spatial Recommendation Sent</span></li>
                                                                                    </ul>
                                                                                </div><a class="btn btn-outline-primary border-0" role="button" href="inside/comming.html">Subscribe</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="tab-6">
                                            <p>Content for tab 6.</p>
                                            <section>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Title</h4>
                                                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                                                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#"><strong>Agreement</strong></a><a class="card-link" href="#"><strong>Disagree</strong></a>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
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
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Slider.js"></script>
    <script src="assets/js/ssmodern.js"></script>
</body>

</html>
    <?php
} else {
    header("location:login.php");
}



?>

