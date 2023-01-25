<div class="container mb-lg-5 pt-5s">
    <div class="mt-lg-5 pt-5">
            <div class="container offset-md-1">
                <div class="container">
                    <div class="container-md">
                        <div class="auth-content">
                            <form action="{{route('submitProduct')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <h5>Add a New Product</h5>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Product image</label>
                                        <div class="row">
                                            <input type="file" class="form-control dropify" name="image" id="image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Product name</label>
                                        <div class="row">
                                            <input type="name" class="form-control underlined" name="name" id="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sku">SKU</label>
                                        <div class="row">
                                            <input type="sku" class="form-control underlined" name="sku" id="sku">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stock">Stock</label>
                                        <div class="row">
                                            <select name="stock" id="stock"  class="form-control underlined">
                                                <option value="In stock" >In Stock</option>
                                                <option value="Out of stock">Out of Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <div class="row">
                                            <input type="price" name="price" id="price" class="form-control underlined">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <div class="row">
                                            <select name="category" id="category"  class="form-control underlined">
                                                <option disabled selected value>Select Category</option>
                                                @foreach ($categories as $data)
                                                <option value="{{$data->C_id}}">{{$data->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Tags</label>
                                        <div class="row">
                                            <input type="tags" class="form-control underlined" name="tags" id="tags">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <div class="row">
                                            <textarea class="form-control underlined" name="description" id="description" cols="30" rows="10"></textarea>
                                        </div>
                                        <p>The description is not prominent by default; however, some themes may show it.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-block btn-primary">Save</button>
                                    </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
