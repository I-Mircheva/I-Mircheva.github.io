<!doctype html>

<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<title>Supernatural!</title>
</head>
<body>
<div class="container">
  <div class="gfx"><span></span></div>
  <div class="top">
    <div class="navigation"> <a href="#" id="selected">Homepage</a> 
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

           <form action="upload.php" method="post" enctype="multipart/form-data">
    Share with us your favorite picture:
    <input type="file" name="fileToUpload" id="fileToUpload" value="browse">
    <input type="submit" value="Upload Image" name="submit">
      </form>

      
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






<body>


  <?php

  session_start();
  

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
 $user = $_POST['user'];
 $pass = $_POST['pass'];

 if($user == "Ank" && $pass == "1234" )  
 {                                    

    $_SESSION['user']=$user;



         header("Location: index.php");            //  On Successfull Login redirects to home.php
         $valid = true;  
       }

       else
       {
        $valid = false;   
      }


    }

    ?>
 

    <?php

    if(isset($valid) && $valid == false)
    {
      echo "Invalid Username or Password!";
    }



    ?>


</body> 

</html>


