@extends('layouts.master')

@section('top-script')

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
          <img class="first-slide" src="/img/aquifer.jpg">
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
              <div class="col-md-6">
                <h2 class="featurette-heading">One of the world's most impressive natural resources.</h2>
                <p class="lead">The Edwards aquifer is an artesian aquifer located in south-central Texas. Its contributing and recharge zones reach from Bracketville to the outskirts of Austin, covering an area of 6,650 mi², and each year it discharges nearly 200 billions gallons of water to thirsty Texas livestock, crops and residents!</p>
              </div>
              <div class="col-md-6">
                <img class="featurette-image img-fluid center-block" src="/img/aquifermap.jpg" alt="Generic placeholder image">
              </div>
            </div>
          <hr class="featurette-divider">
            <div class="row featurette">
              <div class="col-md-6 col-md-push-6">
                <h2 class="featurette-heading">Home to wildlife found nowhere else on earth.</h2>
                <p class="lead">The Texas Blind Salamanderm may be the most famous aquifer resident, but they're not the only critters you'll find inside! Others include the San Marcos Salamander, Peck's Cave Amphipod, Comal Springs Riffle Beetle, Comal Spring Dryopid Beetle, Fountain Darter and San marcos Gamusia! </p>
              </div>
              <div class="col-md-6 col-md-pull-6">
                <img class="featurette-image img-fluid center-block" src="/img/narrowsalamander.jpg" alt="Generic placeholder image">
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="carousel-item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption text-xs-left">
              <h1>Join the conservation cause!</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
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
          <img class="img-circle" src="/img/microscope-icon.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Observe</h2>
          <p>Our growing community of Edwards Aquifer Citizen Scientists plays a crucial role in enhancing our knowledge of the aquifer. Get started now by sharing photos, reporting water levels, and monitoring aquifer trends!</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/img/droplet.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Conserve</h2>
          <p>Drought or no drought, conservation is crucial to the health of the aquifer. Monitor your water use, see your impact on water supply, and learn how to be a water saving-guru with our Supreme Happiness app!</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/img/diy.png" alt="Generic placeholder image" width="140" height="140">
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
@stop

@section('bottom-script')

@stop