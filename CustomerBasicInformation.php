<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Customer Basic Information &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 " rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <script >
	function GEEKFORGEEKS()                                    
    { 
    var name = document.forms["RegForm"]["CustomerName"];  // get the value of the "CustomerName" element within the "RegForm"      	
    var email = document.forms["RegForm"]["CustomerEmailID"];// get the value of the "CustomerEmailID" element within the "RegForm"      
    if (name.value == "")     //check if “name” field is empty or not                                                          
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
    if (email.value == "")   //check if “email” field is empty or not                                                            
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    }  
    if (email.value.indexOf("@", 0) < 0)  //check if email contains “@”           
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
    if (email.value.indexOf(".", 0) < 0)   //check if email contains “.”              
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
	
	
	//check if Customer contact number is 10 digits long
     if( document.RegForm.CustomerContactNumber.value == "" ||
      isNaN( document.RegForm.CustomerContactNumber.value) ||
      document.RegForm.CustomerContactNumber.value.length != 10 )
      {
      alert( "Please enter a valid mobile number." );
      document.RegForm.CustomerContactNumber.focus() ;

      return false;
      }
	  //check if aadhar number is 12 digits long
	   if( document.RegForm.CustomerAadharNumber.value == "" ||
      isNaN( document.RegForm.CustomerAadharNumber.value) ||
      document.RegForm.CustomerAadharNumber.value.length != 12 )
      {
      alert( "Please enter a valid Aadhar number." );
      document.RegForm.CustomerAadharNumber.focus() ;
      return false;
      }
    return true; 
}

    
    </script>
    <style>
	.img {
		border-radius: 50%;
	}
	</style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">Real Estate</a></h1>

          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link">Home</a></li>
              <!--  <li><a href="#customers-section" class="nav-link">Customers</a></li>
                <li><a href="#projects-section" class="nav-link">Projects</a></li>
                <li><a href="#materials-section" class="nav-link">Material</a></li>
		<li><a href="#sales-section" class="nav-link">Sales</a></li>
		<li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>-->
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/image1.jpg);" data-aos="fade" id="home-section">


      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
		  <img src="images/target.png" style="width:200px">
            <h1>Customer Basic Information</h1>
            
          </div>
        </div>
      </div>

      <a href="#login" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>  

  
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</body>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link rel="icon" href="icon.jpg">
<style type="text/css">

body 
{
	background-image: url('greybkgrnd.jpg');
	background-repeat:no-repeat;
	background-size:100%;
	color: black;
	font-family: Arial;
	line-height: 1.7em;
	margin: 0% 0% 0% 0%;
}

p {
	margin-bottom: 10px;
	
}
.uppercase { text-transform: uppercase; }

#login {
	margin: 5% auto;
	width: 500px;
}
form fieldset input[type="text"] {
	background-color: white;
	border-style: solid;
	color: #848484;
	font-family:Arial;
	font-size: 15px;
	height: 50px;
	padding: 0px 10px;
	width: 400px;
	margin-left:35px;
	-webkit-appearance:none;
}
form fieldset input[type="number"] {
	background-color: white;
	border-style: solid;
	color: #848484;
	font-family:Arial;
	font-size: 15px;
	height: 50px;
	padding: 0px 10px;
	width: 400px;
	margin-left:35px;
	-webkit-appearance:none;
}
form fieldset input[type="submit"] {
	background-color: #0f408e;
	border-style: groove;
	color: white;
	border-color:#dcdcdc;
	cursor: pointer;
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	height: 50px;
	text-transform: uppercase;
	margin-left:35px;
	margin-top:10px;
	width: 400px;
	-webkit-appearance:none;
}
form fieldset input[type="button"] {
	background-color: #0f408e;
	border-style: groove;
	color: white;
	border-color:#dcdcdc;
	cursor: pointer;
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	height: 50px;
	text-transform: uppercase;
	margin-left:35px;
	margin-top:10px;
	width: 400px;
	-webkit-appearance:none;
}
form fieldset input[type="date"] {
	background-color: white;
	border-style: solid;
	color: #848484;
	font-family:Arial;
	font-size: 15px;
	height: 50px;
	padding: 0px 10px;
	width: 400px;
	margin-left:35px;
	-webkit-appearance:none;
}
.image
{
	position: relative;
}
.image .text
{
	position: absolute;
	top: 10%;
	left: 40%;
}
p1
{
	background-color: white;
	color: #848484;
	font-family:Arial;
	font-size: 15px;
	height: 50px;
	padding: 0px 10px;
	width: 400px;
	margin-left:10px;
	-webkit-appearance:none;
}
p2
{
	background-color: white;
	color: #848484;
	font-family:Arial;
	font-size: 15px;
	height: 50px;
	padding: 0px 10px;
	width: 400px;
	margin-left:32px;
	-webkit-appearance:none;
}

p3
{
	float: left;
}

h6{
display: inline-block;
}

</style>
</head>
<body>
<div id="login">
<form action="connection.php" method="POST">
<fieldset >
<p style="margin-top: 50px"><input type="text" placeholder="Customer Name" name="CustomerName"></p>
<p><input type="text" placeholder="Customer Address" name="CustomerAddress"></p>
<p><input type="number" placeholder="Contact Number" name="CustomerContactNumber"></p>
<p><input type="number" placeholder="Aadhar Number" name="CustomerAadharNumber"></p>
<p><input type="text" placeholder="EmailId" name="CustomerEmailID"></p>
<p2>Date of Birth<br></p2>
<p><input type="date" placeholder="Date of Birth" name="DateOfBirth"><br></p>
<p><input type="text" placeholder="Address Proof" name="CustomerAddressProof"></p>
<p><input type="text" placeholder="Identity Proof" name="CustomerIdentityProof"></p>
<p><input type="text" placeholder="Profession" name="CustomerProfession"></p>
<p2>Requirements<br></p2>
<p2><input type="checkbox" name="Requirements" value="Flat">Flat</p2>
<p2><input type="checkbox" name="Requirements" value="Bungalow">Bungalow</p2>
<p2><input type="checkbox" name="Requirements" value="Commercial" checked>Commercial<br></p2>

<p2>Gender<br></p2>
<p2><input type="radio" name="Gender" value="Male">Male</p2>
<p2><input type="radio" name="Gender" value="Female">Female</p2>
<p2><input type="radio" name="Gender" value="Other">Other</p2>

<p><input type="submit" value="Submit"></p>
<p><input type="button" onclick="location.href = 'CustomerRetrieve.php';" value="Search"/></p>

</fieldset>
</form>
</div>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Real Estate</h2>
                <p> OneGo</p>
              </div>
            
              
            </div>
          </div>
         <div class="col-md-4">
            
            <div class="">
              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
       
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="http://www.onego.in" target="_blank" >OneGo</a>

      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>
