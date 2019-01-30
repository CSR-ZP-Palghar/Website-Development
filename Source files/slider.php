	
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">


    <head>
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CSR, Palghar</title>

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

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

}

.mySlides {display:none;}
</style>
</head>
<body>
 
<div class="w3-content w3-section" style="max-width:100%" >
   <?php
							    $q =  "SELECT * from blogpost where type='slider' order by id ASC;";
							    $result = mysqli_query($conn,$q);
							    while($row = mysqli_fetch_array($result)){  
							        
							 ?>

  <img class="mySlides" style="width:100%" src="data:image/jpeg;base64, <?php echo base64_encode($row["img"]); ?>" />
  <?php
							    }
   ?>
  
</div>

<script>
var myIndex = 0;
carousel();


function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

</body>
</html>
