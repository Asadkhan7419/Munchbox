<div class="container mb-lg-5 pt-5s">
    <div class="mt-lg-5 pt-5">
            <div class="container offset-md-1">
                <div class="container">
                    <div class="container-md">
                        <div class="auth-content">
                            <form action="{{('/admin/product/edit/'.$products->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div>
                                        <h5>Add a New Category</h5>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Category image</label>
                                        <div class="row">
                                            {{-- <img src="{{ asset('/web_logo/'.$setting->logo) ?? ''}}" alt="{{$setting->logo ?? ''}}" /><br> --}}
                                            <input type="file" class="form-control dropify" name="image" id="image" data-default-file= "{{ asset('/menu/'.$products->image) ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <div class="row">
                                            <input type="name" class="form-control underlined" name="name" id="name" value="{{$products->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">SKU</label>
                                        <div class="row">
                                            <input type="sku" class="form-control underlined" name="sku" id="sku" value="{{$products->sku}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stock">Stock</label>
                                        <div class="row">
                                            <input type="stock" class="form-control underlined" name="stock" id="stock" value="{{$products->stock}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <div class="row">
                                            <input type="price" class="form-control underlined" name="price" id="price" value="{{$products->price}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sale">Sale Price</label>
                                        <div class="row">
                                            <input type="sale" name="sale" id="sale" class="form-control underlined"value="{{$products->sale}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <div class="row">
                                            <select name="category" id="category"  class="form-control underlined">
                                                @foreach ($categories as $data)
                                                <option value="{{$data->C_id}}">{{$data->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Tags</label>
                                        <div class="row">
                                            <input type="tags" class="form-control underlined" name="tags" id="tags" value="{{$products->tags}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <div class="row">
                                            <textarea class="form-control underlined" name="description" id="description" cols="30" rows="10" >{{$products->description}}</textarea>
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
