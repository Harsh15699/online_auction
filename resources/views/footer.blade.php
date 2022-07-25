<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <footer class="text-center text-lg-start text-muted" style="background-color:#fff0f3;margin-top:2%;">
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-github"></i>
          </a>
        </div>
      </section>
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fa fa-gem me-3"></i>Online Auction
              </h6>
              <p>
                Best place to bid and get bid
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Cricket Auction
              </h6>
              <p>
                <a href="{{ route('player_registration') }}" class="text-reset">Player Registration</a>
              </p>
              <p>
                <a href="{{ route('player_login') }}" class="text-reset">Player Login</a>
              </p>
              <p>
                <a href="{{ route('team_dashboard') }}" class="text-reset">Team Dashboard</a>
              </p>
              <p>
                <a href="{{ route('team_login') }}" class="text-reset">Team Login</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Commodity Auction
              </h6>
              <p>
                <a href="{{ route('user_registration') }}" class="text-reset">Signup</a>
              </p>
              <p>
                <a href="{{ route('user_login') }}" class="text-reset">Login</a>
              </p>
              <p>
                <a href="{{ route('user_dashboard') }}" class="text-reset">User Dashboard</a>
              </p>
              <p>
                <a href="{{ route('home') }}" class="text-reset">Home</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Contact
              </h6>
              <p><i class="fa fa-home me-3"></i> Bangalore, Karnataka</p>
              <p>
                <i class="fa fa-envelope me-3"></i>
                info@onlineauction.com
              </p>
              <p><i class="fa fa-phone me-3"></i> +91 1234567890</p>
              <p><i class="fa fa-print me-3"></i> +91 0123456789</p>
            </div>
          </div>
        </div>
      </section>
      <div class="text-center p-4" style="background-color:#1F1F1F;">
        © 2022 Copyright:Harsh Gautam
      </div>
    </footer>
  </body>
</html>
