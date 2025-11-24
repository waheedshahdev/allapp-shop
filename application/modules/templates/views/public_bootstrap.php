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
    <title>Save More On Bills</title>
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

    <!--        <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/bootstrap-theme.min.css">-->

    <!--For Plugins external css-->
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/responsive.css" />

        <!-- registration form css -->

    <link rel="stylesheet" href="<?php echo base_url();?>frontfiles/assets/css/registration-form.css">

    <script src="<?php echo base_url();?>frontfiles/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
                                            <!-- <li><a href="#blog">About Us</a></li> -->
                                            <li><a href="<?php echo base_url();?>home/contact">Contact Us</a></li>
                                           <!--  <li><a href="#regForm">Register</a></li> -->
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

        <?php if(isset($view_files))

          $this->load->view($view_module.'/'.$view_files);

       ?>

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
    <script type="text/javascript">

   var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[10000]; 
  })();


$(document).ready(function() {
  $('a').trigger('click');
});


  function clickme(val){

    // var img1= document.getElementsById('img1').value;
     // alert(val);
document.getElementById('val_field').value=val;
   
  }
  function nextclick(val){

    // var img1= document.getElementsById('img1').value;
     // alert(val);
document.getElementById('val_field1').value=val;
   
  }
    function morenext(val){

    // var img1= document.getElementsById('img1').value;
     // alert(val);
document.getElementById('val_field2').value=val;
   
  }


    $('.highlight').click(function(){
   $('.selected').removeClass('selected'); // removes the previous selected class
   $(this).addClass('selected'); // adds the class to the clicked image
});
</script>  



</body>

</html>