<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="Include/style.css" />
    <title>Get IPL | Login</title>
  </head>
  <body>
    <div class="container cont">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="Include/signup.php" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required />
            </div>
            <input type="submit" value="Login" class="btn solid" name="adminlogin" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Admin Only</h3><br>
            <p>
              Not Admin<a href="./login" style="text-decoration:none;color:#ffffff;">?</a> <br><br>
              <a href="login" class="btn transparent" style="text-decoration:none;padding:8px;">
                Go to Home page
              </a>
              </p>
            </p>
            <p>
              Don't try to sneak in we know what you are up to. 
            </p>
          </div>
          <img src="img/dash.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <?php 
      if ( isset($_GET['invalid'])) {
				echo "<script>Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Username/Password Is Invalid.',
				});</script>"; 
      }
      else if(isset($_GET['AError'])){
        echo "<script>Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Login Required.',
				});</script>"; 
      }
      else{

      }
    ?>
  </body>
</html>
