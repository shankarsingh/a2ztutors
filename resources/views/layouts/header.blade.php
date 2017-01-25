<div id="login-form">
<form class="form-container">
<div class="regcont">
    <div class="row">
        <div class="col-md-12">
            <a class="cross-popup" href="javascript:hide_popup('login-form');"><img src="img/cancel.png"></a>
        </div>
        <div class="col-md-12 text-center">
            <h2>Login Form</h2>
        </div>
    </div>
</div>
<div class="row">
<div class="col-md-12 text-center">
    <img class="imgy" src="img/login.png" alt="Login">
</div>

<div class="col-md-12 text-center">
  <label><b>Username or Email Id *</b></label>
</div>
<div class="col-md-12">
     <input type="text" class="input" placeholder="Enter Username" name="uname" required>
</div>
<div class="col-md-12 text-center">
    <label><b>Password *</b></label>
</div>
<div class="col-md-12">
    <input type="password" class="input" placeholder="Enter Password" name="psw" required>
</div>
<div class="col-md-12">
    <input class="botton" type="submit" value="Login"/>
</div>
<div class="col-md-12 text-center">
    <input type="checkbox" checked="checked" style="margin-top: 21px;"> Remember me
</div>
<div class="col-md-12">
    <a href="index.html"><button class="botton" type="button" class="cancelbtn">Cancel</button></a>
</div>
<div class="col-md-12">
  <span class="psw"><a href="#">Forgot password?</a></span>
</div>
</div>
</form>

</div>

<div id="signup-form">
<form class="form-container">
<div class="regcont">
  <div class="row">
      <div class="col-md-12">
        <a class="cross-popup" href="javascript:hide_popup('signup-form');"><img src="img/cancel.png"></a>
      </div>
      <div class="col-md-12 text-center">
        <h2>Registration Form</h2>
      </div>
  </div>
</div>
<div class="row">

    <div class="col-md-12 text-center">
      <img src="img/signup.png" alt="Login" class="avatar">
    </div>
</div>
<div class="row">
<div class="col-md-12 text-center">
  <label><b>Username *</b></label>
</div>
<div class="col-md-12">
     <input type="text" class="input" placeholder="Enter Username" name="uname" required>
</div>
<div class="col-md-12 text-center">
   <label><b>Email Address *</b></label>
</div>
<div class="col-md-12">
    <input type="text" class="input" placeholder="Enter Email-ID" name="uname" required>
</div>
<div class="col-md-12 text-center">
    <label><b>Password *</b></label>
</div>
<div class="col-md-12">
    <input type="password" class="input" placeholder="Enter Password" name="psw" required>
</div>
<div class="col-md-12">
    <input class="botton" type="submit" value="Register &#10148"/>
</div>
<div class="col-md-12">
  <span class="psw"><a href="login.html">Already have an account?Log in</a></span>
</div>
</div>
</form>
</div>

<div id="request-form">
<form class="form-container">
<div class="regcont">
      <div class="row">
      <div class="col-md-12">
        <a class="cross-popup" href="javascript:hide_popup('request-form');"><img src="img/cancel.png"></a>
      </div>
      <div class="col-md-12 text-center">
      <h2>Request a Tutor</h2>
      </div>
      </div>
</div>
<div class="row">
<div class="col-md-12 text-center">
    <img class="imgy" src="img/request.png" style="width: 21%;" alt="Login">
</div>

<div class="col-md-6 text-center">
    <input type="text" class="input" placeholder="Subject (Level)" name="subject" required>
</div>
<div class="col-md-6">
     <input type="text" class="input" placeholder="Postcode" name="code" required>
</div>
<div class="col-md-12 text-center">
    <textarea class="input" placeholder="Tell us more about what are you looking for"></textarea>
</div>
<div class="col-md-6 text-center">
    <input type="text" class="input" placeholder="First Name" name="fname" required>
</div>
<div class="col-md-6">
     <input type="text" class="input" placeholder="Last Name" name="lname" required>
</div>
<div class="col-md-6 text-center">
    <input type="text" class="input" placeholder="Email" name="e_mail" required>
</div>
<div class="col-md-6">
     <input type="text" class="input" placeholder="Mobile Number" name="mobile" required>
</div>
<div class="col-md-6">
     <input type="text" class="input" placeholder="Password" name="pass" required>
</div>
<div class="col-md-6">
    <button class="botton submit-botton" type="button">Submit Request</button>
</div>
<div class="col-md-12">
  <p style="float: left;">By clicking this button you're agreeing to our <span style="text-shadow: 0px 0px 2px red;">Terms & Conditions<span></p>
</div>
</div>
</form>
</div>

<div class="top-banner">
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
  <a class="navbar-brand" href="#"><img src="img/logo.svg" style="width: 170px;margin: -8px;width: 233px !important;" class="img-responsive"></a>
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
<!-- menu-->
<!-- banner-text-->
<div class="banner-text">
<h1>Find a tutor now for FREE.</h1>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="col-sm-5 search-field">
        <input class="form-control input-lg" style="font-size: 15px;background-image: url(img/search2.png);
background-repeat: no-repeat;background-position: 9px;margin: 0px;width: 100%;padding-left:40px;border-radius: 5px 0px 0px 5px;" placeholder="What do you need help with?">
    </div>
    <div class="col-sm-5 search-field ">
        <input class="form-control input-lg" style="font-size:15px;" placeholder="Postcode or location">
    </div>
    <div class="col-sm-2 search-field ">
        <a class="btn btn-danger btn-lg btn-block">
        <svg class="search-icon" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Layout---Header" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Header-4" transform="translate(-486.000000, -76.000000)" fill="currentColor">
                    <g id="Header" transform="translate(0.000000, 55.000000)">
                        <g id="Search" transform="translate(226.000000, 17.000000)">
                            <path d="M276.815533,20.8726 C276.2478,21.4392667 275.3406,21.4392667 274.801133,20.8726 L270.318733,16.3611333 C267.7374,18.0352667 264.2478,17.7518 261.9782,15.4539333 C259.3406,12.8155333 259.3406,8.61633333 261.9782,5.979 C264.6166,3.34033333 268.815533,3.34033333 271.4542,5.979 C273.694733,8.21953333 274.035533,11.7374 272.3614,14.3184667 L276.8718,18.8299333 C277.3542,19.3686 277.3542,20.3051333 276.815533,20.8726 L276.815533,20.8726 Z M269.694733,7.6518 C268.020867,5.979 265.297933,5.979 263.624067,7.6518 C261.949933,9.32593333 261.949933,12.0499333 263.624067,13.7227333 C265.297933,15.3966 268.020867,15.3966 269.694733,13.7227333 C271.368867,12.0499333 271.368867,9.32593333 269.694733,7.6518 L269.694733,7.6518 Z" id="Search-Icon"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>Search</a>
    </div>
    </div>
</div>
</div>
<!-- banner-text-->
<!-- banner-box-->
<div class="banner-box">
<p>Click here to search for an online tutor</p>
<div class="">

    <div class="col-md-100">
    <a href="#">
        <div class="box-ban">
        <img src="img/calculator.png" style="width:40px;">
            <p>Maths</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="img/abc-squares.png" style="width:40px;">
            <p>English</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="img/cell.png" style="width:40px;">
            <p>Biology</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="img/h2o.png" style="width:40px;">
            <p>Chemistry</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="img/atom.png" style="width:40px;">
            <p>Physics</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="img/open-book.png" style="width:40px;">
            <p>11+</p></a>
        </div>
    </div>
    
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="img/internet.png" style="width:40px;">
            <p>French</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="img/internet.png" style="width:40px;">
            <p>Spanish</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="img/history.png" style="width:40px;">
            <p>History</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="img/internet.png" style="width:40px;">
            <p>Geography</p></a>
        </div>
    </div>
            <div style="position: relative;">
                    <span class="cta-text hidden-sm hidden-xs">Or Browse By Subject</span>
            </div>

</div>
</div>

<!-- banner-box-->

</div>
</div>

<!-- how it work-->
<div class="work paddy">
<div class="container">
<h1>How It Works</h1>
    <div class="row">
        <div class="col-sm-4 teacher">
            <a href="#"><img src="img/search.png"></a>
            <h3>Select A Private Tutor</h3>
            <p class="space">Use our search engine to find a private tutor near you for any subject from Maths to English to the Piano. You can browse through tutors offering private, one-to-one tuition as well as online tutors.  We ensure that current students can review their tutors so this should ensure peace of mind for you when making a decision!</p>
        </div>
        <div class="col-sm-4 teacher">
            <a href="#"><img src="img/discuss.png"></a>
            <h3>Discuss Your Needs And Arrange A First Lesson</h3>
            <p class="space2">Our website is a safe means by which you can discuss what you  need from your tutor. Message the tutor stating what you need help with ‘e.g. Hi I need support for my daughter who is in year 11 with her English’.
            The tutor will then respond and once you have arranged a first lesson you are ready to go!</p>
        </div>
        <div class="col-sm-4 teacher">
            <a href="#"><img src="img/learn.png"></a>
            <h3>Start Learning</h3>
            <p class="space">Once you are ready to hire your tutor, click ‘book now’. Once the tutor accepts you are set to go!
            If you need any support from us after this, please get in touch.</p>
        </div>
    </div>
</div>
</div>
<!-- how it work-->
<!-- City-->
<div class="city paddy">
<div class="container">
    <h1>Browse By Major City</h1>
    
    <div class="row">
        <div class="col-sm-3">
                <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="img/manchester.jpg">
                    <div class="img-abslt">
                        <h2>MANCHESTER</h2>
                        <h3>Tutors available</h3>
                    </div></a>
                </div>
                
               
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="img/london.jpg">
                <div class="img-abslt">
                    <h2>LONDON</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="img/birmingham.jpg">
                <div class="img-abslt">
                    <h2>BIRMINGHAM</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="img/bristol.jpg">
                <div class="img-abslt">
                    <h2>BRISTOL</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="img/edinburgh.jpg">
                <div class="img-abslt">
                    <h2>EDINBURGH</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="img/glasgow.jpg">
                <div class="img-abslt">
                    <h2>GLASGOW</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="img/leeds.jpg">
                <div class="img-abslt">
                    <h2>LEEDS</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="img/sheffield.jpg">
                <div class="img-abslt">
                    <h2>SHEFFIELD</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        

        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="img/liverpool.jpg">
                <div class="img-abslt">
                    <h2>LIVERPOOL</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="img/bradford.jpg">
                <div class="img-abslt">
                    <h2>BRADFORD</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- City-->

<!-- 100per-->
<div class="p100per paddy">
<div class="container">
    <img src="img/100per.png">
    <h1>100% Satisfaction Guarantee</h1>
    <p>We have done everything we can to ensure a smooth experience for parents and students. If for any reason you are not satisfied with your tutor simply use our easy search form to get another set of details for free. Your happiness is essential to us. </p>
</div>
</div>
<!-- 100per-->
<div class="container">
<div class="row">
    <div class="col-md-6">  
    <div class="mybox">
        <h2 style="color:black;text-align: center;">Become A Tutor:</h2>
        <ul>
            <li>Sign up, create a profile and be advertised for free.</li>
            <li>Students get your details for free which makes them a lot more likely to hire you.</li>
            <li>No interference from us. We want you to focus on teaching.</li>
            
        </ul>
    </div>
    </div>
    <div class="col-md-6">
    <div class="mybox ">
        <h2 style="color:black;text-align: center;">Become A Student:</h2>
        <ul>
            <li>Find, contact and hire tutors for FREE.</li>
            <li>Full support. Contact us anytime for help.</li>
            <li>100% satisfaction guarantee.</li>
    
        </ul>
    </div>
    </div>
</div>
</div>
<!--Popular-->
<div class="paddy">
<div class="container">
    <h1 style="font-size: 36px; font-weight: 800;text-align: center;">Popular Searches</h1>
    <div class="row">
        <div class="col-md-4">
        <div class="black">
            <ul>
                <li><a href="">Maths Tutors London</a></li>
                <li><a href="">Maths Tutors Manchester</a></li>
                <li><a href="">Maths Tutors Birmingham</a></li>
                <li><a href="">Maths Tutors Leeds</a></li>
                <li><a href="">Maths Tutors Bristol</a></li>
                <li><a href="">Maths Tutors Sheffield</a></li>
                <li><a href="">Maths Tutors Edinburgh</a></li>
                <li><a href="">Maths Tutors Glasgow</a></li>
           </ul>
        </div>
        </div>
        <div class="col-md-4">
        <div class="black">
            <ul>
                <li><a href="">English Tutors London</a></li>
                <li><a href="">English Tutors Manchester</a></li>
                <li><a href="">English Tutors Birmingham</a></li>
                <li><a href="">English Tutors Leeds</a></li>
                <li><a href="">English Tutors Bristol</a></li>
                <li><a href="">English Tutors Sheffield</a></li>
                <li><a href="">English Tutors Edinburgh</a></li>
                <li><a href="">English Tutors Glasgow</a></li>
            </ul>
        </div>
        </div>
        <div class="col-md-4">
        <div class="black">
            <ul>
                <li><a href="">Chemistry Tutors London</a></li>
                <li><a href="">Chemistry Tutors Manchester</a></li>
                <li><a href="">Chemistry Tutors Birmingham</a></li>
                <li><a href="">Chemistry Tutors Leeds</a></li>
                <li><a href="">Chemistry Tutors Bristol</a></li>
                <li><a href="">Chemistry Tutors Sheffield</a></li>
                <li><a href="">Chemistry Tutors Edinburgh</a></li>
                <li><a href="">Chemistry Tutors Glasgow</a></li>
            </ul>
        </div>
        </div>
    </div>
</div>
</div>
<!--Popular-->
<!--testimonial-->
<div class="testimonial paddy">
<div class="container">
    <h1>Here Are Some Amazing Reviews of Our Tutors</h1>
    
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
              <!-- Carousel indicators -->
              <ol class="carousel-indicators">
                <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
              </ol>
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                    </blockquote>   
                </div>
                <div class="item">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                    </blockquote>
                </div>
                <div class=" item">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                    </blockquote>
                </div>
              </div>
            </div>
        </div>                          
    </div>
</div>
</div>