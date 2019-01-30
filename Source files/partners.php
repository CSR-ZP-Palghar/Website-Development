<!-- Including connect page to use some elements -->
<?php
include "admin/connect.php";
?>

<!-- Start of HTML document -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Link to various stylesheets and Javascript sheets -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Our Partners</title>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/font-awesome.min.css">
  
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <link rel="stylesheet" href="css/isotope/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link href="css/temp_default.css" rel="stylesheet">
	<link href="admin/assets/css/custom.css" rel="stylesheet" />
               

    <!-- Start of styling for elements in CSS -->
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

            .switch input {
  display: none;
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

.taluka {  background-color: #D5F5E3; }
.sector {  background-color: #EBDEF0; }
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
 <!-- End of styling section -->

    </head>

   <!-- Start of body, Main Webpage starts -->
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


       <!-- Start Hedaer Section and Dropdown menu -->
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
                    <li class="active"><a href="partners.php">Our Partners</span></a></li>
                                    <li><a href="contact.php">contact us</a></li>
                                </ul>
    </div>
</div>


            <!-- Start of container for text -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
				<br><br><hr/>
                            <h2>Get NGO Information</h2>
                            
                        </div>
                    </div>
                </div>
                <div>
                    <font size="4px" face="Cambria">
                        <p align="center">
                            Select taluka(s) and sector(s) from list below and click 'GET NGO DATA' button to view details
                        </p>
                    </font>
                </div>
            <br>
                
                <div class="row">
                    
                    <font size="6px" face="Serif" hspace="110px" color="#196F3D"><b>Select Talukas</b></font>
                     <span style="display:inline-block; width: 350px;"></span>    <font size="6px" face="Serif" color="#6C3483"><b>Select Sectors</b></font>
                </div>

                <!-- FORM to take input of selection and fetch data from Backend Server -->
                <form name="frm" method="POST" action="partners.php">
                <div id="Menu" >
     <div id="M_1" class="taluka">
        <div>
                  <label class="switch">
                      <input type="checkbox" name='ngo_toggle[]' value="Wada">
                      <span class="slider"></span>
                    </label> Wada
                </div>

                <div>
                  <label class="switch">
                      <input type="checkbox" name='ngo_toggle[]' value="Vikramgarh">
                      <span class="slider"></span>
                    </label> Vikramgad
                </div>

                <div>
                  <label class="switch">
                      <input type="checkbox" name='ngo_toggle[]' value="Jawhar">
                      <span class="slider"></span>
                    </label> Jawhar
                </div>
                <div>
                  <label class="switch">
                      <input type="checkbox" name='ngo_toggle[]' value="Mokhada">
                      <span class="slider"></span>
                    </label> Mokhada
                </div>
                <div>
                  &nbsp;
                </div>
                <div>
                  &nbsp;
                </div>
                 <div>
                  &nbsp;
                </div>
                
     </div>

     <!-- Display of toggle swithces for selection -->
     <div id="M_4" class="taluka">
            <div>
                  <label class="switch">
                      <input type="checkbox" name='ngo_toggle[]' value="Dahanu">
                      <span class="slider"></span>
                    </label> Dahanu
                </div>

                <div>
                  <label class="switch">
                      <input type="checkbox" name='ngo_toggle[]' value="Talasari">
                      <span class="slider"></span>
                    </label> Talasari
                </div>

                <div>
                  <label class="switch">
                      <input type="checkbox" name='ngo_toggle[]' value="Vasai">
                      <span class="slider"></span>
                    </label> Vasai
                </div>
                <div>
                  <label class="switch">
                      <input type="checkbox" name='ngo_toggle[]' value="Palghar">
                      <span class="slider"></span>
                    </label> Palghar
                </div>
                <div>
                  <label class="switch">
                      <input type="checkbox" name='ngo_toggle[]' value="all">
                      <span class="slider"></span>
                    </label> Select All Talukas
                </div>
                <div>
                  &nbsp;
                </div>
     </div>

     <div id="M_3" class="sector">
            <div>
                  <label class="switch">
                      <input type="checkbox" name='sector_toggle[]' value="Nutrition">
                      <span class="slider"></span>
                    </label> Nutrition (ICDS)

                </div>

                <div>
                  <label class="switch">
                      <input type="checkbox" name='sector_toggle[]' value="Health">
                      <span class="slider"></span>
                    </label> Health & family welfare
                </div>

                <div>
                  <label class="switch">
                      <input type="checkbox" name='sector_toggle[]' value="Education">
                      <span class="slider"></span>
                    </label> Education and Litaracy
                </div>
                <div>
                  <label class="switch">
                      <input type="checkbox" name='sector_toggle[]' value="Water">
                      <span class="slider"></span>
                    </label> Water, Sanitation & Hygiene
                </div>
                <div>
                  &nbsp;
                </div>
                <div>
                  &nbsp;
                </div>
                 <div>
                  &nbsp;
                </div>
                

     </div>
     <div id="M_4" class="sector">
       
                <div>
                  <label class="switch">
                      <input type="checkbox" name='sector_toggle[]' value="Agriculture">
                      <span class="slider"></span>
                    </label> Agriculture

                </div>

                <div>
                  <label class="switch">
                      <input type="checkbox" name='sector_toggle[]' value="Women">
                      <span class="slider"></span>
                    </label> Women Empowerment 
                </div>

                <div>
                  <label class="switch">
                      <input type="checkbox" name='sector_toggle[]' value="Rural">
                      <span class="slider"></span>
                    </label> Rural Development
                </div>
                <div>
                  <label class="switch">
                      <input type="checkbox" name='sector_toggle[]' value="Others">
                      <span class="slider"></span>
                    </label> All Others
                </div>
                <div>
                  &nbsp;
                </div>
                <div>
                  &nbsp;
                </div>
                 <div>
                  &nbsp;
                </div>

        </div>

</div>


            <!-- Button to post the input from form -->
            </div>
             <br> <center><div class="row"><input type="submit" class="button" value="Get NGO Data">
             </div></center>
             </form>
             <br> <center><div class="row" >
<script type="text/javascript">

</script>

<!-- Working behind sending selection and getting data using SQL -->
<?php
if(!empty($_POST['ngo_toggle'])){
$count=1;

?>
              <div style="overflow-x:auto;" class="w3-container city">

    <?php



$sql = 'SELECT * FROM partners WHERE ';

$taluka_toggle_count = count($_POST['ngo_toggle']);

if(strcasecmp($_POST['ngo_toggle'][$taluka_toggle_count-1], 'all') == 0){
    
if(!empty($_POST['sector_toggle'])){

$sql.='(';

$sql .= '(Dahanu = "YES" OR Jawhar = "YES" OR Mokhada = "YES" OR Palghar = "YES" OR Talasari = "YES" OR Vasai = "YES" OR Vikramgarh = "YES" OR Wada = "YES") AND ';

$sector_toggle_count = count($_POST['sector_toggle']);

$sql.='(';

for($y = 0; $y < $sector_toggle_count; $y++){

if(strcasecmp($_POST['sector_toggle'][$y], 'Water') == 0){

$sql .= 'Working_sectors LIKE "%Water%" OR Working_sectors LIKE "%Hygiene%"' ;

}
else if(strcasecmp($_POST['sector_toggle'][$y], 'Others') == 0){

$sql .= 'Working_sectors LIKE "%Any Other%"' ;

}
else
{

$sql .= 'Working_sectors LIKE "%'  .$_POST['sector_toggle'][$y] .'%"' ;  

}  


  if($y +1 < $sector_toggle_count) {
    $sql .= ' OR ';
  }

}

$sql.='))';

}
  
#echo $sql;
}

else{

for($x = 0; $x < $taluka_toggle_count; $x++){

if(!empty($_POST['sector_toggle'])){

$sql.='(';

$sql .= $_POST['ngo_toggle'][$x] .' = "YES" AND ';

$sector_toggle_count = count($_POST['sector_toggle']);

$sql.='(';

for($y = 0; $y < $sector_toggle_count; $y++){

if(strcasecmp($_POST['sector_toggle'][$y], 'Water') == 0){

$sql .= 'Working_sectors LIKE "%Water%" OR Working_sectors LIKE "%Hygiene%"' ;

}
else if(strcasecmp($_POST['sector_toggle'][$y], 'Others') == 0){

$sql .= 'Working_sectors LIKE "%Any Other%"' ;

}
else
{

$sql .= 'Working_sectors LIKE "%'  .$_POST['sector_toggle'][$y] .'%"' ;  

}  


  if($y +1 < $sector_toggle_count) {
    $sql .= ' OR ';
  }

}

$sql.='))';

}
  if($x +1 < $taluka_toggle_count) {
    $sql .= ' OR ';
  }


}

#echo $sql;
}
}

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    

while($row = mysqli_fetch_assoc($result))  {
?>
                <button class="accordion"><?php echo $row["Name_of_your_OrganizationNGO"]; ?></button>
<div class="panel">
<table id="data">
    <tr>
        <td><b>Regional Office Address:</b><br><?php echo $row["Regional_Office_Address"]; ?></td>
        <td><b>Point of Contact:</b><br><?php echo $row["Point_of_contact_PoC"]; ?><br><br><b>Mobile Number of Point of Contact:</b><br><?php echo $row["Mobile_Number_of_point_of_contact_PoC"]; ?><br><br><b>Email address of Point of Contact:</b><br><?php echo $row["Email_address_of_point_of_contactPoC"]; ?></td>
        <td><b>Working Sectors:</b><br><?php echo $row["Working_sectors"]; ?></td>
         <td><b>Work Description:</b><br><?php echo $row["Work_Description"]; ?></td>
        <td><b>Working in Grampanchayats</b><br>
        <b>Dahanu</b><br><?php echo $row["Dahanu_GramPanchayats"]; ?><br>
        <b>Jawhar</b><br><?php echo $row["Jawhar_GramPanchayats"]; ?><br>
        <b>Palghar</b><br><?php echo $row["Palghar_GramPanchayats"]; ?><br>
        <b>Mokhada</b><br><?php echo $row["Mokhada_GramPanchayats"]; ?><br>
        <b>Vasai</b><br><?php echo $row["Vasai_GramPanchayats"]; ?><br>
        <b>Vikramgarh</b><br><?php echo $row["Vikramgarh_GramPanchayats"]; ?><br>
        <b>Wada</b><br><?php echo $row["Wada_GramPanchayats"]; ?><br>
        <b>Talasari</b><br><?php echo $row["Talasari_GramPanchayats"]; ?><br>
        </td>
    </tr>
    </table>
</div>
      

<?php $count+=1;
}
}
?>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

             </div></center>
             </br></br>

            <!--End of container-->
    
      
       
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
