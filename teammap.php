<?php
session_start();
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <meta charset="UTF-8">
    <title>Maps-DataHolics</title>


    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">
<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">

<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://awesome-table.com/AwesomeTableInclude.js"></script>

 </head>
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1>Map! <?php echo $_SESSION['USERNAME']; ?></h1>
  <p>Welcome to Co-workers Visualisation map</p>
  </div>
<!-- -->

<!-- Place this tag where you want the Awesome Table Widget to render -->
</br>
</br>
<!--Begin Back Buttom -->
<div align="right">
<a href="http://universidad.ch/dataholics/index.php" style="background-color:rgb(61,148,0);
 background-image:-webkit-linear-gradient(top,rgb(0,0,255),rgb(80,80,200));
 border:1px solid rgba(0,0,0,0);
 border-bottom-left-radius:2px;
 border-bottom-right-radius:2px;
 border-top-left-radius:2px;
 border-top-right-radius:2px;
 display:inline-block;
 font-size:20px;
 text-align: center;
 font-weight:bold;
 height:40px;
 line-height:40px;
 margin-right:0px;
 min-width:10%;
 outline:rgb(255,255,255) none 0px;
 padding:0px 8px;
 text-transform:uppercase;
 white-space:nowrap;
 color:white!important">Home</a>
</div>
<!--End Back Buttom -->
</br>

<CENTER>
  <!-- Place this tag where you want the Awesome Table Widget to render -->
<!-- <div class="span1" data-type="AwesomeTableView" data-viewID="-KDKgMsH61BjUR18b0Mc"></div>  -->
</br>
<iframe src="https://awesome-table.com/-KDKgMsH61BjUR18b0Mc/view" width="90%" height="2080" frameborder="0"></iframe>
</CENTER>
</br>

<!--Begin Back Buttom -->
<div align="right">
<a href="http://universidad.ch/dataholics/index.php" style="background-color:rgb(61,148,0);
 background-image:-webkit-linear-gradient(top,rgb(0,0,255),rgb(80,80,200));
 border:1px solid rgba(0,0,0,0);
 border-bottom-left-radius:2px;
 border-bottom-right-radius:2px;
 border-top-left-radius:2px;
 border-top-right-radius:2px;
 display:inline-block;
 font-size:20px;
 text-align: center;
 font-weight:bold;
 height:40px;
 line-height:40px;
 margin-right:0px;
 min-width:10%;
 outline:rgb(255,255,255) none 0px;
 padding:0px 8px;
 text-transform:uppercase;
 white-space:nowrap;
 color:white!important">Home</a>
</div>
<!--End Back Buttom -->
</br>

<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
<div><a href="logout.php">Logout</a></div>
</ul></div></div>
</br>

<!-- -->
    <?php else: ?>     <!-- Before login -->
<div class="container">
<!--
<h1>Login with Facebook</h1>
           Not Connected
<div>
      <a href="fbconfig.php">Login with Facebook</a></div>
	 <div> <a href="http://www.krizna.com/general/login-with-facebook-using-php/"  title="Login with facebook">View Post</a>
	  </div>
      </div>
-->
<CENTER>
  <img src="http://theport.ch/wp-content/uploads/2016/03/banner_logo_team4.png" alt="logo team 4" width="25%">
  <img src="http://theport.ch/wp-content/uploads/2016/03/Team4_log.png" alt="logo hackathon" width="50%">
</CENTER>

    <div class="logmod">
  <div class="logmod__wrapper">
<!--    <span class="logmod__close">Close</span>  -->
<span>
</span>
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="text" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" type="text" size="50" />
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Create Account" />
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            </div>
          </form>
        </div>
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Facebook</strong></span>
              </div>
            </a>

            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="password" size="50" />
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Log In" />
              <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Forgot your password?<br>Click here</a></span>
            </div>
          </form>
        </div>
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="fbconfig.php" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    <?php endif ?>
  </body>
</html>
