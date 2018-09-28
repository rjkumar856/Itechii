<?PHP
require_once("contact-form/include/fgcontactform.php");

$formproc = new FGContactForm();
$formproc->AddRecipient('aneesh8031@gmail.com'); //<<---Put your email address here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');
if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Call Center Services in Bangalore , Customer services in Bangalore , BPO services , KPO services, Bangalore" />
<meta name="description" content="ITECHii -  Leading IT Customer Services Provider – Our Services are Inbound/Outbound Call Center Setup, Servers/Dialers support, Predictive Dialer/Networking, IT consultant services, BPO/KPO . If you Interest in our services please contact with us" />
<meta name="author" content="itechii.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Contact Us -  Leading Call Center Services : ITECHii</title>

<!-- Favicon -->
<link rel="shortcut icon" href="img/itechii-favicon.png" />

<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- plugins -->
<link href="css/plugins-css.css" rel="stylesheet" type="text/css" />

<!-- mega menu -->
<link href="css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />

 <!-- default -->
<link href="css/default.css" rel="stylesheet" type="text/css" />

<!-- main style -->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!-- responsive -->
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!-- Style customizer (Remove these two lines please) -->
<link href="#" data-style="styles" rel="stylesheet">
<link href="css/style-customizer.css" rel="stylesheet" type="text/css" />
<style>
.spmhidip { display:none;}
</style>
<!-- custom style -->
<link href="css/custom.css" rel="stylesheet" type="text/css" />
  <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>

<body>

<div class="page-wrapper">

<!--=================================
 preloader -->
 
<div id="preloader">
  <div class="clear-loading loading-effect"> <span></span> </div>
</div>

<!--=================================
 header -->

<header id="header" class="header">
<div class="topbar">
	<div class="container">
		<div class="row search-main">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="topbar-left text-left">
					<ul>
						<li><i class="fa fa-envelope-o text-blue"></i> support@itechii.com</li>
						<li><i class="fa fa-phone text-blue"></i> +91 9743649443</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="topbar-right text-right">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</li>
					</ul>
				</div>
			</div>
			<div class="search-open">
				<input class="form-control" type="text" placeholder="Type & Hit Enter..">
				<div class="search-close"><i class="fa fa-times"></i></div>
			 </div>
		</div>
	</div>
</div>

<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu-1" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index.php"><img id="logo_img" src="images/logo.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <ul class="menu-links">
            <!-- active class -->
            <li ><a href="index.php"> Home </a> </li>
            <li  ><a href="about-us.html"> About Us </a> </li>
           <li ><a href="javascript:void(0)">Services <i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel right-menu">
                    <li><a href="inbound-&-outbound-services.html">Inbound /Outbound  Services</a></li>
                    <li><a href=" dialers-support.html"> Dialers Support</a></li>
                    <li><a href="predictive-dialer.html">Predictive Dialer</a></li>
                    <li><a href="it-consultant.html">IT Consultant </a></li>
                </ul>
            </li>
             <li ><a href="gallery.html">Gallery </a> </li>
              
              <li ><a href="price.html">Price</a> </li>
              <li class="active" ><a href="contact-us.php">Contact Us </a> </li> 
        </ul>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->


<!--=================================
 inner-intro-->

<section class="inner-intro bg-2 bg-opacity-black-70">
  <div class="container">
     <div class="row text-center intro-title">
            <h1 class="text-blue">Contact us</h1>
            <p class="text-white">Let’s make something great together</p>
            <ul class="page-breadcrumb">
          
           </ul>
     </div>
  </div>
</section>

<!--=================================
 inner-intro-->


<!--=================================
 map-->

<section class="contact-map clearfix">
   <div class="container-fluid">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d35940.0154456079!2d77.62140136836975!3d12.944657086231098!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a58fd67f23c1a8!2sITECHii!5e0!3m2!1sen!2sin!4v1499778480068" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
</section>
<!--================================= map -->

<!--=================================
 contact-->

<section class="contact contact-2 white-bg page-section-ptb">
  <div class="container">
    <div class="row">
       <div class="col-lg-12 col-md-12">
        <div class="section-title-1 text-center">
          <h1 class="text-blue">Let’s Get in Touch!</h1>
          <div class="title-line"></div>
          <p>We have completed over a 1000+ projects for five hundred clients. Give us your next project.</p>
        </div>
      </div>
    </div>
     <div class="row">
       <div class="col-lg-8 col-md-8">
        <div class="text-left">
       <p>It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within <span class="tooltip-content-2" data-original-title="Mon-Fri 10am–7pm (GMT +1)" data-toggle="tooltip" data-placement="top"> 24 hours !</span></p><br/>
      </div>
       <div id="formmessage">Success/Error Message Goes Here</div>
    <form  class="form-horizontal" id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
     <input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
        
        
        
         <div class="contact-form">
           <div class="section-field">
            <i class="fa fa-user"></i>
            <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
           </div> 
           <div class="section-field">
              <i class="fa fa-envelope-o"></i>
               <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
            </div>
           <div class="section-field">
              <i class="fa fa-phone"></i>
              <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15" /><br/>
    <span id='contactus_phone_errorloc' class='error'></span>
            </div>
           <div class="section-field textarea">
             <i class="fa fa-pencil"></i>
             <textarea class="input-message" placeholder="Comment*" rows="7" name="message" id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>

             
            </div>
            <input type="hidden" name='Submit' value="sendEmail"/>
            <button id="submit" name="Submit" type="submit" value="Send" class="button mt-15"><span> Send your message </span> <i class="fa fa-paper-plane"></i></button>
            </div> 
            </form>
            <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/ajax-loader.gif" alt=""></div> 
       </div> 
       <div class="col-lg-4 col-md-4 clearfix">
           <div class="contact-box mb-20 text-left clearfix">
              <i class="fa fa-map-marker"></i>
              <div class="info">
                <h4>Address</h4>
                <p>
No-26, 14Th Main, F cross, Ejipura, Bangalore - 560047 </p>
              </div>
           </div>
             <div class="contact-box mb-20 text-left clearfix">
              <i class="fa fa-phone"></i>
              <div class="info">
                <h4>Phone</h4>
                <p>+91 9743649443</p>
              </div>
           </div>
           <div class="contact-box mb-20 text-left clearfix">
              <i class="fa fa-envelope-o"></i>
              <div class="info">
                <h4>Email</h4>
                <p>support@itechii.com<br/>admin@itechii.com</p>
              </div>
           </div>
           <div class="contact-box text-left clearfix">
              <i class="fa fa-fax"></i>
              <div class="info">
               
              </div>
           </div>
       </div>
      </div>
      </div>
</section>

<!--=================================
 contact-->
 
 
<!--=================================
 action-box -->

<section class="action-box">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <h3 class="text-white">Please reach out to us at any if you have any questions.</h3>
        <p class="text-white">We are a creative company, who works with passion and love. We provide the best services you need. </p>
      </div>
      <div class="col-lg-4 col-md-4 text-right action-box-button">
         <a href="#" class="button button-white mt-15">
            <span>Contact Now</span>
            <i class="fa fa-hand-o-right"></i>
         </a>
       
      </div>
    </div>
  </div>
</section>

<!--=================================
 action-box -->
 
 
<!--=================================
 footer -->
 
<footer class="footer page-section-pt">
 <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="footer-logo">
       <img id="logo-footer" class="pb-20" src="images/logo.png" alt="logo">
        <p class="text-white pb-10"> ITECHii, a leading provider of IT services took its shape in YEAR, headquartered in Bangalore, the IT hub of India with a primary vision to deliver top notch and highly cost effective telecom distribution services</p>
      </div>
      
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class=" footer-hedding">
          <h4 class="text-blue mb-30 mt-10">Address</h4>
       <ul class="addresss-info"> 
        <li><i class="fa fa-map-marker"></i> <p>No-26, 14Th Main, F cross, Ejipura, Bangalore - 560047<p> </li>
        <li><i class="fa fa-phone"></i>+91 9743649443</li>
        <li><i class="fa fa-envelope-o"></i>support@itechii.com</li>
      </ul>
      </div>
      <div class="footer-Newsletter footer-hedding mt-20">
        <h4 class="text-blue mb-20">Newsletter</h4>
        <p class="text-white mb-20">Subscribe to our newsletter.</p>
        <div class="input-group divcenter">
              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                     <input type="email" placeholder="Enter your Email" class="form-control">
                     <span class="input-group-btn">
                  <button type="submit" class="btn btn-icon"><i class="fa fa-paper-plane"></i></button>	
              </span>
           </div>
        </div>
      </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="footer-useful-link footer-hedding mb-20">
        <h4 class="text-blue mb-30 mt-10">Useful Link</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="inbound-&-outbound-services.html">Inbound Outbound Services</a></li>
          <li><a href="dialers-support.html">Dialers Suppor</a></li>
          <li><a href="predictive-dialer.html">Predictive Dialer</a></li>
        </ul>
      </div>
     
    </div>
   </div>
  </div>
  <div class="footer-widget mt-60">
   <div class="container"> 
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <p class="text-white mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="index.php"> Itechii</a> All Rights Reserved </p>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="footer-widget-social">
         <ul> 
          <li><a href="#" data-tooltip="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" data-tooltip="twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" data-tooltip="dribbble"><i class="fa fa-dribbble"></i> </a></li>
       
          <li><a href="#" data-tooltip="Pinterest"><i class="fa fa-pinterest-p"></i> </a></li>
       
          <li><a href="#" data-tooltip="Linkedin"><i class="fa fa-linkedin"></i> </a></li>
         </ul>
       </div>
      </div>
    </div>    
   </div>
  </div>
</footer>

<!--=================================
 footer -->


 <!--=================================
 popup-contact -->



 <!--=================================
 popup-contact -->

 </div>

<!--=================================
 style-customizer --> 

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-long-arrow-up"></i></a></div>
 
<!--=================================
 jquery -->
<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("phone","req","Please provide your phone number");

// ]]>
</script>

<!-- jquery  -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- plugins-jquery -->
<script type="text/javascript" src="js/plugins-jquery.js"></script>

<!-- mega menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>
 
<!-- Style Customizer --> 
<script type="text/javascript" src="js/style-customizer.js"></script> 

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>
 
</body>

<!-- Mirrored from themes.itechii.com/html/thecorps/contact-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jul 2017 11:21:23 GMT -->
</html>
