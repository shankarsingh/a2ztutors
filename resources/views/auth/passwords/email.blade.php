<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>A2Z Tutors</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
<!--script src="js/less-1.3.3.min.js"></script-->
<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
<link href="{{ URL::asset('public/css/bootstrap.min.css') }}?version=1-1" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/css/style.css') }}?version=1-1" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/css/font-awesome.min.css') }}?version=1-1" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{ URL::asset('public/js/jquery.min.js') }}?version=1-1"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/bootstrap.min.js') }}?version=1-1"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/scripts.js') }}?version=1-1"></script>

</head>
<body>
<div class="top-banner-profile">
<div class="container">
<!-- menu-->
<nav class="navbar navbar-default">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="{{ URL::asset('public/img/logo.svg') }}" style="width: 170px;margin: -8px;width: 233px !important;" class="img-responsive"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    <li><a><button onClick="show_popup('request-form')">Request a tutor</button></a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
  <li><a><button onClick="show_popup('login-form')">TUTOR LOG IN</button></a></li>
    <li class="signup-btn"><a><button onClick="show_popup('signup-form')">BECOME A TUTOR </button></a></li>
    
  </ul>
</div><!-- /.navbar-collapse -->
</nav>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
