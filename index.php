<?php $page = 'Home';
include 'includes/header.php';

include 'includes/components.php';

include 'includes/db.php';

$date_today = date('Y');


?>

<div class="container">
  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="images/carousel/1.JPG" alt=""></div>
      <div class="swiper-slide"><img src="images/carousel/2.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/carousel/3.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/carousel/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/carousel/5.jpg" alt=""></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar
        <div class="swiper-scrollbar"></div>
-->
  </div>

</div><!-- Swiper images here --->

<div id="calender_mission" class="container-fluid mt-5 mb-5 ">
  <div style="max-width: 30rem;" class="card shadow-lg bg-body">
    <div class="card-header bg-info text-center fw-bold fs-4 text-dark bg-gradient py-3">
      Upcoming Events
    </div>

    <?php

    $calender_sql = "SELECT * FROM events";

    $result = mysqli_query($conn, $calender_sql);

    while ($row = mysqli_fetch_assoc($result)) {

      notice_board($row['eventdate'], $row['eventname'], $row['eventtime']);
    }
    ?>

    <div class="card-footer bg-light text-center">
      <marquee class="text-danger ">All school notices here </marquee>
    </div>

  </div> <!--  school notice board -->



  <div class="accordion shadow-lg bg-body" id="accordion">
    <div class="accordion-item">
      <h4 class="accordion-header" id="headingOne">
        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          MISSION STATEMENT
        </button>
      </h4>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          To produce civilised students for the dynamic professiona world.
        </div>
      </div>
    </div><!-- Item one here  -->

    <div class="accordion-item">
      <h4 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          VISION STATEMENT
        </button>
      </h4>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          To develop students' abilities by providing quality education.
        </div>
      </div>
    </div>
    <!-- item two here  -->


    <div class="accordion-item">
      <h4 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          MOTTO
        </button>
      </h4>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>EDUCATION THE ROCK FOUNDATION</strong>
        </div>
      </div>
    </div> <!-- item three here -->
  </div>
</div>


<div id="index-sec1" class="container-fluid mb-5">
  <div id="index-sec1-card" class="card bg-transparent border-success shadow-lg">
    <img id="index-sec-img" class="card-img-top" style="width:100%;" src="images/cornerstone_pics/headboy-girl.png" alt="" srcset="">
    <div class="card-body">
      <h4 class="card-title text-center text-primary fw-bold">Head Prefect</h4>
      <hr>
      <p class="text-center">Other text here...</p>
    </div>
    <div class="card-footer bg-light">
      <small class="text-muted">Head prefect's name here (<?php echo $date_today; ?>) </small>
    </div>
  </div>

  <div id="index-sec1-card" class="card bg-transparent border-primary shadow-lg">
    <img id="index-sec-img" class="card-img-top" style="width:100%;" src="images/director.jpg" alt="Director" srcset="">
    <div class="card-body">
      <h4 class="card-title text-center text-danger fw-bold">Director</h4>
      <hr>
      <p class="text-center">Other text here...</p>
    </div>
    <div class="card-footer bg-light">
      <small class="text-muted">Director's name here (<?php echo $date_today; ?>) </small>
    </div>
  </div>

  <div id="index-sec1-card" class="card bg-transparent border-danger shadow-lg">
    <img id="index-sec-img" class="card-img-top" style="width:100%;" src="images/hm.jpg" alt="Head teacher" srcset="">
    <div class="card-body">
      <h4 class="card-title text-center text-success fw-bold">Head Teacher</h4>
      <hr>
      <p class="text-center">Other text here...</p>
    </div>
    <div class="card-footer bg-light">
      <small class="text-muted">Headteacher's name here (<?php echo $date_today; ?>) </small>
    </div>
  </div>
</div> <!-- Communications from other parties here -->



<div class="ms-3 me-3">
  <nav>
    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Benefits</button>
      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Spirituality</button>
      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Academics</button>
    </div>
  </nav>

  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <h3 class="bw-bold">What are the Benefits of being at <strong>Cornerstone High School</strong></h3>
      <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-info">
          <span class="d-inline-block bg-dark rounded-circle p-1"></span> &nbsp;The school has a wealth of well qualified and experienced teachers in all subjects offered.
        </li>
        <li class="list-group-item list-group-item-primary">
          <span class="d-inline-block bg-success rounded-circle p-1"></span> &nbsp;The school is easily accessible with no traffic jams
        </li>
        <li class="list-group-item list-group-item-secondary">
          <span class="d-inline-block bg-warning rounded-circle p-1"></span> &nbsp;Cornerstone High School has well designed permanent buildings in a clean environment,
          outside Kampala City Centre, conducive for Studying
        </li>
        <li class="list-group-item list-group-item-success">
          <span class="d-inline-block bg-primary rounded-circle p-1"></span> &nbsp;The school has a well furnished computer laboratory.
        </li>
        <li class="list-group-item list-group-item-warning">
          <span class="d-inline-block bg-danger rounded-circle p-1"></span> &nbsp;The school gives an environment of experience sharing between students from different nations across the world.
        </li>
      </ul>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <h4 class="fw-bold text-success">Spirituality</h4>
      <p>Cornerstone High School is a secular school but allows other denominations to worship according to their faith.</p>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
      <h4 class="fw-bold text-danger">Self Development</h4>
      <p> We believe in holistic growth and development of your child. We have thus put in place that students
        not only excel academically but as well socially.<br> We have multiple students clubs at school that help
        student hone their leadership and organization schools with clubs undertaking projects to better
        the school and the community at large

      </p>
    </div>
  </div>

</div><!-- Navigation tabs here -->

<div id="index-bottom" class="container shadow-lg">
  <img class="img-thumbnail" src="images/index-bottom/1.jpg" alt="image-1">
  <img class="img-thumbnail" src="images/index-bottom/2.jpg" alt="image-2">
  <img class="img-thumbnail" src="images/index-bottom/3.jpg" alt="image-3">
  <img class="img-thumbnail" src="images/index-bottom/4.jpg" alt="image-4">
  <img class="img-thumbnail" src="images/index-bottom/5.jpg" alt="image-5">
</div>




<div class="container-fluid">
  <h4 class="text-center text-primary fw-bold py-2">Location of Cornerstone High School</h4>
  <hr id="location-horizontal">
  <iframe id="map-iframe" class="border border-primary rounded" style="margin-left: 0.2cm;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4238323224355!2d32.576557829148705!3d0.44988234104318314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc341ab21d79157e!2zMMKwMjYnNTkuNiJOIDMywrAzNCczNy42IkU!5e0!3m2!1sen!2sug!4v1654454852290!5m2!1sen!2sug" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<?php include 'includes/footer.php';  ?>