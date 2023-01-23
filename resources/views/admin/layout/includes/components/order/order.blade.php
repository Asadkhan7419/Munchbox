<div class="container mb-lg-5 pt-5s">
    <div class="mt-lg-5 pt-3">
        <div class="container">
            <div class="container">
                <div class="container-md">
                    <div class="auth-content">
                        <div class="container">
                            <div style="background-color: rgb(126, 207, 5)"
                                class="header bg-gradient-primary pb-8 pt-5 pt-md-5">
                                <div class="container-fluid d-flex align-items-center">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <h1 class=" text-white">Orders</h1><br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid mt--7">
                                <div class="row mt-1">
                                    <div class="col mt-5">
                                        <div class="card shadow">
                                            <div class="card-header border-0 mt-5">
                                                <form method="GET">
                                                    <div class="row align-items-left">
                                                        <div class="col-8">
                                                            <h3 class="mb-0">Orders</h3>
                                                        </div>
                                                        <div class="col-12 text-right">
                                                            <button id="show-hide-filters"
                                                                class="btn btn-icon btn-1 btn-sm btn-outline-secondary"
                                                                type="button">
                                                                <span class="btn-inner--icon"><i id="button-filters"
                                                                        class="ni ni-bold-down"></i></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <div class="tab-content orders-filters">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div
                                                                    class="input-daterange datepicker row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label">Date
                                                                                From</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i
                                                                                            class="ni ni-calendar-grid-58"></i></span>
                                                                                </div>
                                                                                <input name="fromDate"
                                                                                    class="form-control"
                                                                                    placeholder="Date from"
                                                                                    type="text">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label">Date
                                                                                to</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i
                                                                                            class="ni ni-calendar-grid-58"></i></span>
                                                                                </div>
                                                                                <input name="toDate"
                                                                                    class="form-control"
                                                                                    placeholder="Date to"
                                                                                    type="text">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- statuses -->
                                                            <div class="col-md-3">
                                                                <div id="form-group-status_id" class="form-group   ">


                                                                    <label class="form-control-label">Last
                                                                        status</label><br />

                                                                    <select
                                                                        class="form-control form-control-alternative   "
                                                                        name="status_id" id="status_id">
                                                                        <option disabled selected value> Select Last
                                                                            status </option>

                                                                        <option value="2">Accepted by admin
                                                                        </option>


                                                                        <option value="13">Accepted by driver
                                                                        </option>


                                                                        <option value="3">Accepted by restaurant
                                                                        </option>


                                                                        <option value="4">Assigned to driver
                                                                        </option>


                                                                        <option value="11">Closed</option>


                                                                        <option value="7">Delivered</option>


                                                                        <option value="1">Just created</option>


                                                                        <option value="6">Picked up</option>


                                                                        <option value="5">Prepared</option>


                                                                        <option value="8">Rejected by admin
                                                                        </option>


                                                                        <option value="12">Rejected by driver
                                                                        </option>


                                                                        <option value="9">Rejected by restaurant
                                                                        </option>


                                                                        <option value="10">Updated</option>

                                                                    </select>


                                                                </div>
                                                            </div>

                                                            <!-- statuses -->
                                                            <div class="col-md-3">
                                                                <div id="form-group-payment_status"
                                                                    class="form-group   ">


                                                                    <label class="form-control-label">Payment
                                                                        status</label><br />

                                                                    <select
                                                                        class="form-control form-control-alternative   "
                                                                        name="payment_status" id="payment_status">
                                                                        <option disabled selected value> Select Payment
                                                                            status </option>

                                                                        <option value="paid">Paid</option>


                                                                        <option value="unpaid">Unpaid</option>

                                                                    </select>


                                                                </div>
                                                            </div>


                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-control-label"
                                                                        for="client">Filter by Client</label>

                                                                    <select class="form-control select2" id="blabla"
                                                                        name="client_id">
                                                                        <option disabled selected value> -- Select an
                                                                            option -- </option>
                                                                        <option value="36">Demo Client 1</option>
                                                                        <option value="37">Demo Client 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-control-label"
                                                                        for="driver">Filter by Driver</label>
                                                                    <select class="form-control select2"
                                                                        name="driver_id">
                                                                        <option disabled selected value> -- Select an
                                                                            option -- </option>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-6 offset-md-6">
                                                            <div class="row">
                                                                <div class="col-md-8"></div>

                                                                <div class="col-md-4">
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-md btn-block">Filter</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="col-12">
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table align-items-center">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th class="table-web" scope="col">Created</th>
                                                            <th class="table-web" scope="col">Time Slot</th>
                                                            <th class="table-web" scope="col">Method</th>
                                                            <th scope="col">Last status</th>
                                                            <th class="table-web" scope="col">Client</th>
                                                            <th class="table-web" scope="col">Items</th>
                                                            <th class="table-web" scope="col">Driver</th>
                                                            <th class="table-web" scope="col">Price</th>
                                                            <th class="table-web" scope="col">Delivery</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>

                                                                <a class="btn badge badge-success badge-pill"
                                                                    href="https://foodtiger.site/orders/565">#565</a>
                                                            </td>

                                                            <td class="table-web">
                                                                Salı, 17 Ocak 2023 07:40
                                                            </td>
                                                            <td class="table-web">
                                                                10:30 - 11:00
                                                            </td>
                                                            <td class="table-web">
                                                                <span
                                                                    class="badge badge-primary badge-pill">Delivery</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-warning badge-pill">accepted_by_admin</span>
                                                            </td>
                                                            <td class="table-web">
                                                                Demo Staff 1
                                                            </td>

                                                            <td class="table-web">
                                                                2
                                                            </td>
                                                            <td class="table-web">

                                                            </td>
                                                            <td class="table-web">
                                                                €55.97
                                                            </td>
                                                            <td class="table-web">
                                                                €7.00 </td>
                                                            <td>
                                                                <a href="https://foodtiger.site/updatestatus/rejected_by_restaurant/565"
                                                                    class="btn btn-sm btn-danger">rejected_by_restaurant</a>

                                                                <a href="https://foodtiger.site/updatestatus/accepted_by_restaurant/565"
                                                                    class="btn btn-sm btn-success">accepted_by_restaurant</a>

                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
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
