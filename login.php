<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: portfolio.html");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
 
   button{
     padding: 10px;
     width: 100px;
     color: white;
     background-color: lightblue;
     border: none;

    }

     
  
    h1{
    margin: center;
    color:   blue;
    text-align: center;
  }
  
  .button-login{
         padding: 8px;
         width: 140px;
         color: greenyellow;
         background-color: 0;
         margin-left: 150px;
         background-color: 0;
         border-radius: 20px 20px 0 0; 
        
        }
       

    
        form{
         background-color: 0;
         margin: auto;
         width: 80%;
         height: 35%;
         padding: 30px;
         text-align: center;
         color: white;
         justify-content: 0;
         
      }
        h1{
        margin: center;
        color:   blue;
        text-align: center;
      }
      :root {



/* solid */

--jet: hsl(0, 0%, 22%);
--onyx: hsl(240, 1%, 17%);
--eerie-black-1: hsl(240, 2%, 13%);
--eerie-black-2: hsl(240, 2%, 12%);
--smoky-black: hsl(0, 0%, 7%);
--white-1: hsl(0, 0%, 100%);
--white-2: hsl(0, 0%, 98%);
--orange-yellow-crayola: hsl(45, 100%, 72%);
--vegas-gold: hsl(45, 54%, 58%);
--light-gray: hsl(0, 0%, 84%);
--light-gray-70: hsla(0, 0%, 84%, 0.7);
--bittersweet-shimmer: hsl(0, 43%, 51%);

/**
 * typography
 */

/* font-family */
--ff-poppins: 'Poppins', sans-serif;


/* font-weight */
--fw-300: 300;
--fw-400: 400;
--fw-500: 500;
--fw-600: 600;

/**
   * transition
   */

   --transition-1: 0.25s ease;
  --transition-2: 0.5s ease-in-out;

}






/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*, *::before, *::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

a { text-decoration: none; }

li { list-style: none; }

img, ion-icon, a, button, time, span { display: block; }

button {
font: inherit;
background: none;
border: none;
text-align: left;
cursor: pointer;
}

input, textarea {
display: block;
width: 100%;
background: none;
font: inherit;
}

::selection {
background: var(--orange-yellow-crayola);
color: var(--smoky-black);
}

:focus { outline-color: var(--orange-yellow-crayola); }

html { font-family: var(--ff-poppins); }

body { background: var(--smoky-black); }





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.sidebar,
article {
background: var(--eerie-black-2);
border: 1px solid var(--jet);
border-radius: 20px;
padding: 15px;
box-shadow: var(--shadow-1);
z-index: 1;
margin-left: 0px;

}

.article-title {
position: relative;
padding-bottom: 7px;
}


/*-----------------------------------*\
#NAVBAR
\*-----------------------------------*/

.navbar {
position: center;
bottom: 0;
left: 0;
width: 100%;
background: hsla(240, 1%, 17%, 0.75);
backdrop-filter: blur(10px);
border: 1px solid var(--jet);
border-radius: 12px 12px 0 0;
box-shadow: var(--shadow-2);
z-index: 5;

}

.navbar-list {
display: flex;
flex-wrap: wrap;
justify-content: center;
align-items: center;
padding:  10px;

}

.navbar-link {
color: var(--light-gray);
font-size: var(--fs-8);
padding: 20px 7px;
transition: color var(--transition-1);

}

.navbar-link:hover,
.navbar-link:focus { color: var(--light-gray-70); }

.navbar-link.active { color: var(--orange-yellow-crayola); }





.button {
  color: white;
  padding: 8px;
  width: 75px;
  color: white;
  background-color: greenyellow;
  border: none;
 margin-left: 460px;
  
}



/**
 * #NAVBAR
 */

.navbar { border-radius: 20px 20px 0 0; }

.navbar-list { gap: 20px; }

.navbar-link { --fs-8: 14px; }






/**
 * NAVBAR
 */

.navbar-link { --fs-8: 15px; }

/**
 * NAVBAR
 */

.navbar {
  position: center;
  bottom: auto;
  top: 0;
  left: auto;
  right: 0;
  width: max-content;
  border-radius: 0 20px;
  padding: 0 20px;
  box-shadow: none;
}

.navbar-list {
  gap: 0px;
  padding: 0 20px;

}

.navbar-link { font-weight: var(--fw-500); }


/**
 * REUSED STYLE
 */

 .sidebar, article { width: 100%; }

article { min-height: 100%; }



/**
 * MAIN
 */

 main {
  max-width: 1200px;
  margin-inline: auto;
  display: flex;
  justify-content: center;
  align-items: stretch;
  gap: 25px;
}

.main-content {
  min-width: 70%;
  width: 75%;
  margin: 0;
}




.footer {
padding-top: 1rem;
padding-bottom: 1rem;
width: 100%;
background-color: 0;
text-emphasis-color: white;
}


.footer-content {
width: 80%;
margin: auto;
text-align: center;
}
.footer-rights{
width: 90%;
margin: bottom;
text-align: center;
color: white;
}

    </style>
</head>
<!--
      - #main-content
    -->

    <div class="main-content">

        <!--
          - #NAVBAR
        -->
  
        <nav class="navbar">
  
          <ul class="navbar-list">
  
            <li class="navbar-item">
              <button class="navbar-link  active" data-nav-link>About</button>
            </li>
  
            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Resume</button>
            </li>
  
            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Portfolio</button>
            </li>
  
            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Blog</button>
            </li>
  
            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Contact</button>
            </li>
            <li class="navbar-item">
              <a href="logout.php">Logout</a>
            </li>
  
          </ul>
  
        </nav>
<body>
<br><br><br>
    <h1>Login</h1>
    </section>
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <div class="button-login">
        <button>Log in</button>
        </div>
        
    </form>
    
    <div class= "footer-rights"> 
       <p>Built by: Ziroh Katana Mae |© 2023 | Ziroh Mae</p>
        <p> All Rights Reserved</p>
    </div>
</body>
</html>







