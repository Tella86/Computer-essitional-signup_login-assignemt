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
    <style>
 .home-content {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 200%;
    margin: auto;
    padding: 1.5rem;
  }
  
  /* 9. Styling for the image within the home content */
  .home-content > img {
    height: 500px;
  }
  
  /* 10. Styling for the home description section */
  .home-desc {
    width: 50%;
  }
  
  /* 11. Styling for the h3 element within the home description */
  .home-desc > h3 {
    font-size: 1.6rem;
    margin-bottom: 1rem;
    color: rgb(0, 110, 255);
    text-align: center;
    overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .0em solid white; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .0em; /* Adjust as needed */
  animation: 
    typing 1.5s steps(10, end),
    blink-caret .85s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 0 }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: white; }
}
  
  .home-desc > h1 {
    font-size: 1.6rem;
    margin-bottom: 1rem;
    color: rgb(0, 110, 255);
    text-align: center;
  }
 .home-desc > h1 {

    overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .0em solid White; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}
  /* 12. Styling for paragraphs within the home description */
  .home-desc > p {
    margin-bottom: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    
  }
  
  /* 13. Styling for the button within a link in the home description */
  .home-desc  > a > button {
    background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width: 100%;
}  
  
    </style>

</head>
<body>
<section id="Home" class="page">
    <img src="./Images/ericoooo.jpg" alt="" />
      <div class="home-desc">
    <h1>My Portfolio</h1>
    <h3>Hello world, I’m Eng. Ziroh K. Mae</h3>
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
        
    <?php endif; ?>
    </div>
</section>
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    