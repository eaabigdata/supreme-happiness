<!-- NAVBAR -->
    <nav class="navbar navbar-static-top navbar-light ">
       <a class="navbar-brand" href="{{action('HomeController@showWelcome')}}">
       <img alt="Brand" src="/img/eaa-logo-20.png">
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{action('HomeController@showWelcome')}}">Home <span class="sr-only">(current)</span></a>
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
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->