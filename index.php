<?php include 'files/db.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-barister</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="mdb/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="mdb/css/style.css">
   <style>
    #container {
    width: 100%;
    height: 100%;
    top: 0;
    position: absolute;
    visibility: hidden;
    display: none;
    background-color: rgba(22,22,22,0.5); /* complimenting your modal colors */
}
#container:target {
    visibility: visible;
    display: block;
}
.reveal-modal {
    position: relative;
    margin: 0 auto;
    top: 25%;
}
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
    </style>
</head>




<body>
<div>
<?php include('include/navbar.php') ?>
<br>

</div>
<div style="margin-top: 90px;"><center><h2><strong>Your trusted legal partner</strong></h2></center></div>
<div><center> Helping you resolve your legal probem </center></div>
<br>
<?php include'include/slider.php'?>
<br>

<?php include 'include/homeTabs.php';?>
<br>
<?php  include'include/frontpageTestimonial.php'?>

<?php include 'include/footer.php' ?>
  
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