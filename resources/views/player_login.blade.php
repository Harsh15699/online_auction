@include('header')
<link rel="stylesheet" href="{{ url('/css') }}/material-design-iconic-font.min.css">
<link rel="stylesheet" href="{{ url('/css') }}/style.css">

<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{ url('/images/signup/') }}/signin-image.jpg" alt="sing up image"></figure>
                <h5>Not Registered Yet?<a href="{{ route('player_registration') }}">Register</a> </h5>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form method="POST" class="register-form" id="login-form" action="{{ route('player_signin') }}" >
                    @csrf
                    <div class="form-group">
                        <label for="uname"><i class="fa fa-user" aria-hidden="true"></i></label>
                        <input type="text" name="uname" id="uname" placeholder="Username" required/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="fa fa-solid fa-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password" required/>
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
