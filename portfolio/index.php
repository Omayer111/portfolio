<?php

require('include/db.php');
$query = "SELECT * from home,about,interest,project,contact,section_control,contact_form";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Abu Omayer</title>
  <link rel="stylesheet" href="style.css" />

  <script src="https://kit.fontawesome.com/7e08352489.js" crossorigin="anonymous"></script>
</head>

<body>
  <div id="header">
    <div class="container">
      <nav>
        <h1 style="font-size: 50px; position:absolute;top:5px ;left:40px;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;color:rgb(65, 58, 71);">
          [Omayer]
        </h1>
        <ul id="sidemenu">
          <?php
          if ($user_data['home_section'])
            echo '<li><a href="#header">HOME</a></li>';
          ?>
          <?php
          if ($user_data['about_section'])
            echo '<li><a href="#about">ABOUT</a></li> <li><a href="#about">SKILLS</a></li>';
          ?>
          <?php
          if ($user_data['interest_section'])
            echo '<li><a href="#interest">INTERESTS</a></li>';
          ?>
          <?php
          if ($user_data['project_section'])
            echo '<li><a href="#portfolio">PROJECTS</a></li>';
          ?>
          <?php
          if ($user_data['contact_section'])
            echo '<li><a href="#contact">CONTACT</a></li>';
          ?>




          <i class="fa-regular fa-solid fa-xmark" onclick="closemenu()"></i>
        </ul>
        <i class="fa-solid fa-bars" onclick="openmenu()"></i>
      </nav>
      <?php if (($user_data['home_section'])) : ?>

        <div class="header-text">
          <p id="prog"><?= $user_data['upper_from'] ?></p>
          <h1 style="color: black">
            <img src="images/back" alt="">
            Hi, I'm <span> Omayer </span> <br />
            From <span id="kuet"><?= $user_data['from_where'] ?></span>
          </h1>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <!-------------------------- about ------------------------------------------ -->
  <?php if (($user_data['about_section'])) : ?>
    <div id="about">
      <div class="container">
        <div class="row">
          <div class="about-col-1">
            <img src="images/<?= $user_data['about_pic'] ?>" alt="User" />
          </div>

          <div class="about-col-2">
            <h1 class="subtitle">About Me</h1>
            <p id="about-me">
              <?= $user_data['about_me'] ?>
            </p>

            <div class="tab-titles">
              <p class="tab-links active-link" onclick="opentab('skills')">
                SKILLS
              </p>
              <p class="tab-links" onclick="opentab('experience')">
                EXPERIENCE
              </p>
              <p class="tab-links" onclick="opentab('education')">EDUCATION</p>
            </div>
            <div class="tab-contents active-tab" id="skills">
              <ul>
                <li>
                  <span><?= $user_data['skills_problem'] ?></span><br /><?= $user_data['skills_problem1'] ?>
                  <br><br>
                <li>
                  <span><?= $user_data['skills_app'] ?></span><br /><?= $user_data['skills_app1'] ?>
                </li>
                <br>
                <li>
                  <span><?= $user_data['skills_ml'] ?></span><br /><?= $user_data['skills_ml1'] ?>
                </li>
                <br />
              </ul>
            </div>
            <div class="tab-contents" id="experience">
              <ul>
                <li>
                  <span><?= $user_data['exp_dsa'] ?></span><br /><?= $user_data['exp_dsa1'] ?>
                </li>
                <br />
                <li>
                  <span><?= $user_data['exp_app'] ?></span><br /><?= $user_data['exp_app1'] ?>
                </li>
                <br />
                <li>
                  <span><?= $user_data['exp_ml'] ?></span><br /><?= $user_data['exp_ml1'] ?>

                </li>
                <br />
              </ul>
            </div>
            <div class="tab-contents" id="education">
              <ul>
                <li>
                  <span><?= $user_data['edu_be'] ?></span><br /><?= $user_data['edu_be1'] ?>

                </li>
                <br />
                <li>
                  <span><?= $user_data['edu_high'] ?></span><br /><?= $user_data['edu_high1'] ?>
                </li>
                <br />
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <!-- -----------------------Area of interests-------------------- -->
  <?php if (($user_data['interest_section'])) : ?>
    <div id="interest">
      <div class="container">
        <h1 class="subtitle" style="text-align: center">Area of Interest</h1>
        <div class="interest-list">
          <div>
            <i class="fa-solid fa-microchip"></i>
            <h2><?= $user_data['int_ml'] ?></h2><br>
            <p>
              <?= $user_data['int_ml1'] ?>
            </p>
            <a href="#">Learn more</a>
          </div>
          <div>
            <i class="fa-solid fa-table"></i>
            <h2><?= $user_data['int_cn'] ?></h2><br>
            <p>
              <?= $user_data['int_cn1'] ?>
            </p>
            <a href="#">Learn more</a>
          </div>

          <div>
            <i class="fa-solid fa-atom"></i>
            <h2><?= $user_data['int_phy'] ?></h2><br>
            <p>
              <?= $user_data['int_phy1'] ?>
            </p>
            <a href="#">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <!-- -----------------------projects------------- -->
  <?php if (($user_data['project_section'])) : ?>

    <div id="portfolio">
      <div class="container">
        <h1 class="subtitle" style="text-align: center">My Projects</h1>
        <div class="work-list">
          <div class="work">
            <img src="images/<?= $user_data['first_pic'] ?>" />
            <div class="layer">
              <h3><?= $user_data['first'] ?></h3>
              <p><?= $user_data['first1'] ?></p>

              <a href="<?= $user_data['link1'] ?>" target="_blank"><i class="fa-solid fa-link"></i></a>
            </div>
          </div>

          <div class="work">
            <img src="images/<?= $user_data['second_pic'] ?>" />
            <div class="layer">
              <h3><?= $user_data['second'] ?></h3>
              <p><?= $user_data['second1'] ?></p>
              <a href="<?= $user_data['link2'] ?>" target="_blank"><i class="fa-solid fa-link"></i></a>
            </div>
          </div>

          <div class="work">
            <img src="images/<?= $user_data['third_pic'] ?>" />
            <div class="layer">
              <h3><?= $user_data['third'] ?></h3>
              <p><?= $user_data['third1'] ?></p>
              <a href="<?= $user_data['link3'] ?>" target="_blank"><i class="fa-solid fa-link"></i></a>
            </div>
          </div>
        </div>
        <!----<a href="#" class="btn">See more</a>--->
      </div>
    </div>
  <?php endif; ?>

  <!-- -------------contact------------ -->
  <?php if (($user_data['contact_section'])) : ?>

    <div id="contact">
      <div class="container">
        <div class="row">
          <div class="contact-left">
            <h1 class="subtitle">Contact Me</h1>
            <p><i class="fa-solid fa-envelopes-bulk"></i><?= $user_data['email'] ?></p>
            <p><i class="fa-solid fa-phone"></i><?= $user_data['phone'] ?></p>
            <div class="social-icons">
              <a href="https://www.linkedin.com/in/omayer006/"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="https://github.com/Omayer111"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.facebook.com/abu.omayer.06/"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
            <a href="images/cv_template_sheet_en.pdf" class="btn btn2">Download CV</a>
          </div>
          <div class="contact-right">
            <form action="formSubmit.php" method="post">
              <input type="text" name="Name" placeholder="Your Name" required />
              <input type="email" name="Email" placeholder="Your Email" required />
              <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
              <button type="submit" class="btn btn2" name="user-data">Submit</button>
            </form>
            <span id="msg"></span>
          </div>
        </div>
      </div>

      <div class="copyright" id="copyright">
        <p>Copyright © Omayer. 2024</p>
      </div>
    </div>
  <?php endif; ?>




  <script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname) {
      for (tablink of tablinks) {
        tablink.classList.remove("active-link");
      }
      for (tabcontent of tabcontents) {
        tabcontent.classList.remove("active-tab");
      }
      event.currentTarget.classList.add("active-link");
      document.getElementById(tabname).classList.add("active-tab");
    }
  </script>

  <script>
    var sidemenu = document.getElementById("sidemenu");

    function openmenu() {
      sidemenu.style.right = "0";
    }

    function closemenu() {
      sidemenu.style.right = "-200px";
    }
  </script>

</body>

</html>