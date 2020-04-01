<?php include "includes/header.php"?>

    <div class="container main-info-section">
      <div class="text">
        <h1>
          <span class="name">Hello,</span><br />
          <span>my</span>
          <span>name</span><br />
          <span> is </span>
          <span> Beverly</span>
        </h1>
        <br />
        <p>Front-end Web & Cross Platform Mobile App Developer</p>
        <a href="#contact">Contact Me</a>
      </div>
      <div class="profile-image">
        <img src="images/blue.jpg" alt="" />
      </div>
    </div>
    <!-- About Me -->
    <div class="container about" id="about">
      <h1>About Me</h1>
      <div class="about-me-info">
        <p>
          Continuously learning and working to improve, Beverly spends a lot of time in front of her laptop coding. She taught herself HTML and CSS before deciding to further her education at Nucamp bootcamp, and then Seattle Central. With those two resources, and the internet, she keeps pushing to hone her skills of making user-friendly, responsive websites.
        </p>
       
      </div>
      <img src="images/m2.jpg" alt="" />
    </div>

    <!-- Progress Bar -->
    <div class="skills" id="skills">
      <h1>Skills</h1>
      <span class="progress-title">Fundamentals</span>
      <li>
        <h3>HTML5</h3>
        <span class="bar"><span class="html"></span></span>
      </li>

      <li>
        <h3>CSS3</h3>
        <span class="bar"><span class="css"></span></span>
      </li>

      <li>
        <h3>JS</h3>
        <span class="bar"><span class="js"></span></span>
      </li>

      <li>
        <h3>Github</h3>
        <span class="bar"><span class="gh"></span></span>
      </li>
    </div>
<br>
<div class="skills">
<span class="progress-title">Frameworks</span>
<li>
    <h3>React</h3>
    <span class="bar"><span class="react"></span></span>
  </li>

  <h3>React Native</h3>
  <span class="bar"><span class="rn"></span></span>
</li>

      <li>
        <h3>Bootstrap</h3>
        <span class="bar"><span class="bs"></span></span>
      </li>

      
    </div>
</div>
    <div class="container projects" id="projects">
      <h1>Projects</h1>
      <!-- <div class="projects-category">
        <button id="bootstrap" class="active">
          Bootstrap
        </button>
        <button id="react">React</button>
        <button id="react-native">
          React react-native
        </button>
      </div> -->
      <div class="category-designing">
        <a href="http://beverlymjames.com/projects/unionclub/"><img src="images/uct.PNG"/></a>
        
        <a href="http://beverlymjames.com/projects/go/"><img src="images/go.PNG"/></a>
        <a href="http://beverlymjames.com/projects/weatherapp"><img src="images/weather.PNG"/></a>
      </div>
    </div>
    <!-- Connect functional contact form -->
    <div class="container contact" id="contact">
      <br />
      <h1>Contact</h1>
      <br />
      <?php
    

        include 'includes/index_include.php'; 
    
        $toAddress = "Jbevk94@gmail.com";  //place your/your client's email address here
        $toName = "Beverly"; //place your client's name here
        $website = "Beverly";  //place NAME of your client's website

        // echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements
    ?>

</div>
    </div>
 
  
    <?php include "includes/footer.php"?>