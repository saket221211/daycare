<?php
include "dbcon.php";?>

<!DOCTYPE html>

<html>

<head>
  <title>Child Daycare</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="project.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <div class="row bg-warning">
    <div class="col-lg-4 ps-5">
      <p><i class="fa-solid fa-location-dot fa-bounce "></i>Bhtinda Punjab 151302</p>
    </div>
    <div class="col-lg-2">
      <p class="text-end"> <i class="fa-regular fa-envelope "></i> Email Us Now</p>
    </div>
    <div class="col-lg-4">
      <p class="text-end "><i class="fa-solid fa-phone"></i>Call: 7320956717</p>
    </div>
    <div class="col-lg-2">
      <i class="fa-brands fa-square-facebook px-3 fa-xl" style="color: #2d31b4;"></i>
      <i class="fa-brands fa-google px-3 fa-xl" style="color: #2e511f;"></i>
      <i class="fa-brands fa-square-instagram px-3 fa-xl"></i>
    </div>
  </div>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <nav class="navbar navbar-expand-lg bg-body-tertiary">

    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/daycare/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="blog.php">Blog</a>
          </li>

          <div class="dropdown">
            <li class=" dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
            </li>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php#about">About Us</a></li>
              <li><a class="dropdown-item" href="#">Health & Safety</a></li>
              <li><a class="dropdown-item" href="#">Parent Testimonials</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <li class=" dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Program
            </li>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php#program">Programs</a></li>
              <li><a class="dropdown-item" href="#"> Our Curriculum</a></li>
              <li><a class="dropdown-item" href="#"> Summer Program</a></li>
            </ul>
          </div>
        <!--
          <div class="dropdown">
            <li class=" dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Parent Testimonials
            </li>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php.Testimonials">Enrollment & Tution</a></li>
              <li><a class="dropdown-item" href="#"> Nutrition & Meals</a></li>
              <li><a class="dropdown-item" href="#"> For Parents</a></li>
            </ul>
          </div>
-->
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="career.php">Career</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
            
          </li>

        </ul>

      </div>
    </div>
  </nav>
