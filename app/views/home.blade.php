@extends('layouts.master')

@section('top-script')
<style type="text/css">
  .infosection{
    background-color: rgb(65, 90, 104);
    color: #fff;
    padding: 10px;
  }

  #kandySubmit{
    background-color: #025aa5;
    border-color: #025aa5;
  }

  #messageBox{
    color: #000;
  }
</style>

@stop

@section('content')
    <!-- CAROUSEL
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide" src="./img/aquifer.jpg">
          <div class="container">
            <div class="carousel-caption text-xs-left">
              <h1>Welcome to the Edwards Aquifer!</h1>
              <p>The Edwards Acquifer - an artesian aquifer in the heart of Texas - provides water to more than two million Texas residents. Let's learn more about the aquifer, its history, and what makes it so special!</p>
              <button type="button" class="btn btn-lg btn-primary" id="slide-one-learn" data-toggle="modal" data-target=".slide-one-modal">Learn More</button>
            </div>
          </div>
        </div>
        <!-- Slide One Modal -->
      <div class="modal fade slide-one-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="row featurette">
              <div class="col-md-6 featurette-text featurette-left">
                <h2 class="featurette-heading">One of the world's most impressive natural resources.</h2>
                <p class="lead">The Edwards aquifer is an artesian aquifer located in south-central Texas. Its contributing and recharge zones reach from Bracketville to the outskirts of Austin, covering an area of 6,650 mi², and each year it discharges nearly 200 billion gallons of water to thirsty Texas livestock, crops and residents!</p>
              </div>
              <div class="col-md-6">
                <img class="featurette-image img-fluid center-block" src="./img/aquifermap.jpg" alt="Generic placeholder image">
              </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
              <div class="col-md-6 col-md-push-6 featurette-text featurette-right">
                <h2 class="featurette-heading">Home to wildlife found nowhere else in the world.</h2>
                <p class="lead">The Texas Blind Salamander may be the most famous aquifer resident, but they're not alone! Others include the San Marcos Salamander, Peck's Cave Amphipod, Comal Springs Riffle Beetle, Comal Spring Dryopid Beetle, Fountain Darter and San Marcos Gamusia!</p><p class="lead">Each of these animals is either threatened or endangered. Which is why we have to respect and care for our aquifer.</p>
              </div>
              <div class="col-md-6 col-md-pull-6">
                <img class="featurette-image img-fluid center-block" src="./img/narrow-salamander.jpg" alt="Generic placeholder image">
              </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
              <div class="col-md-6 featurette-text featurette-left">
                <h2 class="featurette-heading">Three different zones, three distinct jobs.</h2>
                <p class="lead">The Edwards Aquifer is divided into three zones: catchment, recharge, and artesian. Rainfall events in the catchment area cause water to drain through streams into the recharge zone. The recharge zone is composed of exposed limestone which enters into the artesian zone, where wells draw water from the aquifer.</p>
              </div>
              <div class="col-md-6">
                <img class="featurette-image img-fluid center-block" src="./img/cross-section.jpg" alt="Generic placeholder image">
              </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
              <div class="col-md-6 col-md-push-6 featurette-text featurette-right">
                <h2 class="featurette-heading">The constant battle against drought.</h2>
                <p class="lead">San Antonio enters four stages of drought management depending on aquifer levels. There are several year-round restrictions, and more are added as the level diminishes, restricting where, when, and how much water may be used. Sometimes strict regulations are unavoidable, but we should always try to prevent them!</p>
              </div>
              <div class="col-md-6 col-md-pull-6">
                <img class="featurette-image img-fluid center-block" src="./img/drought.jpg" alt="Generic placeholder image">
              </div>
            </div>
            <hr class="featurette-divider">
            <p class="lead text-center">Are you ready to start doing your part to take care of our precious aquifer?</p>
            <button type="button" id="info-modal-button" class="btn btn-lg btn-primary" data-dismiss="modal" data-target=".signup-modal">Click here to get started!</button>
          </div>
        </div>
      </div>
        <div class="carousel-item">
          <img class="second-slide" src="img/scientist.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption text-xs-left">
              <h1>Become an aquifer scientist!</h1>
              <p>You can contribute to real usable aquifer data by getting meter readings, taking photos and writing reports! Join today as a Citizen Scientist, and help us gain a better understanding of the aquifer's behavior.</p>
              <p><a class="btn btn-lg btn-primary" id="signup-button" data-toggle="modal" data-target=".signup-modal">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="img/faucet_drip.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-xs-left">
              <h1>Track your water usage habits.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="./img/microscope-icon.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Observe</h2>
          <p>Our growing community of Edwards Aquifer Citizen Scientists plays a crucial role in enhancing our knowledge of the aquifer. Get started now by sharing photos, reporting water levels, and monitoring aquifer trends!</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="./img/droplet.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Conserve</h2>
          <p>Drought or no drought, conservation is crucial to the health of the aquifer. Monitor your water use, see your impact on water supply, and learn how to be a water saving-guru with our Supreme Happiness app!</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="./img/diy.png" alt="Generic placeholder image" width="140" height="140">
          <h2>DIYerve</h2>
          <p>Got some awesome water-saving tips and tricks? Share them with the EAA community! Our DIY discussion platform let's water-savers make a difference by teaching others how to reduce water consumption.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-fluid center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
      </div><!-- /.container -->

      <!-- KANDY AND WIDGET -->
      <section class="infosection">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <iframe width="250px" height="260px" src="http://data.edwardsaquifer.org/j-17.php" scrolling="no" frameborder="0"></iframe>
            </div>
            <div class="col-md-6">
              <fieldset>
                  <legend>Ask A Scientist!</legend>

                  <!-- User input: Recipient and message text fields. -->
                  {{-- <p>Recipient: <input type="text" id="recipient"/></p> --}}

                  <p>Message: <textarea id="messageBox"> </textarea></p>

                  <!-- User input: Send button. -->
                  <input id="kandySubmit" type="button" value="Send Message" onclick="sendMessage();"/>
              </fieldset>

              <fieldset class="well">
                  <legend>Chat</legend>
                  <div id="chat-messages"> </div>
              </fieldset>

            </div>
          </div>
        </div>
      </section>
@stop

@section('bottom-script')
  <script src="https://kandy-portal.s3.amazonaws.com/public/javascript/kandy/2.5.0/kandy.min.js" ></script>
  <script type="text/javascript" src="/js/kandychat.js"></script>
<script>
$("#info-modal-button").on('click', (function () {
   $('#signup-button').trigger('click');
}));

</script>

@stop