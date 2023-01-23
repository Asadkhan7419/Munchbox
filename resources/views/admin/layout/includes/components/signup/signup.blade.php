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
                <p class="text-center">SIGNUP TO GET INSTANT ACCESS</p>
                <form id="signup-form" action="/admin/signup" method="post" >
                    @csrf
                    @if (session ('status'))
                        <div class="alert alert-Success">
                          {{session ('status')}}
                        </div>
                        @endif
                    <div class="form-group">
                        <label for="name">Name</label>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control underlined" name="name" id="name" placeholder="Enter name"> </div>
                    </div>
                    <span class="text-danger">
                        @if($errors->has('name'))
                          <div class="error">{{ $errors->first('name') }}</div>
                        @endif
                        </span>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address"> </div>
                        <span class="text-danger">
                            @if($errors->has('email'))
                              <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                            </span>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password"> </div>
                                <span class="text-danger">
                                    @if($errors->has('password'))
                                      <div class="error">{{ $errors->first('password') }}</div>
                                    @endif
                                    </span>
                                <div class="col-sm-6">
                                <input type="password" class="form-control underlined" name="retype_password" id="retype_password" placeholder="Re-type password"> </div>
                        </div>
                        <span class="text-danger">
                            @if($errors->has('retype_password'))
                              <div class="error">{{ $errors->first('retype_password') }}</div>
                            @endif
                            </span>
                    </div>
                    <div class="form-group">
                        <label for="agree">
                            <input class="checkbox" name="agree" id="agree" type="checkbox" required="">
                            <span>Agree the terms and
                                <a href="#">policy</a>
                            </span>
                        </label>
                    </div>
                    <span class="text-danger">
                        @if($errors->has('agree'))
                          <div class="error">{{ $errors->first('agree') }}</div>
                        @endif
                        </span>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                    </div>
                    <div class="form-group">
                        <p class="text-muted text-center">Already have an account?
                            <a href="{{url('/admin/login')}}">Login!</a>
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
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
