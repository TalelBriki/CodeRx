<?php 

$email=$POST['Email address'];
$password=$POST['Password'];

$email=stripcslashes($email);
$password=stripcslashes($password);

$email=mysql_real_escape_string($email);
$email=mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db(name);

$resultat=mysql_query("select * from entreprise where email = $email and password = $password ");

$row=mysql_fetch_array($resultat);

if ($row ['email']==$email && $row ['password']==$password)
echo "<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Medicio landing page template for Health niche</title>

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      
        <div class="container navigation">

            <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    <div>
                      <img src="img/logo.png"  alt="" width="140" height="70" style="float:left;"   />
                     <a class="navbar-brand" href="index.html" style="font-family: 'Lato', sans-serif;
                      "></a>
                  
                </div>
                      
                              
                          
            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#doctor">Doctors</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="index-form.html">Sign up</a></li>
            <li><a href="index.html">Log Out</a></li>

           
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">Healthy Business</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">Provide best quality healthcare for you </h4>
              </div>
              <div class="well well-trans" style="text-align:center;" >
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">
                    <li><a href="#offre"><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Check offres</strong><br /><br /></span></a></li>
                  <li><a href="ofre.html"><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Make your own offre</strong><br /></a></span></li>
                
                  </ul>
                  
                </div>
              </div>


            </div>
            <div class="col-lg-6">
              <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <img src="img/dummy/img-1.png" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    

    <section id="pricing" class="home-section bg-gray paddingbot-60">
        <div class="container marginbot-50">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                <div class="section-heading text-center">
                  <h2 class="h-bold">Health packages</h2>
                  <p>Take charge of your health today with our specially designed health packages</p>
                </div>
              </div>
              <div class="divider-short"></div>
            </div>
          </div>
        </div>
  
        <div class="container">
  
          <div class="row">
  
            <div class="col-sm-4 pricing-box">
              <div class="wow bounceInUp" data-wow-delay="0.1s">
                <div class="pricing-content general">
                  <h2>Basic</h2>
                  <h3>$33<sup>.99</sup> <span>/ one time</span></h3>
                  <ul>
                    <li>Medical Care <i class="fa fa-check icon-success"></i></li>
                    <li><del>Psychological Care </del> <i class="fa fa-times icon-danger"></i></li>
                    <li><del>Entertaiment</del> <i class="fa fa-times icon-danger"></i></li>
                  </ul>
  
                  <div class="price-bottom">
                    <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                  </div>
                </div>
              </div>
            </div>
  <a id="offre"></a>
            <div class="col-sm-4 pricing-box featured-price">
              <div class="wow bounceInUp" data-wow-delay="0.3s">
                <div class="pricing-content featured">
                  <h2>Gold</h2>
                  <h3>$65<sup>.99</sup> <span>/ one time</span></h3>
                  <ul>
                    <li>Medical Care <i class="fa fa-check icon-success"></i></li>
                    <li>Psychological Care  <i class="fa fa-check icon-success"></i></li>
                    <li>Entertaiment <i class="fa fa-check icon-success"></i></li>
                  </ul>
  
                  <div class="price-bottom">
                    <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-sm-4 pricing-box">
              <div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="pricing-content general last">
                  <h2>Premieum</h2>
                  <h3>$47<sup>.99</sup> <span>/ one time</span></h3>
                  <ul>
                    <li>Medical Care <i class="fa fa-check icon-success"></i></li>
                    <li>Psychological Care   <i class="fa fa-check icon-success"></i></li>
                    <li><del>Entertaiment</del> <i class="fa fa-times icon-danger"></i></li>
                  </ul>
  
                  <div class="price-bottom">
                    <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
"







?>