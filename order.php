<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php $cont = 1; ?>
 <title>Stellar Wholesale Inc | Join Us</title>

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
  <script>
	var number = 1;
  </script>
  <?php
  $number = 1;
  ?>

</head>

<body id="page-top">

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


  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase" style="margin-top:30px">Place your order</h2>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form  method="post" action="mail/contact_me.php">
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <input class="form-control" id="name" type="text" name="name" placeholder="Company Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                 </div>
                 <div class="form-group">
                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Phone Number *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                 </div>
                 <div class="form-group" id="productBox1">
                     <div style="width:100%; margin-top:10px; height:50px; font-weight:bold; background:#fbc671; color:white; padding-top:10px; padding-left:25px;">Product 1</div>
                     <select class="form-control" id="sku1" type="text" placeholder="Product Sku *" name="sku1">
                          <option value="">Select a Sku</option>
                          <?php
                          $link = mysqli_connect("localhost", "websor", "st78ellar%HH7.", "StellarProducts", "3306");
                          //$link = mysqli_connect("localhost", "root", "", "products", "3306");
                          // $result = mysqli_query($link, "SELECT * FROM product");
                          $result = mysqli_query($link, "SELECT * FROM product");
                          $cont = 1;
                            while($row = mysqli_fetch_array($result))
                            {
                                $sku = $row['sku'];
                                $name = $row['name'];
                                ?>
                                  <option value="<?php echo "$sku $name"; ?>"><?php echo "Sku: ($sku)  |  $name"; ?></option>
                                <?php
                              
                              $cont++;
                              echo "THISSSSSSSSSSSSSSSSSSSSSSSS $cont";
                              
                            }
                          ?>
                      </select>
                      <input class="form-control" style="margin-top:25px" id="qty1" name="qty1" id="qty" type="tel" placeholder="Product Quantity *" required="required" data-validation-required-message="Please enter product quantity.">
                      <input type="text" id="number" name="number" value="<?php echo $number;?>"  style="display:none;"/>
				              <p class="help-block text-danger"></p>
                 </div> <!-- END FIRST BLOCK  -->

                 <div class="form-group" id="productBox2" style="display:none;">
                     <div style="width:100%;  margin-top:10px; height:50px; font-weight:bold; background:#fbc671; color:white; padding-top:10px; padding-left:25px;">Product 2</div>
                     <select class="form-control" id="sku2" type="text" placeholder="Product Sku *" name="sku2">
                          <option value="">Select a Sku</option>
                          <?php
                          $link = mysqli_connect("localhost", "websor", "st78ellar%HH7.", "StellarProducts", "3306");
                          //$link = mysqli_connect("localhost", "root", "", "products", "3306");
                          // $result = mysqli_query($link, "SELECT * FROM product");
                          $result = mysqli_query($link, "SELECT * FROM product");
                          $cont = 1;
                            while($row = mysqli_fetch_array($result))
                            {
                                $sku = $row['sku'];
                                $name = $row['name'];
                                ?>
                                  <option value="<?php echo "$sku $name"; ?>"><?php echo "Sku: ($sku)  |  $name"; ?></option>
                                <?php
                              
                              $cont++;
                              echo "THISSSSSSSSSSSSSSSSSSSSSSSS $cont";
                              
                            }
                          ?>
                      </select>
                      <input class="form-control" style="margin-top:25px" id="qty2" name="qty2" type="tel" placeholder="Product Quantity *" required="required" data-validation-required-message="Please enter product quantity.">
                      <input type="text" id="number" name="number" value="<?php echo $number;?>"  style="display:none;"/>
				              <p class="help-block text-danger"></p>
                 </div><!-- END SECOND BLOCK  -->
              </div> <!-- END LEFT BLOCK -->

              
              <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="info" placeholder="Additional information *"  ></textarea>
                        <p class="help-block text-danger"></p>
				             </div>	 
              </div> <!-- END Right BLOCK -->
              <div class="col-md-6">
                <div class="form-group">
                  <button id="addRow" class="btn btn-primary btn-xl text-uppercase" type="button" style="background:#FBC671" >Add product</button>
                  <p class="help-block text-danger"></p>
                </div>
              </div> <!-- END ADD PRODUCT -->
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" type="submit" style="background:#FBC671">Send Message</button>
              </div> <!-- END SUBMIT BUTTON -->
            </div><!-- END ROW INTERNO -->
          </form> <!-- END FORM -->
        </div><!-- END COL 12 -->
      </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
  </section>
  
  <script>
	var button = document.getElementById("addRow");
	button.onclick = function(){
		number++;
  
		console.log("Clicked!");
			addRow(number);
	}
	
	function addRow(number)
	{
		//$companyName = document.getElementById("sku1").value;
		//document.getElementById("productBox").innerHTML = $companyName;
		var name = "productBox"+number;
		document.getElementById(name).style.display = "block";
		
		/*console.log(number);
		document.getElementById("productBox").innerHTML += "</n>";
		document.getElementById("productBox").innerHTML += "<div style=\"width:100%; margin-top:10px; height:50px; font-weight:bold; background:#fbc671; color:white; padding-top:10px; padding-left:25px;\">Product "+number+"</div>";
		document.getElementById("productBox").innerHTML += "<input class=\"form-control\" style=\"margin-top:15px\" id=\"sku\" name=\"sku"+number+"\" type=\"tel\" placeholder=\"Product Sku *\" required=\"required\" data-validation-required-message=\"Please enter the product sku\">";
		document.getElementById("productBox").innerHTML += "</n>";
		document.getElementById("productBox").innerHTML += "<input class=\"form-control\" style=\"margin-top:25px\" id=\"Name\" name=\"name"+number+"\" type=\"tel\" placeholder=\"Product Name *\" required=\"required\" data-validation-required-message=\"Please enter the product name\">";
		document.getElementById("productBox").innerHTML += "</n>";
		document.getElementById("productBox").innerHTML += "<input class=\"form-control\" style=\"margin-top:25px\" id=\"qty\" name=\"product"+number+"\" type=\"tel\" placeholder=\"Product Quantity *\" required=\"required\" data-validation-required-message=\"Please enter product quantity.\">";
		//var field = document.createElement("input");*/
		document.getElementById("number").value = number;
		return number;
	};
  </script>

  <!-- Footer -->
  <footer class="footer" style="background:#FBC671">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Stellar Wholesale Inc</span>
        </div>
        <!-- <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div> -->
     <!--   <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>-->
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
 <!-- <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
             <!--   <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Threads</li>
                  <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Modal 2 -->
<!--  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
              <!--  <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Modal 3 -->
 <!-- <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
             <!--   <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Modal 4 -->
  <!-- <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
              <!--  <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Modal 5 -->
 <!-- <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
              <!--  <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Modal 6 -->
  <!-- <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
              <!--  <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

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
