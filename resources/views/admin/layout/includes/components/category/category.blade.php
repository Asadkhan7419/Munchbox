<div class="mt-lg-5 , pt-5">
    <div class="container-md">
        <div class="container">
                <header class="auth-header">
                    <h1 class="auth-title">
                        <div class="">
                            <span class="l l1"></span>
                            <span class="l l2"></span>
                            <span class="l l3"></span>
                            <span class="l l4"></span>
                            <span class="l l5"></span>
                        </div> Category
                    </h1>
                    @if (session('status'))
                        <div class="alert alert-Success">
                            {{ session('status') }}
                    @endif
                 </header>
                    <div >
                        <div>
                            <h5 >Add a New Category</h5>
                        </div>
                        <div class="col-sm-1">
                            <a href="{{url('/admin/category/form')}}">
                               <button type="click" class="btn btn-block btn-primary">Add</button>
                            </a>
                        </div>
                            <div>
                                <div>
                                   <h3>Categories</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $data)
                                      <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td><img src="{{ asset('/web_logo/'.$data->image) ?? ''}}" alt=""></td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->slug}}</td>
                                        <td>{{$data->description}}</td>
                                        <td>
                                            <a href="{{url('/admin/category/edit/'.$data->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{url('/admin/category/'.$data->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
                                      </tr>
                                      @endforeach
                                    </tbody>

                                  </table>
                            </div>
                    </div>
                </div>
            </div>
    </div>
</div>

