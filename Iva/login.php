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
      <p>Please log in first.</p>


        <form action="" method="post" >

      <table width="300" border="0">
        <tr>
          <td>  Username</td>
          <td> <input type="text" name="user" maxlength="50" > </td>
        </tr>
        <tr>
          <td> Password  </td>
          <td><input type="password" name="pass"  maxlength="50" ></td>
        </tr>
        <tr>
          <td> <input type="submit" name="login" value="Dive in!"></td>
          <td></td>
        </tr>
      </table>
    </form>


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





    <div><a href="http://i892.photobucket.com/albums/ac129/UShisui/Supernatural/SPN-LOGOS-supernatural-10790363-1346-584.jpg"></a></div>

    <?php

    if(isset($valid) && $valid == false)
    {
      echo "Invalid Username or Password!";
    }



    ?>
    </div>
    
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





 


</body> 

</html>
