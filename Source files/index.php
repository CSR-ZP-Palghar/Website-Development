<!-- Including contact.php to use some elements -->
<?php
include "connect.php";
mysqli_set_charset($conn, 'utf8');
?>

<!-- Start of HTML page -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Link to various stylesheets and Javascript sheets -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CSR, Palghar</title>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/font-awesome.min.css">
	
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">
 
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link rel="stylesheet" href="css/isotope/style.css">
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
 	      <link href="css/temp_default.css" rel="stylesheet">
	      <link href="admin/assets/css/custom.css" rel="stylesheet" /> 
        <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


  <!-- Start of styling of elements in CSS -->
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

.switch {
  display: inline-block;
  width: 60px; /*=w*/
  height: 30px; /*=h*/
  margin: 8px;
  transform: translateY(50%);
  position: relative;
}

.slider {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  border-radius: 30px;
  box-shadow: 0 0 0 2px #777, 0 0 4px #777;
  cursor: pointer;
  border: 4px solid transparent;
  overflow: hidden;
  transition: 0.4s;
}

.slider:before {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  background-color: #777;
  border-radius: 30px;
  transform: translateX(-30px); /*translateX(-(w-h))*/
  transition: 0.4s;
}

input:checked + .slider:before {
  transform: translateX(30px); /*translateX(w-h)*/
  background-color: #4CAF50;
}

input:checked + .slider {
  box-shadow: 0 0 0 2px #4CAF50, 0 0 8px #4CAF50;
}

.switch200 .slider:before {
  width: 200%;
  transform: translateX(-82px); /*translateX(-(w-h))*/
}

.switch200 input:checked + .slider:before {
  background-color: red;
}

.switch200 input:checked + .slider {
  box-shadow: 0 0 0 2px red, 0 0 8px red;
}

#M_1
{
    display: inline-block;
  float: left;
width: 20%; 
font-size: 18px;
}

#M_2
{
    display: inline-block;
  float: left;
  width: 20%; 
 
font-size: 18px;  
}

#M_3
{
    display: inline-block;
  float: left;
  width: 30%; 
   
font-size: 18px;
}

#M_4
{
  display: inline-block;
  float: left;
  width: 25%; 
  font-size: 18px;   
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

#data { table-layout: fixed;
        margin-left: 2em;
        margin-right: 2em;
        width: 90%;
}

table th {padding: 5px; width:auto; word-wrap:break-word;}
table td {padding: 5px; width:auto; word-wrap:break-word;}

.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 5px;
    width: 90%;
    border: none;
    text-align: center;
    outline: none;
    font-size: 22px;
    transition: 0.4s;
}

 .accordion:hover {
    background-color: #ccc;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.panel {
    padding: 5 5px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    width: 90%;
    font-size: 16px;
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


       <!--Start of Header Section and Dropdown menu-->
        <div id="header" class="myHeader ">
          <div id="menu" class="container ">
              <ul>
                        <li class="active">
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
         

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="max-height:500px;">
    <div class="item active">
      <img src="img/ban01.jpg" alt="">
    </div>

    <div class="item">
      <img src="img/gandhiji.jpg" alt="">
    </div>

    <div class="item">
      <img src="img/anemia.PNG" alt="">
    </div>
    
    <div class="item">
      <img src="img/img1.png" alt="">
    </div>
    
    <div class="item">
      <img src="img/mahalabharthi.jpg" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

       

        <!--Start of welcome section-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>welcome to <span> Social Transformation Cell, ZP Palghar</span></h2>
                           <font color="#72080C"  class="uppercase"><h3> <b>Social transformation beyond corporate responsibility</b></h2></font>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-1">
                        <div class="item"></div>
                    </div>
                    <div class="col-md-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                       <img src="img/rr/advise1.png"  height="140px" width="140px">
                                    </div>
                                    <h4>Advise</h4>
                                    <font size="4px">We offer a single window system for guidance on CSR projects by identifying projects critical for the development of the district and sharing CSR best practices to drive meaningful positive change. </font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                       <img src="img/rr/assist1.png"  height="140px" width="140px">
                                    </div>
                                    <h4>Assist</h4>
                                    <font size="4px">We provide a consolidated repository of CSR projects undergoing in the district to avoid duplication of efforts and evaluate the effectiveness of projects implemented by various agencies.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                   <div>
                                       <img src="img/rr/facilitate1.png"  height="140px" width="140px">
                                    </div>
                                    <h4>Facilitate</h4>
                                    <font size="4px">We act as a bridge between corporates, NGOs and industry associations to implement CSR efficiently and enable ample opportunities for efficient investment of CSR funds.</font>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                     <div class="col-md-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                       <img src="img/rr/fasttrack1.png"  height="140px" width="140px">
                                    </div>
                                    <h4>Fast Track</h4>
                                    <font size="4px">We expedite government clearances needed to initiate a CSR project as well as extend help in conceptualisation, proposal development and liaison with implementing agencies.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                       <img src="img/rr/collaborate1.png"  height="140px" width="140px">
                                    </div>
                                    <h4>Collaborate</h4>
                                    <font size="4px">You can work in collaboration with the government, NGOs, experts in the field and citizens of the district, leading to a cumulative synergy and larger impact.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->
        


        <!--Start of volunteer section-->
        <section id="volunteer">
            <div class="container">
                <div class="row vol_area">
                    <center><div>
                        
                        
                    </div>
                    </center>
                    <br><br>
                   
                   <center> <table  width="70%">
                        <div class="col-md-3">
 			        <img src="img/CEO-ed1.jpg" height="190px" width="185px" >
                               
			</div>                        
		   	<div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                           <p> <font size="5px">We wish to create a platform for collaboration with multiple stakeholders in <font color="#8E1326"> District's development,</font> a platform which will guide, compliment and equitably distribute incoming CSR/philanthropic activities in district" </p>
                                                           
                                                           <div id="nametag" align="right" style="margin-top: -25px;">           
                                                           <font size="4px">-<b>Sri Milind Borikar (IAS), CEO-ZP Palghar</b></font>
                                                           </div>
								 
                                                        </div>
                                                       
                                                    </div>
                                
                            </td>
                        </tr>
                    </table>
                    </center>
                    <!--End of col-md-3-->
                </div>
                <!--End of row and vol_area-->
            </div>
            <!--End of container-->
        </section>
        <!--end of volunteer section-->


     <!-- Start of Welcome section -->
     <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>District CSR Cell</h2>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/rr/singleWindow.png" height="120px" width="120px">
                                    </div>
                                    <br>
                                    <font size="4px"> Act as a single window system for guidance on CSR projects and all government clearances etc.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/rr/divotee.png" height="120px" width="120px">
                                    </div>
                                    <br>
                                    <font size="4px"> Dovetail corporate CSR efforts so that they synergise with existing government programmes</font>
                                </div>
                            </div>
                        </div>
                    </div>
			<div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div >
                                        <img src="img/rr/guide.png" height="120px" width="120px">
                                    </div>
                                    <br>
                                    <font size="4px"> To Guide, Compliment and Equitabaly distribute incoming CSR activities in district</font>
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
                                        <img src="img/rr/copy.png" height="120px" width="120px">
                                    </div>
                                    <br>
                                    <font size="4px"> Avoid duplication of projects/ Development work.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>

		<div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/rr/share.png" height="120px" width="120px">
                                    </div>
                                    <br>
                                    <font size="4px"> Share best practices in Development work among CSR Units, NGOs and other stakeholders</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/rr/hub.png" height="120px" width="120px">
                                    </div>
                                    <br>
                                    <font size="4px"> Act as a hub and integrate projects by different CSR Units/NGOs/Academic institutions to create a consolidated large scale transformation with demonstrable results </font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/rr/bridge.png" height="120px" width="120px">
                                    </div>
                                    <br>
                                    <font size="4px">Function as a bridge between Government and All other stakeholders. i.e. CSR Units, NGOs, Industry Associates and Academia </font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/rr/gov.png" height="120px" width="120px">
                                    </div>
                                    <br>
                                   <font size="4px">To be a platform for convergence between Government Departments, NGOs and CSR  </font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- Custom styling for one element -->
    <style>
        #space {
            
            padding-right: 80px;
            padding-left: 80px;
            }

    </style>
    
    <section id="portfolio">
            <div class="col-md-12" id="space">
                <div class="portfolio_title">
                    <h2>overview</h2><br>
                <div class="portfolio-body">
                    <font size="5px"><p aligh="LEFT">Non-governmental organizations / CSR units/ academic institution are known to
have fond difficulties in deal with government ‘Red Tape’ systems. Getting
minor permission, data etc, has been time and energy consuming. There is little
or no sync between Government departments and NGOs. Evident that
government department work in their individual ‘silos’, the NGOs and other
organizations working in development sector, also tend to work in their ‘silos’.
Therefore, there becomes a massive communication gap between all these
systems who are working towards common objective. Very often smaller
organizations lack the expertise and experience in particular sector. </p>
<p aligh="LEFT">For larger organizations systematically understanding grassroots level situations for
creating strategy of intervention becomes a challenge. Absence of any official
platform to share the experiences, learnings, best practices, ground level
challenges etc. makes situation critical. Existing government system is already
over-burdened and hence it was felt necessary that to execute the function of
Social Transformation, an independent ‘Cell’, directly supervised by CEO has
to function. With this background, the chief executive officer of Zila Parishad
Palghar, Maharashtra, Mr. Milind Borikar, conceived an idea of 'Social
Transformation Cell'.</p></h3></div>
                </div>
            </div>
            <!--End of col-md-2-->
            <!--End of colum-->
        </section>

        <!--end of portfolio-->
<hr/>
        <!--Start of portfolio-->
        <section id="welcome">
            <div class="container" id="benefits">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>Benefit to Corporates</h2>
                            
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/benefits/focus-1.png" width="140px" height="140px"/>
                                    </div><br>
                                    <font size="4px"> Focused utilization of CSR funds on priority areas.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/benefits/single2.png" width="140px" height="140px"/>
                                    </div><br>
                                    <font size="4px"> Single platform for collaboration with government, NGO and domain expert, leading to synergistic effort and larger impact.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/benefits/Hassel3.png" width="140px" height="140px"/>
                                    </div><br>
                                    <font size="4px"> Hassel free, single point of communication with all line of authority in government.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/benefits/corporate4.png" width="140px" height="140px"/>
                                    </div><br>
                                <font size="4px"> Better visibility of the organization and reinforcement of the corporate image.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
       		<hr/><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>Benefit to NGOs</h2>
                            
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/benefits/ngo1.png" width="140px" height="140px"/>
                                    </div><br>
                                   <font size="4px"> Learning Best practices from peers in district and other domain experts from outside district.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                   <div>
                                        <img src="img/benefits/opportunity.png" width="140px" height="140px"/>
                                    </div><br>
                                    <font size="4px"> Opportunity for collaboration with CSR entities /academic institution for expansion of current work.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/benefits/technical3.png" width="140px" height="140px"/>
                                    </div><br>
                                    <font size="4px"> Techinical upgradation' through workshops/training for NGO heads.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/benefits/single4.png" width="140px" height="140px"/>
                                    </div><br>
                                   <font size="4px"> Single point of contact for permission/information/ statistical data from government.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        	<hr/><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>Benefit to Academia</h2>
                            
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/challenges.jpg" width="140px" height="140px"/>
                                    </div><br>
                                    <font size="4px"> Work with the District Government to identify and Tackle ‘On field’ challenges. </font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/research.jpg" width="140px" height="140px"/>
                                    </div><br>
                                    <font size="4px">Test your Academic research ‘on field’ by collaborating with NGOs/ Local government bodies.</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/internship.jpg" width="140px" height="140px"/>
                                    </div><br>
                                    <font size="4px">Internship  Opportunities for students in understanding development challenges with Government departments, NGOs etc</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div>
                                        <img src="img/funding.jpg" width="140px" height="140px"/>
                                    </div><br>
                                    <font size="4px">Opportunity  for  Research  funding  from  Government/CSR  units/  NGO  for sector-specific research work</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>


    <!-- Including blogs using blogs.php -->    
    <?php include "blogs.php"; ?>
    
    
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
