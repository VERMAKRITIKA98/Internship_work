<?php 
include 'files/db.php';
if (!isset($_GET['h']))
{
header('location:index.php');
}
$id = base64_decode($_GET['h']);
$query1 = "SELECT * FROM product INNER JOIN productDetail on product.id = productDetail.productId where product.id = $id";
$resultProduct = mysqli_query($conn , $query1);
if ($resultProduct->num_rows==0) {
header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-barister</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="mdb/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="mdb/css/style.css">
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
    </style>
</head>
<body>

  <!--Main Navigation-->
  <!-- Navbar -->
<?php include 'include/navbar.php';  ?>
  <!-- Navbar -->
  

  <!--Main Layout-->
  <main>

    <div class="container-fluid">

      <!--Section: Blog v.4-->
      <section class="section pb-3 wow fadeIn">
<!-- Purple Header -->
<div class="edge-header bg-dark py-3"></div>
<?php 
$data = mysqli_fetch_assoc($resultProduct);

?>
<!-- Main Container -->
<div class="container free-bird">
  <div class="row">
    <div class="col-md-8 col-lg-7 mx-auto float-none white z-depth-1 pb-0 px-0">
<div class="card-body card-body-cascade d-flex ">
				<span><i class="fas fa-building fa-4x"></i></span><span>
                <h2><a><strong><?php echo $data['title']; ?></strong></a></h2>
                
               

              </div>
      <!-- Classic tabs -->
<div class="classic-tabs mx-0">

  <ul class="nav tabs-grey d-flex justify-content-between" id="myClassicTabShadow" role="tablist">
    <li class="nav-item">
      <a class="nav-link  waves-light active show" id="profile-tab-classic-shadow" data-toggle="tab" href="#profile-classic-shadow"
        role="tab" aria-controls="profile-classic-shadow" aria-selected="true">OVERVIEW</a>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-light" id="follow-tab-classic-shadow" data-toggle="tab" href="#follow-classic-shadow"
        role="tab" aria-controls="follow-classic-shadow" aria-selected="false">DOCUMENTS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-light" id="contact-tab-classic-shadow" data-toggle="tab" href="#contact-classic-shadow"
        role="tab" aria-controls="contact-classic-shadow" aria-selected="false">PAYMENTS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-light" id="awesome-tab-classic-shadow" data-toggle="tab" href="#awesome-classic-shadow"
        role="tab" aria-controls="awesome-classic-shadow" aria-selected="false">REVIEWS</a>
    </li>
	<li class="nav-item">
      <a class="nav-link waves-light" id="faqs-tab-classic-shadow" data-toggle="tab" href="#faqs-classic-shadow"
        role="tab" aria-controls="awesome-classic-shadow" aria-selected="false">FAQS</a>
    </li>
  </ul>

  <div class="tab-content card" id="myClassicTabContentShadow">
    <div class="tab-pane fade active show" id="profile-classic-shadow" role="tabpanel" aria-labelledby="profile-tab-classic-shadow">
	<h5 class="font-weight-bold ">OVERVIEW</h5>
	<hr class=""></hr>
      <?php echo $data['overview']; ?>
    </div>
    <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel" aria-labelledby="follow-tab-classic-shadow">
	<h5 class="font-weight-bold ">REQUIRED DOCUMENTS</h5>
	<hr class=""></hr>
      <?php echo $data['document']; ?>
    </div>
    <div class="tab-pane fade" id="contact-classic-shadow" role="tabpanel" aria-labelledby="contact-tab-classic-shadow">
	<h5 class="font-weight-bold ">PAYMENT STRUCTURE</h5>
	<hr class=""></hr>
      <?php echo $data['payment']; ?>
    </div>
    <div class="tab-pane fade" id="awesome-classic-shadow" role="tabpanel" aria-labelledby="awesome-tab-classic-shadow">
	<h5 class="font-weight-bold ">REVIEWS</h5>
	<hr class=""></hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.</p>
    </div>
	<div class="tab-pane fade" id="faqs-classic-shadow" role="tabpanel" aria-labelledby="faqs-tab-classic-shadow">
	<h5 class="font-weight-bold ">Frequently Asked Questions</h5>
	<hr class=""></hr>
      <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 class="mb-0">
          Collapsible Group Item #1 <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse " role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
        labore sustainable VHS.
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="mb-0">
          Collapsible Group Item #2 <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
        labore sustainable VHS.
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">
          Collapsible Group Item #3 <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
        labore sustainable VHS.
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
    </div>
  </div>

</div>
<!-- Classic tabs -->

    </div>
	<div class="col-md-4 col-lg-4 mx-auto float-none white z-depth-1 py-2 px-2">
	
			<div class="card-body card-body-cascade ">	
			<div class=" d-flex justify-content-between my-1">
				<h4><a><strong>Consultation Price</strong></a></h4>
                <p >Rs <?php echo $data['price']; ?><br> <a class="small">Excl.of taxes</a></p>
				</div>
                <p class="small text-muted">Pay securely with major Credit and Debit cards, online Wallets and UPI</p>

               <a href="checkout.php?i=<?php echo base64_encode($data['id']); ?>" class="btn btn-default btn-block" >Book Consultation</a>
				<p class="small text-muted mt-2">By booking this consultation, you agree to our<a class="text-default"> T&C</a></p>
				<ul class="list-unstyled">
                       	<li class=""><a href="" class="nav-link text-muted text-small pb-0"><i class="fas fa-building mr-2"></i>1200 Cases Filed in Area</a></li>
						<li class=""><a href="" class="nav-link text-muted text-small pb-0"><i class="fas fa-building mr-2"></i>Fixex Time Qoute</a></li>
						<li class=""><a href="" class="nav-link text-muted text-small pb-0"><i class="fas fa-building mr-2"></i>24*7 Customer Support</a></li>
						<li class=""><a href="" class="nav-link text-muted text-small pb-0"><i class="fas fa-building mr-2"></i>2500+ Verified Property Lawyers</a></li>
						<li class=""><a href="" class="nav-link text-muted text-small pb-0"><i class="fas fa-building mr-2"></i>Timely Delevery of Cases</a></li>
						
                      </ul>
              </div>
      

    </div>
  </div>
</div>
<!-- /.Main Container -->
     
     
    </div>

  </main>
  <!--Main Layout-->

  <!--Footer-->
  <?php include 'include/footer.php' ?>
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
