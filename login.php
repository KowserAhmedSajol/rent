<?php
$conn=mysqli_connect("localhost","root","", "chatrabash");
$msg = "";
session_start();
if(isset($_SESSION['USER_ID'])){
    header("location:index.php");
} else {
    if(isset($_POST['submit'])) {
        $email= mysqli_real_escape_string($conn,$_POST['email']);
        $password= mysqli_real_escape_string($conn,sha1($_POST['password']));
    
        $sql=mysqli_query($conn,"select * from users where email='$email' && password='$password'");
        $num=mysqli_num_rows($sql);
        if ($num>0) {
            session_start();
            $msg = "";
            $row=mysqli_fetch_assoc($sql);
            $_SESSION['USER_ID']=$row['id'];
            $_SESSION['USER_F_NAME']=$row['firstname'];
            $_SESSION['USER_NAME']=$row['lastname'];
            $_SESSION['EMAIL']=$row['email'];
            header("location:index.php");
        } else {
            $msg = "Something is Wrong";
        }

}

}



    
















?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - Chatrabash</title>
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
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Login</p>
                    <h2 class="fw-bold">Welcome back</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <div class="error">
                                <?php echo $msg; ?>
                            </div>
                            <form method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Put Your Email"></div>
                                <div style="display: flex; align-items: center;" class="mb-3"><input style="width:100%;" id="password" class="form-control" type="password" name="password" placeholder="Your Password"> <img style="width:25px; cursor:pointer;" src="imag/eye-close.png" id="eyeicon">  </div>
                                <div class="mb-3"><input class="btn btn-primary shadow d-block w-100" type="submit" name="submit" value="Log In"/></div>
                                <p class="text-muted">Don't have account?&nbsp;<a href="signup.php">Signup</a></p>
                            </form>
                            <p class="text-muted">Forgot your password?&nbsp;<a href="preset.php">Reset</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('include/footer.php');
    ?>
    <script>
         let eyeicon= document.getElementById("eyeicon");
         let password= document.getElementById("password");

         eyeicon.onclick = function(){
            if(password.type == "password"){
                password.type = "text";
                eyeicon.src = "imag/eye-open.png";
            }else{
                password.type = "password";
                eyeicon.src = "imag/eye-close.png";

            }
         }


    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Bold-BS4-Animated-Back-To-Top.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>