
<nav class="navbar navbar-light navbar-expand-md navbar-shrink py-3" id="mainNav">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="index.php">
            <span class="d-flex justify-content-center align-items-center me-2 bs-icon"
                style="width: 32px;height: 32px;font-size: 12px;">
                <img class="img-fluid" src="assets/img/icons8-home-96.png"
                    style="color: rgba(171,85,85,0.9);"></span><span>Chatrabasah</span></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-2">
           
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="btn btn-outline-secondary" role="button" href="listing.php" style="border-style: none;">Listing</a></li>
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="rents.php">Rents</a></li>
                <li class="nav-item"><a class="nav-link" href="../test">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="contacts.php">Contacts</a></li>
            </ul>
            <?php
            if(!isset($_SESSION['USER_ID'])) {?>
              <a class="btn btn-outline-light btn-sm" role="button" href="signup.php"
                  style="padding-right: 20px;padding-left: 20px;padding-top: 7px;padding-bottom: 7px;--bs-info: #4ab9e6;--bs-info-rgb: 74,185,230;--bs-primary: #48b4e0;--bs-primary-rgb: 72,180,224;color: rgb(25,25,25);">Signup</a>
              <a class="btn btn-outline-light btn-sm" role="button" href="login.php"
                  style="margin-left: 10px;padding-right: 15px;padding-left: 15px;padding-bottom: 7px;padding-top: 7px;color: rgb(25,25,25);">Login</a>
            <?php  
            } else {?>
            <div class="nav-item dropdown" style="border-bottom-style: none;"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><?php echo $_SESSION['USER_NAME'];?> </a>
                        <div class="dropdown-menu" style="border-style: none;"><a class="dropdown-item" href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-circle">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                                </svg>&nbsp;Profile</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-gear-fill">
                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                                </svg>&nbsp;Setting</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item link-danger" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-circle-fill">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"></path>
                                </svg>&nbsp;Logout</a>
                        </div>
            </div>
                    <?php    


            }
            ?>




        </div>
    </div>
</nav>