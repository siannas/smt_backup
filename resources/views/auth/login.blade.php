<!DOCTYPE html>
<html lang="en"  >
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>SMT</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
	<link href="{{asset('public/assets/plugins/animate/animate.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	
    <!-- BEGIN THEME STYLES -->
	<link href="{{asset('public/assets/demos/default/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('public/assets/demos/default/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="{{asset('public/assets/demos/default/css/themes/default.css')}}" rel="stylesheet" id="style_theme" type="text/css"/>
	<link href="{{asset('public/assets/demos/default/css/custom.css')}}" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->

	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed">

	<!-- BEGIN: PAGE CONTAINER -->
		<!-- BEGIN: PAGE CONTENT -->
    <div class="c-content-box c-size-md" style="background-image: url('https://bootstrapmade.com/demo/templates/Medilab/assets/img/hero-bg.jpg'); background-size: cover; min-height: 100vh; height: auto;">
      <div class="container">
        <div class="c-content-panel" style="max-width:500px; margin:auto; background-color:white;">
          <div class="c-body" style="max-width:600px; margin:auto;">
            <div class="c-content-title-1 c-title-md c-margin-b-20 clearfix">
              <h3 class="c-center c-font-uppercase c-font-bold">Login</h3>
              <div class="c-line-center c-theme-bg"></div>
            </div>
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputEmail3" class="col-md-4 control-label" autofocus>Email</label>
                <div class="col-md-6">
                  <input type="email" class="form-control  c-square c-theme" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                  <input type="password" class="form-control  c-square c-theme" id="inputPassword3" placeholder="Password">
                </div>
              </div>
              
              <div class="form-group c-margin-t-40 text-center">
                  <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Login</button> 
              </div>
            </form>
			<div class="text-center" style="margin-top:50px;">
                <span class="c-text-account">Belum Punya Akun ?</span>
                <a href="{{url('/register')}}" class="">Daftar</a>
            </div>                
          </div>
        </div>
      </div>
	<div class="c-postfooter" style="bottom:0; margin:2rem; position:absolute;">
		<div class="container">
			<p class="c-copyright c-font-grey-3">2021 &copy; SMT
				<span class="c-font-grey-3">All Rights Reserved.</span>
			</p>
		</div>
	</div>
    </div>
	
	<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
	<script src="{{asset('public/assets/plugins/jquery.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('public/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript" ></script>
	<!-- END: CORE PLUGINS -->

	<!-- BEGIN: LAYOUT PLUGINS -->
	<script src="{{asset('public/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
	<script src="{{asset('public/assets/plugins/js-cookie/js.cookie.js')}}" type="text/javascript"></script>
	<!-- END: LAYOUT PLUGINS -->
	
	<!-- BEGIN: THEME SCRIPTS -->
	<script src="{{asset('public/assets/base/js/components.js')}}" type="text/javascript"></script>
	<script src="{{asset('public/assets/base/js/components-shop.js')}}" type="text/javascript"></script>
	<script src="{{asset('public/assets/base/js/app.js')}}" type="text/javascript"></script>
	<script>
	$(document).ready(function() {    
		App.init(); // init core    
	});
	</script>
	<!-- END: THEME SCRIPTS -->

	<!-- BEGIN: PAGE SCRIPTS -->
	<script src="{{asset('public/assets/plugins/moment.min.js')}}" type="text/javascript"></script>
	<!-- END: PAGE SCRIPTS -->
	<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>
