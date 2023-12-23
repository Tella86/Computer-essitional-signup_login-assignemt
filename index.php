<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
 
?>
<!DOCTYPE html> 
<html>

  <head>
    <title>My portfolio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="styles.css">

  </head>

  <body>

    <nav>

      <header>

       <div class="cointainer">
        </div>
        <h3></h3>
        <div class="nav-links">
          <a href="#signup.php">Home</a>
          <a href="#login.php">About</a>
          <a href="#login.php">Resume</a>
          <a href="#login.php">Contacts</a>
          <a href="#login.php">Documents</a>
          <a href="logout.php">Logout</a>
        </div>
      </header>
    </nav>
    <br><br><br>

    <section id="Home" class="page">
      <img src="./Images/ericoooo.jpg" alt="" />
      <div class="home-desc">
        <h1></h1>
        <h3>Hello world, I’m Eng. Ziroh K. Mae</h3><br>
        <p>
          Do you want to know more about me?
          <p>By Clicking The Sign up Button, You Agree to My<br>
          <a href="">Terms And condition</a> and <a href="">Policy Privacy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login Here</a></p> 
        

        </p>
    
        
        <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
        <?php else: ?>
        
        <a href=signup.html><button>Signup</button></a>
    
  
        <?php 
          endif; 
        ?>
      </div>
    </section>
    <section class="footer">
      <div class="footer-content">
        <p>Mobile Number: +254799086123</p>
        <p>Email Address: nillymae07@gmail.com</p>
        </div>
        <div class="social-media">
                <a href="https://facebook.com/zirohm"><i class="fa fa-facebook"></i></a> 
                <a href="www.linkedin.com/in/ziroh-katana-24b23a9/"><i class="fa fa-linkedin"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a> 
        </div>
        <div class= "footer-rights"> 
         <p>Built by: Ziroh Katana Mae |© 2023 | Ziroh Mae| <br>All Rights Reserved</p>
      </div>
    </section>
  </body>
</html>
    
    
    
    
    
    
    
    
    
    
    