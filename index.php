<!DOCTYPE html>
<html>
<title>Welcome To Glitter</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/style2.css">
<link rel="stylesheet" href="/css/style3.css">  <!--For the new updated contact form-->
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Raleway", sans-serif
  }

  body,
  html {
    height: 100%;
    line-height: 1.8;
  }

  /* Full height image header */
  .bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("img/bg.jpg");
    min-height: 100%;
  }

  .w3-bar .w3-button {
    padding: 16px;
  }
</style>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a href="#home" class="w3-bar-item w3-button w3-wide"><i class="fab fa-google"></i>LITTER</a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
        <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
        <a href="#GTribe" class="w3-bar-item w3-button"><i class="fab fa-google"></i> GTribe</a>
        <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
        <a href="#Location" class="w3-bar-item w3-button"><i class="fa fa-location-arrow"></i> Find Us</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
        onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
    style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ??</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#GTribe" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    <a href="#Location" class="w3-bar-item w3-button">Find Us</a>
  </nav>

  <!-- Header with full-height image -->
  <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
      <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
      <p><a href="#about"
          class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Join
          Glitter today and be a part of GTribe</a></p>
      <!--Put the link of google forms here by which people can join us-->
    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
      <a href="http://www.facebook.com/glitterfb" target="_blank" rel="noopener noreferrer" style="padding: 10px;">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
      </a>
      <a href="http://www.instagram.com/tech_glitter_official" target="_blank" rel="noopener noreferrer"
        style="padding: 10px;">
        <i class="fa fa-instagram w3-hover-opacity"></i>
      </a>
      <a href="http://www.linkedin.com/company/glitter-official" target="_blank" rel="noopener noreferrer"
        style="padding: 10px;">
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </a>
    </div>
  </header>

  <!-- About Section -->
  <div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center">ABOUT THE COMPANY</h3>
    <p class="w3-center w3-large">Key features of our company</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-quarter">
        <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
        <p class="w3-large">Responsive</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Passion</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore.</p>
      </div>
      <div class="w3-quarter">
        <i class="fas fa-pencil-ruler w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Design</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Support</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore.</p>
      </div>
    </div>
  </div>

  <!-- Promo Section - "We know design" -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>We know design.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et
          dolore.</p>
        <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="/w3images/phone_buildings.jpg" alt="Buildings" width="700"
          height="394">
      </div>
    </div>
  </div>

  <!-- Team Section -->
  <div class="w3-container" style="padding:128px 16px" id="team">
    <h3 class="w3-center">THE TEAM</h3>
    <p class="w3-center w3-large">The ones who runs this company</p>
    <div class="w3-row-padding " style="margin-top:64px">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/img/arpan.jpg" alt="John" style="width:100%">
          <div class="w3-container">
            <h3>Aditya Arpan Sahoo</h3>
            <p class="w3-opacity">Managing Team</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><a href="mailto:adityaarpansahoo@gmail.com?subject=Query" target="_blank" rel="noopener noreferrer"
                style="text-decoration: none;"><button class="w3-button w3-light-grey w3-block"><i
                    class="fa fa-envelope"></i> Contact</button></a></p>
            <p><a href="https://www.linkedin.com/in/arpan-aditya" target="_blank" rel="noopener noreferrer"
                style="text-decoration: none;"><button class="w3-button w3-light-grey w3-block"><i
                    class="fab fa-linkedin"></i> Connect</button></a></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/img/biswajit.jpg" alt="Jane" style="width:100%; height: 442px;">
          <div class="w3-container">
            <h3>Biswajit Sahoo</h3>
            <p class="w3-opacity">Managing Team</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><a href="mailto:sahoosipun834@gmail.com?subject=Query" target="_blank" rel="noopener noreferrer"
                style="text-decoration: none;"><button class="w3-button w3-light-grey w3-block"><i
                    class="fa fa-envelope"></i> Contact</button></a></p>
            <p><a href="https://www.linkedin.com/in/biswajit-sahoo-5231781bb" target="_blank" rel="noopener noreferrer"
                style="text-decoration: none;"><button class="w3-button w3-light-grey w3-block"><i
                    class="fab fa-linkedin"></i> Connect</button></a></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="/img/omm.jpeg" alt="Mike" style="width:100%">
          <div class="w3-container">
            <h3>Omm Prakash Sahoo</h3>
            <p class="w3-opacity">Managing Team</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><a href="mailto:ommprakash.sahoo.eee20@iitbhu.ac.in?subject=Query" target="_blank"
                rel="noopener noreferrer" style="text-decoration: none;"><button
                  class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
            <p><a href="https://www.linkedin.com/in/omm-prakash-92a3a9162" target="_blank" rel="noopener noreferrer"
                style="text-decoration: none;"><button class="w3-button w3-light-grey w3-block"><i
                    class="fab fa-linkedin"></i> Connect</button></a></p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <!--Replace this contact card with another one-->
        <div class="w3-card">
          <img src="/img/omm.jpeg" alt="Dan" style="width:100%">
          <div class="w3-container">
            <h3>Omm Prakash Sahoo</h3>
            <p class="w3-opacity">Managing Team</p>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <p><a href="mailto:ommprakash.sahoo.eee20@iitbhu.ac.in?subject=Query" target="_blank"
                rel="noopener noreferrer" style="text-decoration: none;"><button
                  class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></a></p>
            <p><a href="https://www.linkedin.com/in/omm-prakash-92a3a9162" target="_blank" rel="noopener noreferrer"
                style="text-decoration: none;"><button class="w3-button w3-light-grey w3-block"><i
                    class="fab fa-linkedin"></i> Connect</button></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Promo Section "Statistics" -->
  <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
    <div class="w3-quarter">
      <span class="w3-xxlarge">14+</span>
      <br>Partners
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">55+</span>
      <br>Projects Done
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">89+</span>
      <br>Happy Clients
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">150+</span>
      <br>Meetings
    </div>
  </div>

  <!-- Work Section -->
  <div class="w3-container" style="padding:128px 16px" id="work">
    <h3 class="w3-center">OUR WORK</h3>
    <p class="w3-center w3-large">What we've done for people</p>

    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-col l3 m6">
        <img src="/img/demo1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="An Application">
      </div>
      <div class="w3-col l3 m6">
        <img src="/img/demo2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="An Workspace">
      </div>
      <div class="w3-col l3 m6">
        <img src="/img/demo3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="A Conference">
      </div>
      <div class="w3-col l3 m6">
        <img src="/img/demo4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="Conference Room">
      </div>
    </div>

    <div class="w3-row-padding w3-section">
      <div class="w3-col l3 m6">
        <img src="/img/demo5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="An Office Lobby">
      </div>
      <div class="w3-col l3 m6">
        <img src="/img/demo6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="A Block of Code">
      </div>
      <div class="w3-col l3 m6">
        <img src="/img/demo7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="Project Management">
      </div>
      <div class="w3-col l3 m6">
        <img src="/img/demo8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="An Software Engineer">
      </div>
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">??</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>

  <!-- Skills Section -->
  <div class="w3-container w3-light-grey w3-padding-64">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>Our Skills.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
          tempor incididunt ut labore et dolore.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
          tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="w3-col m6">
        <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
        <div class="w3-grey">
          <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
        </div>
        <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
        <div class="w3-grey">
          <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
        </div>
        <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
        <div class="w3-grey">
          <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Post Section -->
  <div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="GTribe">
    <h3>Introducing GTribe</h3>
    <p class="w3-large">Take a look at who we have on our team.</p>
    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-black w3-xlarge w3-padding-32">Our Team</li>
          <li class="w3-padding-16"><b>Visionary</b><br>(Presents foresight of future)</li>
          <li class="w3-padding-16"><b>Thinker</b><br>(Think about new idea or approach)</li>
          <li class="w3-padding-16"><b>Reader</b><br>(Read books and share the enlightment)</li>
          <li class="w3-padding-16"><b>Tech</b><br>(Computer Geeks)</li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Join Us Now</button>
            <!--put the link of google forms here for joining "join us"-->
          </li>
        </ul>
      </div>
      <div class="w3-third">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-red w3-xlarge w3-padding-48">Our Team</li>
          <li class="w3-padding-16"><b>Graphic Designer</b><br>(Makes the world beautiful)</li>
          <li class="w3-padding-16"><b>Content Writer</b><br>(Defeat the sword with pen)</li>
          <li class="w3-padding-16"><b>Campus Ambassador</b><br>(Spread our vision)</li>
          <li class="w3-padding-16"><b>Manager</b><br>(Manage the teams)</li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Join Us Now</button>
            <!--put the link of google forms here for joining "join us"-->
          </li>
        </ul>
      </div>
      <div class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-black w3-xlarge w3-padding-32">Our Team</li>
          <li class="w3-padding-16"><b>Marketing and Sales</b><br>(Convert our product to customer product)</li>
          <li class="w3-padding-16"><b>Social Media Handler</b><br>(Our face to society)</li>
          <li class="w3-padding-16"><b>Public Relations and Affairs</b><br>(For maintaining our status in the society)
          </li>
          <li class="w3-padding-16"><b>Tech</b><br>(Computer Geeks)</li>
          <!--Edit this line and add one more post-->
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Join Us Now</button>
            <!--put the link of google forms here for joining "join us"-->
          </li>
        </ul>
      </div>
    </div>
  </div>

        <!-- The Contact Section -->
  <?php
  $name = $email = $msg = "" ;
  $err_name = $err_email = $err_msg  = "" ;
  $confirm = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
          $name = test_input($_POST["name"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
              $err_name = "Only letters and white space allowed";
            }
        
      
        
          $email = test_input($_POST["email"]);
          
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
          }
        
      
        
          $msg = test_input($_POST["message"]);
        

      
    }
  function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  if(empty($err_email) &&  empty($err_name))
     $confirm = true ;
  ?>
  <?php
  if($confirm){
      $myfile = fopen("query.txt", "a") or die("Unable to open file!");
      $txt = "\n";
 $hr = "---------------------------------------------------" ;
 fwrite($myfile, $txt);
 /*$name = $_POST["name"];
 $email = $_POST["email"];
 $msg = $_POST["message"];
 $subj = $_POST["subject"];
*/
 fwrite($myfile,$name);
 fwrite($myfile,$txt);
 fwrite($myfile, $email);
 fwrite($myfile,$txt);
 
 fwrite($myfile,$msg);
 fwrite($myfile, $hr );

 fclose($myfile);

  }
 /* else if(!empty($err_name))
      <script>alert("Only letters and white space allowed in name")</script>
  else if(!empty($err_email))
      <script>alert("Invalid Email Adress")</script>
*/

 
 ?>
  ?>
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Lets get in touch. Send us a message.</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Bhubaneswr, IN<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 8144212431 | +91 8763012773<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: tech.glitterofficial@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="action_page.php" method = "POST">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
      <!-- Image of location/map -->
      <h3 class="w3-center" id="Location">Location</h3>
      <p class="w3-center w3-large">Here we are. Please have a visit.</p>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119743.40927376403!2d85.75041300357438!3d20.30103122330368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909d2d5170aa5%3A0xfc580e2b68b33fa8!2sBhubaneswar%2C%20Odisha!5e0!3m2!1sen!2sin!4v1618205769324!5m2!1sen!2sin"
        width="800" height="600" style="border:0; margin-top: 10px;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <a href="http://www.facebook.com/glitterfb" target="_blank" rel="noopener noreferrer" style="padding: 10px;">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
      </a>
      <a href="http://www.instagram.com/tech_glitter_official" target="_blank" rel="noopener noreferrer"
        style="padding: 10px;">
        <i class="fa fa-instagram w3-hover-opacity"></i>
      </a>
      <a href="http://www.linkedin.com/company/glitter-official" target="_blank" rel="noopener noreferrer"
        style="padding: 10px;">
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </a>
    </div>
  </footer>

  <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
    }
  </script>

</body>

</html>
