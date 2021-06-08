<!doctype html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">

  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="container">
    <section id="formHolder">

      <div class="row">

        <!-- Brand Box -->
        <div class="col-sm-6 brand">
          <a href="#" class="logo">RM <span>.</span></a>

          <div class="heading">
            <h2>RUANG<br>MAHASISWA</h2>
          </div>

        </div>


        <!-- Form Box -->
        <div class="col-sm-6 form">

          <!-- Signup Form -->
          <div class="signup form-peice">
            <div class="signup-form">
              <div class="form-group">
                <img src="img/logo.png" class="img">
                <a href="#" class="switch" style="margin-left: 30%; margin-top: 5px">Login</a>
              </div>
            </div>
          </div><!-- End Signup Form -->

          <!-- Login Form -->
          <div class="login form-peice switched">
            <form method="POST" action="{{ route('dashboard') }}">
              @csrf
              <div class="form-group">
                <label for="loginemail">Email Adderss</label>
                <input type="email" name="email" required>
              </div>

              <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" name="password" required>
              </div>

              <div class="CTA">
                <input type="submit" value="Login">
                <a href="#" class="switch">back</a>
              </div>
            </form>
          </div><!-- End Login Form -->


        </div>
      </div>

    </section>

    <footer>
      <p>
        Pemrograman Web Lanjut
      </p>
    </footer>

  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>