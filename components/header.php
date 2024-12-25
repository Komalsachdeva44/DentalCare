<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=close" />
<link href="./css/style.css" rel="stylesheet"/>
<title>Home</title>
</head>
<body>
 <div class="container-fluid ">
<div class="row topbar justify-center">
 <div class="col-12 pt-2">
  <div class="container">
    <div class="row">
    <div class="col-sm-3 col-md-4 col-lg-6 col-xl-3  d-flex ">
    <i class="fa-solid fa-envelope m-1 primarycolor"></i>
    <a href="mailto:dentalcare@gmail.com" class="text-white text-decoration-none"><p>dentalcare@gmail.com</p></a>
  </div>
  <!-- <div class="col-sm-3 col-md-4 col-lg-3 col-xl-3 d-flex ">
  <i class="fa-solid fa-location-dot m-1 primarycolor"></i>
<p> ludhiana, punjab</p>
  </div> -->
  <div class="col-sm-3 col-md-4 col-lg-6 col-xl-9 d-flex">
  <i class="fa-solid fa-phone m-1 primarycolor"></i>
<a href="tel:8872648203" class="text-white text-decoration-none"><p>88726-48203</p></a>
  </div>
    </div>
  </div>
 </div>
</div>
 </div>
 <div class="container">
 <div class="row py-3 px-4 responsive-header">
<div class="col-sm-2 col-md-2  ">
 <a href="/dentalcare"><img src="./images/dentalcare_logo.png" alt="logo" width="100%"/></a>
</div>
<div class="col-sm-9 col-md-10 d-flex justify-content-end align-item-end">
<i class="fa-solid fa-bars hamburger" id="ham"></i>
<span class="material-symbols-outlined" id="closeIcon" >
close
</span>
<ul class="mainmenu">
  <li><a href="/dentalcare/">Home</a></li>
  <li><a href="/dentalcare/about-us.php">About Us</a></li>
  <li><a href="/dentalcare/services.php">Services</a></li>
  <li><a href="/dentalcare/contact-us.php">Contact Us</a></li>
  <li class="appointmentBookingBtn"> <a href="/dentalcare/make-appointment.php">Make Appointment</a></li>
</ul>
</div>
<div id="mobile-sidebar">
 <img src="./images/dentalcare_logo.png" alt="logo" width="100%"/>
 <br/>
 <ul class="mobile-menu">
  <li><a href="/dentalcare/">Home</a></li>
  <li><a href="/dentalcare/about-us.php">About Us</a></li>
  <li><a href="/dentalcare/services.php">Services</a></li>
  <li><a href="/dentalcare/contact-us.php">Contact Us</a></li>
  <li > <a href="/dentalcare/make-appointment.php">Make Appointment</a></li>
</ul>

</div>
</div>
 </div>
 <script>
  let  sidebar= document.getElementById("mobile-sidebar");
  let closeIcon=document.getElementById("closeIcon");
  let  hamburger= document.getElementById("ham");
  hamburger.addEventListener("click",()=>{
    closeIcon.style.display="block";
   hamburger.style.display="none";
  sidebar.style.display="block";
})

closeIcon.addEventListener("click",()=>{
  closeIcon.style.display="none";
   hamburger.style.display="block";
   sidebar.style.display="none";

  })
 </script>
</body>
</html>