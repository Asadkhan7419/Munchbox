<div class="mt-lg-5 , pt-5">
    <div class="container-md">
        <div class="container offset-md-2">
                <header class="auth-header">
                    <h1 class="auth-title">
                        <div class="">
                            <span class="l l1"></span>
                            <span class="l l2"></span>
                            <span class="l l3"></span>
                            <span class="l l4"></span>
                            <span class="l l5"></span>
                        </div> Product
                    </h1>
                    @if (session('status'))
                        <div class="alert alert-Success">
                            {{ session('status') }}
                    @endif
                 </header>
                    <div >
                        <div>
                            <h5 >Add a New Product</h5>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{url('/admin/product/add')}}">
                               <button type="click" class="btn btn-block btn-primary">Add new</button>
                            </a>
                        </div>
                            <div>
                                <div>
                                   <h3>Products</h3>
                                </div>
                                 <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">SKU</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Tags</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                   <tbody>
                                        @foreach($products as $data)
                                      <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td><img src="{{ asset('/menu/'.$data->image) ?? ''}}" alt="" width="75px" height="75px"></td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->sku}}</td>
                                        <td>{{$data->stock}}</td>
                                        <td>{{$data->price}}</td>
                                        <td>{{$data->category->name}}</td>
                                        <td>{{$data->tags}}</td>
                                        <td>{{$data->updated_at}}</td>
                                        <td>
                                            <a href="{{url('/admin/product/edit/'.$data->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{url('/admin/product/'.$data->id)}}" class="btn btn-danger">Delete</a>
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

