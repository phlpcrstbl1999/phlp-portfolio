<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phlp Crstbl</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link href='https://fonts.googleapis.com/css?family=Varela Round' rel='stylesheet'>

</head>
<body>
    
    <header>
        <nav class="navbar">
            <h1><code style="color:#66FCF1;">&lt</code>PHLP CRSTBL<code style="color:#66FCF1;">/></code></h1>
            <ul class="nav-menu">
                <a href="#home"><li>Home</li></a>
                <a href="#expertise"><li>Expertise</li></a>
                <a href="#projects"><li>Projects</li></a>
                <a href="#experience"><li>Experience</li></a>
                <a href="#contact"><li>Contact</li></a>
            </ul>
            <div class="burgir">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <div class="wrapper">
        <section id="home">
        <div class="home-container">
        <div class="intro">         
            <h3>Hello, I'm</h3><h1> QWEQWE QWEQWEQWE<br><span class="auto-input"></span></h1>
            <!-- <h3>Junior Programmer at Philfirst Insurance Company</h3> -->
            <p>Programmer / Web Developer</p>
            <br>
            <!-- <button type="button" class="dl-resume">Download Resume</button> -->
            
        </div>

        <div class="info">
            <ol>
                <li>&nbsp<code class="clr-blue">&lt?php</code></li>
                <li>&nbsp<code class="clr-blue">class</code> <b><code class="clr-green">Person</code></b> <code class="clr-yellow">{</code></li>
                <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<code class="clr-blue">public funtion</code> <code class="clr-light-yellow">__construct</code><code class="clr-violet">() {</code></li>
                <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<code style="color: white"><code class="clr-blue">$this</code>-><code class="clr-light-blue">name</code> = <code class="clr-orange">"<b>Philip Cristobal</b>"</code>;</code></li>
                <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<code style="color: white"><code class="clr-blue">$this</code>-><code class="clr-light-blue">traits</code> = <code class="clr-blue">[</code><code class="clr-orange">"<b>ADAPTABILITY</b>", "<b>PROBLEM SOLVING</b>"</code><code class="clr-blue">]</code>;</code></li>
                <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<code style="color: white"><code class="clr-blue">$this</code>-><code class="clr-light-blue">age</code> = <code class="clr-light-yellow">date</code><code class="clr-blue">(</code><code class="clr-orange">'Y'</code><code class="clr-blue">)</code> - <code class="clr-light-green">1999</code>;</code></li>
                <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<code class="clr-violet">}</code></li>
                <li>&nbsp<code class="clr-yellow">}</code></li>
                <li>&nbsp<code class="clr-blue">?&gt</code></li>
            </ol>
        </div>
      </div>
      <div class="scrolldown">
      <a href="#expertise">
        <div class="scrolldown-firstArrow"></div>
        <div class="scrolldown-secondArrow"></div>
      </a>
    </div>
        </section>
       
            
        <section id="expertise">
            <h1>My Expertise</h1>
            <p>The main area of expertise is back end development (server-side of the web)</p>
            <br><br>
            <div class="expertise">
                <div class="expertise-container">
                    <div class="title">Front-end Dev</div>
                    <br><br>
                    <p>Expertise Level: Intermediate</p>
                    <p>Skills include expertise in HTML, CSS, JavaScript, and Bootstrap.</p>
                </div>
                <div class="expertise-container">
                    <div class="title">Back-end Dev</div>
                    <br><br>
                    <p>Expertise Level: Intermediate - Advanced</p>
                    <p>Skills include expertise in PL/SQL, Java, VB.net, and proficiency in working with PHP.</p>
                </div>
                <div class="expertise-container">
                    <div class="title">Database Management</div>
                    <br><br>
                    <p>Expertise Level: Intermediate - Advanced</p>
                    <p>Skills include proficiency in MySQL, MS SQL, and Oracle Database.</p>
                </div>
            </div>
        </section>
        <section id="projects">
          <h1>
            Projects
        </h1>
        <p>Presented below are a few of the projects I have created</p>

        <br><br>
        <div class="project">
          <div class="project-info">
            <div class="project-img-holder">
              <img src="images/dms.jpg" class="project-img"/>
            </div>
            <div class="project-info-holder">
              <h2>Document Management System</h2>
              <p>A system or process used to capture, track and store electronic documents such as PDFs, word processing files and digital images of paper-based content.</p>
              <br>
              <p><b>Built with: </b>HTML, CSS, Bootstrap, JavaScript, PHP, MSSQL Server, Oracle Database</p>
          </div>
        </div>
        <div class="project-info">
          <div class="project-img-holder">
            <img src="images/debitNote.jpg" class="project-img"/>
          </div>
          <div class="project-info-holder">
            <h2>Auto Debit Note</h2>
            <p>A web-based application that effectively automates the process of generating debit notes.</p>
            <p><b>Built with: </b>HTML, CSS, Bootstrap, JavaScript, PHP, MySQL, phpMyAdmin</p>
        </div>
      </div>
      <div class="project-info">
        <div class="project-img-holder">
          <img src="images/clearanceProcessing.jpg" class="project-img"/>
        </div>
        <div class="project-info-holder">
          <h2>Automated Clearance Process</h2>
          <p>A web-based application that effectively automates the process of generating employee clearance.</p>
          <p><b>Built with: </b>HTML, CSS, Bootstrap, JavaScript, PHP, MySQL, cPanel</p>
      </div>
    </div>
        </div>
        </section>
        <section id="experience">
            <h1>
                Professional Experience
            </h1>
            <br><br>
            <!-- BOOTSTRAP -->
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <div class="experience-title">
                      <div><b>Junior Programmer @ PhilFirst Insurance Company </b></div>
                      <div><b>2022 - Present</b></div>
                    </div>
                    </button>
                  </h2>
                </div>
               
                  <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      Developing Web application and Computer programs. Maintaining, Debugging and Troubleshooting systems and software. Automating a manual procedure by transforming it to a web application.
                      <div class="languages">
                        <div class="language">HTML</div>
                        <div class="language">CSS</div>
                        <div class="language">JavaScript</div>
                        <div class="language">PHP</div>
                        <div class="language">PL/SQL</div>
                      </div>
                    </div>
                  </div>
                <!-- <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div> -->
              </div>
        </section>
        <section id="contact">
          <h1>
              Get In Touch
          </h1>
          <p>Feel free to Contact me by submitting the form below</p>
       
          <div class="contact-form">
          <?php
            if(isset($_SESSION['status'])) { 
          ?>

          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Successfuly Sent Email!</strong>  I will get back to you as soon as possible
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php
            }
            unset($_SESSION['status']); 
          ?>
            <form method="POST" action="sendEmail.php">
              <label>Name</label>
              <input type="text" name="name" placeholder="Enter Your Name" class="form-control form-control-lg" required>
              <label>Email</label>
              <input type="email" name="email" placeholder="Enter Your Email" class="form-control form-control-lg" required>
              <label>Message</label>
              <textarea placeholder="Enter Your Message" name="message" class="form-control form-control-lg" rows="5" required></textarea>
              <button class="contact-btn" name="sendClearance" value="Send" type="submit">SUBMIT</button>
          </form>
          </div>
        </section>
        <footer>
          <div class="main-footer">
          <div class="me-info">
            <h1><b>PHILIP CRISTOBAL</b></h1>
            <p>Cultivating my skills with the goal of becoming a proficient Full-stack developer, capable of delivering end-to-end solutions.</p>
          </div>
          <div class="social">
            <h1>SOCIAL</h1>
            <div class="social-img-holder">
              <a href="https://www.linkedin.com/in/philip-cristobal-83022a241/" target="_blank">
                <img src="images/linkedin.svg" class="social-img">
              </a>
              <a href="https://github.com/phlpcrstbl1999" target="_blank">
                <img src="images/square-github.svg" class="social-img">
              </a>
              <a href="https://www.facebook.com/phlpcrstbl" target="_blank">
                <img src="images/square-facebook.svg" class="social-img">
              </a>
            </div>
          </div>
        </div>
          <div class="credit">
            &copy; Copyright 2023. Designed & Built by Philip Cristobal
          </div>
        </footer>
    </div> 
 
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="style/main.js"></script>
</body>
</html>