





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
      <div class="title">Magical names!</div>
      <div class="metadata">Jun 17, 2015 by Ivona</div>
      <div class="body">
       
        <img class="left" src="img/map.jpg" width="180" height="152" alt="sample image"/>
       
      </div>


    
         <form action="" method="post" >

      <table width="300" border="0">
        <tr>
          <td> Your name</td>
          <td> <input type="text" name="user" maxlength="50" > </td>
        </tr>
       
        <tr>
          <td> <input type="submit" name="login" value="Show me!"></td>
          <td></td>
        </tr>
      </table>
    </form>


    <?php
  session_start();

  if  (!isset($_SESSION["user"])) {
    header("Location: login.php");
  }
?> 

 <?php

  
  
    

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
  $string = $_POST['user'];



  $words = explode(' ', $string);
  $words = array_map('strrev', $words);
  
  echo "Your magical name is:";

  echo "<h3>". implode(' ', $words). "</h3>";
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