<?php
include'files/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-barister</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="mdb/https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="mdb/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="mdb/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

   <style>
    .navbar {
            background-color: #6f7782;
        }
        footer.page-footer {
            background-color: #6f7782;
        }
.megamenu {
  position: static;
}

.megamenu .dropdown-menu {
  background: none;
  border: none;
  width: 100%;
}
html,
body,
header,
.view {
  height: 100%;
}

@media (max-width: 740px) {
  html,
  body,
  header,
  .view {
    height: 1000px;
  }
}

@media (min-width: 800px) and (max-width: 850px) {
  html,
  body,
  header,
  .view {
    height: 650px;
  }
}
@media (min-width: 800px) and (max-width: 850px) {
  .navbar:not(.top-nav-collapse) {
     background: #1C2331!important;
  }
}
/* Navbar animation */
.navbar {
  background-color: rgba(0, 0, 0, 0.3); }

.top-nav-collapse {
  background-color: #1C2331; }

/* Adding color to the Navbar on mobile */
@media only screen and (max-width: 768px) {
  .navbar {
    background-color: #1C2331; } }

/* Footer color for sake of consistency with Navbar */
.page-footer {
  background-color: #1C2331; }

    </style>
</head>
<body>

 <!-- Navbar -->
<?php include 'include/navbar.php' ?>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro stylish-color-dark border-bottom" >

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center pt-5">

      <!-- Content -->
      <div class="container pt-5">

        <!--Grid row-->
        <div class="row wow fadeIn pt-3">

          <!--Grid column-->
          <div class="col-md-6 white-text text-center text-md-left">

            <h1 class="display-5 font-weight-bold">Join MyAdvo</h1>
            <h1 class="display-5 font-weight-bold">Leagel Network</h1>

            <hr class="hr-light">

            <p>
             Join our pool of 10,000+ Expert Lawyers serving clients through great customer experience
            </p>
              <div class="media">
              <i class="fas fa-user-tie fa-3x"></i>
              <div class="media-body ml-2">
                <h5 class="mt-0 font-weight-bold">Profile</h5>
                Cras sit amet nibh libero, in gravida nulla. 
              </div>
            </div>
              <div class="media mt-3">
              <i class="fas fa-calendar-alt fa-3x"></i>
              <div class="media-body ml-2">
                <h5 class="mt-0 font-weight-bold">Appointments and Consultations</h5>
                Cras sit amet nibh libero, in gravida nulla. 
              </div>
            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 col-xl-4  ml-auto">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" >
                  <label for="exampleForm2">Name :</label>
                  <input type="text" name="name" id="exampleForm2" class="form-control mt-1 mb-2">

                  <label for="exampleForm2">User Name :</label>
                  <input type="text" name="user" id="exampleForm2" class="form-control mt-1 mb-2">
                  <!-- Default input -->
                  <label for="exampleForm2">Email Address :</label>
                  <input type="text" name="email" id="exampleForm2" class="form-control mt-1 mb-2">
                  <!-- Default input -->
                  <label for="exampleForm2">Mobile :</label>
                  <input type="text" name="mobile" id="exampleForm2" class="form-control mt-1 mb-2">
                  <label for="exampleForm2">Password :</label>
                  <input type="password" name="password" id="exampleForm2" class="form-control mt-1 mb-2">
                  <!-- Default input -->
                  <label for="exampleForm2">Bar Council ID :</label>
                  <input type="text" name="barId" id="exampleForm2" class="form-control mt-1 mb-2">
                 
                    <button type="submit" name="submit" class="btn btn-default btn-block">Sign Up</button>
                  
                </form>
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">
        <div class="row">
          <div class="col-md-8 text-center mx-auto">
              <h4 class="font-weight-bold h2 mt-3">Case Manager</h4>
              <p class="font-weight-bold mt-2 text-muted">Manage your cases, payments, and documents through our proprietary Case Management Tool. Also, avail MyAdvo's Case Facts Gathering, Case Filing, Operations & Accounting, and Client Support Services.</p>
          </div>
        </div>
      </section>
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
            </div>
            
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4 mb-3">
                <div class="media mb-2">
              <i class="far fa-bell fa-3x mx-3"></i>
              <div class="media-body ml-4">
                <h5 class="mt-0 font-weight-bold">Instant Notification</h5>
                Cras sit amet nibh libero, in gravida nulla. 
              </div>
            </div>
          <div class="media my-5">
              <i class="fas fa-money-bill fa-3x mx-3"></i>
              <div class="media-body ml-2">
                <h5 class="mt-0 font-weight-bold">Save Time & Money</h5>
                Cras sit amet nibh libero, in gravida nulla. 
              </div>
            </div>
             <div class="media mt-3">
              <i class="fas fa-shield-alt fa-3x mx-3"></i>
              <div class="media-body ml-4">
                <h5 class="mt-0 font-weight-bold">Develop Trust</h5>
                Cras sit amet nibh libero, in gravida nulla. 
              </div>
            </div>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section>


        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">
            <h5 class="feature-title font-weight-bold h3 ml-5 mb-4">The Problem</h5>
                <ul class="">
                  <li class="my-2">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</li>
                  <li class="my-2">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</li>
                  <li class="my-2">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</li>
                </ul>
           
            

          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Main features & Quick Start-->


      <hr class="my-5">

      <!--Section: Not enough-->
    <section>


        <!--Grid row-->
        <div class="row wow fadeIn">
<!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--/Grid column-->
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">
            <h5 class="feature-title font-weight-bold h3 ml-5 mb-4">The Solution</h5>
                <ul class="">
                  <li class="my-2">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</li>
                  <li class="my-2">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</li>
                  <li class="my-2">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</li>
                </ul>
           
            

          </div>
          <!--/Grid column-->

          

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Not enough-->

      <hr class="mb-5">

      <!--Section: More-->
      <section>


        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">
            <h5 class="feature-title font-weight-bold h3 ml-5 mb-4">Technology</h5>
                <ul class="">
                  <li class="my-2">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</li>
                  <li class="my-2">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</li>
                  <li class="my-2">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</li>
                </ul>
           
            

          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: More-->

    </div>
    <div class="container-fluid stylish-color-dark py-2 white-text px-5 mt-5">
         <div class="row my-5 p-5 ">
            <div class="col-md-9">
                <h4 class="font-weight-bold h3">MyAdvo's Mission</h4>
                <p>Our mission is to make legal transparent, trustworthy, and conveniently accessible for everyone, through innovative technological solutions.</p>
                <h5 class="font-weight-bold h4">10,000+ Advocates have joined MyAdvo family. Have you?
</h5>
            </div>
            <div class="col-md-3 justify-content-end">
              <button class="btn-default btn">Get Listed Now</button>
            </div>
         </div>
    </div>

  </main>
  <!--Main layout-->

  

  <!--Footer-->
  <footer class="page-footer pt-0">

    <!--Footer Links-->
    <div class="container">

      <!--First row-->
      <div class="row">

        <!--First column-->
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">

          <div class="text-center d-flex justify-content-center my-4">

            <!--Facebook-->
            <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f white-text fa-lg pr-md-4"> </i></a>
            <!--Twitter-->
            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text fa-lg pr-md-4"> </i></a>
            <!--Google +-->
            <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g white-text fa-lg pr-md-4"> </i></a>
            <!--Linkedin-->
            <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text fa-lg pr-md-4"> </i></a>
            <!--Instagram-->
            <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text fa-lg pr-md-4"> </i></a>
            <!--Pinterest-->
            <a class="p-2 m-2 fa-lg pin-ic"><i class="fab fa-pinterest white-text fa-lg pr-md-4"> </i></a>
          </div>

        </div>
        <!--/First column-->

      </div>
      <!--/First row-->

    </div>
    <!--/Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/Footer-->

  
  <script>
    new WOW().init();

  </script>


  <!-- jQuery -->
  <script type="text/javascript" src="mdb/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="mdb/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
<script>$(document).ready(function(){$(".dropdown").hover(function(){$('.dropdown-menu',this).not('.in .dropdown-menu').stop(true,true).slideDown("400");$(this).toggleClass('open');},function(){$('.dropdown-menu',this).not('.in .dropdown-menu').stop(true,true).slideUp("400");$(this).toggleClass('open');});});</script>

</body>
</html>
<?php 
if(isset($_POST['submit']))
{
include 'files/db.php';
$name = $_POST['name'];
$user= $_POST['user'];
$password= $_POST['password'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$barId= $_POST['barId'];  
$role = 'advocate';
$date=date("Y-m-d H:i:s");
$query = "INSERT INTO `user`(`user`, `password`, `role`, `created_at`, `status`, `name` ,`email`) VALUES ('$user','$password','$role','$date','1','$name','$email')";
//echo $query;
$result = mysqli_query($conn,$query);
 if ($result) {
    $query = "SELECT MAX(id) FROM user";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);
    $id = $data['MAX(id)'];
    $query="INSERT into `advocate`(`userId` ,`barId` ) VALUES ('$id','$barId')";
    $result = mysqli_query($conn,$query);
    if($result)
    {

        ?>
        <script>
            Swal.fire({
            icon:'success',
            title: 'Account Created',
            text: 'Please login with your credential',
            showConfirmButton: true,
            })
        </script>
        <?php   
    }

 }
}
?>