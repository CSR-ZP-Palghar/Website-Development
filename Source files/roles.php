<!-- Including connect.php to use some elements -->
<?php
include "connect.php";
mysqli_set_charset($conn, 'utf8');
?>

<!-- Start of HTML page --> 
<html lang="en">

    <head>
        <!-- Link to various stylesheets and Javascript sheets -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roles and Responsibility</title>

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
  
  table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

#dev-text {
            /*margin: auto;*/
            text-align: center;
            cursor: pointer;
        }
        
        #dev-pic {
            margin-left: 110px;
            margin-right: 110px;
            max-height: 180px;
            max-width: 180px;
            cursor: pointer;
            opacity: 0.7;
        }
        
        #dev-pic:hover {
            opacity: 1;
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


         <!--Start of Header Section and Dropdown menu -->
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
                                    <li class="active">
                                        <div class="dropdown" >
                					    <a href="roles.php"><button class="dropbtn">PALGHAR DEVELOPMENT CORRIDOR</button></a>
                					      <div class="dropdown-content">
                						<a href="roles.php#welcome">INTRODUCTION</a><br>
                						<a href="roles.php#committee">OBJECTIVE OF PROJECT</a><br>
                						<a href="roles.php#group">PROJECT COVERAGE</a><br>
                						
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
       
     
        <!-- Start of Welcome Section -->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <center><h2><span>INTRODUCTION</span></h2></center></div>

                            <!-- Paragraphs for Intro text -->
                            <font size="4px"><p>Palghar district came into existence on 1 st August 2014 and was the 36 th district in
Maharashtra state. The district forms the northernmost part of the Konkan lowlands of
Maharashtra. Mainly consisting of plateau regions steadily receding from the Shayadris in
the East to the Ulhas valley in the South, Palghar is well endowed with natural resources in
the form of fertile soils, dense forests and perennial rivers. The district comprises of 8
Tehsils of Palghar, Vada, Vikramgad, Jawhar, Mokhada, Dahanu, Talasari and Vasai-Virar
with a total population of 2,990,116 (according to Census 2011). Geographical area of
Palghar district 469699 Hector,No of villages 1008 and Hamlets 3818,The overall literacy
rate Of Plaghar district is 66.65% , among them Male literacy rate 72.23%and Female
literacy rate 59.28%.</p></font><br>
<font size="4px"><p>The Mumbai Ahemdabad High Speed Rail (MAHSR)/Bullet Train Central Governments
flagship programme is going from Vasai, Palghar, Dahanu, and Talasari blocks of Palghar
district. Palghar Development Corridor will be implemented in 4 blocks of Palghar district i.e.
Vasai, Palghar, Dahanu and Talasari in 85 villages. Holistic development of 85 village is the
main purpose of Palghar Development Corridor. Special emphasis will be given on
Development of basic Infrastructure, Education, Sampurna Seva Abhiyan, Health and
Nutrition, Youth Development, Women empowerment and Livelihood Development. Overall
development of Palghar district will be achieved through this programme Project
Management Unit has been set to implement this project.</p> </font>
                        
                    </div>
		
<br>
                </div>
            </div>
        </section>
    

    <!-- Start of Volunteer Section -->
    <section id="volunteer">
            <div class="container">
                <div class="row vol_area">
                    <center><div>
                        
                        
                    </div>
                    </center>
                    <br><br>
                   
                   <!-- Image of collector and testimonial -->
                   <center> <div class="col-md-3">
 			        <img src="img/collector.jpg" height="190px" width="185px">
                               
			</div><div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                           <p> <font size="5px">We want to serve the people of our district to improve the lifestyle, empower women, youth skill development and increase income of farmers through organic farming with partnership of CSR. </font></p><font size="5px">
                                                           
                                                           <div id="nametag" align="right" style="margin-top: -45px;"> <br>
                                                           <font size="4px">-<b>Dr. Prashant Narnaware (IAS), Hon. Collector, Palghar</b></font>
                                                           </div>
                                                           
								 
                                                        </font></div><font size="5px">
                                                       
                                                    </font></div><table width="70%">
                                                 	  
                    </table><font size="5px">
                    </font></center><font size="5px">
                    <!--End of col-md-3-->
                </font></div><font size="5px">
                <!--End of row and vol_area-->
            </font></div><font size="5px">
            <!--End of container-->
        </font></section>
    

       <!-- Start of Welcome Section -->
       <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header" >
                            <center><h2><span>Objectives of Project</span></h2></center>
                        </div>
                        <div style="overflow-x:auto;">
                        <font size="4px"><ol>
                                <li>1. To develop basic infrastructure.                            </li>
                            <li>
                                2. To improve status of Health and Nutrition.                            </li> 
                            <li>
                                3. To improve status of Education and educational services.                            </li>
                            <li>
                                4. Women Empowerment.                            </li>
                            <li>
                                5. Holistic Development of youth.                                  </li>
                            <li>
                                6. To develop Agriculture and agri allied business.                      </li>
                            <li>
                                7. To create various livelihood options at village level, to make them self-dependent.    </li>
                        </ol>
                        </font>
                        </div>
                    </div>
            </div>
            </div>
</section>
<br><br>

<!-- Start of Development Section (New) -->
    <section id="development">

        <!-- Conatiner for row containing images -->
        <div class="container">
            <div class="col-md-12">
                <div class="wel_header" >
                    <center><h2><span>Development Projects</span></h2></center>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-md-4" id="dev-pic">
                    <a onClick="document.location='roles.php#livelihood';">
                        <img src="img/livelihood-logo.png" style="border-radius: 50%"></a>
                </div>
                <div class="col-md-4" id="dev-pic">
                    <a onClick="document.location='roles.php#education';">
                        <img src="img/education-logo.png" style="border-radius: 50%"></a>
                </div>
                <div class="col-md-4" id="dev-pic">
                    <a onClick="document.location='roles.php#seva';">
                        <img src="img/sampurna-logo.png" style="border-radius: 50%"></a>
                </div>
            </div>
        </div>
        <br>

        <!-- Conatiner for row containing text -->
        <div class="container">
            <div class="row">
                <div class="col-md-4" id="dev-text">
                    <a onClick="document.location='roles.php#livelihood';"><h3>LIVELIHOOD DEVELOPMENT</h3></a>
                    
                </div>
                <div class="col-md-4" id="dev-text">
                    <a onClick="document.location='roles.php#education';"><h3>QUALITY EDUCATION</h3></a>
                   
                </div>
                <div class="col-md-4" id="dev-text">
                    <a onClick="document.location='roles.php#seva';"><h3>SAMPURNA SEVA ABHIYAN</h3></a>
                </div>
            </div>
        </div><br><br>
        
        <!-- Conatiner for row containing images -->
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-4" id="dev-pic">
                    <a onClick="document.location='roles.php#health';">
                        <img src="img/health-logo.png" style="border-radius: 50%"></a>
                </div>
                <div class="col-md-4" id="dev-pic">
                    <a onClick="document.location='roles.php#youth';">
                        <img src="img/youth-logo.png" style="border-radius: 50%"></a>
                </div>
                <div class="col-md-4" id="dev-pic">
                    <a onClick="document.location='roles.php#cattle';">
                        <img src="img/cattle-logo.png" style="border-radius: 50%"></a>
                </div>
            </div>
        </div>
        <br>

        <!-- Conatiner for row containing text -->
        <div class="container">
            <div class="row">
                <div class="col-md-4" id="dev-text">
                    <a onClick="document.location='roles.php#health';"><h3>HEALTH AND NUTRITION</h3></a>
                </div>
                <div class="col-md-4" id="dev-text">
                    <a onClick="document.location='roles.php#youth';"><h3>YOUTH DEVELOPMENT</h3></a>
                </div>
                <div class="col-md-4" id="dev-text">
                    <a onClick="document.location='roles.php#cattle';"><h3>COMMUNITY CATTLE SHED</h3></a>
                </div>
            </div>
        </div>
</section>
<!-- End of Development Section -->
<br><br><br><br>


<br><hr/>
<!-- Start of Livelihood section -->
<section id="livelihood">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <br>
                            <center><h2><span>livelihood Development</span></h2></center>
                        </div>
                        <font size="4px">
                        <p>
                            Palghar is a geographical diverse district also known as tribal district, especially to reach at those people who are living in most hilly area of the district and give them advantage of governments various schemes and do their holistic development with the help of livelihood Programme. Through the Programme, enabling people to provide various livelihood tools and to make them small enterprise also to do economic and social empowerment of them it is the main objective of the corridor. 
                        </p><br>
                        <b><u><h3 align="left" style="color:black;">OBJECTIVES</h4></u></b>
                        <br>
                        <ol>
                            <li>&emsp;&emsp;1. Empowering women through SHGs</li>
                            <li>&emsp;&emsp;2. Develop a skilled entrepreneur by giving professional training</li> 
                            <li>&emsp;&emsp;3. Coordination between natural resources and livelihood</li>
                            <li>&emsp;&emsp;4. To Promote Agri-based businesses</li>
                            <li>&emsp;&emsp;5. Increase the involvement of women in Panchayat Raj Institution</li>
                            <li>&emsp;&emsp;6. Creating sustainable livelihood</li>
                            <li>&emsp;&emsp;7. Raise the financial level of women</li>
                            <li>&emsp;&emsp;8. Stop migration</li>
                            <li>&emsp;&emsp;9. Create employment locally</li>
                        </ol>
                        </font>
                        </div>
                    </div>
            </div>
            </div>
</section>
<!-- End of Livelihood section -->

<br><hr/>
<!-- Start of Education section -->
<section id="education">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <br>
                            <center><h2><span>quality education</span></h2></center>
                        </div>
                        <div style="overflow-x:auto;">
                        <font size="4px">
                            <p>
                                Education is the base of human life and also the base of bright future of human life therefore for this development, to develop complete quality development, educational development in the field of education is essential in this process primary education has lot of importance because this is the phase where child can learn various sacraments and this phase influences on human personality also. Therefore primary level id always focused in school quality development Programme.
  In relation to Palghar development Programme under the department of education various school quality development Programme and schemes will be implemented at village level.  </p><br>
   <b><p align="center"> HOLISTIC = STUDENTS + TEACHER+ SCHOOL+PEOPLE PARTCIPATION </p></b><br>
    <p> In this case, overall .i.e. student’s includes all aspects of physical, mental, intellectual, emotional, and social. Apart from this, training for teacher development, education committee ,workshop as per necessary requirement and other provision for the teachers and school infrastructure and people’s participation will be considered as well as the facilities and people s participation will be considered at the school level.

                            </p>
                            <br>
                        <b><u><h3 align="left" style="color:black;">OBJECTIVES</h4></u></b>
                        <br>
                        <ol>
                            <li>&emsp;&emsp;1. <b>To do 100% student attendance</b> in the age group of 6 to 14</li>
                            <li>&emsp;&emsp;2. 100% attendance and optional provision</li> 
                            <li>&emsp;&emsp;3. 0% school dropouts</li>
                            <li>&emsp;&emsp;4. Student holistic developments means- physical, emotional, intellectual, and social development</li>
                            <li>&emsp;&emsp;5. Empowerment of school teacher</li>
                            <li>&emsp;&emsp;6. Improve parent’s intervention in student developments</li>
                            <li>&emsp;&emsp;7. Implementing the expected educational Programme for student developments</li>
                            <li>&emsp;&emsp;8. To do available basic infrastructure and educational service</li>
                            <li>&emsp;&emsp;9. Increase people participation</li>
                            <li>&emsp;&emsp;10. For the implementation of above mention objectives to do arrangements of following Programme</li>
                        </ol>
                        </font>
                        </div>
                    </div>
            </div>
            </div>
</section>
<!-- End of Education section -->

<br><hr/>
<!-- Start of Seva section -->
<section id="seva">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <br>
                            <center><h2><span>sampurna seva abhiyan</span></h2></center>
                        </div>
                        <div style="overflow-x:auto;">
                        <font size="4px">
                            <p>
                                Central and State government is implementing various schemes for the development of village and hamlets, most of the times villagers had not necessary documents for getting the advantage of this schemes therefore they became deprived from the schems.to remedy on this Programme the entire service operation will be provided at the village level and the services will be provided for the same.<br></p>
                                <p align="center">
                                <b>To Provide All Governments certificates to the people at Gram panchayat level </b>
                                </p><br><br>
                        <b><u><h3 align="left" style="color:black;">Certificates to be received under Full Service Campaign</h4></u></b>
                        <br>
                                <ul style="list-style-type: circle">
                                    <li>&emsp;&emsp;1. Birth-Death Certificates </li>
                                    <li>&emsp;&emsp;2. Cast certificates</li>
                                    <li>&emsp;&emsp;3. Income certificates</li>
                                    <li>&emsp;&emsp;4. Certificate of Hilly Area residence</li>
                                    <li>&emsp;&emsp;5. Living certificates</li>
                                    <li>&emsp;&emsp;6. Ration card </li>
                                    <li>&emsp;&emsp;7. BPL Certificates</li>
                                    <li>&emsp;&emsp;8. Election card/Identity card </li>
                                    <li>&emsp;&emsp;9. Aadhar Card</li>
                                    <li>&emsp;&emsp;10. PAN Card </li>
                                    <li>&emsp;&emsp;11. Non Creamy layer certificates</li>
                                    <li>&emsp;&emsp;12. Marriage registration certificates </li>
                                    <li>&emsp;&emsp;13. Various Schemes’ information</li>
                                    <li>&emsp;&emsp;14. Senior citizen certificates</li>
                                    <li>&emsp;&emsp;15. Job card</li>
                                </ul>
                                
                         <br><br>
                        <b><u><h3 align="left" style="color:black;">OBJECTIVES</h4></u></b>
                        <br>
                        <ol>
                            <li>&emsp;&emsp;1. To give benefit of all types of government’s certificates to the villagers through camp</li>
                            <li>&emsp;&emsp;2. To give information about new government’s welfare schemes and projects to the general public</li> 
                            <li>&emsp;&emsp;3. To bring Tribal Community into the mainstream</li>
                            <li>&emsp;&emsp;4. Organize health camp under Sapurn Seva Camps</li>
                            <li>&emsp;&emsp;5. Organize an employment recruitment camp for the youth through Sapurna Seva Camp</li>
                            <li>&emsp;&emsp;6. Creating identity to Katkari Community through distribution of Katkari caste certificate</li>
                        </ol>
                        </font>
                        </div>
                    </div>
            </div>
            </div>
</section>
<!-- End of Seva section -->

<br><hr/>
<!-- Start of Health section -->
<section id="health">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <br>
                            <center><h2><span>health and nutrition</span></h2></center>
                        </div><br><br>
                        <div style="overflow-x:auto;">
                        <font size="4px"><ol>
                            <li>
                                <h3><b>AAA Workshop at Vasai, Palghar, Dahanu and Talasari</b></h3>
                                <p>&emsp;Village level Asha, ANM and Anganwadi Sevika provide health facilities, but the government has seen a difference in the reporting method and &emsp;lack of coordination among them has stated this programme.</p>
                            </li><br>
                            <li>
                                <h3><b>Celebrating Half Year Birthday</b></h3>
                                <p>&emsp;Date: 19/10/2018<br>
&emsp;Venue: Mittagar (Chikhalpada & Ranjanpada)<br>
&emsp;Support By: Aarohan Sanstha<br>
</p>
                            </li><br>
                            <li>
                                <h3><b>Dr. APJ Abdul Kalam Amrut Aahar Yojana</b></h3>
                                <p>&emsp;Date: 29/12/2018<br>
&emsp;Venue: Nandore, Bahipada, Padghe
</p>
                            </li>
                        </ol></font>
                        </div>
                    </div>
            </div>
            </div>
</section>
<!-- End of Health section -->

<br><hr/>
<!-- Start of Youth section -->
<section id="youth">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <br>
                            <center><h2><span>youth Development</span></h2></center>
                        </div>
                        <div style="overflow-x:auto;">
                        <font size="4px"><p>
                             Palghar volunteers Palghar development corridor is being implemented for the young leadership in the social sector, to development of the youth and register youths involvement in the development process and to get assistance of the youth at village level is the main objectives of the Programme.
                        </p><br>
                        <b><h3 align="left" style="color:black;">OBJECTIVES</h4></b>
                        <br>
                        <ol>
                            <li>&emsp;&emsp;1. To develop knowledge, skill and opinion of the youth who are willingly interested to do work on social problems.</li>
                            <li>&emsp;&emsp;2. To develop leadership quality among youth.</li> 
                        </ol><br>
                        <b><h3 align="left" style="color:black;">PARTICIPATION</h4></b>
                        <br>
                        <ol>
                            <li>&emsp;&emsp;1. We can get participation of youth age group 18 to 35</li>
                            <li>&emsp;&emsp;2. Who are illiterate but still doing leadership in social sector and who are willingly interested in being Paghar volunteer; they can participate &emsp;&emsp;&emsp;in this Programme</li> 
                            <li>&emsp;&emsp;3. The role of Palghar volunteer will be as a mediator while implementing Programme at village level</li>
                        </ol><br>
                        <b><h3 align="left" style="color:black;">FORMAT</h4></b>
                        <ol>
                            <li>&emsp;&emsp;1. Searching of youth, Identify youths and discussion with various youth group</li>
                            <li>&emsp;&emsp;2. Estimation of various social problems of youth and there opinion towards social identity, social stratification, gender, caste and towards &emsp;&emsp;&emsp;social discrimination</li> 
                            <li>&emsp;&emsp;3. To explain national and youth policy</li>
                            <li>&emsp;&emsp;4. To explain importance of success stories of Indian youth movements and various youth forum</li>
                            <li>&emsp;&emsp;5. For the influence on governments policy; to explain the importance of various Abhiyan, role organization, capacity building, had been done &emsp;&emsp;&emsp;in India</li>
                            <li>&emsp;&emsp;6. To preserve value of social tolerance, equality and social harmony among the youth</li>
                            <li>&emsp;&emsp;7. Towards social transformation to guide the work of social innovation in context of social leadership types, group building, capacity building &emsp;&emsp;&emsp;and decision making process</li>
                            <li>&emsp;&emsp;8. To create youth groups of various games to give training, and provide Cricket, Volleyball games stationary to them and help them for &emsp;&emsp;&emsp;   &emsp;&emsp; &emsp;creating ground for games</li>
                            <li>&emsp;&emsp;9. Arrangement of various festivals, competitions, for the development of youth leadership skill</li>
                        </ol><br>
                        <ol>
                            <li>
                                <h3><b>Two Wheeler Training for youth at Kelve Road</b></h3>
                                <p>&emsp;Venue: Kelve Road<br>
&emsp;Duration of Training : 3 Months <br>
&emsp;Beneficiary : 36 <br>
</p>
                            </li><br>
                        </ol>
                        </font>
                        </div>
                    </div>
            </div>
            </div>
</section>
<!-- End of Youth section -->

<br><hr/>
<!-- Start of Cattle section -->
<section id="cattle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <br>
                            <center><h2><span>community cattle shed</span></h2></center>
                        </div>
                        <div style="overflow-x:auto;">
                        <font size="4px">
                            <p>
                                The vacant animal should be prepared for them for free communication, they will remain free in the open and uninterrupted village in villages and forest. All kind of care will be taken in the community open shed. Farmers can keep and can be taken after register their animal at any time in this community open shed therefore it will help in the destruction of crops in the field in the field and prevent destruction of forest. Through the community animal shed it will be helpful for creating compost fertilizer.
                                </p>
                                <br>
                        <b><u><h3 align="left" style="color:black;">OBJECTIVES</h4></u></b>
                        <br>
                        <ol>
                            <li>&emsp;&emsp;1. To take care of Mock Animal </li>
                            <li>&emsp;&emsp;2. To stop seasonal migration of  Adivasai People</li> 
                            <li>&emsp;&emsp;3. It will be easier to farmers to get crops in two time</li>
                            <li>&emsp;&emsp;4. To protect Deforestation and depletion of land </li>
                        </ol>
                        </font>
                        </div>
                    </div>
            </div>
            </div>
</section>
<!-- End of Cattle section -->

<br><br><br>
<!-- Including blogs using blogs.php -->
<?php include "blogs.php"; ?>

    <style>
        .bodytext3Green {
    font-family: 'robotomedium';
    font-size: 1.75em;
    color: #43a906;
    line-height: 30px;
    }
    </style>   

<section id="footer">
            <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119332841-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119332841-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119303752-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119303752-1');
</script>

<!-- Attaching UNICEF logo and name - copyrighted -->
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>@ May, 2018 - Designed and Developed by <span><a href="http://www.ctara.iitb.ac.in/">CTARA, IIT BOMBAY</a></span></p>
                            <p> Supported By  <img src="img/unicef_logo.png" width="100px" height="30px"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                <div class="row" style="padding-left: 200px;>
                    <div class="colmd-12">
<div class="containerSm">


<!-- Attaching details of Project Co-ordinator -->
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 text-center rowTop3" style="margin-top: 10px;margin-bottom: 10px;width: 350px;">
<div class="bodytext text-center topPadding10">For Further Details, Contact:</div>
<div class="bodytext3Green text-center topPadding15">Akash C. Kolte</div>
<div class="bodytext text-center">Project Co-ordinator, Social Transformation Cell</div>
<div class="bodytext text-center topPadding5">M: +918830477690  |  <a href="mailto:palghardc2018@gmail.com" style="color:#AB5CD7; text-decoration:none;">  palghardc2018@gmail.com</a></div>

</div>
</div>


</div>
                   
                </div>
                <!--End of row-->
              
                   
                <!--End of row-->
            </div>
                    </div>
                   
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
       


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
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    </body>

</html>
