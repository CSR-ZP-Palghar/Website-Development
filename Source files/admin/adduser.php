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

if(isset($_POST["adduser"]) ){
    echo "inside";
    $name = $_POST["name"];
    $username = $_POST["username"];
    $power = $_POST["power"];
    $password = $_POST["pass"];
    $cpass = $_POST["c_pass"];
    
    if($password == $cpass) {
        
        $image = $_FILES['pic']['name'];

        $imgData = addslashes(file_get_contents($_FILES['pic']['tmp_name']));
        
        $type = $_FILES['pic']['type'];
        
        if(substr($type, 0, 5) == "image"){
        $sql = "INSERT into users values ('$name', '$username', '$password', '$power', '$imgData');";
        mysqli_query($conn, $sql);
        $msg = "User Added Successfully";    
        
        }
        else{
            $msg = "Upload proper image";
        }
        
    }
    else{
        $msg =  "Password does not match";
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
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                
            </div>
        </div>
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
                <hr />
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Add New User
                            </div>
                            <div class="panel-body">
                                <form name="blog" action="adduser.php" method="post" enctype="multipart/form-data">
				<table class="col-md-4">
				<tr>
				<td>Name &nbsp;</td>  <td><input type="text" class="form-control" name="name"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Username &nbsp;</td>  <td><input type="text" class="form-control" name="username"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Display Image:&nbsp;</td>  <td><input type="File" name="pic"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Password&nbsp;</td>  <td> <input type="password" class="form-control" name="pass"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Confirm Password&nbsp;</td>  <td> <input type="password" class="form-control" name="c_pass"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
			    <tr>
				 <td><font color="gray"> Privileges:&nbsp; </font></td>  <td> <font color="gray"> X1: Can do anything <br> X2: Can Update Blog, News, can add user <br> X3: Can update blogs and news only </font></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Select Privilege&nbsp;</td>  <td> 
								    <select name="power" class="form-control">
								        <option name="0"> Select </option>
								         <option name="1"> X1 </option>
								         <option name="1"> X2 </option>
								         <option name="1"> X3 </option>
								     </select>
								         </td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<?php 
				    if($power == 'X1' || $power == 'X2'){
				?>
				<tr>
				<td>&nbsp;</td><td><input type="submit" name="adduser"  class="btn btn-primary" value="Add User"></td>
				</tr>
				<?php
				    }
				else{
				?>
				<tr>
				<td>&nbsp;</td><td><input type="submit" name="adduser" disabled class="btn btn-primary" value="Add User"></td>
				</tr>
				<?php
				    }
				?>
				
				</table>
				</form> 
                            </div>
                            <div class="panel-footer">
                                <?php if(isset($_POST["adduser"])) {echo $msg;} ?>
                            </div>
                        </div>

			
                    </div>
              
                    

                </div>
               
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
