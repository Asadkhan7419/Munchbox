<div class="container mb-lg-5 pt-5s">
    <div class="mt-lg-5 pt-3">
            <div class="container">
                <div class="container">
                    <div class="container-md">
                        <div class="auth-content">
                            <div class="container">
                                <div style="background-color: rgb(126, 207, 5)"  class="header bg-gradient-primary pb-8 pt-5 pt-md-5">
                                    <div  class="container-fluid d-flex align-items-center">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <h1  class=" text-white">Live orders</h1><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                            {{-- new order --}}
                                <div class="container-fluid mt--7 pt-5">
                                    <div id="liveorders" class="row">
                                        <div class="col-sm-3 col-md-6 col-lg-4 col-xl-4">
                                            <div class="card">
                                                <div class="card-header mt-5">
                                                    <h5 class="h3 mb-0">New Orders</h5>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush list my--3">
                                                        <li v-for="item in neworders" class="list-group-item px-0">
                                                            <div class="row align-items-center" v-cloak>
                                                                <div :class="item.pulse"></div>
                                                                <div class="col ml--2">
                                                                    <small>  item.last_status </small><br />
                                                                    <small>  item.time </small>
                                                                    <h4 class="mb-0">
                                                                        <a href=""> item.id   item.restaurant_name </a>
                                                                    </h4>
                                                                    <small> item.client </small><br />
                                                                    <small> item.price </small><br />
                                                                </div>
                                                                <div class="col-auto">
                                                                    <a class="btn btn-sm btn-primary" :href="item.link">Details</a>
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>


                                {{-- Accepted --}}
                                        <div class="col-sm-3 col-md-6 col-lg-4 col-xl-4">
                                            <div class="card">
                                                <div class="card-header mt-5">
                                                    <h5 class="h3 mb-0">Accepted</h5>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush list my--3">
                                                        <li v-for="item in neworders" class="list-group-item px-0">
                                                            <div class="row align-items-center" v-cloak>
                                                                <div :class="item.pulse"></div>
                                                                <div class="col ml--2">
                                                                    <small>  item.last_status </small><br />
                                                                    <small>  item.time </small>
                                                                    <h4 class="mb-0">
                                                                        <a href="">item.id   item.restaurant_name </a>
                                                                    </h4>
                                                                    <small> item.client </small><br />
                                                                    <small> item.price </small><br />
                                                                </div>
                                                                <div class="col-auto">
                                                                    <a class="btn btn-sm btn-primary" :href="item.link">Details</a>
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>

                                    {{-- Done --}}
                                        <div class="col-sm-3 col-md-6 col-lg-4 col-xl-4">
                                            <div class="card">
                                                <div class="card-header mt-5">
                                                    <h5 class="h3 mb-0">Done</h5>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush list my--3">
                                                        <li v-for="item in neworders" class="list-group-item px-0">
                                                            <div class="row align-items-center" v-cloak>
                                                                <div :class="item.pulse"></div>
                                                                <div class="col ml--2">
                                                                    <small>  item.last_status </small><br />
                                                                    <small>  item.time </small>
                                                                    <h4 class="mb-0">
                                                                        <a href=""> item.id   item.restaurant_name </a>
                                                                    </h4>
                                                                    <small> item.client </small><br />
                                                                    <small> item.price </small><br />
                                                                </div>
                                                                <div class="col-auto">
                                                                    <a class="btn btn-sm btn-primary" :href="item.link">Details</a>
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>
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
