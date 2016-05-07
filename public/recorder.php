<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EAA Big Data Code-A-Thon</title>

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/master.css" rel="stylesheet">
  </head>
  <body>

  <!-- NAVBAR -->
    <nav class="navbar navbar-static-top navbar-light ">
       <a class="navbar-brand" href="#">
       <img alt="Brand" src="./img/eaa-logo-20.png">
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <div class="nav-menu btn-group pull-right" role="group">
        <button type="button" class="btn btn-default" id="login-button" data-toggle="modal" data-target=".login-modal">Login</button>
        <button type="button" class="btn btn-default" id="signup-button" data-toggle="modal" data-target=".signup-modal">Signup</button>
      </div>

      <!-- Login modal -->
      <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="mySmallModalLabel">Welcome back!</h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Signup modal -->
      <div class="modal fade signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title text-center" id="mySmallModalLabel">Let's Get Started!</h4>
              <div id="loginEmailField" class="form-group col-sm-10 col-sm-offset-1">
                <label for="loginEmail" class="sr-only">Email</label>
                <input id="loginEmail" type="email" class="form-control" placeholder="Email Address">
              </div>
              <div id="loginPasswordField" class="form-group col-sm-10 col-sm-offset-1">
                  <label for="loginPass" class="sr-only">Password</label>
                  <input id="loginPass" type="password" class="form-control" placeholder="Password">
              </div>
              <div id="emailLoginBtnDiv" class="form-group col-sm-10 col-sm-offset-1 text-center">
                  <button id="loginWithEmailBtn" type="submit" class="btn btn-primary btn-block">CLICK TO LOG IN</button>
              </div>
              <div class="text-center">
                  <a href="#" id="forgotPasswordLink">Forgot your password?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- CONTENT -->

  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Start Conserving</h1>
        <p>How much water are you using? Chances are it's more than you think! Use our water consumption recorder to help you stay conscious of your habits, and begin down the path of conservation!</p>
      </div>
    </div>

    <div class="container">
      <h2>Describe Your Water Use Activity</h2>
      <form>
        <fieldset class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Enter water use activity title">
        </fieldset>
        <fieldset class="form-group">
          <label for="selectType">Type of Activity</label>
          <select class="form-control" id="selectType">
            <option>Shower</option>
            <option>Bath</option>
            <option>Brushing Teeth</option>
            <option>Toilet</option>
            <option>Dishwasher</option>
            <option>Laundry</option>
            <option>Carwash (home)</option>
            <option>Carwash (Drive-Through)</option>
            <option>Watering Lawn (hose)</option>
            <option>Watering Lawn (sprinkler)</option>
          </select>
        </fieldset>
        <fieldset class="form-group">
          <label for="date">date</label>
          <input type="date" class="form-control" id="date" placeholder="ex 08/15/16">
        </fieldset>
        <fieldset class="form-group">
          <label for="hours">Hours</label>
          <input type="number" class="form-control" id="hours" placeholder="Enter number of hours" value="0">
        </fieldset>
        <fieldset class="form-group">
          <label for="minutes">Minutes</label>
          <input type="number" class="form-control" id="minutes" placeholder="Enter number of minutes" value="0">
        </fieldset>
        <fieldset class="form-group">
          <label for="seconds">Seconds</label>
          <input type="number" class="form-control" id="seconds" placeholder="Enter number of seconds" value="0">
        </fieldset>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Use Current Date/Time
          </label>
        </div>
      <hr>
        <h2>How Long Were You Using Water?</h2>

        <h3>Use The Timer</h3>
          <div id="timer">
            <span id="sw_h">00</span>:
            <span id="sw_m">00</span>:
            <span id="sw_s">00</span>:
            <span id="sw_ms">00</span>
            <br/>
            <br/>
            <input type="button" value="Start" id="sw_start" />
            <input type="button" value="Pause" id="sw_pause" />
            <input type="button" value="Stop"  id="sw_stop" />
            <input type="button" value="Reset" id="sw_reset" />
            <br/>
            <br/>
            <span class="hide" id="sw_status">Stopwatch Status: Idle</span>
        </div>
        <h3>Or enter manually</h3>
        <fieldset class="form-group">
          <label for="recordHours">Hours</label>
          <input type="number" class="form-control" id="recordHours" placeholder="Enter number of hours" value="0">
        </fieldset>
        <fieldset class="form-group">
          <label for="recordMinutes">Minutes</label>
          <input type="number" class="form-control" id="recordMinutes" placeholder="Enter number of minutes" value="0">
        </fieldset>
        <fieldset class="form-group">
          <label for="recordSeconds">Seconds</label>
          <input type="number" class="form-control" id="recordSeconds" placeholder="Enter number of seconds" value="0">
        </fieldset>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <hr>

      <!-- FOOTER -->
      <footer>
        <p class="pull-xs-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Edwards Aquifer Authority &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="#">Contact</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/recorder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
