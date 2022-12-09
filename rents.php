<?php
session_start();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Listing - Chatrabash</title>
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
    <section>
        <div class="container">
            <form action="rents.php" method="post">
            <div class="row g-0">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Find Your Perfect Property</h2>
                    <p class="text-muted w-lg-50"></p>
                </div>
                <div class="col-md-12">
                    <div class="d-md-flex justify-content-md-center align-items-md-center input-group" style="padding-top: 10px;padding-bottom: 10px;">
                        <div class="form-outline">
                            <div class="input-group"><input class="form-control" type="search" id="search-focus" placeholder="Search for" name="search_1"><input name="search" class="btn btn-primary" type="submit" value="Search"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-md-flex justify-content-md-center align-items-md-center"><select class="form-select-lg select" id="gender1t" data-mdb-filter="true" style="border-radius: 0px;border-width: 0px;background: rgba(222,222,222,0.4);margin: 5px;">
                            <option value="undefined">Gender</option>
                            <option value="12">Male</option>
                            <option value="13">Female</option>
                        </select><select class="form-select-lg select" id="gender1t-1" data-mdb-filter="true" style="border-radius: 0px;border-width: 0px;background: rgba(222,222,222,0.4);margin: 5px;">
                            <option value="undefined">Room Type</option>
                            <option value="">Single bed</option>
                            <option value="">Single Room </option>
                            <option value="">Other</option>
                        </select><select class="form-select-lg select" id="gender1t-2" data-mdb-filter="true" style="border-radius: 0px;border-width: 0px;background: rgba(222,222,222,0.4);margin: 5px;">
                            <option value="undefined">Select University</option>
                            <option value="">Gub</option>
                            <option value="">Aiub</option>
                            <option value="">Uap</option>
                            <option value="">Other</option>
                        </select><select class="form-select-lg select" id="gender1t-3" data-mdb-filter="true" style="border-radius: 0px;border-width: 0px;background: rgba(222,222,222,0.4);margin: 5px;">
                            <option value="undefined">Cost</option>
                            <option value="hl">High to low</option>
                            <option value="lh">Low to High</option>
                        </select></div>
                </div>
            </div>
            </form>

<?php
$conn=mysqli_connect("localhost","root","", "chatrabash");

//FOR PAGINATION-------------------------------
if(isset($_POST['search']) || isset($_POST['backBtn']) || isset($_POST['frontBtn']) || isset($_POST['numberBtn'])){
    $keyword= $_POST['search_1'];
    $sqlQ = "SELECT * FROM property_list WHERE property_name LIKE '%$keyword%'";
}else{
    $sqlQ = "SELECT * FROM property_list";

}
$queryQ = mysqli_query($conn,$sqlQ);
$num_rows = mysqli_num_rows($queryQ);

$divided_num = ($num_rows/5)+1;

if(isset($_GET['pageno'])){
    $get_page_no = $_GET['pageno'];
    $offset = ($get_page_no - 1) * 5;
    $get_page_no_increment = $get_page_no + 1;
    $get_page_no_decrement = $get_page_no - 1;
}else{
    $offset = 0;
    $get_page_no = 1;
    $get_page_no_increment = 2;
    $get_page_no_decrement = 0;
}
$searchvalue = isset($_POST['search']);
if(isset($_POST['search'])){
    $keyword= $_POST['search_1'];
    $sql="SELECT * FROM property_list WHERE property_name LIKE '%$keyword%' LIMIT 5 OFFSET $offset";
  }else{
    $sql = "SELECT * FROM property_list LIMIT 5 OFFSET $offset";
  }


  
  



$query = mysqli_query($conn,$sql);

function getPostThumb($conn,$id){
    $query2="SELECT * FROM property_images WHERE property_id=$id";
    $run=mysqli_query($conn,$query2);
    $data= mysqli_fetch_assoc($run);
    return $data['photo'];
}
while($data = mysqli_fetch_assoc($query)){

?>
            <div class="row" style="margin-top: 12px;margin-bottom: 4px;">
                <div class="col-md-4">
                    <div><a href="single_property.php?id=<?= $data['list_id']?>" ><img class="rounded img-fluid shadow w-100 fit-cover" alt=" " src="imag/listingImg/<?=getPostThumb($conn,$data['list_id'])?>" style="height: 250px;"></a></div>
                </div>
                <div class="col">
                    <div class="py-4"><span class="badge bg-primary mb-2" style="font-size: 14px;"><strong> &nbsp;&nbsp;  <?php echo $data['rent_rate'];?>/- TK  &nbsp;&nbsp; </strong><br></span><button class="btn btn-outline-primary btn-sm" type="submit" style="padding-bottom: 0px;padding-top: 0px;padding-right: 6px;padding-left: 6px;margin-left: 20px;font-size: 14px;font-weight: bold;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-square-dotted" style="font-size: 12px;">
                                <path d="M2.5 0c-.166 0-.33.016-.487.048l.194.98A1.51 1.51 0 0 1 2.5 1h.458V0H2.5zm2.292 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zm1.833 0h-.916v1h.916V0zm1.834 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zM13.5 0h-.458v1h.458c.1 0 .199.01.293.029l.194-.981A2.51 2.51 0 0 0 13.5 0zm2.079 1.11a2.511 2.511 0 0 0-.69-.689l-.556.831c.164.11.305.251.415.415l.83-.556zM1.11.421a2.511 2.511 0 0 0-.689.69l.831.556c.11-.164.251-.305.415-.415L1.11.422zM16 2.5c0-.166-.016-.33-.048-.487l-.98.194c.018.094.028.192.028.293v.458h1V2.5zM.048 2.013A2.51 2.51 0 0 0 0 2.5v.458h1V2.5c0-.1.01-.199.029-.293l-.981-.194zM0 3.875v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 5.708v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 7.542v.916h1v-.916H0zm15 .916h1v-.916h-1v.916zM0 9.375v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .916v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .917v.458c0 .166.016.33.048.487l.98-.194A1.51 1.51 0 0 1 1 13.5v-.458H0zm16 .458v-.458h-1v.458c0 .1-.01.199-.029.293l.981.194c.032-.158.048-.32.048-.487zM.421 14.89c.183.272.417.506.69.689l.556-.831a1.51 1.51 0 0 1-.415-.415l-.83.556zm14.469.689c.272-.183.506-.417.689-.69l-.831-.556c-.11.164-.251.305-.415.415l.556.83zm-12.877.373c.158.032.32.048.487.048h.458v-1H2.5c-.1 0-.199-.01-.293-.029l-.194.981zM13.5 16c.166 0 .33-.016.487-.048l-.194-.98A1.51 1.51 0 0 1 13.5 15h-.458v1h.458zm-9.625 0h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zm1.834-1v1h.916v-1h-.916zm1.833 1h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                            </svg>&nbsp;Compare</button>
                        <h4 class="fw-bold" style="font-size: 20px;"><?php echo $data['property_name'];?></h4>
                        <p class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-map">
                                <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"></path>
                            </svg><span style="color: rgb(0, 0, 0);">&nbsp;Location: <?php echo $data['full_address'];?></span><br></p>
                        <p class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-currency-dollar">
                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"></path>
                            </svg><span style="color: rgb(0, 0, 0);">&nbsp;University :<?php echo $data['university_name'];?></span><br></p>
                        <p class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-square-dotted">
                                <path d="M2.5 0c-.166 0-.33.016-.487.048l.194.98A1.51 1.51 0 0 1 2.5 1h.458V0H2.5zm2.292 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zm1.833 0h-.916v1h.916V0zm1.834 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zM13.5 0h-.458v1h.458c.1 0 .199.01.293.029l.194-.981A2.51 2.51 0 0 0 13.5 0zm2.079 1.11a2.511 2.511 0 0 0-.69-.689l-.556.831c.164.11.305.251.415.415l.83-.556zM1.11.421a2.511 2.511 0 0 0-.689.69l.831.556c.11-.164.251-.305.415-.415L1.11.422zM16 2.5c0-.166-.016-.33-.048-.487l-.98.194c.018.094.028.192.028.293v.458h1V2.5zM.048 2.013A2.51 2.51 0 0 0 0 2.5v.458h1V2.5c0-.1.01-.199.029-.293l-.981-.194zM0 3.875v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 5.708v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 7.542v.916h1v-.916H0zm15 .916h1v-.916h-1v.916zM0 9.375v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .916v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .917v.458c0 .166.016.33.048.487l.98-.194A1.51 1.51 0 0 1 1 13.5v-.458H0zm16 .458v-.458h-1v.458c0 .1-.01.199-.029.293l.981.194c.032-.158.048-.32.048-.487zM.421 14.89c.183.272.417.506.69.689l.556-.831a1.51 1.51 0 0 1-.415-.415l-.83.556zm14.469.689c.272-.183.506-.417.689-.69l-.831-.556c-.11.164-.251.305-.415.415l.556.83zm-12.877.373c.158.032.32.048.487.048h.458v-1H2.5c-.1 0-.199-.01-.293-.029l-.194.981zM13.5 16c.166 0 .33-.016.487-.048l-.194-.98A1.51 1.51 0 0 1 13.5 15h-.458v1h.458zm-9.625 0h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zm1.834-1v1h.916v-1h-.916zm1.833 1h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                            </svg><span style="color: rgb(0, 0, 0);">&nbsp;Room Type: <?php echo $data['property_type'];?></span></p>
                        <p class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-gender-trans">
                                <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1.707L3.5 2.793l.646-.647a.5.5 0 1 1 .708.708l-.647.646.822.822A3.99 3.99 0 0 1 8 3c1.18 0 2.239.51 2.971 1.322L14.293 1H11.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 0 1-3.05-5.814l-.95-.949-.646.647a.5.5 0 1 1-.708-.708l.647-.646L1 1.707V3.5a.5.5 0 0 1-1 0v-3zm5.49 4.856a3 3 0 1 0 5.02 3.288 3 3 0 0 0-5.02-3.288z"></path>
                            </svg><span style="color: rgb(0, 0, 0);">&nbsp;Gender: <?php echo $data['gender'];?></span><br></p><button class="btn btn-outline-primary btn-sm" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">
                                <path d="M3 1C2.44772 1 2 1.44772 2 2C2 2.55228 2.44772 3 3 3H4.21922L4.52478 4.22224C4.52799 4.23637 4.5315 4.25039 4.5353 4.26429L5.89253 9.69321L4.99995 10.5858C3.74002 11.8457 4.63235 14 6.41416 14H15C15.5522 14 16 13.5523 16 13C16 12.4477 15.5522 12 15 12L6.41417 12L7.41416 11H14C14.3788 11 14.725 10.786 14.8944 10.4472L17.8944 4.44721C18.0494 4.13723 18.0329 3.76909 17.8507 3.47427C17.6684 3.17945 17.3466 3 17 3H6.28078L5.97014 1.75746C5.85885 1.3123 5.45887 1 5 1H3Z" fill="currentColor"></path>
                                <path d="M16 16.5C16 17.3284 15.3284 18 14.5 18C13.6716 18 13 17.3284 13 16.5C13 15.6716 13.6716 15 14.5 15C15.3284 15 16 15.6716 16 16.5Z" fill="currentColor"></path>
                                <path d="M6.5 18C7.32843 18 8 17.3284 8 16.5C8 15.6716 7.32843 15 6.5 15C5.67157 15 5 15.6716 5 16.5C5 17.3284 5.67157 18 6.5 18Z" fill="currentColor"></path>
                            </svg>&nbsp;Rent&nbsp;</button><a class="btn btn-outline-primary btn-sm" role="button" style="margin-left: 10px;" href="single_property.php?id=<?= $data['list_id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-circle">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                            </svg>&nbsp;View<br></a>
                    </div>
                </div>
            </div>
<?php
}
?>
        </div>
    </section>
    <div style="text-align :center;">
    <?php
    if($get_page_no_decrement < 1){
         echo "<";
    }else{
        echo "<a name='backBtn' href='rents.php?pageno=$get_page_no_decrement'> < </a>";
    }

    
    for($x=1; $x<$divided_num; $x++){
        if($x == $get_page_no){
            echo $x;
        }else{
            echo "<a name='numberBtn' href='rents.php?pageno=$x'> $x </a>";
        }
    }    if($get_page_no_increment > $divided_num){
        echo ">";
   }else{
        echo "<a name='frontBtn' href='rents.php?pageno=$get_page_no_increment'> > </a>";
   }
    ?>
    </div>

    <?php
        include('include/footer.php');
    ?>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Bold-BS4-Animated-Back-To-Top.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>