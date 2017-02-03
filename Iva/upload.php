

<!doctype html>
<html>
<head>
 <link rel="stylesheet" href="style.css">

</head>
<body>

 <html>
<head>

<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<title>Supernatural!</title>
</head>
<body>
<div class="container">
  <div class="gfx"><span></span></div>
  <div class="top">
    <div class="navigation"> <a href="index.php" id="selected">Homepage</a> 
      <a href="names.php">Which monster are you?</a>
      <a href="magicpage.php">  Discover your magical name!</a>
       
      </div>

    <div class="pattern"><span></span></div>
    <div class="header">
      <h1>Supernatural</h1>
      <p>Adventures of Two brothers</p>
    </div>
    <div class="pattern"><span></span></div>
  </div>
  <div class="content">
    <div class="spacer"></div>
    <div class="item">
      <div class="title">Welcome!</div>
      <div class="metadata">Jun 17, 2015 by Ivona</div>
      <div class="body">
       
        <img class="left" src="img/map.jpg" width="180" height="152" alt="sample image"/>
       
      </div>



<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
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
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



<div class="item">
      <div class="divider"><span></span></div>
      <div class="title">Supernatural</div>

      <p>Two brothers follow their father's footsteps as "hunters" fighting
       evil supernatural beings of many kinds including monsters,
        demons, and gods that roam the earth.</p>

      
      <div class="body">
        
      </div>
    </div>
    <div class="divider"><span></span></div>
    <div class="item">
      <div class="title">Monsters</div>
      
      <div class="body">
      
        <ul>
          <li>Vampires</li>
          <li>Wendigos</li>
          <li>Djinns</li>
          <li>Dragons</li>
          <li>Ghosts</li>
          <li>Werewolves</li>
        </ul>
        
      </div>
    </div>
    <div class="divider"><span></span></div>
   </div> 
  <div class="footer">  Copyright©Ivona Mircheva </div>

</body>
</html>