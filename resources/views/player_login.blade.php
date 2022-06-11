@include('header')
<link rel="stylesheet" href="{{ url('/css') }}/material-design-iconic-font.min.css">
<link rel="stylesheet" href="{{ url('/css') }}/style.css">

<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{ url('/images/signup/') }}/signin-image.jpg" alt="sing up image"></figure>
                <a href="#" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="your_name"><i class="fa fa-user" aria-hidden="true"></i></label>
                        <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="fa fa-solid fa-lock"></i></label>
                        <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('footer')
<script src="{{ url('/js') }}/jquery.min.js"></script>
<script src="{{ url('/js') }}/main.js"></script>