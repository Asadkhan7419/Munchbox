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
                            <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <h4 class="text-light-black fw-600">Profile</h4>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-6">
                                        <label class="form-label" for="customFile">Profile Picture</label><br>
                                        <img style="height:100px" src="{{asset('/user_images/'.auth()->user()->image)}}" class="rounded mx-auto d-block" alt="userimg"><br>
                                        <input type="file" class="form-control dropify" id="customFile" name="image" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="text-light-white fs-14">Name</label>
                                            <input type="text" name="firstname"
                                                class="form-control form-control-submit"
                                                placeholder='{{ Auth::user()->firstName }} {{ Auth::user()->LastName }}'>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="text-light-white fs-14">Adress</label>
                                            <input type="text" name="address"
                                                class="form-control form-control-submit"
                                                placeholder='{{ Auth::user()->address }}'>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="text-light-white fs-14">Phone no</label>
                                            <input type="text" name="phone"
                                                class="form-control form-control-submit"
                                                placeholder='{{ Auth::user()->phone }}'>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="text-light-white fs-14">Email</label>
                                                <input type="email" name="email"
                                                    class="form-control form-control-submit"
                                                    placeholder='{{ Auth::user()->email }}'>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn-second btn-submit full-width">Update
                                                    Account Details</button>
                                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
