<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="EXILEDNONAME">
  <meta name="description" content="EXILEDNONAME">
  <meta name="keywords" content="EXILEDNONAME">
  <title> {{ env('APP_NAME')}} </title>
  <link rel="stylesheet" type="text/css" href="/assets/frontend/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="/assets/frontend/css/animate.css">
  <link rel="stylesheet" type="text/css" href="/assets/frontend/css/star-animation.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/frontend/css/reset.css">
  <link rel="stylesheet" type="text/css" href="/assets/frontend/css/structure.css">
  <link rel="stylesheet" type="text/css" href="/assets/frontend/css/main-style.css">
  <link rel="stylesheet" type="text/css" href="/assets/frontend/css/responsive.css">
</head>
<body class="single-image star-animation">
  <div class="page-loader-wrapper">
    <div class="loader"></div>
  </div>

  <div id="main-wrapper">
    <main id="main" class="background" data-image="/assets/frontend/images/background.jpg">

      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
              <!--  -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-animation">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div id='stars4'></div>
      </div>

      <div class="overlay" style="background-color: rgba(0,0,0,0.3)"></div>
      <div class="nc-content-section index nc-active vhm">
        <div id="home-page" class="page-wrapper vhm-item active-home anim s01">
          <div class="container">
            <div class="tagline ac anim fadeInUp s01 delay-0-6s">
              <h1> {{ env('APP_NAME')}} </h1>
              <p class="anim fadeInUp s01 delay-0-7s"> Our Website Is Coming Soon. We`ll be here soon with our new Imagination. </p>
              <br>
              <center><a href="radio" target="_blank"><span style="color: #ff0000; font-weight: bold"><s> LISTEN RADIO </s></span></a></center>
            </div>

            <hr><center><a href="login"><p style="color: #fff"><s> LOGIN </s></p></a></center><hr>

          <div class="copyrights ac anim fadeInUp s01 delay-15s">

          <br>
          @2021 - {{ env('APP_NAME')}}
        </div>
        </div>
      </div>
    </div>

  </main>
</div>

<script src="/assets/frontend/js/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="/assets/frontend/js/plugins.js"></script>
<script src="/assets/frontend/js/common.js"></script>

</body>
</html>
