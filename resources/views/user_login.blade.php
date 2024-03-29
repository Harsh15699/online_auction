@include('header')
<link rel="stylesheet" href="{{ url('/css') }}/material-design-iconic-font.min.css">
<link rel="stylesheet" href="{{ url('/css') }}/style.css">

<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{ url('/images/signup/') }}/signin-image.jpg" alt="sing up image"></figure>
                <a href="{{ route('user_registration') }}" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form method="POST" class="register-form" action="{{ route('user_signin') }}" id="login-form">
                  @csrf
                    <div class="form-group">
                        <label for="your_name"><i class="fa fa-user" aria-hidden="true"></i></label>
                        <input type="text" name="email" id="email" placeholder="Your Email" required/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="fa fa-solid fa-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password" required/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center fa fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer')
<script src="{{ url('/js') }}/jquery.min.js"></script>
<script src="{{ url('/js') }}/main.js"></script>
