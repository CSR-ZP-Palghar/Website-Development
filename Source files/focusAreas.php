<!-- Including connect.php file to use some elements -->
<?php
include "connect.php";
mysqli_set_charset($conn, 'utf8');
?>

<!-- Start of the HTML page -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Link to various stylesheets and Javascript sheets -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Focus Areas</title>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/font-awesome.min.css">
	
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <link rel="stylesheet" href="css/isotope/style.css">
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
	      <link href="css/temp_default.css" rel="stylesheet">
	      <link href="admin/assets/css/custom.css" rel="stylesheet" />


  <!-- Start of styling elements in CSS -->
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
  
#even {
    /*background-color: cornsilk;*/
}

#newtemp-odd {
  width: 50%;
  height: 50%;
  margin-right: 80px;
  border: 5px solid #214D78;
  }
        
#newtemp-even {
  width: 50%;
  height: 50%;
  margin-left: 50px;
  border: 5px solid #214D78;
  }
            
#odd {
  background-color:beige;
  padding-top:15px;
  padding-bottom:15px;
  }
        
#even {
  background-color: blanchedalmond;
  padding-top:15px;
  padding-bottom:15px;
  }


</style>

    </head>


    <!-- Start of body, Main Webpage -->
    <body data-spy="scroll" data-target="#header">

   <!-- div for Main Logo -->  
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
       <!-- Start of Header Section and Dropdown menu-->
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
                                    <li class="active">
                                        
                                        <div class="dropdown" >
                					    <a href="focusAreas.php"><button class="dropbtn">FOCUS AREAS</button></a>
                					      <div class="dropdown-content">
                						<a href="focusAreas.php#education">EDUCATION</a><br>
                						<a href="focusAreas.php#health">health</a><br>
                						<a href="focusAreas.php#women">WOMEN AND CHILD DEVELOPMENT</a><br>
                						<a href="focusAreas.php#sanitation">WATER SANITATION AND HYGIENE (WASH)</a><br>
                					      </div>
                                    </li>
                                    
                        <li >
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
                                    <li><a href="contact.php">contact us</a></li>
                                </ul>
    </div>
</div>

        <!--Start of welcome section-->
        <section id="welcome">
		  <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>Key Focus Areas</h2>
			<p><font size=4px face="georgia"><b>Hon. CEO Milind Bhorikar has vision to develope for key sectors- Health, Nutrition , Educationa and WaSH </b></font></p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row" >
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div >
                                        <img src="img/educations.png"  height="120px" width="120px">
                                    </div>
                                    <h4>Education</h4>
                                </div>
                            </div>
                        </div>
                    </div>

			
			<div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/health.png" height="120px" width="120px">
                                    </div>
                                    <h4>Health</h4>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <a href="#volunteer">
                                    <div >
                                       <img src="img/nuetrition.png"  height="120px" width="120px">
                                        
                                    </div>
                                    <h4>Women and Child Development (ICDS)</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                   <div >
                                       <img src="img/sanitation.png"  height="120px" width="120px">
                                        
                                    </div>
                                    <h4>WATER SANITATION AND HYGIENE (WASH)</h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    
	
                    <!--End of col-md-3-->
                </div>

	<div>
            <!--End of container-->
       <BR><BR><BR>
           
    
    <hr/>
    <br>
    <!-- Start of Education section -->
    <div class="row align-items-center" id="odd" style="width: 1080px;">
						<div class="col-md-8 home-about-left" style="text-align:center">
							<br>
							<h1>EDUCATION</h1><BR><BR>
							<p><font size=4px>The emphasis is to supplement infrastructure so that more students are encouraged to attend schools and the schools are empowered to provide better education. </font></p>
							<h4 align="right" style="padding-right: 10ox;">
							    <br><b>- Sri Rajesh Kankal, HOD Education&emsp;&emsp;</b>
							</h4>
						</div>
						<div class="col-md-4 home-about-right" style="padding-top: 15px;">
							<img class="img-fluid" src="img/education-hod.jpg" alt="" id="newtemp-odd" style="margin-left: 60px;">
						</div>
					</div><BR><BR>
	<!-- End of Education section -->

	<!-- Start of Health section -->
    <div class="row align-items-center" id="even" style="width: 1080px; margin-left:150px">
						<div class="col-md-4 home-about-left" align="left" style="text-align:center" style="padding-top: 15px;">
							<img class="img-fluid" src="img/health-hod.jpg" alt="" id="newtemp-even">
						</div>
					<div class="col-md-8 home-about-right"  style="text-align:center">
							<br>
							<h1>HEALTH</h1><BR><BR>
							<p><font size=4px>We want to provide best and accessible health care services, specially to poor and tribal communities by collaboration with other government department and non-government organisation</font></p>
							<h4 align="right" style="padding-right: 10ox;">
							    <br><b>- Dr. Dayanand Suryawanshi, HOD Health&emsp;&emsp;</b>
							</h4>
						</div>
		</div><BR><BR>			
	<!-- End of Health section -->

	<!-- Start of Women and Child Development section -->
    <div class="row align-items-center" id="odd" style="width: 1080px;">
						<div class="col-md-8 home-about-left" style="text-align:center">
							<br>
							<h1>WOMEN AND CHILD DEVELOPMENT</h1><BR><BR>
							<p><font size=4px>We want to eliminate child malnutrition and provide bright and cheerful environment for early childhood development of Palghar's children. </font></p>
							<h4 align="right" style="padding-right: 10ox;">
							    <br><b>- Sri Rajendra Patil, HOD ICDS&emsp;&emsp;</b>
							</h4>
						</div>
						<div class="col-md-4 home" style="padding-top: 15px;">
							<img class="img-fluid" src="img/icds-hod.jpg" alt="" id="newtemp-odd" style="margin-left: 60px;">
						</div>
					</div><BR><BR>
	<!-- End of Women and Child Development section -->

		<!-- Start of WASH section -->
    <div class="row align-items-center" id="even" style="width: 1080px;  margin-left:150px">
						<div class="col-md-4 home-about-left" align="left" style="text-align:center" style="padding-top: 15px;">
							<img class="img-fluid" src="img/water-hod.jpg" alt="" id="newtemp-even">
						</div>
					<div class="col-md-8 home-about-right"  style="text-align:center">
							<br>
							<h1>WATER SANITATION AND HYGIENE </h1><BR><BR>
							<p><font size=4px> The major aim to provide adequate and clean toilet facilities to all  rural households and maintain its sustainability for improvement of health, safety and cleanliness of rural families. </font></p>
							<h4 align="right" style="padding-right: 10ox;">
							    <br><b>- Sri Tushar Mali, HOD Water Sanitation and Hygiene&emsp;&emsp;</b>
							</h4>
						</div><BR><BR>
		</div>				
	<!-- End of WASH section -->
	<BR><BR>
	<hr/>
					
	  <!--  <div class="container" id="education">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2><div >
                                       <img src="img/educations.png"  height="120px" width="120px">
                                        
                                    </div><br>
                                    <font color="#004C6C">Education</font></h2>
			<p><font size=4px>The emphasis is to supplement infrastructure so that more students are encouraged
to attend schools and the schools are empowered to provide better education. </font></p>
                        </div>
                    </div>
                </div>-->
                <!--End of row-->
                <!--<div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div >
                                       <img src="img/sanitation.png"  height="120px" width="120px">
                                        
                                    </div>
                                    <h4>Building toilet blocks in schools</h4>
                                </div>
                            </div>
                        </div>
                    </div>	

			
			<div class="col-md-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div >
                                       <img src="img/sci.png"  height="120px" width="120px">
                                        
                                    </div>
                                    <h4>Modernising science laboratory in secondary schools</h4>
                                   
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--End of col-md-3-->
                    <!--<div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                       <img src="img/cctv.png"  height="120px" width="120px">
                                        
                                    </div>
                                    <h4>Suggest a topic</h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--End of col-md-3-->
                    <!--<div class="col-md-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div >
                                       <img src="img/sports.png"  height="120px" width="120px">
                                        
                                    </div>
                                    <h4>Suggest a topic</h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--End of col-md-3-->
                    <!--<div class="col-md-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                   <div >
                                       <img src="img/wheel.png"  height="120px" width="120px">
                                        
                                    </div>
                                    <h4>Suggest a topic</h4>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
<div class="col-md-2">
                       
                    </div>
	
        </section>-->


        <!--Start of volunteer-->
        
	<!--<section id="portfolio" class="text-center">
		<div class="container" id="health">
            <div class="col-md-12">
                <div class="wel_header">
                    <h2>
                        <div>
                        <img src="img/health.png"  height="120px" width="120px">
                        </div> <br>
                        <font color="#FD1852">Health</font>
                    </h2><br>
                </div>    
            
            </div>
            <img src="img/nhealth.jpg">
            </div>
	
    </section>

<section id="volunteer">
            <div class="container" id="women">
                <div class="row vol_area">
                   <center> <div class="col-md-15">
                        <div class="volunteer_content">
                            <div class="wel_header">
                            <h2>
                        <div>
                        <img src="img/nuetrition.png"  height="120px" width="120px">
                        </div>
                        <font color="#66A64D"><span>Women and Child Development</span></font>
                    </h2>  </div>
                            <p><font size="4px">The aim is to provide training and employment opportunities which help marginalised segments of society to improve their quality of life.</font></p>
                        </div>
                    </div>
			</center>
<br>

<div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                        <div class="carousel-inner">
                                            <div class="active item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p></p>
                                                        </div>
                                                        
                                                    </div>
						   
                                                    <div class="col-md-6">
                                                        
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p></p>
                                                        </div>
                                                       
                                                    </div>
						
                                                </div>
                                            </div>
					    
                                        </div>
                                    </div>
                                </div>
                            </div>
			 </div>-->
                <!--End of row and vol_area-->
            <!--</div>-->
            <!--End of container-->
        <!--</section>-->
        <!--end of volunteer-->


	<!--<section id="portfolio" class="text-center">
		<div class="container" id="sanitation">
            <div class="col-md-12">
                <div class="portfolio_title" >
                    <div class="wel_header">
                 <h2>
                        <div>
                        <img src="img/sanitation.png"  height="120px" width="120px">
                        </div>
                        <font color="#008297"><span>Water Sanitation and Hygiene (WaSH)</span></font>
                    </h2>
                </div>
                    <p><font size=4px>The attention is on the household sanitation and drinking water facility.</font><br> <h3> <font color="#008297">The initiatives include: </font></h3></p>
                </div>
            </div>

<section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                
                                <div class="blog_content" style="background-color:#008297">
                                   <h3 style="margin-top: 60px;"><font color="white">Identification of gaps for the facilities of household sanitation and drinking water, with the list of industries located in the surrounding areas who can extend their CSR activities in these areas.</font></h3>
                                    
                              
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--End of col-md-4-->
                    <!--<div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                               
                                <div class="blog_content" style="background-color:#008297">
                                    <h3 style="margin-top: 60px;"> <font color="white">'Swachh Bharat' and 'Nirmal Bharat Abhiyan' initiative for solid and liquid waste management plus prevention of open defecation for towns and villages.</font></h3>
                                 
                                   
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--End of col-md-4-->
                    <!--<div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                
                                <div class="blog_content" style="background-color:#008297">
                                   <h3 style="margin-top: 60px;"> <font color="white">To provide adequate and clean toilet facilities to all rural households and maintain its sustainability for improvement of health, safety and cleanliness of rural families.</font></h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>-->
			
                    <!--End of col-md-4-->
                <!--</div>
		<br>-->
		<!--<div class="row">
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                
                                <div class="blog_content" style="background-color:#008297">
                                    <h3><font color="white">please give your priorities to be included here</font></h3>
                                  
                               
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--End of col-md-4-->
                    <!--<div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                               
                                <div class="blog_content" style="background-color:#008297">
                                   <h3><font color="white">please give your priorities to be included here </font></h3>
                                    

                                    <p class="blog_news_content"></p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--End of col-md-4-->
                    <!--<div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                
                                <div class="blog_content" style="background-color:#008297">
                                   <h3><font color="white">please give your priorities to be included here</font></h3>
                                    

                                    <p class="blog_news_content"></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>-->
			
                    <!--End of col-md-4-->
                <!--</div>-->
                <!--End of row-->
            <!--</div>
		</div>-->
            <!--End of container-->
        <!--</section>-->
        <!--end of portfolio-->





        <!--end of volunteer-->

        <!--Start of portfolio-->
        <!--end of portfolio-->



<!-- Inclunding blogs using blogs.php -->        
</section>
    <?php include "blogs.php"; ?>
   
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
