
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/59ca79f7ba.js" crossorigin="anonymous"></script>
    <title>Embed PDFs in HTMl</title>
    <style>
        /* 1. Resetting default styles for all elements */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    line-height: 1.5rem !important;
    
  }
  
  /* 2. Styling for the navigation bar */
  nav {
    background-color: lightpink;
    padding: 1.5rem;
    box-shadow: 0px 0px 5px rgb(173, 230, 201);
    position: fixed;
    width: 100%;
    height: 63px;
    color: blue;
    
  }
  
  /* 3. Styling for the header within the navigation bar */
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    margin: auto;
    height: 20px;
    
  }
  .hello{
    position: fixed;
    height: auto;
    left: 0px;
    width: 0px;
  }
  
  /* 4. Styling for the h3 element within the header */
  header > h3{
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .0em solid white; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .0em; /* Adjust as needed */
  animation: 
    typing 4.5s steps(20, end),
    blink-caret .85s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 50% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}


  
  /* 5. Styling for the container of navigation links */
  .nav-links {
    display: flex;
    justify-content: space-between;
    width: 40%;
  }
  
  /* 6. Styling for individual navigation links */
  .nav-links > a {
    text-decoration: none;
    color: black;
    margin-left: 0.5rem;
    cursor: pointer;
  }
  
  /* 7. Styling for navigation links on hover */
  .nav-links > a:hover {
    color: rgb(0, 110, 255);
  }
  
  /* 8. Styling for the home content section */
  .home-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
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
  }
  
  /* 12. Styling for paragraphs within the home description */
  .home-desc > p {
    margin-bottom: 1.5rem;
    line-height: 1.5rem;
  }
  
  /* 13. Styling for the button within a link in the home description */
  .home-desc > a > button {
    padding: 0.7rem 2rem;
    font-weight: bold;
    background-color: transparent;
    border: 1px solid rgb(0, 110, 255);
    border-radius: 6px;
    color: rgb(0, 110, 255);
    cursor: pointer;
  }
  
  /* 14. Styling for the button on hover within the home description */
  .home-desc > a > button:hover {
    background-color: rgb(0, 110, 255);
    border: 1px solid rgb(0, 110, 255);
    color: white;
  }
  
  /* 15. Styling for the about content section */
  .about-content {
    display: flex;
    justify-content: space-between;
    width: 90%;
    margin: auto;
    padding: 1.5rem;
    height: 90vh;
    padding-top: 10rem !important;
  }
  /* 16. Styling for the h3 element within the about content */
  .about-content > h3 {
    color: rgb(0, 110, 255);
    font-size: 5rem;
    
  }
  
  /* 17. Styling for the about description section */
  .about-desc {
    width: 50%;
  }
  
  /* 18. Styling for the h3 element within the about description */
  .about-desc > h3 {
    color: rgb(0, 110, 255);
    margin-bottom: 1rem;
  }
  
  /* 19. Styling for paragraphs within the about description */
  .about-desc > p {
    margin-bottom: 1rem;
  }
  
  /* 20. Styling for the resume content section */
  .resume-content {
    display: flex;
    justify-content: space-between;
    width: 90%;
    margin: auto;
    padding: 1.5rem;
    height: 90vh;
    padding-top: 10rem !important;
  }
  
  /* 21. Styling for the h3 element within the resume content */
  .resume-content > h3 {
    color: rgb(0, 110, 255);
    font-size: 4rem;
  }
  
  /* 22. Styling for the resume description section */
  .resume-desc {
    width: 50%;
  }
  
  /* 23. Styling for the h3 element within the resume description */
  .resume-desc > h3 {
    color: rgb(0, 110, 255);
    margin-bottom: 1rem;
  }
  
  /* 24. Styling for paragraphs within the resume description */
  .resume-desc > p {
    margin-bottom: 1rem;
  }
  
  /* 25. Styling for list items within the resume description */
  .resume-desc > li {
    margin-left: 1rem;
  }
  
  /* 26. Styling for the contact content section */
  .contact-content {
    display: flex;
    justify-content: space-between;
    width: 90%;
    margin: auto;
    padding: 1.5rem;
    padding-top: 10rem !important;
  }
  
  /* 27. Styling for the h3 element within the contact content */
  .contact-content > h3 {
    color: rgb(0, 110, 255);
    font-size: 4rem;
  }
  
  /* 28. Styling for the contact description section */
  .contact-desc {
    width: 50%;
  }
  
  /* 29. Styling for the h3 element within the contact description */
  .contact-desc > h3 {
    color: rgb(0, 110, 255);
    margin-bottom: 1rem;
  }
  
  /* 30. Styling for paragraphs within the contact description */
  .contact-desc > p {
    margin-bottom: 1rem;
    font-size: 20px;
  }
  
  /* 31. Styling for text input */
  input[type="text"] {
    padding: 10px;
    border: 0;
    width: 100%;
    box-shadow: 0 0 15px 4px rgba(0, 0, 0, 0.06);
  }
  
  /* 32. Styling for text area input */
  textarea {
    width: 100%;
    padding: 10px;
    box-shadow: 0 0 15px 4px rgba(0, 0, 0, 0.06);
  }
  
  /* 33. Styling for the button within the contact form */
  .contact-desc > form > button {
    padding: 0.7rem 2rem;
    font-weight: bold;
    background-color: transparent;
    border: 1px solid rgb(0, 110, 255);
    border-radius: 6px;
    color: rgb(0, 110, 255);
    cursor: pointer;
  }
  
  /* 34. Styling for the button on hover within the contact form */
  .contact-desc > form > button:hover {
    background-color: rgb(0, 110, 255);
    border: 1px solid rgb(0, 110, 255);
    color: white;
  }
  
  /* 35. Styling for the Documnets section*/
  .container{
    padding: auto;
   
  }
  /* 36. Styling for documents content for the h3 element within the documents content */
  .documents-content > h3 {
    color: red;
    margin-bottom: 1rem;
    width: 30px;

  }
  /* 37. Styling for the documents description section */
  .documents-desc {
    width: 80%;
    color: blue;
  }
  /* 38. Styling for the footer section */
  .footer {
    padding-top: 1rem;
    padding-bottom: 1rem;
    width: 100%;
    background-color: lightpink;
    text-emphasis-color: white;
  }
  
  /* 39. Styling for the content within the footer */
  .footer-content {
    width: 80%;
    margin: auto;
    text-align: center;
  }
.footer-rights{
    width: 90%;
    margin: bottom;
    text-align: center;
    color: blue;
}
#myPDF{
    width: 80%;
    height: 700px;
}
.social-media{
    width: 30%;
    margin: auto;
    text-align: center;

}
    </style>

    <title>Ziroh Katana Mae - Portfolio</title>
  </head>
  <body>
    <nav>
      <header>
        <div class="cointainer">
        <a href="portfolio.php"><img src="https://i.ibb.co/7Ck5Gt6/Ziroh.png" alt="Ziroh" width="50" height="50" ></a>
        
        </div>
        <h3>Hello world, I’m Eng. Ziroh Katana Mae</h3>
        
        <div class="nav-links">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#resume">Resume</a>
          <a href="#contacts">Contacts</a>
          <a href="#documents">Documents</a>
          <a href="logout.php">Logout</a>
        </div>
      </header>
    </nav>

    <section id="home" class="home-content">
    <img src="./Images/ericoooo.jpg" alt="" />
      <div class="home-desc">
        <h3>Hello world, I’m Eng. Ziroh Katana Mae</h3>
        <p>
          Hi there! I am Eng. Ziroh! You might also know me asctricsl Engineer,Web Developer & App Developer.
          I've been an Electrical Engineer for 14years as full time.
          I've been Web developer for 2 years under the php language.
          I've worked both with startups and individuals to help build & scale
          their businesses. And i have done computer essentials and compute parckages and specialised in microsoft excell.
          I've done Diploma chain supply management with 1 year experience.
          I've done short course in How to be come a great learder and skills of leardership.
          I've done shor couurse life skills, Manufacturing skills, tax and statitories, Driving.
          I've been full registered with the National Construction Authority of Kenya As Site Electrical Supervior.
        </p>
        <a href="#contact"><button>Contacts</button></a>
      </div>
    </section>

    <section id="about" class="about-content">
      <div class="about-desc">
      <h3></h3>
        <h3>Get To Know Me</h3>
        <p>
          Hi there! I am Eng. Ziroh! You might also know me as php web Developer.
          I've been an Electrical Engineer for over 14 years now as a Full Time.
          I've worked both with startups and individuals to help build & scale
          their businesses.
        </p>
      </div>
      <h3>About Me</h3>
    </section>

    <section id="resume" class="about-content">
      <h3>Resume</h3>
      <div class="resume-desc">
        <h3>Education</h3>
        <p>
            Hi there! I am Eng. Ziroh! You might also know me as php web Developer.
            I've been an Electrical Engineer for over 14 years now as a Full Time.
            I've worked both with startups and individuals to help build & scale
            their businesses.
        </p>
        <h3>FreeLancing</h3>
        <p>
            Hi there! I am Eng. Ziroh! You might also know me as php web Developer..
        </p>
        <h3>Skills</h3>
        <li>PHP</li>
        <li>Dart Flutter</li>
        <li>Python</li>
        <li>microsoft excell</li>
        <li>Computer Hardware</li>
        <li>Manufacturing Skills</li>
        <li>Plumbing Skills</li>
        <li>Quickbooks</li>
        <li>tax and statutory</li>
        <li>leardership skills</li>
        <li>Driving licese ZTZ-163</li>
      </div>
      </section>
    <section id="Contact" class="contact-content">
     <div class="contact-desc">
            <h3>Contact Me</h3>
        <p>Get in touch with me and grow your skills and business!</p>
        <form  action="https://formsubmit.co/nilymae07@gmail.com" method="POST">
          <input type="text" name="Name"  required placeholder="Name"/><br /><br />
          <input type="text" name="Email"  required placeholder="Email"/><br /><br />
          <input type="text" name="Subject"  required placeholder="Subject"/><br /><br />
          <textarea name="message" required placeholder="Message"></textarea><br /><br />
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_template" value="table">
          <button>Send</button>
        </form>
      </div>
    </section>
    <section id="documents" class="documents-content">
      <div class="documents-desc">
      <h3></h3>
    
        <h3>My documents</h3>
        <p>
         
        </p>
        <iframe id="myPDF"src="file.pdf.pdf" frameborder="0"></iframe>

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
         <p>Built by: Ziroh Katana Mae |© 2023 | Ziroh Mae| All Rights Reserved</p>
      </div>
    </section>
  </body>
</html>
    
    
    
    
    
    
    
    
    
    