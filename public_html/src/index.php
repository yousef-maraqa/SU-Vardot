<?php 
require './classes/Database.php';
$database = new Database; 
 
?>


<!DOCTYPE html>
<html lang="en">
<?php include ('./includes/header.php'); ?>
<body>
<?php include('./includes/navbar.php') ?>

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
                    <a href="empty.php">
                  
               
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
                  
                   
                    <a class="text-uppercase d-block text-right " href="empty.php" > read more  <i class="fas fa-arrow-right"></i></a>
                  </a>
                </div>
            
              </div>
                </div>
                <div class="col-md-12 pl-0 pr-0 news-border">
                  <div class="news-block">
                  <div class="read-more text-left">
                    <a href="empty.php">
                  
               
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
                  
                   
                    <a class="text-uppercase d-block text-right " href="empty.php" > read more  <i class="fas fa-arrow-right"></i></a>
                  </a>
                </div>
                </div>
                </div>

                <div class="col-md-12 pl-0 pr-0 news-border">
                  <div class="news-block">
                    <div class="read-more text-left">
                      <a href="empty.php">
                    
                 
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
                    
                     
                      <a class="text-uppercase d-block text-right " href="empty.php" > read more  <i class="fas fa-arrow-right"></i></a>
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
                <a class="text-uppercase stretched-link" href="event.php" target="_blank">read more</a>
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
                <a class="text-uppercase stretched-link" href="event.php" target="_blank">read more</a>
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
                <a class="text-uppercase stretched-link" href="event.php" target="_blank">read more</a>
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
 <?php include('./includes/footer.php'); ?>
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