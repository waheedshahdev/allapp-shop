<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Mortgage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/stylesheet.css">
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/magnific-popup.css">



    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
font-family: 'Roboto', sans-serif;

body {
  background: #D9B280;
  font-family: "Roboto", sans-serif;
}
#contactform{
    padding-bottom: 150px;
}
#contactform .container {
  background: #FFFFFF;
  width: 900px;
  height: 650px;
  margin: 5% auto;
  position: relative;
}
#contactform .container .map {
  width: 45%;
  float: left;
}
#contactform .container .contact-form {
  width: 53%;
  margin-left: 2%;
  float: left;
}
#contactform .container .contact-form .title {
    font-size: 2.5em;
    font-family: initial;
    font-weight: 700;
    color: #242424;
    width: 80%;
    margin: 0 auto;
    padding-top: 40px;
}
#contactform .container .contact-form .subtitle {
  font-size: 1.2em;
  font-weight: 400;
  margin: 0 4% 5% 8%;
}
#contactform .container .contact-form input,
#contactform .container .contact-form textarea {
  width: 330px;
  padding: 3%;
  margin: 2% 8%;
  color: #242424;
  border: 1px solid #B7B7B7;
}
#contactform .container .contact-form input::placeholder,#contactform container .contact-form textarea::placeholder {
  color: #242424;
}
#contactform .container .contact-form .btn-send {
  background: #16b0fe;
  width: 180px;
  height: 60px;
  color: #FFFFFF;
  font-weight: 700;
  margin: 2% 8%;
  border: none;
}


</style> 


    <!--        <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/bootstrap-theme.min.css">-->

    <!--For Plugins external css-->
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/responsive.css" />

        <!-- registration form css -->

    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/registration-form.css">

    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            background-color: #f1f1f1;
        }
        
        #regForm {
            
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }
        input {
            color: #fff;
            background: transparent;
        }
        h1 {
            text-align: center;
        }
        
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            background: #ffffff57;
            border: 1px solid #aaaaaa;
        }
        /* Mark input boxes that gets an error on validation: */
        
        input.invalid {
            background-color: #ffdddd;
        }
        /* Hide all steps by default: */
        
        .tab {
            display: none;
        }
        
        .form-heading {
                color: white;
                font-size: 55px;
                font-family: initial;
        }
        
        .form-sub-heading {
            color: #757575;
            font-size: 25px;
        }
        
        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }
        
        button:hover {
            opacity: 0.8;
        }
        
        #prevBtn {
            background-color: #bbbbbb;
            color: #ffffff;
            border: 2px solid;
            padding: 10px 20px;
        }
        /* Make circles that indicate the steps of the form: */
        
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #000;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }
        
        .step.active {
            opacity: 1;
        }
        /* Mark the steps that are finished and valid: */
        
        .step.finish {
            background-color: #00d208;
        }
        #modifybtn{
            background-color: #16b1ff;
            color: #ffffff;
            margin-left: 15px;
            border: 2px solid;
            padding: 10px 20px;
        }
        #modifybtn:focus{
            border:none;
        }
        input.invalid {
            background-color: #0300c361;
        }
        #formbackground{
            background:url('<?php echo base_url();?>frontfiles/assets/images/slider4.jpg');
            background-size: cover;
            padding: 20px;
        }
        .form-sub-heading {
            color: #ffffff;
        }
        #dropdownsetting{
            background: transparent;
            border: 1px solid #aaaaaa;
            width: 100%;
        }
        #dropdownsetting .btn-default{
            margin: 0;
            width: 100%;
            border: none;
            padding: 10px 0;
            font-size: 17px;
            font-weight: normal;
            font-family: initial;
            color: #dddddd;
            background: #ffffff57;
        }
        #dropdownsetting .btn-default:hover {
            background: transparent;
            box-shadow:none;
        }
        #dropdownsetting a{
            color: white;
            background: #aaaa;
            width: 100%;
            padding: 7px 95px;
            border-bottom: 1px solid #5f5f5f;
        }
        #citysetting{
            background: #ffffff57;
            width: 100%;
            padding: 11px 6px;
            color: #ddd;
            font-size: 17px;
        } 
        #citysetting option{
            color: white;
            height: 35px;
            background: #00000085;
            opacity: 0.5;
        }
        #paracolor{
            color: #c1c1c1;
            letter-spacing: 1px;
        }
        .separator {
            background: #16b0fe;
        }
        .btn-lg {
            background: #16b1ff;
        }
        .btn {
            border: 1px solid #0095e0;
            font-size:13px;
        }
        .btn-default:hover {
            background: #16b0fe;
            border: 1px solid #0095e0;
        }
        .main_home_slider i.nextprevright{
            border-radius: 100%;
        }
        .main_home_slider i.nextprevleft{
            border-radius: 100%;
        }
        .main_home_slider i.nextprevright:hover {
            background: #16b0fe;
        }
        .main_home_slider i.nextprevleft:hover {
            background: #16b0fe;
        }
        .main_menu_bg .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus {
            color: #16b0fe;
            border-bottom: 1px solid #16b0fe;
            font-size: 15px;
        }
        .navbar-default .navbar-nav>li>a {
            color: #777;
            font-size: 12px;
        }
        .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
            color: #fff !important;
        }
        .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {
            color: #16b0fe;
        }
        .scrollup:hover {
            background: #16b1ff;
        }
        .main_footer .flowus a i:hover {
            color: #16b1ff;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">

    <div class='preloader'>
        <div class='loaded'>&nbsp;</div>
    </div>
    <div class="culmn">
        <header id="main_menu" class="header navbar-fixed-top">
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <!--  <a class="navbar-brand" href="#home">
                                                <img src="<?php echo base_url();?>frontfiles/assets/images/logo.png"/>
                                            </a> -->
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->

                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="<?php echo base_url();?>home">Home</a></li>
                                            <li><a href="<?php echo base_url();?>home/refinance">Refinance</a></li>
                                            <li><a href="<?php echo base_url();?>home/purchase">Purchase</a></li>
                                            <li><a href="#blog">About Us</a></li>
                                            <li><a href="<?php echo base_url();?>home/contact">Contact Us</a></li>
                                            <li><a href="#regForm">Register</a></li>
                                        </ul>

                                    </div>

                                </div>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </header>
        <!--End of header -->

       <!--home Section -->
        <section id="home" class="home">
            <div class="overlay" id="minheight">
                <div class="home_skew_border">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>Contact Us</h1>
                                            <div class="separator"></div>
                                            <p>We're ready to lead you into the Future</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End of home section -->





		<section id="registration">

			<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>
 </head>
 
 </body>
</html>
			
		</section>



<section id="contactform">
<div class="container">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52926.37330352141!2d-118.19238187649972!3d33.995145100937336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2ce585cf43327%3A0x727b30fdcae3520!2sCommerce%2C+CA!5e0!3m2!1sen!2s!4v1542654336635" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="contact-form">
    	 <?php 
             if($this->session->flashdata("error_msg") != ''){?>
             <div class="alert alert-danger">
                 <button class="close" data-dismiss="alert"></button>
                 <?php echo $this->session->flashdata("error_msg");?>
             </div>
          <?php
            }
          ?>
          <?php 
             if($this->session->flashdata("success") != ''){?>
             <div class="alert alert-success">
                 <button class="close" data-dismiss="alert"></button>
                 <?php echo $this->session->flashdata("success");?>
             </div>
          <?php
            }
          ?>
        <h1 class="title">We are here assist you</h1>
        <form action="<?php echo base_url();?>home/add_contact" method="post">
            <input type="text" name="name" placeholder="Your Name" />
            <input type="email" name="email" placeholder="Your E-mail Adress" />
            <input type="number" name="phone" placeholder="Your Phone Number"/>
            <textarea name="description" id="" rows="8" placeholder="Your Message"></textarea>
            <button type="submit" class="btn-send" name="submit" >Get a Call Back</button>
            <!-- <button class="btn-send">Get a Call Back</button> -->
        </form>
    </div>
</div>
</section>






        <!-- start of contact us section -->


<!-- <section id="contact">
    <div class="container">
        <div class="row">
            <div class="input-group">
              <span class="input-group-addon"></span>
              <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
              <span class="input-group-addon"></span>
              <input type="text" class="form-control" placeholder="Phone" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
              <span class="input-group-addon"></span>
              <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
              <span class="input-group-addon"></span>
              <input type="text" class="form-control" placeholder="Comments" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
              <span class="input-group-addon"></span>
              <textarea name="" id="" cols="30" rows="10"></textarea>
              <input type="text" class="form-control" placeholder="Comments" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
</section> -->


        <!-- End of contact us section -->


        <!--Footer section-->
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_footer">
                            <div class="row p-b-30">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="flowus">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-instagram"></i></a>
                                        <a href=""><i class="fa fa-youtube"></i></a>
                                        <a href=""><i class="fa fa-dribbble"></i></a>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="copyright_text">
                                        <p class=" wow fadeInRight" data-wow-duration="1s">2018. All Rights Reserved</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-md-2">
                                    <a href=""><h5>HOME LOANS</h5></a>
                                    <a href=""><p>Refinance a Home</p></a>
                                    <a href=""><p>Buying a Home</p></a>
                                </div>
                                <div class="col-md-2">
                                    <a href=""><h5>FIND AN EXPERT</h5></a>
                                    <a href=""><p>Find a Loan Officer</p></a>
                                    <a href=""><p>Find a Location</p></a>
                                </div>
                                <div class="col-md-2">
                                    <a href=""><h5>TOOLS</h5></a>
                                    <a href=""><p>Mortgage Calculators</p></a>
                                    <a href=""><p>The Loan Process</p></a>
                                </div>
                                <div class="col-md-2">
                                    <a href=""><h5>PARTNER WITH US</h5></a>
                                    <a href=""><p>Real Estate Agents</p></a>
                                    <a href=""><p>Home Builders</p></a>
                                    
                                </div>
                                <div class="col-md-2">
                                    <a href=""><h5>ABOUT US</h5></a>
                                    <a href=""><p>Our Story</p></a>
                                    <a href=""><p>Contact Us</p></a>

                                </div>
                                <div class="col-md-2">
                                    <a href=""><h5>TERMS</h5></a>
                                    <a href="privacy-policy.html" target="_blank"><p>Privacy Policy</p></a>
                                    <a href="terms.html" target="_blank"><p>Terms of Service</p></a>
                                </div>
                            </div>
                            <div class="row">
                                <h6><i class="fa fa-home" aria-hidden="true"></i>Housing Opportunity An Equal Housing Opportunity Lender. Copyright © 2007- 2018 Carrington Mortgage Services, LLC headquartered at 1600 South Douglass Road, Suites 110 & 200-A, Anaheim, CA 92806 Toll Free # (800) 561-4567. All Rights Reserved. Restrictions may apply. All loans are subject to credit, underwriting and property approval guidelines.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End off footer Section-->

    </div>

    <!-- START SCROLL TO TOP  -->

    <div class="scrollup">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="<?php echo base_url();?>frontfiles/assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/js/jquery.mixitup.min.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/js/jquery.masonry.min.js"></script>

    <!--slick slide js -->
    <script src="<?php echo base_url();?>frontfiles/assets/css/slick/slick.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/css/slick/slick.min.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/js/main.js"></script>

            <!-- registration form js -->

    <script src="<?php echo base_url();?>frontfiles/assets/js/formscript/javascript.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/js/formscript/main.js"></script>
    <script src="<?php echo base_url();?>frontfiles/assets/js/formscript/html-input-range.js"></script>

</body>

</html>