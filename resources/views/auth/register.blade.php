<div id="signup-form">
<form class="form-container" role="form" method="POST" action="{{ url('/register') }}">
 {{ csrf_field() }}
<div class="regcont">
  <div class="row">
      <div class="col-md-12">
        <a class="cross-popup" href="javascript:hide_popup('signup-form');"><img src="{{ URL::asset('public/img/cancel.png') }}"></a>
      </div>
      <div class="col-md-12 text-center">
        <h2>Want to become a Tutor?</h2>
      </div>
  </div>
</div>
<div class="row">

    <div class="col-md-12 text-center">
      <img src="{{ URL::asset('public/img/signup.png') }}" alt="Login" class="avatar">
    </div>
</div>
<div class="row">
<div class="col-md-12 {{ $errors->has('name') ? ' has-error' : '' }}">
  <label><b>Username <span style="color:red">*<span></b></label>
</div>
<div class="col-md-12">
    <input type="text" class="input" id="name" value="{{ old('name') }}" placeholder="Username" name="name" required autofocus>
    @if ($errors->has('name'))
        <span class="help-block" style="color:red">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="col-md-12 {{ $errors->has('email') ? ' has-error' : '' }}">
   <label><b>Email <span style="color:red">*<span></b></label>
</div>
<div class="col-md-12">
    <input type="text" id="email" class="input" placeholder="Email" name="email" value="{{ old('email') }}" required>
    @if ($errors->has('email'))
        <span class="help-block" style="color:red">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>
<div class="col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
    <label><b>Password <span style="color:red">*<span></b></label>
</div>
<div class="col-md-12">
    <input type="password" id="password" class="input" placeholder="Password" name="password" required>
    @if ($errors->has('password'))
        <span class="help-block" style="color:red">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>

<div class="col-md-12">
    <label><b>Confirm Password <span style="color:red">*<span></b></label>

    </div>
<div class="col-md-12">
        <input id="password-confirm" class="input" placeholder="Confirm Password" type="password" name="password_confirmation" required>
</div>

<div class="col-md-12" style="display:none;">
    <input type="text" class="input" value="tutor" name="role" readonly>
</div>
<div class="col-md-12">
     <input class="botton" type="submit" value="Register &#10148"/>
</div>
<div class="col-md-12">
  <span class="psw"> <a href="#">Already have an account? Login</a></span>
</div>
</div>
</form>
</div>