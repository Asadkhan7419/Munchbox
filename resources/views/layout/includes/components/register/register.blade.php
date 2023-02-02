<div class="inner-wrapper">
    <div class="container-fluid no-padding">
      <div class="row no-gutters overflow-auto">
        <div class="col-md-6">
          <div class="main-banner">
            <img src="assets/img/banner/banner-1.jpg" class="img-fluid full-width main-img" alt="banner">
            <div class="overlay-2 main-padding">
              <img src="assets/img/logo-2.jpg" class="img-fluid" alt="logo">
            </div>
            <img src="assets/img/banner/burger.png" class="footer-img" alt="footer-img">
          </div>
        </div>
        <div class="col-md-6">
          <div class="section-2 user-page main-padding">
            <div class="login-sec">
              <div class="login-box">
                <div></div>
              <form action="/register" method="post">
                        @csrf
                        @if (session ('status'))
                        <div class="alert alert-success">
                          {{session ('status')}}
                        </div>
                        @endif
                  <h4 class="text-light-black fw-600">Create your account</h4>
                    <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-6">
                      <div class="form-group">
                        <label class="text-light-white fs-14">First name</label>
                        <input type="text" name="firstname" class="form-control form-control-submit" placeholder="First Name">
                        <span class="text-danger">
                        @if($errors->has('firstname'))
                          <div class="error">{{ $errors->first('firstname') }}</div>
                        @endif
                        </span>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6">
                      <div class="form-group">
                        <label class="text-light-white fs-14">Last name</label>
                        <input type="text" name="lastname" class="form-control form-control-submit" placeholder="Last Name" >
                        <span class="text-danger">
                        @if($errors->has('lastname'))
                          <div class="error">{{ $errors->first('lastname') }}</div>
                        @endif
                        </span>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <label class="text-light-white fs-14">Email</label>
                        <input type="email" name="email" class="form-control form-control-submit" placeholder="Email I'd" >
                        <span class="text-danger">
                        @if($errors->has('email'))
                          <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                        </span>
                      </div>
                      <div class="form-group">
                        <label class="text-light-white fs-14">Password (8 character minimum)</label>
                        <input type="password" id="password-field" name="password" class="form-control form-control-submit" value="password" placeholder="Password" >
                        <span class="text-danger">
                        @if($errors->has('password'))
                          <div class="error">{{ $errors->first('password') }}</div>
                        @endif
                        </span>
                        <div data-name="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></div>
                      </div>
                      <div class="form-group checkbox-reset">
                        <label class="custom-checkbox mb-0">
                          <input type="checkbox" name="#"> <span class="checkmark"></span> Keep me signed in</label>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn-second btn-submit full-width">Create your account</button>
                      </div>
                      <div class="form-group text-center"> <span>or</span>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn-second btn-facebook full-width">
                          <img src="assets/img/facebook-logo.svg" alt="btn logo">Continue with Facebook</button>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn-second btn-google full-width">
                          <img src="assets/img/google-logo.png" alt="btn logo">Continue with Google</button>
                      </div>
                      <div class="form-group text-center">
                        <p class="text-light-black mb-0">Have an account? <a href="/login">Sign in</a>
                        </p>
                      </div> <span class="text-light-black fs-12 terms">By creating your Munchbox account, you agree to the <a href="#"> Terms of Use </a> and <a href="#"> Privacy Policy.</a></span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
