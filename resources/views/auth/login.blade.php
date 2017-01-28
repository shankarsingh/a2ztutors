<div id="login-form">
<form class="form-container" role="form" method="POST" action="{{ url('/login') }}">
     {{ csrf_field() }}
<div class="regcont">
    <div class="row">
        <div class="col-md-12">
            <a class="cross-popup" href="javascript:hide_popup('login-form');"><img src="{{ URL::asset('public/img/cancel.png') }}"></a>
        </div>
        <div class="col-md-12 text-center">
            <h2>Login</h2>
        </div>
    </div>
</div>
<div class="row">
<div class="col-md-12 text-center">
    <img class="imgy" src="{{ URL::asset('public/img/login.png') }}" alt="Login">
</div>

<div class="col-md-12 {{ $errors->has('email') ? ' has-error' : '' }}">
  <label><b>Email</b></label>
</div>
<div class="col-md-12">
    <input type="text" id="email" class="input" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>
    @if ($errors->has('email'))
        <span class="help-block" style="color:red">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<div class="col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
    <label><b>Password </b></label>
</div>
<div class="col-md-12">
    <input type="password" id="password" class="input" placeholder="Enter Password" name="password" required>
    @if ($errors->has('password'))
        <span class="help-block" style="color:red">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>
<div class="col-md-12">
    <input type="checkbox" ame="remember" {{ old('remember') ? 'checked' : ''}} > Remember me
</div>
<div class="col-md-12">
    <input class="botton" type="submit" value="Login"/>
</div>

<div class="col-md-12">
  <span class="psw"><a href="{{ url('/password/reset') }}">Forgot Your Password?</a></span>
</div>
</div>
</form>

</div>