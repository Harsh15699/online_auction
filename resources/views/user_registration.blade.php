@include('header')
<link rel="stylesheet" href="{{ url('/css') }}/material-design-iconic-font.min.css">
<link rel="stylesheet" href="{{ url('/css') }}/style.css">

<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" action="{{ route('user_signup') }}" id="register-form">
                  @csrf
                    <div class="form-group">
                        <label for="fname"><i class="fa fa-user" aria-hidden="true"></i></label>
                        <input type="text" name="fname" id="fname" placeholder="First Name" required/>
                    </div>
                    <div class="form-group">
                        <label for="lname"><i class="fa fa-user" aria-hidden="true"></i></label>
                        <input type="text" name="lname" id="lname" placeholder="Last Name" required/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" required/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="fa fa-solid fa-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="fa fa-regular fa-lock"></i></label>
                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{ url('/images/signup/') }}/signup-image.jpg" alt="sing up image"></figure>
                <p>Already Reistered?<a href="{{ route('user_login') }}">Login</a></p>
            </div>
        </div>
    </div>
</section>
@include('footer')
<script src="{{ url('/js') }}/jquery.min.js"></script>
<script src="{{ url('/js') }}/main.js"></script>
