<?php

//session_start();

$brandname = "Cornerstone H.S";

$brandtitle = "CORNERSTONE HIGH SCHOOL";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//include_once 'db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page ?> &#8226 <?php echo $brandname; ?></title>

  <!-- bootstrap css and js here -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.css">

  <link rel="stylesheet" href="assets/external.css">
  <script src="assets/js/bootstrap.bundle.js"></script>

  <!-- Google fonts here -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Mono">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik Gemstones">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playball">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril Fatface">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

  <!--  aos -->
  <link rel="stylesheet" href="assets/vendor/aos/aos.css">

  <!--  purecounter -->
  <link rel="stylesheet" href="assets/vendor/purecounter/purecounter_vanilla.js">

  <!--  swiper -->
  <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  <!--  customized css here  -->
  <link rel="stylesheet" href="assets/external.css">

  <link rel="shortcut icon" href="images/icon/nangabo.ico" type="image/x-icon">
</head>

<body>
  


  <div class="fixed-bottom text-end m-lg-3">
    <a href="#brandtitle" class="nav-link"><i class="fa fa-arrow-alt-circle-up h2"></i></a>
  </div>


  <div id="brandtitle" class="text-center fw-bold fs-3 pt-2">
    <span><img class="schoolbadge" src="images/carousel/badge.jpg" alt="school badge here" srcset=""></span>
    <p><?php echo $brandtitle; ?></p>
  </div> <!-- header here  -->

  <div class="container-fluid text-center">
    <span id="header-2" class="badge p-2 mb-2 bg-success rounded-pill">Mixed Day and Boarding, Both Arts and Sciences S.1 - S.6</span>
  </div>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid py-2">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'Home') {
                                  echo 'active fw-bold text-warning';
                                } ?>" aria-current="page" href="index">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'school') {
                                  echo 'active fw-bold text-warning';
                                } ?>" href="school">SCHOOL LIFE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'elearning') {
                                  echo 'active fw-bold text-warning';
                                } ?>" href="elearning">E-LEARNING</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'about') {
                                  echo 'active fw-bold text-warning';
                                } ?>" href="about">ABOUT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">ACADEMIC</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="timetable"><span class="d-inline-block bg-success rounded-circle p-1"></span> &nbsp;Timetables</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="fees"><span class="d-inline-block bg-danger rounded-circle p-1"></span> &nbsp;Fees Structure</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="classmaterials"><span class="d-inline-block bg-warning rounded-circle p-1"></span> &nbsp;Class Materials</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="uneb"><span class="d-inline-block bg-primary rounded-circle p-1"></span> &nbsp;Uneb Results</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">SCHOOL CLUBS</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sports"><span class="d-inline-block bg-success rounded-circle p-1"></span> &nbsp;Sports Club</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="scripture"><span class="d-inline-block bg-danger rounded-circle p-1"></span> &nbsp;Scripture Union</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="wildlife"><span class="d-inline-block bg-warning rounded-circle p-1"></span> &nbsp;Wildlife Club</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="art"><span class="d-inline-block bg-info rounded-circle p-1"></span> &nbsp;Art Club</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'apply') {
                                  echo 'active fw-bold text-warning';
                                } ?>" href="apply">APPLY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'contact') {
                                  echo 'active fw-bold text-warning';
                                } ?>" href="contact">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> <!-- end of the nav bar here  -->