<?php require '../assets/php/consentCheck.php'; ?>
<?php require '../assets/php/login.php'; ?>
<?php require '../assets/php/sendEmail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id='favicon' rel="shortcut icon" href="/assets/images/business.png" type="image/png">
    <link rel="manifest" href="/assets/json/manifest.json">
    <title>Portfolio | SJ Pretorius</title>
</head>
<body oncontextmenu="return false">

<!-- pre loader -->
<div class="loader-container">
  <img draggable="false" src="/assets/images/preloader.gif" alt="">
</div>

<!-- navbar starts -->
<header>
        <a href="index.html" class="logo">SJ Pretorius</a>
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#certificates">Certificates</a></li>
            <li><a href="#work">Projects</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
</header>
<!-- navbar ends -->


<!-- hero section starts -->
<section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <h2>Hi There,<br/> I'm SJ <span>Pretorius</span></h2>
    <p>I Am Into <span class="typing-text"></span></p>
    <a href="#about" class="btn"><span>About Me</span>
      <i class="fas fa-arrow-circle-down"></i>
    </a>
    <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/salomon-jansen-pretorius-162931285/" target="_blank"><i class="fab fa-linkedin"></i></a></li> 
          <li><a class="github" aria-label="GitHub" href="https://github.com/SJ-Pretorius/" target="_blank"><i class="fab fa-github"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="container-login">
        <h2>Enter token to access my full portfolio!</h2>
        <?php if($error): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
        <form method="POST">
            <div>
                <label for="pWd">Token:</label>
                <input type="text" id="pWd" name="pWd" required>
            </div>
            <div>
                <input type="submit" name="login" value="Access">
            </div>
        </form>
    </div>
</section>
<!-- hero section ends -->


<!-- about section starts -->
<section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
    
    <div class="row">

    <div class="image">
        <img draggable="false" class="tilt" src="/assets/images/profile.jpg" alt="A photo of me">
    </div>
    <div class="content">
        <h3>I'm Salomon Jansen (SJ) Pretorius</h3>
        <span class="tag">Software Developer</span>
        
        <p>I have always been passionate about computers, from fixing them to exploring software development. Currently, I am a software development student at CTU Training Solutions in Gqeberha, with a growing expertise in cloud technologies like Azure, continually expanding my skills and knowledge surrounding technology.</p>

        <div class="box-container">
            <div class="box">
              <p><span> Email : </span> sjpret12345@gmail.com</p>
              <p><span> Place : </span> Gqeberha, South Africa</p>
            </div>
        </div>

    </div>
    </div>
</section>
<!-- about section ends -->

<!-- skills section starts -->
<section class="skills" id="skills">

  <h2 class="heading"><i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span></h2>

  <div class="container">
    <div class="row" id="skillsContainer"></div>
  </div>
</section>
<!-- skills section ends -->


<!-- education section starts -->
<section class="education" id="education">

  <h1 class="heading-education"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>

    <div class="box-container">

    <div class="box">
        <div class="image">
        <img draggable="false" src="/assets/images/educat/college.jpg" alt="">
        </div>
        <div class="content">
        <h3>National Diploma in IT Systems Development</h3>
        <p>CTU Training Solutions | Gqeberha</p>
        <h4>2023-2025 | Pursuing</h4>
        </div>
    </div>

</div>
</section>
<!-- education section ends -->

<!-- certificates section starts -->
<section class="certificates" id="certificates">


  <h2 class="heading"><i class="fas fa-certificate"></i> Certificates  <span>Earned</span></h2>
<div class='container'>
  <div class='certificateLarger'>
    <a href="https://learn.microsoft.com/api/credentials/share/en-za/SJPretorius-6206/B70B599A3C4C583A?sharingId=D65234D66E2B6A30"> <img src="/assets/images/certificates/Certifications - SJPretorius-6206 _ Microsoft Learn-1.png" style="border-radius: 8px"></a>
    <h3>Microsoft Azure (DP-900)</h3>
  </div>
  <div class='certificate'>
    <a href="https://www.credly.com/badges/dd65c89c-7731-49ca-9e16-b7a1e0d66b16/public_url"> <img src="/assets/images/certificates/it-specialist-python.png"></a>
    <h3>Python</h3>
  </div>
  <div class="certificate">
    <a href="https://www.credly.com/badges/7db264a8-89d8-4772-8199-0c0760f91677/public_url"> <img src="/assets/images/certificates/it-specialist-html-and-css.png"></a>
    <h3>HTML & CSS</h3>
  </div>
  <div class="certificate">
    <a href="https://www.credly.com/badges/42c33100-3a18-41d4-a767-49517e8b4878/public_url"> <img src="/assets/images/certificates/it-specialist-javascript.png"></a>
    <h3>Javascript</h3>
  </div>
</div>

</section>
<!-- certificates section ends -->

<!-- work project section starts -->
<section class="work" id="work">

  <h2 class="heading"><i class="fas fa-laptop-code"></i> Projects <span>Made</span></h2>
  <div class="box-container"></div>

</section>
<!-- work project section ends -->

<!-- experience section starts -->
<section class="experience" id="experience">

  <h2 class="heading"><i class="fas fa-briefcase"></i> Experience </h2>

  <div class="timeline">

  <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>CTU Training Solutions</h2>
        </div>
        <div class="desc">
            <h3>Full-Time Student</h3>
            <p>Feb 2023 - present</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Hidden for Privacy Reasons</h2>
        </div>
        <div class="desc">
            <h3>Please enter the token at the top to access this information</h3>
            <p>If you need a token, contact me using the form below, and I will provide it to you.</p>
        </div>
      </div>
    </div>

</div>

</section>
<!-- experience section ends -->

<!-- contact section starts -->
<section class="contact" id="contact">
  
  <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img draggable="false" src="/assets/images/contact1.png" alt="">
      </div>
    <form id="contact-form" method="POST">
      <div class="form-group">
        <div class="field">
          <input type="text" name="name" id="name" placeholder="Name" required>
          <i class='fas fa-user' style="color: #c6d0e2;"></i>
        </div>
        <div class="field">
          <input type="email" name="email" id="email" placeholder="Email" required>
          <i class='fas fa-envelope' style="color: #c6d0e2;"></i>
        </div>
        <div class="field">
          <input type="text" name="phone" id="phone" placeholder="Phone" required pattern="\+?\d*" title="Please enter a valid phone number">
          <i class='fas fa-phone-alt' style="color: #c6d0e2;"></i>
        </div>
        <div class="message">
        <textarea type="text" placeholder="Message" id="subject" name="subject" required></textarea>
        <i class="fas fa-comment-dots" style="color: #c6d0e2;"></i>
        </div>
        </div>
      <div class="button-area">
        <button type="submit" name="submit" value="Submit">
          Submit <i class="fa fa-paper-plane"></i></button>
      </div>
    </form>
  </div>
  </div>
</section>
<!-- contact section ends -->

<!-- footer section starts -->
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>SJ's Portfolio</h3>
          <p>Thank you for visiting my personal portfolio website.</p>
          <p>This webpage can be installed as a web app for an even better experience!</p>
      </div>

      <div class="box">
          <h3>Quick links</h3>
          <a href="#home"><i class="fas fa-chevron-circle-right"></i> Home</a>
          <a href="#about"><i class="fas fa-chevron-circle-right"></i> About</a>
          <a href="#skills"><i class="fas fa-chevron-circle-right"></i> Skills</a>
          <a href="#education"><i class="fas fa-chevron-circle-right"></i> Education</a>
          <a href="#certificates"><i class="fas fa-chevron-circle-right"></i> Certificates</a>
          <a href="#work"><i class="fas fa-chevron-circle-right"></i> Projects</a>
          <a href="#experience"><i class="fas fa-chevron-circle-right"></i> Experience</a>
          <a href="#contact"><i class="fas fa-chevron-circle-right"></i> Contact</a>
      </div>

      <div class="box">
          <h3>Contact info</h3>
          <p> <i class="fas fa-envelope"></i>sjpret12345@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Gqeberha, South Africa</p>
          <div class="share">

              <a href="https://www.linkedin.com/in/salomon-jansen-pretorius-162931285/" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
              <a href="https://github.com/SJ-Pretorius/" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
              <a href="mailto:sjpret12345@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
          </div>
      </div>
  </div>

</section>
<!-- footer section ends -->


<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="/assets/js/particles.min.js"></script>
<script src="/assets/js/app.js"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="/assets/js/script.js"></script>

</body>
</html>
