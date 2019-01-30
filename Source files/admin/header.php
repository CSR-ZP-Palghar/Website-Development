<?php

include "connect.php";
session_start();
mysqli_set_charset($conn, 'utf8');
$msg = "";
$profile="";
$name= "";
if (isset($_SESSION['username']))
{
    $username = $_SESSION["username"];
    $power = $_SESSION["power"];
    $sql = "Select * from users where username='$username';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $profile = $row['pic'];
        $name = $row['Name'];
        }
    } 
}
else{
    header('location: /admin/login.php');
}
function readCSV($csvFile){
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle) ) {
        $line_of_text[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
    return $line_of_text;
}

if(isset($_POST["fileSubmit"])){
    $mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
    $fname = $_FILES['file']['name'];
    $imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
    $table = $_POST["pos"];
    echo $table;
    $type = $_FILES['file']['type'];
    echo $type;
    if(in_array($_FILES['file']['type'],$mimes)){
         if (file_exists("upload/" . $_FILES["file"]["name"])) {
            $msg =  $_FILES["file"]["name"] . " already exists. ";
             }
             else {
                    
            $storagename = $fname;
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $storagename);
            echo "Stored in: " . "upload/" . $_FILES["file"]["name"] . "<br />";
            }
        $csv = readCSV("upload/".$fname);
        print_r($csv);
        
        if($table == "ICDS"){
            $count = 1;
            
            while($count < sizeof($csv)){
                $sql = "";
                $sql = "INSERT INTO `anganwadi` (`id`, `gpname`, `anganwadiName`, `location`, `toRepair`, `toiletStatus`, `waterPurifier`, `stadioMeter`, `infantoMeter`, `fence`, `washBesin`, `weighingMachin`) VALUES (NULL, ";
                $c = 0;
                while($c < 10){
                    $sql = $sql."'".$csv[$count][$c]."', ";
                    $c++;
                }
                $sql = $sql."'".$csv[$count][$c]."');";
               
                if(! mysqli_query($conn, $sql)){
                     $msg = "something went wrong";   
                }
                $count++;
            }
            
        }
        else if($table == "Education"){
            $count = 1;
            
            while($count < sizeof($csv)){
                $sql = "";
                $sql = "INSERT INTO `zpReq` (`id`, `villagename`, `schoolname`, `bldStatus`, `classroomStatus`, `majorRepair`, `minorRepair`, `Req_Toiletb`, `Req_Toiletg`, `electricStatus`, `Bndrywall`, `Water`, `Computer`, `Totcomp_Func`, `compNotFunc`, `libraryReq`, `CompAidedLearning`, `Handwash_Yn`) VALUES (NULL, ";
                $c = 0;
                while($c < 16){
                    $sql = $sql."'".$csv[$count][$c]."', ";
                    $c++;
                }
                $sql = $sql."'".$csv[$count][$c]."');";
               
                if(! mysqli_query($conn, $sql)){
                     $msg = "something went wrong";   
                }
                $sql = $sql."'".$csv[$count][$c]."');";
                
                // if(! mysqli_query($conn, $sql)){
                //      $msg = "something went wrong";   
                // }
                $count++;
            }
            
        }
       
        $msg = "Slider Image Updated Successfully";

    }
    else{
        $msg = "Only Images allowed to upload";
    }    
    
}

if(isset($_POST["sliderSubmit"])){
    $image = $_FILES['sliderimg']['name'];
    $imgData = addslashes(file_get_contents($_FILES['sliderimg']['tmp_name']));
    $place = $_POST["pos"];
    
    $type = $_FILES['sliderimg']['type'];
    
    if(substr($type, 0, 5) == "image"){
        $sql = "UPDATE blogpost set title='', data='', img='$imgData', link='', author='', org='' where id='$place' and type='slider'";
       
        mysqli_query($conn, $sql);
        $msg = "Slider Image Updated Successfully";

    }
    else{
        $msg = "Only Images allowed to upload";
    }    
    
}


if(isset($_POST["blgSubmit"])){
    $head = $_POST["blgheading"];
    $data = $_POST["desc"];
    $place = $_POST["position"];
    $image = $_FILES['blgimg']['name'];
    $link = $_POST["link"];
    $author= $_POST["author"];
    $org =$_POST["org"];
    $imgData = addslashes(file_get_contents($_FILES['blgimg']['tmp_name']));
    
    
    $type = $_FILES['blgimg']['type'];
    
    if(substr($type, 0, 5) == "image"){
        $sql = "UPDATE blogpost set title='$head', data='$data', img='$imgData', link='$link', author='$author', org='$org' where id='$place' and type='blog'";
        
        mysqli_query($conn, $sql);
        $msg = "Blog Updated Successfully";

    }
    else{
        $msg = "Only Images allowed to upload";
    }    
    
}

if(isset($_POST["newsSubmit"])){
    $head = $_POST["newsheading"];
    $data = $_POST["desc"];
    $place = $_POST["position"];
    $image = $_FILES['blgimg']['name'];

    $imgData = addslashes(file_get_contents($_FILES['blgimg']['tmp_name']));
    
    $type = $_FILES['blgimg']['type'];
    
    if(substr($type, 0, 5) == "image"){
        $sql = "UPDATE blogpost set title='$head', data='$data', img='$imgData', link='$link' where id='$place' and type='news'";
        mysqli_query($conn, $sql);
        $msg = "News Updated Successfully";

    }
    else{
        $msg = "Only Images allowed to upload";
    }    
    
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
   
</head>
<body>
    <div id="wrapper">
       
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        
                        <img src="data:image/jpeg;base64, <?php echo base64_encode($profile); ?>"  width="80%"  height="80%"  />
                    </li>


                    <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="adduser.php"><i class="fa fa-desktop "></i>Add Users</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-desktop "></i>Logout</a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Welcome <?php echo $name; ?> </h2>
                    </div>

                </div>
            