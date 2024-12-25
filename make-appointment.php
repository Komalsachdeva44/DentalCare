<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <title>Booking Appointment Form</title>
</head>

<body>
  <?php include './components/header.php'; ?>

  <div class="container-fluid py-5" style="background-color:#eff8ff;">
    <div class="row">
      <div class="col-sm-12">


      <form action="appointmentinfo.php" method="post" onsubmit="resetForm()">
    <div class="container">
        <div class="row bookingContent">

            <div class="col-sm-12 col-lg-5 m-5 card px-4 py-3">
                <h1>Book An Appointment</h1>

                <label class="form-label" for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control mb-3" placeholder="Enter Your Name" required>

                <label class="form-label" for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control mb-3" placeholder="Enter Last Name" required>

                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Enter Your Email" required>

                <label class="form-label" for="phone">Phone.no</label>
                <input type="tel" name="phone" id="phone" class="form-control mb-4" placeholder="Enter Your Phone No" pattern="[0-9]{10}" required>

                <label class="form-label" for="service">Pick Service</label>
                <select class="form-select" name="service" id="service" aria-label="Default select example" required>
                    <option selected>Choose</option>
                    <option value="general_dental_care">General Dental Care</option>
                    <option value="dental_implants">Dental Implants</option>
                    <option value="teeth_whitening">Teeth Whitening</option>
                </select>



                <label class="form-check-label" for="before_medicine">Before Any Medicine</label>
                <div style="display: flex; gap: 20px">
                    <input class="form-check-input" type="radio" name="before_medicine" value="Yes" id="before_medicine_yes">
                    <label class="form-check-label" for="before_medicine_yes">Yes</label>

                    <input class="form-check-input" type="radio" name="before_medicine" value="No" id="before_medicine_no">
                    <label class="form-check-label" for="before_medicine_no">No</label>
                </div>

                <label class="form-label" for="city">City</label>
                <input type="text" name="city" id="city" class="form-control mb-3" placeholder="Enter City" required>

                <label class="form-label" for="state">State</label>
                <input type="text" name="state" id="state" class="form-control mb-3" placeholder="Enter State " required>

                <label class="form-label" for="comments">Comments</label>
                <textarea class="form-control mt-2 mb-3" name="comments" id="comments" placeholder="Leave a comment here" style="height: 100px"></textarea>

                <button type="submit" class="secoundBtn btn-lg w-100">Book An Appointment</button>
            </div>

            <div class="col-sm-12 col-lg-5 m-5">
                <img src="./images/dental_doc.jpg" alt="img_booking_appointment" />
            </div>
        </div>
    </div>
</form>
 </div>
    </div>
  </div>
  <?php include './components/footer.php'; ?>
  <script>
    // Function to reset the form
    function resetForm() {
        document.getElementById("appointmentForm").reset();
    }
</script>

</body>

</html>