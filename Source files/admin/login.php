<?php
include "connect.php";
$msg = "";
session_start();
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM users where username = '$username' and password = '$password';";
    
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION["username"] = $row["username"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["power"] = $row["power"];
        }
        header('Location: '. 'index.php');
    } else {
        $msg = "Invalid Username and Password..";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<body>

<div class="container">
 
    <div class="modal-dialog panel panel-primary">
   
      <!-- Modal content-->
      <div>
        <div class="modal-header" style="padding:35px 50px;">
          
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="login.php" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password"placeholder="Enter password">
            </div>
              <button type="submit" name = "login" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
              <font size="4px" color="red"> <?php if(isset($_POST["login"])) { echo $msg; } ?> </font>
          </form>
        </div>
       
      </div>
      
    </div>
  </div> 
</div>
 
</body>
</html>
