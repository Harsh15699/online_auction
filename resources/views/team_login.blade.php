@include('header')
<link rel="stylesheet" href="{{ url('/css') }}/material-design-iconic-font.min.css">
<link rel="stylesheet" href="{{ url('/css') }}/style.css">

<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{ url('/images/signup/') }}/signin-image.jpg" alt="sing up image"></figure>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form method="POST" class="register-form" action="{{ route('team_signin') }}" id="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="username"><i class="fa fa-user" aria-hidden="true"></i></label>
                        <input type="text" name="username" id="username" placeholder="Username" required/>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fa fa-solid fa-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" required/>
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
