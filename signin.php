


<?php
include("header.php");
?>
<link rel="stylesheet" href="./css/signin.css">

<style>
  body{
    padding-top: 60px;
  }
</style>

</head>
<body>

<?php
include("navbar.php");
?>

<!-- <div class="frm-container">


<form action="./includes/signin.inc.php" method = "post">
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Password</label>
  <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" name="btnSignin" class="btn btn-primary">Submit</button>
</form>
</div> -->

<section class="vh-100 bg-image sign-up-form-section"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Sign In</h2>

              <form action="./includes/signin.inc.php" method = "post">

              

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email"  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="pwd" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

              

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name="btnSignin"
                    data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Sign In</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="signup.php"
                    class="fw-bold text-body"><u>Register here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>