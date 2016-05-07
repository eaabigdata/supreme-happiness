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
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Share your knowledge</h1>
        <p>We know you've got some great conservation tips. Use the form below to share them with the rest of the world!</p>
      </div>
    </div>
    <div class="container">
      <h2>Give us the goods!</h2>
      <form>
        <fieldset class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Give your DIY tip a name.">
        </fieldset>
        <fieldset class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3" placeholder="Describe your DIY tip in detail."></textarea>
        </fieldset>
        <fieldset class="form-group">
          <label for="inputFile">Upload a photo</label>
          <input type="file" class="form-control-file" id="inputFile">
          <small class="text-muted">Upload a photo of your DIY tip in action! (Optional)</small>
        </fieldset>
        <fieldset class="form-group">
          <label for="tags">Description</label>
          <input type="text" class="form-control" id="tags" placeholder="Tag your DIY tip with at least 2 relevant keywords.">
        </fieldset>
        <!-- CODE FOR TAG INPUTS BELOW-->
        <!-- https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/ -->
        <button type="submit" class="btn btn-default">Submit</button>
      </form>


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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
