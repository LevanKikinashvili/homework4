<?php
// include Function  file
include_once('function.php');
// Object creation
$userdata=new DB_con();
if(isset($_POST['submit']))
{
// Posted Values
$fname=$_POST['fullname'];
$uname=$_POST['username'];
$uemail=$_POST['email'];
$pasword=md5($_POST['password']);
//Function Calling
$sql=$userdata->registration($fname,$uname,$uemail,$pasword);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Registration successfull.');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.css">
<title>რეგისტრაცია</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assests/style.css" rel="stylesheet">
<script src="assests/jquery-1.11.1.min.js"></script>
<script src="assests/bootstrap.min.js"></script>
 <script>
function checkusername(va) {
  $.ajax({
  type: "POST",
  url: "check_availability.php",
  data:'username='+va,
  success: function(data){
  $("#usernameavailblty").html(data);
  }
  });

}
</script>
    
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
  <table align="center">Registration Form Using OOP
<div class="control-group">
      <!-- Fullname -->
      <label class="control-label"  for="username"></label>
      <div class="controls">
          <tr>
          <td>
        <input type="text" id="username" name="fullname" placeholder="Enter Your Fullname" class="input-xlarge" required="true">
              </td>
          </tr>  
    </div>
    </div>


    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username"></label>
      <div class="controls">
          <tr>
          <td>
<input type="text" id="username" placeholder="Enter your Username" name="username" onblur="checkusername(this.value)" class="input-xlarge" required="true">
          <span id="usernameavailblty"></span>
              </td>
              </tr>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email"></label>
      <div class="controls">
          <tr>
          <td>
        <input type="email" id="email" name="email" placeholder="Enter Your E-Mail" class="input-xlarge" required="true">
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
              <br>
        <button class="btn btn-success btn-lg btn-block" type="submit" id="submit" name="submit">Register</button>
        </td>
          </tr>
        </div>
    </div>

 <div class="control-group">
      <div class="controls">
          <tr>
          <td>
       Already Registered? <a href="signin.php">Login</a>
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
