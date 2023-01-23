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
                <p class="text-center">PASSWORD RECOVER</p>
                <p class="text-muted text-center">
                    <small>Enter your email address to recover your password.</small>
                </p>
                <form id="reset-form" action="/admin/reset" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="email1">Email</label>
                        <input type="email" class="form-control underlined" name="email" id="email" placeholder="Your email address" required> </div>
                        <span class="text-danger">
                            @if($errors->has('email'))
                              <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                            </span>
                        <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Reset</button>
                    </div>
                    <div class="form-group clearfix">
                        <a class="pull-left" href="{{url('/admin/login')}}">return to Login</a>
                        <a class="pull-right" href="{{url('/admin/signup')}}">Sign Up!</a>
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

