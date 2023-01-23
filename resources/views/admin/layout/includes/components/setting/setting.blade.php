<div class="container mb-lg-5 pt-5s">
   <div class="mt-lg-5 , pt-5">
        <div class="container-md">
            <div class="container">
                <div class="card offset-3">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="">
                                <span class="l l1"></span>
                                <span class="l l2"></span>
                                <span class="l l3"></span>
                                <span class="l l4"></span>
                                <span class="l l5"></span>
                            </div> Settings
                        </h1>
                    </header>
                    <div class="auth-content">
                        <div>
                            <form action="{{ route('setting') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <input type="hidden" name="id" value="1">
                                <div>
                                    <h5>General</h5>
                                </div>
                                <div class="form-group">
                                    <label for="title">Logo</label>
                                    <div class="row">
                                        {{-- <img src="{{ asset('/web_logo/'.$setting->logo) ?? ''}}" alt="{{$setting->logo ?? ''}}" /><br> --}}
                                        <input type="file" class="form-control dropify" name="logo" id="logo" data-default-file= "{{ asset('/web_logo/'.$setting->logo) ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title">Site Title</label>
                                    <div class="row">
                                        <input type="title" class="form-control underlined" name="title" id="title"  placeholder="Enter site title" value="{{$setting->title ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tagline">Tagline</label>
                                    <div class="row">
                                        <input type="tagline" class="form-control underlined" name="tagline" id="tagline" placeholder="Enter site tagline" value="{{$setting->tagline ?? ''}}">
                                    </div>
                                    <p>In a few words, explain what this site is about.</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="row">
                                        <input type="email" class="form-control underlined" name="email" id="email"
                                            placeholder="Enter email address" value="{{$setting->email ?? ''}} ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone no">Phone no</label>
                                    <div class="row">
                                        <input type="phone no" class="form-control underlined" name="phone_no" id="phone no"
                                            placeholder="Enter phone no" value="{{$setting->phone_no ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <div class="row">
                                        <input type="location" class="form-control underlined" name="Location" id="Location"
                                            placeholder="Enter Location" value="{{$setting->location ?? ''}}">
                                    </div>
                                </div>
                                <div>
                                    <h5>Social media</h5>
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <div class="row">
                                        <input type="facebook" class="form-control underlined" name="facebook" id="facebook"
                                            placeholder="Enter facebook link" value="{{$setting->facebook ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tweeter">Twitter</label>
                                    <div class="row">
                                        <input type="tweeter" class="form-control underlined" name="tweeter" id="tweeter"
                                            placeholder="Enter tweeter link" value="{{$setting->tweeter ?? ''}} ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <div class="row">
                                        <input type="instagram" class="form-control underlined" name="instagram" id="instagram"
                                            placeholder="Enter instagram link" value="{{$setting->instagram ?? ''}} ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pintrest">Pinterest</label>
                                    <div class="row">
                                        <input type="pintrest" class="form-control underlined" name="pintrest" id="pintrest"
                                            placeholder="Enter pintrest link" value="{{$setting->pintrest ?? ''}} ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="youtube">Youtube</label>
                                    <div class="row">
                                        <input type="youtube" class="form-control underlined" name="youtube" id="youtube"
                                            placeholder="Enter youtube link" value="{{$setting->youtube ?? ''}}">
                                    </div>
                                </div>
                                <div>
                                    <h5>Copyright Text</h5>
                                </div>
                                <div class="form-group">
                                    <label for="copyright">CopyRight©</label>
                                    <div class="row">
                                        <input type="copyright" class="form-control underlined" name="copyright" id="copyright"
                                            placeholder="Enter copyright" value="{{$setting->copyright ?? ''}} ">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-block btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


