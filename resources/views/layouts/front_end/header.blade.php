<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> ข้าวหมากไทย</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('front_end/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('front_end/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front_end/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('front_end/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v4.3.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
 <!-- ======= Top Bar ======= -->
 <header id="header">
 <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-green" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">ข้าวหมากโบราณ</a>
   
    

    <div class="navbar-collapse offcanvas-collapse" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      <li class="">
          <a class="nav-link "href="{{url('/')}}"><h4>หน้าแรก</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/benefit')}}"><h4>ประโยชน์</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/product')}}"><h4>สินค้า</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/contact')}}"><h4>ติดต่อ</h4></a>
        </li>
        
          </ul>
        </li>
      </ul>
      <div class="dropdown">
  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    เข้าสู่ระบบ
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
    <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
  </ul>
</div>
    </div>
  </div>
</nav>
 </header>
