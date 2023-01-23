<div class="auth">
    <div class="auth-container">
        <div class="card">
            <header class="auth-header">
                <h1 class="auth-title">
                    <div class="logo">
                        <span class="l l1"></span>
                        <span class="l l2"></span>
                        <span class="l l3"></span>
                        <span class="l l4"></span>
                        <span class="l l5"></span>
                    </div> ModularAdmin </h1>
            </header>
            <div class="auth-content">
                <p class="text-center">LOGIN TO CONTINUE</p>
                <form id="login-form" action="/admin/login" method="post">
                    @csrf
                    @if (session ('status'))
                        <div class="alert alert-danger">
                          {{session ('status')}}
                        </div>
                        @endif
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="email" class="form-control underlined" name="email" id="email" placeholder="Your email address"> </div>
                        <span class="text-danger">
                        @if($errors->has('email'))
                          <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                        </span>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password"> </div>
                            <span class="text-danger">
                        @if($errors->has('password'))
                          <div class="error">{{ $errors->first('password') }}</div>
                        @endif
                        </span>
                        <div class="form-group">
                        <label for="remember">
                            <input class="checkbox" id="remember" type="checkbox">
                            <span>Remember me</span>
                        </label>
                        <a href="{{'/admin/reset'}}" class="forgot-btn pull-right">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                    <div class="form-group">
                        <p class="text-muted text-center">Do not have an account?
                            <a href="{{'/admin/register'}}">Sign Up!</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="text-center">
            <a href="index-2.html" class="btn btn-secondary btn-sm">
                <i class="fa fa-arrow-left"></i> Back to dashboard </a>
        </div> --}}
    </div>
</div>

