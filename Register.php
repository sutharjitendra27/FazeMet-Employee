<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="CSS/login.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="Security.php" class="sign-in-form">
            <?php
            if (isset($_SESSION['status'])) {
              echo"<h4>".$_SESSION['status']."<h4>";
              unset($_SESSION['status']);
            }
          ?>
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Fullname" />
            </div>

            <div class="input-field">
                <i class="fas fa-mobile"></i>
                <input type="tel" name="mobile" placeholder="Mobile No." />
              </div>

              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" />
              </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <button type="button" name="register" value="Register" class="btn solid">Sign Up</button>
            
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Click the below button to Sign In !
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign In
            </button>
          </div>
          <img src="img/Registration.svg" class="image" alt="" />
        </div>

    <script src="app.js"></script>
  </body>
</html>

