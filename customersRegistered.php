<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Alfredo Morales / Stellar Wholesale Inc">
  

  <title>Stellar Wholesale Inc | Customer Registered</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top" style="background:#FBC671">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background:#FBC671">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="https://www.stellarinc.ca/"><img src="images/logo.png" style="width:50px; height:50px;"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background:#0A2A5A;">
        Menu
       <!-- <i class="fas fa-bars"></i> -->
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://www.stellarinc.ca/" style="color:#0B2A57; font-weight:bold;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://www.stellarinc.ca/shop" style="color:#0B2A57; font-weight:bold;">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://www.stellarinc.ca/products-1" style="color:#0B2A57; font-weight:bold;">Brands</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="" style="color:#0B2A57; font-weight:bold;">JOIN US</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <!-- <header class="masthead" style="height:300px">
    <div class="container"  >
      <div class="intro-text" >
        <div class="intro-lead-in">Welcome To the Vancouver Lift&Co Expo 2020!</div>
        <div class="intro-heading text-uppercase" >It's Nice To Meet You</div>
       <!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> -->
     <!-- </div>
	  
    </div>
  </header> -->


  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
		  <h1 style="color:white; padding-top:25px;">Number of people already registered:</h1>
     
        </div>
      </div>
		<div style="width:50%; height:200px; background:#FCC573; margin-left:20%; text-align:center; padding-top:4%;">
			
			<?php
				$link = mysqli_connect("localhost", "websor", "st78ellar%HH7.", "stellarcustomers", "3306");
				
				$link->set_charset("utf8");
				if ($link)
				{
					$query = "SELECT COUNT(*) FROM customers";
					$result = mysqli_query($link,$query);
					$count = mysqli_fetch_array($result);
				}else
				{
					echo "<p>Erro, Access denied</p>";
				}
			?>
			
			<p style="font-size:74px; font-weight:bold; color:#0A2A5A;"><?php echo "$count[0]"; ?></p>
		</div>
      </div>
    </div>
  </section>

 <!-- Footer -->
  <footer class="footer" style="background:#FCC573">
    <div class="container">
      <div>
       <div class="col-md-4">
	   </div>
          <!-- <span class="copyright">Connect with us</span>
        </div>
        <div class="col-md-4" style="margin-left:-180px; margin-top:15px;">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#"> <img src="img/phone.png" style="width:20px; height:20px;"/>
                <i ></i>
              </a>
            </li>
		  </ul>
		</div>
      </div>
	  
	  <div>
        <div class="col-md-4" style="margin-left:-180px; margin-top:15px;" >
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">HERE
                <i ></i>
              </a>
            </li>
		  </ul>
		</div>
      </div>
	  
	   <div>
        <div class="col-md-4" style="margin-left:-180px; margin-top:15px;">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">HERE
                <i ></i>
              </a>
            </li>
		  </ul>
		</div>
      </div>
	  
	   <div class="col-md-4" style="margin-left:-180px; margin-top:15px;">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">HERE
                <i ></i>
              </a>
            </li>
		  </ul>
		</div>
      </div> -->
    </div>
  </footer> 



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
 <script src="js/jqBootstrapValidation.js"></script>  
 <script src="js/contact_me.js"></script> 

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
