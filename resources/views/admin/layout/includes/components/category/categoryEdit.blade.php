<div class="container mb-lg-5 pt-5s">
    <div class="mt-lg-5 pt-5">
            <div class="container">
                <div class="container">
                    <div class="container-md">
                        <div class="auth-content">
                            <form action="{{url('/admin/category/edit/'.$categories->C_id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div>
                                        <h5>Add a New Category</h5>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Category image</label>
                                        <div class="row">
                                            {{-- <img src="{{ asset('/web_logo/'.$setting->logo) ?? ''}}" alt="{{$setting->logo ?? ''}}" /><br> --}}
                                            <input type="file" class="form-control dropify" name="image" id="image" data-default-file= "{{ asset('/cuisine/'.$categories->image) ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <div class="row">
                                            <input type="name" class="form-control underlined" name="name" id="name" value="{{$categories->name}}">
                                        </div>
                                        <p>The name is how it appears on your site.</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <div class="row">
                                            <input type="slug" class="form-control underlined" name="slug" id="slug" value="{{$categories->slug}}">
                                        </div>
                                        <p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and
                                            contains only letters, numbers, and hyphens.</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <div class="row">
                                            <textarea class="form-control underlined" name="description" id="description" cols="30" rows="10" >{{$categories->description}}</textarea>
                                        </div>
                                        <p>The description is not prominent by default; however, some themes may show it.</p>
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
