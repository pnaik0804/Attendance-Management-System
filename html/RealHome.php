<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location : ../html/login_2.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Css/Home.css">
  <link rel="icon" type=images href="../images/lastmin.jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-side-navbar/1.0.0/bootstrap-side-navbar.min.css"
    integrity="sha512-Dzi0zz9zCe2olZNhq+wnzGjO5ILOv8f/yD6j8srW+XGnnv9dUN04eEoIdVHxQqiy8uBn21niIWQpiCzYJEH3yg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
  <title>efficheck.in</title>
</head>

<body>
Welcome <?php echo $_SESSION['name'] ?>
  <!-- navbar -->
  <nav class="navbar">
    <div class="logo">
      <img src="../Images/Logo.jpeg" 4 height="55px" width="55px">
      <p class="text">Efficheck</p>

    </div>
    <div class="nav-item">
      <ul>
        <li class="list-item "><a href="#Home">Home</a></li>
        <!-- <li class="list-item"><a href="../html/staff2.php">Staff Details</a></li> -->
        <li class="list-item"><a href="../html/Students.php">Students Details</a></li>
        <li class="list-item"><a href="../html/Attendence.php">Take Attendance</a></li>
      </ul>
    </div>
  </nav>

  <!-- Slide HTML-->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
       <img src="../Images/1.jpg" class="d-block w-100" height="550px" alt="...">
       </div>
      <div class="carousel-item ">
        <img src="../Images/2.jpg" class="d-block w-100" height="550px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../Images/3.jpg" class="d-block w-100" height="550px" alt="...">
      </div>
    </div>
  </div>

  <!--why to choose HTML -->
  <section class="choose" id="Home">
    <h1 class="main_head">Why To Choose Us ?</h1>
    <div class="reason">
      <div class="facts">
        <img src="../Images/bell.jpeg">
        <h3 class="heading">Sending Alerts !<S></S></h3>
        <p>Online MCQ test is a type of online assessment where multiple-choice questions (MCQs) are presented to the
          test-taker via a web-based platform.</p>
      </div>
      <div class="facts">
        <img src="../Images/report.jpeg">
        <h3 class="heading">Report Generation </h3>
        <p>Producing results means taking consistent action towards objectives, making timely decisions, and removing
          obstacles to produce high-quality, beneficial results.</p>

      </div>
      <div class="facts">
        <img src="../Images/user.jpeg">
        <h3 class="heading">User Friendly</h3>
        <p>An expert teacher is a teacher who has been teaching in a P-12 classroom for a long time while also serving
          the field and growing their educational knowledge and pedagogy</p>
      </div>
    </div>


  </section>

  <!-- About-us -->

  <section class="main-content">


    <div class="column">
      <h1 class="main_head">About Us</h1>
      <div class="col1">
        <img src="../images/—Pngtree—scientist liquid gene experiment illustration_6495789.png" alt="" class="wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">
      </div>
      <div class="col1 about wow animate__animated animate__fadeInRight" data-wow-delay=".3s">
        <h1 class="main_head">Solution for Attendance Managemment</h1>
        <p>AMS has been proven to increase attendance rates among students, enabling higher academic performance and success. A study
          conducted by Delhi school of economics showed a 5% increase in attendance using AMS.</p>
        <h6>AMS promotes an inclusive and engaged learning environment where students feel their presence is being recognized,  </h6>


        <div class="button">
          <button type="button" class="btn-1 read_more">Read More</button>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact HTML -->
  <section class="contact" id="con">
    <h1 class="main_head">Contact Us</h1>
    <div class="information">
      <div class="info1" id="main-info">
        <h2>Get in touch</h2>
        <p>We Are Here for your service , reach us freely</p>

        <h4>Headquaters</h4>
        <p><i class="fa-solid fa-building-flag"></i> &nbsp; 15 No. Sangharsh Nagar Chandivali Sakinaka</p>

        <h4>Phone</h4>
        <p><i class="fa-solid fa-phone"></i>&nbsp;26707026 / 27</p>
        <p><i class="fa-solid fa-phone"></i> (+547) 275 342 190</p>

        <h4>Support</h4>
        <a href="mailto: rgitaccounts@mctrgit.ac.in">
          <p><i class="fa-regular fa-envelope"></i> &nbsp;efficheckoffocial@gmail.com</p>
        </a>
        
      </div>

      <div class="info1" id="main-info1">
        <h2>Let's Connect</h2>

        <input type="text" placeholder="Enter your Name" required></input>
        <input type="email" placeholder="Email" required></input>
        <input type="text" placeholder="Enter your Subject" required></input>
        <textarea name="" rows="8" placeholder="Message" required></textarea>
        <button type="submit" class="newbtn">Send Message</button>

      </div>
    </div>
  </section>

  <!-- Footer HTML -->
  <section class="footer-section">

    <footer class="footer ">
      <div class="footer-items">

        <div class="footer-item" id="fitem1">
          <p>GET CONNECTED</p>
          <li>Connectivity</li>
          <li>Dashboard</li>
          <li>Iot Sim Card</li>
          <li>Rgit Staff</li>
          <li>Versova</li>
        </div>

        <div class="footer-item" id="fitem2">
          <p>RESOURCES</p>
          <li>Books</li>
          <li>Technology</li>
          <li>Support</li>
          <li>Library</li>
          <li>Online</li>
        </div>
        <div class="footer-item" id="fitem3">
          <p>DEVELOPERS</p>
          <li>Projects</li>
          <li>Courses</li>
          <li>HTML & CSS</li>
          <li>Tester</li>
          <li>Full Stack</li>
        </div>

        <div class="footer-item" id="fitem4">
          <p>COMPANY</p>
          <li>Blog</li>
          <li>PartnerShip</li>
          <li>Career</li>
          <li>Services</li>
          <li>About US</li>
        </div>

        <div class="footer-item" id="fitem5">
          <p>SOCIAL</p>
          <li>Youtube</li>
          <li>Instagram</li>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Linkdin</li>
        </div>

        <div class="footer-item" id="fitem6">
          <p>PRICING</p>
          <li>Enterprise</li>
          <li>Flexible Data</li>
          <li>Pricing Overview</li>
          <li>Fraudless</li>
          <li>Safe & Security</li>
        </div>
      </div>

      <hr class="line">
      <p class="line-1"> 1999- 2023 All right are reserved &nbsp; &nbsp; &nbsp; Terms &nbsp; &nbsp; &nbsp; Privacy </p>
    </footer>

  </section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      // Add smooth scrolling to all links
      $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>

</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>