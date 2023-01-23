<div class="container mb-lg-5 pt-5s">
    <div class="mt-lg-5 pt-3">
        <div class="container">
            <div class="container">
                <div class="container-md">
                    <div class="auth-content">
                        <div class="container ">
                            <div style="background-color: rgb(126, 207, 5)"
                                class="header bg-gradient-primary pb-8 pt-5 pt-md-5">
                                <div class="container-fluid d-flex align-items-center">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <h1 class=" text-white">Menu</h1><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt--7">
                                <div class="row">
                                    <div class="col-xl-12 order-xl-1 offset-md-1">
                                        <div class="card bg-secondary shadow">
                                            <div class="card-header bg-white border-0">
                                                <div class="row align-items-center">
                                                    <div class="col-12 mt-5">
                                                        <div class="row">
                                                            <div class="col mt-5 ">
                                                                <h3 class="mb-0">Restaurant Menu Management </h3>
                                                            </div>
                                                            <br />
                                                            <div class="col-12">
                                                            </div>
                                                            <div class="card-body">

                                                                <div class="alert alert-default">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <span class="h6 font-weight-bold mb-0 text-black">

                                                                               <form action="{{url('/admin/menu/')}}" method="get"  enctype="multipart/form-data">     {{--  {{Route('show')}} --}}

                                                                                    <label for="category">Select
                                                                                        <select name="category" id="category" class="form-group">
                                                                                            @foreach ($products as $data )
                                                                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                            <button type="click" class="btn btn-block btn-primary">Search</button>
                                                                                    </label>
                                                                                </form>
                                                                             </span>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <div class="row">
                                                                                <script>
                                                                                    function setSelectedCategoryId(id) {
                                                                                        $('#category_id').val(id);
                                                                                    }

                                                                                    function setRestaurantId(id) {
                                                                                        $('#res_id').val(id);
                                                                                    }
                                                                                </script>
                                                                                <button
                                                                                    class="btn btn-icon btn-1 btn-sm btn-primary"
                                                                                    type="button" data-toggle="modal"
                                                                                    data-target="#modal-new-item"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="Add item in Salads"
                                                                                    onClick=(setSelectedCategoryId(1))>
                                                                                    <span class="btn-inner--icon"><i
                                                                                            class="fa fa-plus"></i></span>
                                                                                </button>
                                                                                <button
                                                                                    class="btn btn-icon btn-1 btn-sm btn-warning"
                                                                                    type="button" id="edit"
                                                                                    data-toggle="modal"
                                                                                    data-target="#modal-edit-category"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="Edit category Salads"
                                                                                    data-id="1" data-name="Salads">
                                                                                    <span class="btn-inner--icon"><i
                                                                                            class="fa fa-edit"></i></span>
                                                                                </button>



                                                                                <form
                                                                                    action="https://foodtiger.site/categories/1"
                                                                                    method="post">
                                                                                    <input type="hidden" name="_token"
                                                                                        value="pOcGjpyZg91dM6Hq56Mee3n3IfresW89LmVKAFbk">
                                                                                    <input type="hidden" name="_method"
                                                                                        value="delete"> <button
                                                                                        class="btn btn-icon btn-1 btn-sm btn-danger"
                                                                                        type="button"
                                                                                        onclick="confirm('Are you sure you want to delete this category?') ? this.parentElement.submit() : ''"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="Delete Salads">
                                                                                        <span class="btn-inner--icon"><i
                                                                                                class="fa fa-trash"></i></span>
                                                                                    </button>
                                                                                </form>

                                                                                <div
                                                                                    style="margin-left: 10px; margin-right: 10px">
                                                                                    |</div>

                                                                                <!-- UP -->


                                                                                <!-- DOWN -->
                                                                                <a href="https://foodtiger.site/items/reorder/2"
                                                                                    class="btn btn-icon btn-1 btn-sm btn-success">
                                                                                    <span class="btn-inner--icon"><i
                                                                                            class="fas fa-arrow-down"></i></span>
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div>
                                                                     <table class="table">
                                                                        <thead>
                                                                          <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Image</th>
                                                                            <th scope="col">Name</th>
                                                                            <th scope="col">Stock</th>
                                                                            <th scope="col">Price</th>
                                                                            <th scope="col">Category</th>
                                                                          </tr>
                                                                        </thead>
                                                                       <tbody>
                                                                            @foreach($products as $data)
                                                                           {{-- @php
                                                                               dd($data);
                                                                           @endphp --}}
                                                                          <tr>
                                                                            <th scope="row">{{$loop->iteration}}</th>
                                                                            <td><img src="{{ asset('/web_logo/'.$data->image) ?? ''}}" alt=""></td>
                                                                            <td>{{$data->name}}</td>
                                                                            <td>{{$data->stock}}</td>
                                                                            <td>{{$data->price}}</td>
                                                                            <td>{{$data->category_name}}</td>
                                                                          </tr>
                                                                          @endforeach
                                                                        </tbody>

                                                                      </table>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />

                                                {{-- end --}}
                                            </div>





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
