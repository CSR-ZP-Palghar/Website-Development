<?php
include "connect.php";
$gpname = $_POST["gp"];
mysqli_set_charset($conn, 'utf8');
?>
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GreenFair</title>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <link rel="stylesheet" href="css/isotope/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/temp_default.css" rel="stylesheet">
	<link href="admin/assets/css/custom.css" rel="stylesheet" />

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
    text-decoration: underline;
    z-index: 100;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: underline;
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
  
  
  .btn:focus{
    background:olive;
}
button.plan {color: white;}
   
.w3-bar-item w3-button:checked + .btn{background:#fff;}

</style>


    </head>

    <body data-spy="scroll" data-target="#header">

        <!--Start Hedaer Section-->
       

        <!--Start of welcome section-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2><?php echo $gpname;?></h2>
                        </div>
                    </div>
               </div>
		<div class="row">
		
        <h2 class="w3-text-grey w3-padding-16"></i></h2>
        

<div class="w3-container">
<div class="w3-bar w3-teal">
  <button class="w3-bar-item w3-button" name="btn" onclick="openCity('education')">EDUCATION</button>
  <button class="w3-bar-item w3-button" id="btn" onclick="openCity('icds')">ICDS</button>
  <button class="w3-bar-item w3-button" id="btn" onclick="openCity('health')">HEALTH</button>
  <button class="w3-bar-item w3-button" id="btn" onclick="openCity('water')">WATER & SANITATION</button> 
 <a href="
 <?php

$sql1 = "SELECT * FROM `plan20172018` WHERE `GramPanchayat` = '$gpname'";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {

while($row = mysqli_fetch_assoc($result1)) {
echo $row["Total_Plan_Link"]; 

}

}
else
{
	echo "temp.html";
}

?>
 " class="plan" target="_blank" > <button class="w3-button w3-right plan"  style="background-color:#344c45" >  PLAN DATA 2017-2018 </button></a>
 
  
<a href="
<?php

$sql2 = "SELECT * FROM `plan20162017` WHERE `GramPanchayat` = '$gpname'";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {

while($row = mysqli_fetch_assoc($result2)) {
echo $row["Total_Plan_Link"]; 

}

}
else
{
	echo "temp.html";
}

?>
 " class="plan" target="_blank" > <button class="w3-button w3-right plan"  style="background-color:#344c45" >  PLAN DATA 2016-2017 </button></a>
  
</div>




<div id="education" class="w3-container city">
  <br>
  <table BORDER="1"class="w3-table-all w3-hoverable w3-card-4 " style="overflow:scroll;>
<?php

$sql = "SELECT * from zpReq where villagename in (Select villagename from gpmapping where gpname = '$gpname')";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $count=1;
    ?>
     <thead>
      <tr class="w3-light-grey">
	<th> Sr. No. </th>
        <th>School Name</th>
	<th>Building Status</th>
        <th>Total Class Room</th>
        <th>Classroom Requiring Major Repair</th>
        <th>Classroom Requiring Minor Repair</th>
	<th>Total Girl's Toilet Required</th>
        <th>Total Boy's Toilet Required</th>
	<th>Electric Status</th>
        <th>Boundary Wall Status</th>
    <th>Library Status</th>
        <th>Computers Required</th>
	
        <th>Computer Aided Learning Stutus</th>
        <th>Handwash Required</th>
        
      </tr>
    </thead>
    
    <?php
    
    while($row = mysqli_fetch_assoc($result)) {
        $bldStatus="";
        if($row["bldStatus"] == 1) $bldStatus="Private";
        if($row["bldStatus"] == 2) $bldStatus="Rented";
        if($row["bldStatus"] == 3) $bldStatus="Government";
        if($row["bldStatus"] == 4) $bldStatus="Free Rented Gov. School";
        if($row["bldStatus"] == 5) $bldStatus="No Building";
        if($row["bldStatus"] == 6) $bldStatus="Dilapidated";
        if($row["bldStatus"] == 7) $bldStatus="Under Construction";

        $eleStatus="";
        if($row["electricStatus"] == 1) $eleStatus="Yes";
        if($row["electricStatus"] == 2) $eleStatus="No";
        if($row["electricStatus"] == 3) $eleStatus="Yes but not functional";

        $bwall="";
        if($row["Bndrywall"] == 1) $bwall="Pucca";
        if($row["Bndrywall"] == 2) $bwall="Pucca but broken";
        if($row["Bndrywall"] == 3) $bwall="Barbed wire fencing";
        if($row["Bndrywall"] == 4) $bwall="Hedges";
        if($row["Bndrywall"] == 5) $bwall="No wall";
        if($row["Bndrywall"] == 6) $bwall="Others";
        if($row["Bndrywall"] == 7) $bwall="Partial";
        if($row["Bndrywall"] == 8) $bwall="Under Construction";

        $lib="";
        if($row["lib"] == 1) $lib="Yes";
        else $lib = "No";

        $hand="";
        if($row["Handwash_Yn"] == 1) $hand="Yes";
        else $hand = "No";


        $cal ="";
        if($row["CompAidedLearning"] == 1) $cal="Yes";
        if($row["CompAidedLearning"] == 2) $cal="No";
        else $cal="Yes but not functional";
?>
    <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row["schoolname"]; ?></td>
        <td><?php echo $bldStatus;?></td>
        <td><?php echo $row["classroomStatus"]; ?></td>
        <td><?php echo $row["majorRepair"]; ?></td>
        <td><?php echo $row["minorRepair"]; ?></td>
        <td><?php if($row["Req_Toiletg"] < 0) echo '0'; else echo $row["Req_Toiletg"]; ?></td>
        <td><?php if($row["Req_Toiletb"] < 0) echo '0'; else echo $row["Req_Toiletb"]; ?></td>
        <td><?php echo $eleStatus; ?></td>
        <td><?php echo $bwall ?></td>
        <td><?php echo $lib; ?></td>
        <td><?php echo $row["compNotFunc"];?></td>
        <td><?php echo $cal;?></td>
        
        <td><?php echo $hand;?> </td>

    </tr>
<?php $count+=1;
}
}
else{
    ?> <h2> No Data Avaibale </h2> <?php
}
?>
    </table>
<br> 
</div>



<div id="icds" class="w3-container city" style="display:none">
 <br>
  <table BORDER="1"class="w3-table-all w3-hoverable  w3-card-4">
    
<?php

$sql = "SELECT * from anganwadi where gpname = '$gpname'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $count=1;
    ?>
    
    <thead>
      <tr class="w3-light-grey">
    <th> Sr. No. </th>
        <th>Anganwadi Name</th>
        <th>Anganwadi Location</th>
    <th>To repair</th>
        <th>Toilet Status</th>
        <th>Require Water Purifier</th>
        <th>Require Stadio Meter</th>
    <th>Require Infanto Meter</th>
        <th>Require Fence</th>
    <th>Require Wash Besin</th>
        <th>Require Weighing Machine</th>
      </tr>
    </thead>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row["anganwadiName"]; ?></td>
        <td><?php echo $row["location"];?></td>
        <td><?php echo $row["toRepair"];?></td>
        <td><?php echo $row["toiletStatus"]; ?></td>
        <td><?php echo $row["waterPurifier"]; ?></td>
        <td><?php echo $row["stadioMeter"]; ?></td>
        <td><?php echo $row["infantoMeter"]; ?></td>
        <td><?php echo $row["fence"]; ?></td>
        <td><?php echo $row["washBesin"]; ?></td>
        <td><?php echo $row["weighingMachin"]; ?></td>
        

    </tr>
<?php $count+=1;
}
}
else{
    ?> <h2> No Data Avaibale </h2> <?php
}
?>
    </table>
<br> 
</div>
<div id="health" class="w3-container city" style="display:none">
<br><h2> Under Construction </h2>
</div>

<div id="water" class="w3-container city" style="display:none">

<br><h2> Under Construction </h2>
</div>





	    </div>
	</section>

         

	<script>
	function openCity(cityName) {
	    var i;
	    var x = document.getElementsByClassName("city");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";  
	    }
	    document.getElementById(cityName).style.display = "block";  
	}
	</script>

                


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

		var select = document.getElementById("select");
var options = [
  ["AKARE"],
  ["APTALE"],
  ["AYARE"],
  ["BARAVAPADA"],
  ["BHURITEK"],
  ["BORALE"],
  ["CHAMBHARSHET"],
  ["CHAUK"],
  ["DABHALON"],
  ["DABHERI"],
  ["DABHOSA"],
  ["DASKOD"],
  ["DEHARE"],
  ["DENGACHIMET"],
  ["DHADHARI"],
  ["DHANOSHI"],
  ["GHIVANDA"],
  ["GORTHAN"],
  ["HATERI"],
  ["HIRADPADA"],
  ["JAMSAR"],
  ["JUNIJAVHAR"],
  ["KASATWADI"],
  ["KAVALALE"],
  ["KAYARI"],
  ["KELGHAR"],
  ["KHADKHAD"],
  ["KIRMIRA"],
  ["KOGADA"],
  ["KORTAD"],
  ["NANDGOAN"],
  ["NYAHALE BU"],
  ["NYAHALE KHU 1"],
  ["OZAR"],
  ["PATHRDI"],
  ["PIMPALSHET"],
  ["RAIYATALE"],
  ["RUIGHAR BOPDARI"],
  ["SAKHARSHET"],
  ["SAKUR"],
  ["SARSUN"],
  ["SHIROSHI"],
  ["TALASARI"],
  ["TILONDA"],
  ["VADOLI"],
  ["VAVAR VANGALI"],
  ["VINAWAL"],
  ["WALVANDA"],
  ["ZAP"]
];

select.innerHTML = options.map(function(option) {
  return "<option>" + option + "</option>";
}).join("");
</script>




    </body>

</html>
