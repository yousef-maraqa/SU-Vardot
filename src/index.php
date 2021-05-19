<?php 
require './classes/Database.php';
$database = new Database; 
echo $database;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Sciences University is one top universities on MENA region">
  <meta property="og:title" content="Sciences University" />
  <meta property="og:image" content="./assets/favicon.png" />
  <link rel="icon" href="./assets/favicon.png" />
  <!-- css files start -->
  <link rel="stylesheet" href="./styles/css/main.css" />
  <link rel="stylesheet" href="./styles/css/header.css" />
  <link rel="stylesheet" href="./styles/css/footer.css" />
  <link rel="stylesheet" href="./styles/css/carousel.css" />
  <link rel="stylesheet" href="./styles/css/content.css" />
  <!-- css files end -->
  <!-- odometer and font awesome -->
  <link rel="stylesheet" href="../node_modules/odometer/themes/odometer-theme-default.css" />
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">
  <link rel="stylesheet" href="../node_modules/intl-tel-input/build/css/intlTelInput.css">
   <title>Sciences University</title>
</head>

<body>
  <!-- header start -->
  <div class="container upper-nav overflow-hidden">
    <div class="inner-container d-flex justify-content-between align-items-center">
      <div class="search-box d-none d-md-none d-lg-block">
        <!-- Logo with a tag start -->
        <a href="index.html">
          <picture class="Logo">
            <source media="(min-width:650px)" srcset="./assets/group-4@2x.png" />
            <source media="(min-width:465px)" srcset="./assets/group-4.png" />
            <img src="./assets/group-4@3x.png" alt="Sciences University Logo" width="139px" height="48px"
              style="width: auto" />
          </picture>
        </a>
        <!-- Logo with a tag end -->
      </div>
      <!-- social icons for phones start-->
      <div class="d-none d-md-none d-lg-block">
        <ul class="list-inline d-flex align-items-center social-links lg">
          <li class="list-inline-itme">
            <a c href="https://www.linkedin.com/"
              class="fab fa-linkedin-in d-flex justify-content-center align-items-center social ">
              <span class="invisible"> #</span>
            </a>
          </li>
          <li class="list-inline-itme">
            <a href="https://www.youtube.com/"
              class="fab fa-youtube d-flex justify-content-center align-items-center social">
              <span class="invisible"> #</span>
            </a>
          </li>
          <li class="list-inline-itme">
            <a href="https://www.instagram.com/"
              class="fab fa-instagram d-flex justify-content-center align-items-center social">
              <span class="invisible"> #</span>

            </a>
          </li>
          <li class="list-inline-itme">
            <a href="https://twitter.com/"
              class="fab fa-twitter d-flex justify-content-center align-items-center social">
              <span class="invisible"> #</span>
            </a>
          </li>
          <li class="list-inline-itme mr-3">
            <a href="https://web.facebook.com"
              class="fab fa-facebook-f d-flex justify-content-center align-items-center social">
              <span class="invisible"> #</span>

            </a>
          </li>
          <!-- social icons for phones end-->
          <!-- search box for desktop start -->
          <div class="search-box d-none d-md-none d-lg-block">
            <div class="search">
              <svg x="0px" y="0px" viewBox="0 0 24 24" width="20px" height="20px">
                <g stroke-linecap="square" stroke-linejoin="miter" stroke="currentColor">
                  <line fill="none" stroke-miterlimit="10" x1="22" y1="22" x2="16.4" y2="16.4" />
                  <circle fill="none" stroke="currentColor" stroke-miterlimit="10" cx="10" cy="10" r="9" />
                </g>
              </svg>

              <div>
                <input type="search" placeholder="Search for something..." />

              </div>
            </div>
          </div>
          <!-- search box for desktop end -->
        </ul>
      </div>
    </div>
  </div>
  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <div class="container">
        <div class="d-md-block d-lg-none">
          <a class="navbar-brand ml-3" href="./index.html"><img src="./assets/group-4.png"
              alt="Sciences University Logo" /></a>
        </div>
        <label for="search" class="visuallyhidden">collapse</label>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- nav items start -->
          <ul class="navbar-nav nav-links d-flex justify-content-evenly">
            <li class="nav-item link-cont">
              <a class="nav-link text-uppercase link hover" href="./empty.html">about</a>
            </li>
            <li class="nav-item link-cont">
              <a class="nav-link text-uppercase link hover" href="./empty.html">academics</a>
            </li>
            <li class="nav-item link-cont">
              <a class="nav-link text-uppercase link hover" href="./empty.html">admissions</a>
            </li>
            <li class="nav-item link-cont">
              <a class="nav-link text-uppercase link hover" href="./empty.html">international</a>
            </li>
            <li class="nav-item link-cont">
              <a class="nav-link text-uppercase link hover" href="allevents.html" target="_blank">events</a>
            </li>
            <li class="nav-item link-cont">
              <a class="nav-link text-uppercase link hover" href="./empty.html">contact us</a>
            </li>
            <li class="nav-item">
              <div class="search-box-mb d-md-block d-lg-none">
                <div class="input-group mt-4 mb-2">

                  <input type="text" class="form-control" placeholder="Search..." aria-describedby="searchbtn" />
                  <div class="input-group-append">
                    <label for="search" class="visuallyhidden">Search: </label>
                    <button class="btn btn-outline-secondary" type="button" id="searchbtn">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </li>
          </ul>
                    <!-- nav items end -->

            <div class="d-md-block d-lg-none">
              <!-- social icons for desktop header start-->
              <ul class="list-inline d-flex align-items-center social-links lg m-4">
                <li class="list-inline-itme">
                  <a href="https://www.linkedin.com/"
                    class="fab fa-linkedin-in d-flex justify-content-center align-items-center social">
                    <span class="invisible"> #</span>
                  </a>
                </li>
                <li class="list-inline-itme">
                  <a href="https://www.youtube.com/"
                    class="fab fa-youtube d-flex justify-content-center align-items-center social">
                    <span class="invisible"> #</span>
                  </a>
                </li>
                <li class="list-inline-itme">
                  <a href="https://www.instagram.com/"
                    class="fab fa-instagram d-flex justify-content-center align-items-center social">
                    <span class="invisible"> #</span>

                  </a>
                </li>
                <li class="list-inline-itme">
                  <a href="https://twitter.com/"
                    class="fab fa-twitter d-flex justify-content-center align-items-center social">
                    <span class="invisible"> #</span>
                  </a>
                </li>
                <li class="list-inline-itme mr-3">
                  <a href="https://web.facebook.com/"
                    class="fab fa-facebook-f d-flex justify-content-center align-items-center social">
                    <span class="invisible"> #</span>
                  </a>
                </li>
              </ul>
              <!-- social icons for desktop header end-->
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- header end -->

  <!-- carousel start -->
  <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000000">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./assets/group-8@2x.png" class="" width="100%" height="100%"
          alt="slider 1 people take a seat in the university square" >
          <div class="wrapper container">
            <div class="overlay ">
              <h1 class="text-uppercase text-center">
                one of the top 10 universities in design
              </h1>
            </div>
          </div>
        </img>
      
      </div>
      <div class="carousel-item">
        <img src="assets/photo-1570975640108-2292d83390ff.jpeg" width="100%" height="100%"
          alt="slider 2 university building" >
          <div class="wrapper container">
            <div class="overlay">
              <h1 class="text-uppercase text-center">
                one of the top 10 universities in design
              </h1>
            </div>
          </div>
        </img>
       
      </div>
      <div class="carousel-item">
        <img src="assets/photo-1603573355706-3f15d98cf100.jpeg" width="100%" height="100%"
          alt="slider 3 university Great nature" >
          <div class="wrapper container">
            <div class="overlay">
              <h1 class="text-uppercase text-center">
                one of the top 10 universities in design
              </h1>
            </div>
          </div>
        </img>
        
      </div>
    </div>

  </div>
  <!-- carousel end -->

  <!-- news section start -->
  <section id="news" class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex" id="news-img">
          <div class="col-md-6 col-xs-6 mb-xs-4 pl-0">
            <div class="news-block-img">
              <a href="#" target="_blank">
                <img src="./assets/c-s-howdoi@3x.jpg" alt="news undergraduate courses"
                  loading="lazy" />
                <div class="text-uppercase" title="undergraduate courses">people studing</div>
              </a>
            </div>
            <div class="news-block-img">
              <a href="#" target="_blank">
                <img src="./assets/i-stock-000014379570-large@3x.jpg"
                  alt="NEWS GRADUATE COURSES" loading="lazy" />
                <div class="text-uppercase" title="GRADUATE COURSES">GRADUATE </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-xs-6 pr-0">
            <div class="news-block-img">
              <a href="#" target="_blank">
                <img
                  src="./assets/student-applying-for-federal-student-aid-f-a-f-s-a@3x.jpg"
                  alt="NEWS INTERNATIONAL STUDENTS" loading="lazy" />
                <div class="text-uppercase" title="INTERNATIONAL STUDENTS">INTERNATIONAL STUDENTS</div>
              </a>
            </div>
            <div class="news-block-img">
              <a href="#" target="_blank">
                <img src="./assets/student-photo@3x.jpg" alt="NEWS SCHOLARSHIPS"
                  loading="lazy" />
                <div class="text-uppercase" title="SCHOLARSHIPS">SCHOLARSHIPS</div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-xl-6 blogs" id="news-blogs">
          <div class="container">
            <div class="row blog-block">
              <div class="news-blogs">
                <div class="title-wrapper text-uppercase">
                  <span class="title-m"> news</span>
                </div>
                <div class="col-md-12 pl-0 pr-0 news-border">
                  <div class="news-block">
                  <div class="read-more text-left">
                    <a href="empty.html">
                  
               
                    <div class="details">january 06,2017</div>
                 
                      <h3 class="h1 text-capitalize content-title">
                        Smart Exhibition Upends Classical Style
                      </h3>
                     
                    <p class="content-summary" title="Even the most casual observer is probably acquainted
                      with the Classical style, that aesthetic anchored in the
                      ancient click to read more">
                      Even the most casual observer is probably acquainted
                      with the Classical style, that aesthetic anchored in the
                      ancient…
                    </p>
                  
                   
                    <a class="text-uppercase d-block text-right " href="empty.html" > read more  <i class="fas fa-arrow-right"></i></a>
                  </a>
                </div>
            
              </div>
                </div>
                <div class="col-md-12 pl-0 pr-0 news-border">
                  <div class="news-block">
                  <div class="read-more text-left">
                    <a href="empty.html">
                  
               
                    <div class="details">December 13, 2016</div>
                 
                      <h3 class="h1 text-capitalize content-title">
                        Sciences University To Offer Now Undergraduate Major In
                        Creative Writing
                      </h3>
                     
                    <p class="content-summary" title="The Department of English Language and Literature will
                    offer a new undergraduate major in creative writing,
                    beginning. click to read more">
                    The Department of English Language and Literature will
                      offer a new undergraduate major in creative writing,
                      beginning…
                    </p>
                  
                   
                    <a class="text-uppercase d-block text-right " href="empty.html" > read more  <i class="fas fa-arrow-right"></i></a>
                  </a>
                </div>
                </div>
                </div>

                <div class="col-md-12 pl-0 pr-0 news-border">
                  <div class="news-block">
                    <div class="read-more text-left">
                      <a href="empty.html">
                    
                 
                      <div class="details">November 13, 2016</div>
                   
                        <h3 class="h1 text-capitalize content-title">
                          New Method Uses Heat Flow To Levitate Variety Of Objects
                        </h3>
                       
                      <p class="content-summary" title="Even the most casual observer is probably acquainted
                      with the Classical style, that aesthetic anchored in the
                      ancien. click to read more">
                      Even the most casual observer is probably acquainted
                      with the Classical style, that aesthetic anchored in the
                      ancient…
                      </p>
                    
                     
                      <a class="text-uppercase d-block text-right " href="empty.html" > read more  <i class="fas fa-arrow-right"></i></a>
                    </a>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- statics start -->
  <section id="statics">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12
           col-sm-12 overflow-hidden">
          <div class="info-block" id="info-block-1">
            <img src="./assets/group-11.svg" alt="Profession-ready degree programs #90" loading="lazy" />
            <div class="number d-flex align-items-center">
              <div class="number odometer" id="degree">0</div>
              <span>+</span>
            </div>

            <h3 class="h1 info-title" title="Profession-ready degree programs 90#">Profession-ready degree programs</h3>
          </div>
        </div>
        <div class="col-lg-4 col-md-12
           col-sm-12 overflow-hidden">
          <div class="info-block" id="info-block-2">
            <img src="./assets/group-12.svg" alt="Our MBA for salary-to-debt ratio #1" loading="lazy" />
            <div class="number d-flex align-items-center">
              <span>#</span>
              <div class="number odometer" id="MBA">9</div>
            </div>
            <h3 class="h1 info-title" title="Our MBA for salary-to-debt ratio #1">Our MBA for salary-to-debt ratio</h3>
          </div>
        </div>
        <div class="col-lg-4 col-md-12
           col-sm-12">
          <div class="info-block" id="info-block-3">
            <img src="./assets/noun-64173-cc.svg" alt="Sciences University alumni worldwide #100,000"
              loading="lazy" />
            <div class="number d-flex align-items-center">
              <div class="number odometer" id="university">0</div>
              <span>+</span>
            </div>
            <h3 class="h1 info-title" title="Sciences University alumni worldwide #100,000">Sciences University alumni
              worldwide</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- statics end -->
  <!-- events start -->
  <section id="events">
    <div class="title-wrapper text-uppercase text-center">
      <span class="title-m"> events </span>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-4 overflow-hidden my-3">
          <div class="card" id="card-left">
            <img class="card-img-top event-img" src="./assets/img-0349-0@3x.jpg"
              alt="people talk to each other" loading="lazy" />
            <div class="calender-img">
              <div class="date">
                <span class="day">18</span>
                <span class="month text-capitalize">march</span>
              </div>
            </div>

            <div class="card-body pb-0 d-flex flex-column align-items-end justify-content-between">
              <div class="container event-content pr-0">
                <div class="row">
                  <div class="time-place d-flex align-items-center justify-content-start">
                    <span class="time details">2:00 p.m-4:00 p.m.</span>
                    <span class="line mx-2"></span>
                    <div class="place text-capitalize details">
                      ajloun campus
                    </div>
                  </div>
                  <div class="event-title text-capitalize content-title">
                    Postgraduate Drop-in Evening
                  </div>
                  <div class="content-summary" title=" Our Postgraduate Drop-in Evenings are an excellent
                    opportunity for you to meet our staff and talk to current
                    students">
                    Our Postgraduate Drop-in Evenings are an excellent
                    opportunity for you to meet our staff and talk to current
                    students…
                  </div>
                </div>
              </div>
              <div class="read-more">
                <a class="text-uppercase stretched-link" href="event.html" target="_blank">read more</a>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 overflow-hidden my-3">
          <div class="card" id="card-center">
            <img class="card-img-top" src="./assets/marketing-und-event@3x.jpg"
              alt="people talk to each other" />
            <div class="calender-img">
              <div class="date">
                <span class="day">07</span>
                <span class="month text-capitalize">may</span>
              </div>
            </div>

            <div class="card-body pb-0 d-flex flex-column align-items-end justify-content-between">
              <div class="container event-content pr-0">
                <div class="row">
                  <div class="time-place d-flex align-items-center justify-content-start">
                    <span class="time details">2:00 P.M - 4:00 P.M.</span>
                    <span class="line mx-2"></span>
                    <div class="place text-capitalize details">
                      Irbed Campus
                    </div>
                  </div>
                  <div class="event-title text-capitalize content-title">
                    Undergraduate Music Open Day
                  </div>
                  <div class="content-summary" title=" Music open days are aimed at candidates who have made
                    Kingston University one of their university choices…">
                    Music open days are aimed at candidates who have made
                    Kingston University one of their university choices…
                  </div>
                </div>
              </div>
              <div class="read-more">
                <a class="text-uppercase stretched-link" href="event.html" target="_blank">read more</a>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 overflow-hidden my-3">
          <div class="card" id="card-right">
            <img class="card-img-top"
              src="./assets/salford-uni-alumni-events@3x.jpg"
              alt="people talk to each other" loading="lazy" />
            <div class="calender-img">
              <div class="date">
                <span class="day">20</span>
                <span class="month text-capitalize">august</span>
              </div>
            </div>
            <div class="card-body pb-0 d-flex flex-column align-items-end justify-content-between">
              <div class="container event-content pr-0">
                <div class="row">
                  <div class="time-place d-flex align-items-center justify-content-start">
                    <span class="time details">4:00 P.M - 6:00 P.M.</span>
                    <span class="line mx-2"></span>
                    <div class="place text-capitalize details">
                      Amman Campus
                    </div>
                  </div>
                  <div class="event-title text-capitalize content-title">
                    Making Nature’ Exhibition At Wellcome Collection
                  </div>
                  <div class="content-summary" title=" The question of how humans relate to other animals has
                    captivated, scientists, ethicists and artists for
                    centuries.">
                    The question of how humans relate to other animals has
                    captivated, scientists, ethicists and artists for
                    centuries...
                  </div>
                </div>
              </div>
              <div class="read-more">
                <a class="text-uppercase stretched-link" href="event.html" target="_blank">read more</a>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- events end -->

  <!-- apply link start -->
  <section id="apply">
    <picture>
      <source media="(min-width:650px)"
        srcset=" ./assets/66-b-08-d-136-d-3058544-e-02-fa-236-f-7-ae-10-c@2x.jpg" />
      <source media="(min-width:465px)" srcset="./assets/66-b-08-d-136-d-3058544-e-02-fa-236-f-7-ae-10-c.jpg" />
      <img src="./assets/66-b-08-d-136-d-3058544-e-02-fa-236-f-7-ae-10-c@3x.jpg" class="img-fluid"
        alt="university Campus" loading="lazy" />
      <div class="apply-content">
        <h3 class="h1 apply-title">
          ADMISSIONS ARE NOW OPEN FOR 2017/2018 INTAKE
        </h3>
        <a class="text-uppercase main-btn" href="#">apply now</a>
      </div>
      </img>
    </picture>

  </section>
  <!-- apply link end -->

  <!-- contact us form start -->
  <section id="form">
    <div class="form-box">
      <div class="title-wrapper text-uppercase text-center">
        <span class="title-m"> get in touch</span>
      </div>
      <form action="" method="post" id="Form">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="FullName" class="visuallyhidden">FullName: </label>
            <input type="text" class="form-control" id="FullName" placeholder="Full Name" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>error Message</small>
          </div>

          <div class="form-group col-md-6">
            <label for="PhoneNumber" class="visuallyhidden">PhoneNumber: </label>
            <input type="tel" class="form-control" id="PhoneNumber"  />
             
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>error Message</small>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="Email" class="visuallyhidden">Email: </label>
            <input type="text" class="form-control" id="Email" placeholder="Email" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>error Message</small>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="Textarea"  class="visuallyhidden">Textarea: </label>
            <textarea class="form-control" id="Textarea" maxlength="500" rows="7" placeholder="Message"></textarea>
           <div class="max-char text-right"><span id="chars">500</span> characters remaining</div> 
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>error Message</small>
          </div>
        </div>
        <div class="submit text-center">
          <button type="submit" class="text-uppercase main-btn">
            submit
          </button>
        </div>
      </form>
    </div>
  </section>
  <!-- contact us form end -->

  <!-- footer start -->
  <footer class="text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <div class="accordion d-lg-flex w-100" id="accordion">
          <!--Grid column-->

          <div class="col-lg-3 col-md-6 footer-outer-col col-sm-12 d-flex justify-content-center p-0">
            <div class="footer-col w-100">
              <a href="#EXPLORE" data-toggle="collapse"
                class="text-uppercase h5 nav-link p-0 d-block d-lg-none d-xl-none stretched-link toggle w-100">EXPLORE</a>
              <h5 class="d-none d-lg-block d-xl-block">EXPLORE</h5>

              <ul class="list-unstyled collapse d-lg-flex flex-column" id="EXPLORE" data-parent="#accordion">
                <li>
                  <a href="./empty.html" class=" ">Privacy and Cookies</a>
                </li>
                <li>
                  <a href="./empty.html" class=" ">Legal Information</a>
                </li>
                <li>
                  <a href="./empty.html" class=" ">About the University</a>
                </li>
                <li>
                  <a href="./empty.html" class=" ">News and Events</a>
                </li>
                <li>
                  <a href="./empty.html" class=" ">Research</a>
                </li>
                <li>
                  <a href="./empty.html" class=" ">Schools and Departments</a>
                </li>
                <li>
                  <a href="./empty.html" class=" ">International</a>
                </li>
                <li>
                  <a href="./empty.html" class=" ">Job Vacancies</a>
                </li>
              </ul>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 footer-outer-col col-sm-12 d-flex justify-content-center">
            <div class="footer-col w-100">
              <div class="linke mb-3 w-100">
                <a href="#LINKS" data-toggle="collapse"
                  class="text-uppercase h5 nav-link p-0 d-block d-lg-none d-xl-none toggle ">QUICK LINKS</a>
                <h5 class="d-none d-lg-block d-xl-block">QUICK LINKS</h5>
                <ul class="list-unstyled collapse d-lg-flex flex-column" id="LINKS" data-parent="#accordion">
                  <li>
                    <a href="./empty.html" class=" ">Online Payments</a>
                  </li>
                  <li>
                    <a href="./empty.html" class=" ">Library</a>
                  </li>
                  <li>
                    <a href="./empty.html" class=" ">Alumni</a>
                  </li>
                  <li>
                    <a href="./empty.html" class=" ">Community Information</a>
                  </li>
                </ul>
              </div>
              <div class="our-site w-100">
                <a href="#ourSite" data-toggle="collapse"
                  class="text-uppercase h5 nav-link p-0 d-block d-lg-none d-xl-none mt-5 toggle  ">USING OUR SITE</a>
                <h5 class="d-none d-lg-block d-xl-block mt-3">
                  USING OUR SITE
                </h5>
                <ul id="ourSite" class="list-unstyled collapse d-lg-flex flex-column" data-parent="#accordion">
                  <li>
                    <a href="./empty.html" class=" ">Accessibilty</a>
                  </li>
                  <li>
                    <a href="./empty.html" class=" ">Freedom of Information</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 footer-outer-col col-md-6 col-sm-12 d-flex justify-content-center">
            <div class="footer-col how-to w-100">
              <a href="#findUS" data-toggle="collapse"
                class="text-uppercase h5 nav-link p-0 d-block d-lg-none d-xl-none toggle w-100">HOW TO FIND US</a>
              <h5 class="d-none d-lg-block d-xl-block">HOW TO FIND US</h5>

              <ul id="findUS" class="list-unstyled how-to collapse d-lg-flex flex-column" data-parent="#accordion">
                <li class="d-flex align-items-center">
                  <i class="fas fa-phone-alt"></i>
                  <a href="./empty.html" class=" ">+ 1 (408) 703 8738</a>
                </li>
                <li class="d-flex align-items-center">
                  <i class="fas fa-phone-alt"></i>
                  <a href="./empty.html" class=" ">+ 962 6 581 7612</a>
                </li>
                <li class="d-flex align-items-center">
                  <i class="fas fa-envelope"></i>
                  <a href="./empty.html" class=" ">info@SciencesUniversity.edu</a>
                </li>
                <li class="d-flex align-items-center">
                  <i class="fas fa-envelope"></i>
                  <a href="./empty.html" class=" ">Contact Us</a>
                </li>
                <li class="d-flex align-items-center">
                  <i class="fas fa-map-marker-alt"></i>
                  <a href="./empty.html" class=" ">Find Us</a>
                </li>
              </ul>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 footer-outer-col col-md-6 col-sm-12 d-flex justify-content-center">
            <div class="footer-col d-flex align-items-center">
              <picture>
                <source media="(min-width:650px)" srcset="./assets/group-19@2x.png" />
                <source media="(min-width:465px)" srcset="./assets/group-19.png" />
                <img src="./assets/group-19@3x.png" alt="SciencesUniversity Logo" loading="lazy" class="Logo" />
              </picture>
              <div class="follow-us">
                <h5 class="text-uppercase text-center ">follow us</h5>
                <div class="social-links d-flex align-items-center">
                  <a href="https://www.linkedin.com/"
                    class="fab fa-linkedin-in d-flex justify-content-center align-items-center social-footer">

                    <span class="invisible"> #</span>
                  </a>
                  <a href="https://www.youtube.com/"
                    class="fab fa-youtube d-flex justify-content-center align-items-center social-footer">
                    <span class="invisible"> #</span>
                  </a>
                  <a href="https://www.instagram.com/"
                    class="fab fa-instagram d-flex justify-content-center align-items-center social-footer ">
                    <span class="invisible"> #</span>
                  </a>
                  <a href="https://twitter.com/"
                    class="fab fa-twitter d-flex justify-content-center align-items-center social-footer  ">
                    <span class="invisible"> #</span>
                  </a>
                  <a href="https://web.facebook.com/"
                    class="fab fa-facebook-f d-flex justify-content-center align-items-center social-footer">
                    <span class="invisible"> #</span>

                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
    </div>
    <!-- Copyright -->
    <div class="text-center copyright p-2">
      © 2021 Sciences University. All Rights Reserved.
    </div>
    <!-- Copyright -->
  </footer>
  <!-- footer end -->

  <!-- js scripts  -->
  <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="../node_modules/odometer/odometer.min.js"></script>
  <script src="./js/main.js"></script>
  <script src="./js/scrollAnimation.js"></script>
<script src="../node_modules/intl-tel-input/build/js/intlTelInput.js">
  </script>

<script  src="../node_modules/intl-tel-input/build/js/utils.js">
  
</script>
<script src="./js/validation.js"></script>

 
</body>

</html>