<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include './components/header.php'; ?>
 
<div class="container-fluid" style="background-color:#eff8ff;">
  <div class="row">
    <div class="col-12">

  
<div class="container my-5">
<div class="row align-items-center">
    <div class="col-sm-12 col-md-6 serviceContent">
      <h1 class="primarycolor">
    Contact us
      </h1>
      <h2>
        Ask if you have any queries?
      </h2>
      <p>Have questions or need assistance? Reach out to us anytime—we’re here to help! Call, email, or visit us to start your journey to a healthier smile.</p>
      <hr/>
      <p></i><b>Email</b>: dentalcare@gmail.com</p>
      <p> <b>Phone.no</b>: 88726-48203</p>
      <p></i><b>Address</b>: Model Town Ludhiana Punjab</p>

      <br/>
      <a href="/dentalcare/make-appointment.php" >
<button class="thirdBtn">Book an appointment</button>
</a>
<br/>
<br/>
<br/>

    </div>
    <div class="col-sm-12 col-md-6 text-center serviceContent">
    <form action="contactinfo.php" method="post" class="contactForm">
    <label for="name">Name</label><br/>
    <input type="text" id="name" name="name" placeholder="Name" required/> <br/>

    <label for="email">Email</label><br/>
    <input type="email" id="email" name="email" placeholder="Email" required/> <br/>

    <label for="phone">Phone</label><br/>
    <input type="tel" id="phone" name="phone" placeholder="Phone [0-9]" pattern="[0-9]{10}" required/> <br/>

    <label for="comments">Comments</label><br/>
    <textarea id="comments" rows="6" cols="12" name="comments" style="width:100%; padding:10px"></textarea>
    <br/>
    <br/>

    <button type="submit" class="secoundBtn" style="width:100%">Submit</button>
    <br/>
</form> </div>
 
  </div>
</div>

</div>
  </div>
</div>
<?php include './components/footer.php'; ?>

</body>
</html>