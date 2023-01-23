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
                                    <div class="col">
                                        <div class="card shadow">
                                            <div class="card-header border-0">
                                                <div class="row align-items-center">
                                                    <div class="col-8 mt-5 pt-5">
                                                        <h3 class="mb-0">New staff</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                            </div>

                                            <div class="card-body mt-5">
                                                <form action="{{route('submit')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div id="form-group-name" class="form-group   col-md-4 ">
                                                            <label class="form-control-label" for="name">Name</label>
                                                            <input step=".01" type="text" name="name" id="name"
                                                                class="form-control form-control   " placeholder="First and Last name"
                                                                value="" required>
                                                        </div>
                                                        <div id="form-group-email" class="form-group   col-md-4 ">
                                                            <label class="form-control-label" for="email">Email</label>
                                                            <input step=".01" type="text" name="email" id="email"
                                                                class="form-control form-control   " placeholder="Enter email" value=""
                                                                required>
                                                        </div>
                                                        <div id="form-group-password" class="form-group   col-md-4 ">
                                                            <label class="form-control-label" for="password">Password</label>
                                                            <input step=".01" type="password" name="password" id="password"
                                                                class="form-control form-control   " placeholder="Enter password" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Insert</button>

                                                        <a href="/admin/staff" class="btn btn-primary">Back</a>

                                                </form>
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
            </div>
        </div>
    </div>


{{-- new --}}

