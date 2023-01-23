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
                                            <h1 class=" text-white">Staff</h1><br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid mt--7">
                                <div class="row">
                                    <div class="col mt-5">
                                        <div class="card shadow mt-5">
                                            <div class="card-header border-0">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <h3 class="mb-0">Staff management</h3>
                                                    </div>

                                                    <div class="col-4 text-right">
                                                        <a href="{{url('/admin/staff/add')}}"
                                                            class="btn btn-sm btn-primary">Add new staff</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table align-items-center table-flush">
                                                    <thead class="thead-light">
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Actions</th>


                                                    </thead>
                                                    <tbody>
                                                        @foreach ($staff as $data)
                                                        <tr>
                                                            <td>{{$data->name}}</td>
                                                            <td>{{$data->email}}</td>
                                                            <td>
                                                                <a href="{{('/admin/staff/edit/'.$data->id)}}"
                                                                    class="btn btn-primary btn-sm">Edit</a>
                                                                <a href="{{('/admin/staff/'.$data->id)}}"
                                                                    class="btn btn-danger btn-sm">Delete</a>
                                                                <a href="https://foodtiger.site/staff/loginas/3"
                                                                    class="btn btn-success btn-sm">Login as</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer py-4">
                                                <nav class="d-flex justify-content-end" aria-label="...">

                                                </nav>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
