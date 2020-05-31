<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.css">
<title>Upload Page</title>
</head>
<body>
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
    
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 2500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
    </body>
</html>