<!-- Method to send the accepted information in form to admin email-Id -->
<?php 
if(isset($_POST["send"])){
    $msg = $_POST['msg'];
    $email = $_POST["email"];
    $name = $_POST['name'];
    $sub = $_POST['subject'];
    $headers = "From: $name <$email>\n";
    $headers .= "Reply-to: $email \r\n";
    mail("admin@csrzppalghar.com",$sub, $msg, $headers);
    header("Location: contact.php?emailsent");
}

?>

<!-- Starting of the HTML document -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Information about webpage and links to stylesheets and JavaScript sheets -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/font-awesome.min.css">
	
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />
        <script src="js/map.js"></script>
        <link rel="stylesheet" href="css/isotope/style.css">
  	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/temp_default.css" rel="stylesheet">
    	<link href="admin/assets/css/custom.css" rel="stylesheet" />
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
	
  <!-- Starting of styling elements in the webpage using CSS -->
  <style>
.dropbtn {
    background-color: #8E1527;
    padding: 0px;
    border: none;
    text-decoration: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #8E1527; 
    min-width: 210px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 100;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color:#8E1527}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #8E1527;
}

.uppercase {
  text-transform: uppercase;
  
  }
#map_wrapper {
    height: 400px;
}

#map_canvas {
    width: 100%;
    height: 100%;
}

</style>
<!-- End of styling in CSS -->

    </head>

    <!-- Start of main webpage -->
    <body data-spy="scroll" data-target="#header">

   <!-- Start of div for main logo -->   
   <div id="logo">
<center>
<table>
<tr>
<td>
<img src="img/logo.png" height="50%" width="50%">
</td>
<td>
<h1><span> Social Transformation Cell<br>Zilla Parishad, Palghar</span></h1>
</td>
</tr>
</table>
</center>
   </div>

       <!-- Start of Header Section and Dropdown menu -->
        <div id="header" class="myHeader ">
           <div id="menu" class="container ">
              <ul>
                        <li>
                            <div class="dropdown" >
    					      <a href="index.php"><button class="dropbtn">HOME</button></a>
    					      <div class="dropdown-content">
    						<a href="index.php#overview">Overview</a><br>
    						<a href="index.php#benefits">Benefits</a><br>
    						<a href="index.php#news">News</a><br>
    						<a href="index.php#blogs">Blogs</a><br>
    					      </div>
    					    </div>
    					</li>
                                    <li >
                                        <div class="dropdown" >
                					    <a href="roles.php"><button class="dropbtn">PALGHAR DEVELOPMENT CORRIDOR</button></a>
                					      <div class="dropdown-content">
                						<a href="roles.php#welcome">DISTRICT CSR CELL</a><br>
                						<a href="roles.php#committee">CO-ORDINATION COMMITTEE</a><br>
                						<a href="roles.php#group">DISTRICT CORE GROUP</a><br>
                						<a href="roles.php#industry">INDUSTRY ASSOCIATIONS</a><br>
                					      </div>
    					    </div>
                                    </li>
                                    <li >
                                        
                                        <div class="dropdown" >
                					    <a href="focusAreas.php"><button class="dropbtn">FOCUS AREAS</button></a>
                					      <div class="dropdown-content">
                						<a href="focusAreas.php#education">EDUCATION</a><br>
                						<a href="focusAreas.php#health">health</a><br>
                						<a href="focusAreas.php#women">WOMEN AND CHILD DEVELOPMENT</a><br>
                						<a href="focusAreas.php#sanitation">WATER SANITATION AND HYGIENE (WASH)</a><br>
                					      </div>
                                    </li>
                                    
                        <li>
					    <div class="dropdown">
					      <a href="#"><button class="dropbtn">GP-WISE REQUIREMENTS</button></a>
					      <div class="dropdown-content">
						<a href="dahanu.php">DAHANU</a><br>
						<a href="jawhar.php">JAWHAR</a><br>
						<a href="mokhada.php">MOKHADA</a><br>
						<a href="palghar.php">PALGHAR</a><br>
						<a href="talasari.php">TALASARI</a><br>
						<a href="vasai.php">VASAI</a>  <br>
						<a href="vikramgarh.php">VIKRAMGARH</a><br>
						<a href="wada.php">WADA</a>    
					      </div>
					    </div>  
				</li>
                    <li><a href="partners.php">Our Partners</span></a></li>
                                    <li class="active"><a href="contact.php">contact us</a></li>
                                </ul>
    </div>
</div>

        <!-- Start of Contact section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>get in touch</h3>
                            
                        </div>
                    </div>
                    
                    
                    <!-- Start of details in container -->
                    <div class="container text-center">
<div class="containerSm">
<div class="row vdivideGreen">
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 text-center">
   
<div class="text-center"><img src="img/logo.png" height="30%" width="30%"></div>
<div class="bodytext text-center topPadding20">CEO Office</div>
<div class="bodytext text-center">Zilla Parishad Building</div>
<div class="bodytext text-center">Near SP Office, Palghar, Maharashtra, India-401404</div>
<div class="bodytext text-center topPadding20"><H4><b>Alternate Address</b></H4></div>
<div class="bodytext text-center">CTARA Office</div>
<div class="bodytext text-center"> IIT Bombay, Powai</div>
<div class="bodytext text-center"> Mumbai, Maharashtra, India-400076</div>
            
</div>

<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 text-center rowTop3">
<div class="text-center"><img src="img/telephone.png" widht="10px" height="10px"></div>
<div class="bodytext text-center topPadding10">For Further Details, Contact:</div>
<div class="bodytext3Green text-center topPadding15">Digvijay Bendrikar Shinde</div>
<div class="bodytext text-center">District Co-ordinator, Social Transformation Cell</div>
<div class="bodytext text-center topPadding5">M: +917506191673  |  <a href="mailto:csrzppalghar@gmail.com" style="color:#333; text-decoration:none;">csrzppalghar@gmail.com</a></div>
<div class="bodytext3Green text-center topPadding15">Smt. Manisha Nirbhavane</div>
<div class="bodytext text-center">Public Relations Officer</div>
<div class="bodytext text-center topPadding5">M: +918830327106 |  <a href="mailto:pro.zppalghar@gmail.com" style="color:#333; text-decoration:none;">pro.zppalghar@gmail.com</a></div>

</div>
</div>
</div>


</div>
                   
                </div>
                <!--End of row-->
              
                   
                <!--End of row-->
            </div>
            
            <hr color="green" />
            <div class="container">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="office">
                            <div class="office_location">
                                <!-- div to embed Google Map on the page -->
                                <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="385" id="gmap_canvas" src="https://maps.google.com/maps?q=Zilla%20Parishad%2C%20Palghar%20Lokmanya%20Nagar%2C%20Vishnu%20Nagar%2C%20Palghar%2C%20Maharashtra%20401404&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{text-align:right;height:385px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:385px;width:500px;}</style></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>Drop A Message</h5>
                            </div>

                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div id="message"></div>
                                    <form action="contact.php" class="form-horizontal contact-1" role="form" name="contactform" id="contactform" method="post"> 
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name"  required>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="subject" class="form-control" name="subject" id="subject" placeholder="Subject *"  required>
                                                <div class="text_area">
                                                    <textarea name="msg" id="msg" class="form-control" cols="30" rows="8" placeholder="Message"></textarea>
                                                </div>
                                                <button type="submit" name="send" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->
              
        <!--Start of footer-->
       <?php
       include "footer.php";
       ?>



        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="js/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="js/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="js/jquery.counterup.min.js"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="js/gmaps.min.js"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 23.6911078,
                    lng: 90.5112799,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: 23.6911078,
                    lng: 90.5112799,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="js/isotope/min/scripts-min.js"></script>
        <script src="js/isotope/cells-by-row.js"></script>
        <script src="js/isotope/isotope.pkgd.min.js"></script>
        <script src="js/isotope/packery-mode.pkgd.min.js"></script>
        <script src="js/isotope/scripts.js"></script>
        <link href="css/default.css" rel="stylesheet">

        <!--Back To Top-->
        <script src="js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="js/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom JavaScript-->
        <script src="js/main.js"></script>
    </body>

</html>
