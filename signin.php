<?php
session_start();

include_once('function.php');

$usercredentials=new DB_con();
if(isset($_POST['signin']))
{

$uname=$_POST['username'];
$pasword=md5($_POST['password']);

$ret=$usercredentials->signin($uname,$pasword);
$num=mysqli_fetch_array($ret);
if($num>0)
{
  $_SESSION['uid']=$num['id'];
  $_SESSION['fname']=$num['FullName'];

echo "<script>window.location.href='welcome.php'</script>";
}
else
{

echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.css">
    <link href="assests/style.css" rel="stylesheet">
    <script src="assests/jquery-1.11.1.min.js"></script>
    <script src="assests/bootstrap.min.js"></script>
    
    
    <style>
    body {
   color: #fff;
background-image: url('https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg?cs=srgb&dl=gray-laptop-computer-showing-html-codes-in-shallow-focus-160107.jpg&fm=jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
    margin-top: 100px;
        text-align: center;
}
    </style>
    
    <style>
    table th, table td {
    background-color: #00000014;
}
    </style>

    <style>
    
    input, .form-control, .input-group-text, .custom-file-label {
    border-radius: 5px;
    background-color: #00000094;
    color: white;
    border-color: #00000094;
    margin-top: 10px;
    margin-right: 10px;
}
        
    </style>
    
    <style>
    
    input {

    width: 300px;
    border: none;
    border-radius: 50px;
    padding: 10px 20px;
    margin-bottom: 15px;
    margin-left: 15px;
    background-color: #0000006b;
    color: white;

}
    </style>
    
    <style>
    
::-webkit-input-placeholder {
text-align: center;
    color: #ffffff8a;
}
    
    </style>
    
    <style>
    
        input[type="submit"].btn-block, input[type="reset"].btn-block, input[type="button"].btn-block {
    width: 90%;
}
    
    </style>
    
    <style>
    textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    background-color: #0000006b;
    border: 1px solid #cccccc;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border linear .2s, box-shadow linear .2s;
    -moz-transition: border linear .2s, box-shadow linear .2s;
    -o-transition: border linear .2s, box-shadow linear .2s;
    transition: border linear .2s, box-shadow linear .2s;
            width: 300px;
    border: none;
    border-radius: 50px;
    padding: 10px 20px;
    margin-bottom: 15px;
    margin-left: 15px;
    background-color: #0000006b;
    color: white;
}
    
    </style>
    
</head>
<body>
<form class="form-horizontal" action='' method="POST">
  <fieldset>

<table align="center">
<div class="control-group">
      <!-- Fullname -->
      <label class="control-label"  for="username"></label>
      <div class="controls">
          <tr>
          <td>
        <input type="text" id="username" name="username" placeholder="Enter Your Username" class="input-xlarge" required="true">
              </td>
          </tr>
    </div>
    </div>


    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password"></label>
      <div class="controls">
<tr>
<td>
        <input type="password" id="password" name="password" placeholder="Enter Your Password" class="input-xlarge" required="true">
    </td>
          </tr>
        </div>
    </div>
 

 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
          <tr>
<td>
        <button class="btn btn-success btn-lg btn-block" type="submit" name="signin">Login</button>
              </td>
          </tr>
      </div>
    </div>

 <div class="control-group">
      <!-- Button -->
      <div class="controls">
               <tr>
     <td>
         Not Registered? <a href="index.php">Registration</a>
                   </td>
          </tr>
      </div>
    </div>
      </table>
  </fieldset>
</form>
<script type="text/javascript">

</script>
</body>
</html>
