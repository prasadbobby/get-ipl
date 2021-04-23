<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link src="pwa/logo.png" rel="icon">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="Include/style.css" />
  <link rel="manifest" href="./manifest.webmanifest">
    <title>Get IPL | Login</title>
    <style>
      .fq{
        padding:0px;
      }
      .fq input,.fq textarea{
        border-radius:8px;
        margin-bottom:15px;
      }
    </style>
  </head>
  <body>
    <div class="container">
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
            <input type="submit" value="Login" class="btn solid" name="login" />
            <a href="#popup" style="text-decoration:none">Facing Problem/Queries?</a>
          </form> 
          <form action="Include/signup.php" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required />
            </div>
            <input type="submit" class="btn" value="Sign up" name="save"/>
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here <a href="dashboard" style="text-decoration:none;color:#ffffff;">?</a></h3>
            <p>
              Don't wait, Sign up now and start watching LIVE IPL now. 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Go and sign now to watch LIVE IPL.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <div id="popup" class="modalDialog">
     <div> <a href="#close" title="Close" class="close">X</a>  
          <form action="Include/signup.php" method="POST" class="fq">
            <h3>Queries</h3>
            <div>
              <input class="form-control" type="text" placeholder="Username" name="username" required />
            </div>
            <div>
              <input class="form-control" type="email" placeholder="Email" name="email" required />
            </div>
            <div>
              <input class="form-control" type="password" placeholder="Password" name="password" required />
            </div>
            <div>
              <textarea class="form-control" rows="10" cols="30" type="text" row="3" placeholder="Queries" name="queries" required></textarea>
            </div>
            <input type="submit" class="btn" value="SEND" name="send"/>
          </form>
      </div>
    </div>

    <style> .modalDialog {
      position: fixed;
      font-family: Arial, Helvetica, sans-serif;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.8);
      z-index: 9999;
      overflow-y: scroll;
      overflow: scroll;
      display: none;
    }
    .modalDialog:target {
      display: block;
    }
    .modalDialog > div {
      width: 280px;
      position: relative;
      margin: 10% auto;
      padding: 5px 20px 13px 20px;
      border-radius: 10px;
      background: #fff;
    }
    .close {
      background: #606061;
      color: #FFFFFF;
      line-height: 25px;
      position: absolute;
      right: -12px;
      text-align: center;
      top: -10px;
      width: 24px;
      text-decoration: none;
      font-weight: bold;
      -webkit-border-radius: 12px;
      -moz-border-radius: 12px;
      border-radius: 12px;
      -moz-box-shadow: 1px 1px 3px #000;
      -webkit-box-shadow: 1px 1px 3px #000;
      box-shadow: 1px 1px 3px #000;
    }
    .close:hover {
      background: #00d9ff;
    }
    .noscroll { 
    overflow: hidden;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="app.js"></script>
    <?php 
      if ( isset($_GET['RError'])) {
				echo "<script>Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Username/Email already exist.',
				});</script>"; 
      }
      else if(isset($_GET['again'])){
        echo "<script>Swal.fire({
					icon: 'error',
					title: 'Oops...',
          text: 'Someone is already logged with same account.',
          footer : 'Only one user can login at one time. Try to logout from other devices.'
				});</script>"; 
      }
      else if(isset($_GET['invalid'])){
        echo "<script>Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Username/Password is wrong.',
				});</script>"; 
      }
      else if(isset($_GET['Error'])){
        echo "<script>Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Login Required.',
				});</script>"; 
      }
      else if(isset($_GET['send'])){
        echo "<script>Swal.fire({
					icon: 'success',
					title: 'Sended',
					text: 'Your query has been submitted we will contact ASAP.',
				});</script>"; 
      }
      else{
      }
    ?>
  <script src="./index.js" type="module"></script>
  </body>
</html>
