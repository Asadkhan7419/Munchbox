<section class="final-order section-padding bg-light-theme">
    <div class="container-fluid">
        <form action="{{ url('/orderstore') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-lg-9">
                    <div class="main-box padding-20">
                        <div class="row mb-xl-20">
                            <div class="col-md-6">
                                <div class="section-header-left">
                                    @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                    <h3 class="text-light-black header-title fw-700">Review and place order</h3>
                                </div>
                                <h6 class="text-light-black fw-700 fs-14">Review address, payments, and tip to complete
                                    your purchase</h6>
                                <h6 class="text-light-black fw-700 mb-2">Your order setting</h6>
                                <p class="text-light-green fw-600">Delivery, ASAP (60-70m)</p>
                                <p class="text-light-white title2 mb-1">{{ Auth::user()->firstName }} <span><a
                                            href="#">Change Details</a></span>
                                </p>
                                <p class="text-light-black fw-600 mb-1">Home</p>
                                <p class="text-light-white mb-1">{{ Auth::user()->address }}</p>
                                <p class="text-light-white">{{ Auth::user()->phone }} </p>
                            </div>
                            <div class="col-md-6">
                                <div class="advertisement-img">
                                    <img src="assets/img/checkout.jpg" class="img-fluid full-width"
                                        alt="advertisement-img">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="payment-sec">
                                    <div class="section-header-left">
                                        <h3 class="text-light-black header-title">Delivery Instructions</h3>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control form-control-submit" rows="4" placeholder="Delivery Details"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="#"> <span class="checkmark"></span> Spare
                                            me the napkins and plasticware. I'm trying to save the earth.</label>
                                    </div>
                                    <div class="section-header-left">
                                        <h3 class="text-light-black header-title">Payment information</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header"> <a
                                                            class="collapsed card-link fw-500 fs-14"
                                                            data-toggle="collapse" href="#collapseOne">
                                                            Pay with a Gift Card
                                                        </a>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                        <div class="card-body no-padding payment-option-tab">
                                                            <div class="form-group">
                                                                <div class="credit-card gift-card p-relative">
                                                                    <input type="text" name="#"
                                                                        class="form-control-submit fs-16"
                                                                        value="AC2B76">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header"> <a
                                                            class="collapsed card-link fw-500 fs-14"
                                                            data-toggle="collapse" href="#collapseTwo">
                                                            Add a promo code
                                                        </a>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                        <div class="card-body no-padding payment-option-tab">
                                                            <div class="form-group">
                                                                <div
                                                                    class="credit-card promocode p-relative input-group">
                                                                    <input type="text" name="#"
                                                                        class="form-control-submit fs-16"
                                                                        placeholder="AC2B76">
                                                                    <button type="submit"
                                                                        class="btn-second btn-submit ml-1">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment-option-tab">
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item"> <a class="nav-link fw-600 active"
                                                                data-toggle="tab" href="#savecreditcard">Saved credit
                                                                card</a>
                                                        </li>
                                                        <li class="nav-item"> <a class="nav-link fw-600"
                                                                data-toggle="tab" href="#newcreditcard">New credit
                                                                card</a>
                                                        </li>
                                                        <li class="nav-item"> <a class="nav-link fw-600"
                                                                data-toggle="tab" href="#cash">Cash</a>
                                                        </li>
                                                        <li class="nav-item"> <a class="nav-link fw-600"
                                                                data-toggle="tab" href="#paypal">PayPal<sup>TM</sup></a>
                                                        </li>
                                                        <li class="nav-item"> <a class="nav-link fw-600"
                                                                data-toggle="tab" href="#amexcheckout">Amex Express
                                                                Checkout</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="savecreditcard">
                                                            <div class="form-group">
                                                                <div class="credit-card p-relative">
                                                                    <input type="text" name="#"
                                                                        class="form-control form-control-submit"
                                                                        value="VISA....1877,exp 12/21">
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Add a tip for
                                                                    your driver</h3>
                                                            </div>
                                                            <div class="driver-tip-sec mb-xl-20">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="nav-item"> <a
                                                                            class="nav-link fw-600 active"
                                                                            data-toggle="tab" href="#savetipcard">Tip
                                                                            with Credit Card</a>
                                                                    </li>
                                                                    <li class="nav-item"> <a
                                                                            class="nav-link fw-600 disabled"
                                                                            data-toggle="tab" href="#cashtip">Tip with
                                                                            Cash</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="savetipcard">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="tip-percentage">
                                                                                    <form>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage"
                                                                                                checked>
                                                                                            <span>15%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>25%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>25%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>30%</span>
                                                                                        </label>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="custom-tip">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text text-light-green fw-500">Custom
                                                                                                tip</span>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                            class="form-control form-control-submit"
                                                                                            placeholder="Custom tip">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Donate the
                                                                    change</h3>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="#"> <span
                                                                        class="checkmark"></span>
                                                                    Donate $0.77 to No kid Hungry. By checking this box
                                                                    you agree to the Donate the Change <a
                                                                        href="#">Terms of use</a> <span
                                                                        class="ml-2"><a href="#">Learn
                                                                            More</a></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                {{-- <a href="{{url('/orderstore')}}" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</a> --}}
                                                                <button type="submit"
                                                                    class="btn-first green-btn text-custom-white full-width fw-500">Place
                                                                    Your Order</button>
                                                            </div>
                                                            <p class="text-center text-light-black no-margin">By
                                                                placing your order, you agree to Munchbox's <a
                                                                    href="#">terms of use</a> and <a
                                                                    href="#">privacy agreement</a>
                                                            </p>
                                                        </div>
                                                        <div class="tab-pane fade" id="newcreditcard">
                                                            @if (Session::has('success'))
                                                            <div class="alert alert-success text-center">
                                                               <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                               <p>{{ Session::get('success') }}</p><br>
                                                            </div>
                                                            @endif
                                                            <br>
                                                            <div>
                                                            <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                                                @csrf
                                                                <div class='form-row row'>
                                                                   <div class='col-xs-12 col-md-6 form-group required'>
                                                                      <label class='control-label'>Name on Card</label>
                                                                      <input class='form-control' size='4' type='text'>
                                                                   </div>
                                                                   <div class='col-xs-12 col-md-6 form-group required'>
                                                                      <label class='control-label'>Card Number</label>
                                                                      <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                                                   </div>
                                                                </div>
                                                                <div class='form-row row'>
                                                                   <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                                      <label class='control-label'>CVC</label>
                                                                      <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                                                   </div>
                                                                   <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                                      <label class='control-label'>Expiration Month</label>
                                                                      <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                                                   </div>
                                                                   <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                                      <label class='control-label'>Expiration Year</label>
                                                                      <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                                                   </div>
                                                                </div>
                                                                <div class="form-row row">
                                                                   <div class="col-xs-12">
                                                                      <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                                                                   </div>
                                                                </div>
                                                             </form>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="custom-checkbox">
                                                                            <input type="checkbox" name="#">
                                                                            <span class="checkmark"></span>
                                                                            Save Credit card</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Add a tip for
                                                                    your driver</h3>
                                                            </div>
                                                            <div class="driver-tip-sec mb-xl-20">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="nav-item"> <a
                                                                            class="nav-link fw-600 active"
                                                                            data-toggle="tab" href="#tipnewcard">Tip
                                                                            with Credit Card</a>
                                                                    </li>
                                                                    <li class="nav-item"> <a
                                                                            class="nav-link fw-600 disabled"
                                                                            data-toggle="tab" href="#newcashtip">Tip
                                                                            with Cash</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="tipnewcard">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="tip-percentage">
                                                                                    <form>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage"
                                                                                                checked>
                                                                                            <span>15%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>25%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>25%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>30%</span>
                                                                                        </label>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="custom-tip">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text text-light-green fw-500">Custom
                                                                                                tip</span>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                            class="form-control form-control-submit"
                                                                                            placeholder="Custom tip">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Donate the
                                                                    change</h3>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="#"> <span
                                                                        class="checkmark"></span>
                                                                    Donate $0.77 to No kid Hungry. By checking this box
                                                                    you agree to the Donate the Change <a
                                                                        href="#">Terms of use</a> <span
                                                                        class="ml-2"><a href="#">Learn
                                                                            More</a></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn-first green-btn text-custom-white full-width fw-500">Place
                                                                    Your Order</button>
                                                            </div>
                                                            <p class="text-center text-light-black no-margin">By
                                                                placing your order, you agree to Munchbox's <a
                                                                    href="#">terms of use</a> and <a
                                                                    href="#">privacy agreement</a>
                                                            </p>
                                                        </div>
                                                        <div class="tab-pane fade" id="cash">
                                                            <p class="text-light-black">Have the cash ready when you
                                                                receive your order.</p>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Donate the
                                                                    change</h3>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="#"> <span
                                                                        class="checkmark"></span>
                                                                    Apologies, but you can't donate with the selected
                                                                    payment type</label>
                                                            </div>
                                                            <div class="form-group">
                                                                {{-- <a href="{{url('/orderstore')}}" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</a> --}}
                                                                <a href="{{ url('/orderstore') }}"><button
                                                                        type="submit"
                                                                        class="btn-first green-btn text-custom-white full-width fw-500">Place
                                                                        Your Order</button></a>
                                                            </div>
                                                            <p class="text-center text-light-black no-margin">By
                                                                placing your order, you agree to Munchbox's <a
                                                                    href="#">terms of use</a> and <a
                                                                    href="#">privacy agreement</a>
                                                            </p>
                                                        </div>
                                                        <div class="tab-pane fade" id="paypal">
                                                            <p class="text-light-black">Please review your order and
                                                                make any necessary changes before checking out with
                                                                PayPal.</p>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Add a tip for
                                                                    your driver</h3>
                                                            </div>
                                                            <div class="driver-tip-sec mb-xl-20">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="nav-item"> <a
                                                                            class="nav-link fw-600 active"
                                                                            data-toggle="tab"
                                                                            href="#paypaltipcard">Tip with Credit
                                                                            Card</a>
                                                                    </li>
                                                                    <li class="nav-item"> <a
                                                                            class="nav-link fw-600 disabled"
                                                                            data-toggle="tab"
                                                                            href="#paypalcashtip">Tip with Cash</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="paypaltipcard">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="tip-percentage">
                                                                                    <form>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage"
                                                                                                checked>
                                                                                            <span>15%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>25%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>25%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>30%</span>
                                                                                        </label>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="custom-tip">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text text-light-green fw-500">Custom
                                                                                                tip</span>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                            class="form-control form-control-submit"
                                                                                            placeholder="Custom tip">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Donate the
                                                                    change</h3>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="#"> <span
                                                                        class="checkmark"></span>
                                                                    Donate $0.77 to No kid Hungry. By checking this box
                                                                    you agree to the Donate the Change <a
                                                                        href="#">Terms of use</a> <span
                                                                        class="ml-2"><a href="#">Learn
                                                                            More</a></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn-first paypal-btn text-custom-white full-width fw-500">Checkout
                                                                    with
                                                                    <img src="assets/img/pay-pal.png" alt="image">
                                                                </button>
                                                            </div>
                                                            <p class="text-center text-light-black no-margin">By
                                                                placing your order, you agree to Munchbox's <a
                                                                    href="#">terms of use</a> and <a
                                                                    href="#">privacy agreement</a>
                                                            </p>
                                                        </div>
                                                        <div class="tab-pane fade" id="amexcheckout">
                                                            <div class="card">
                                                                <div class="card-header"> <a
                                                                        class="card-link fw-500 fs-14"
                                                                        data-toggle="collapse" href="#saveamex">
                                                                        Saved Card
                                                                    </a>
                                                                </div>
                                                                <div id="saveamex" class="collapse show"
                                                                    data-parent="#accordion">
                                                                    <div
                                                                        class="card-body no-padding payment-option-tab">
                                                                        <div class="form-group">
                                                                            <div
                                                                                class="credit-card amex-card-front p-relative">
                                                                                <input type="text" name="#"
                                                                                    class="form-control form-control-submit"
                                                                                    value="VISA....1877,exp 12/21">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header"> <a
                                                                        class="collapsed card-link fw-500 fs-14"
                                                                        data-toggle="collapse" href="#newcardamex">
                                                                        Add New Card
                                                                    </a>
                                                                </div>
                                                                <div id="newcardamex" class="collapse"
                                                                    data-parent="#accordion">
                                                                    <div
                                                                        class="card-body no-padding payment-option-tab">
                                                                        <div class="row">
                                                                            <div
                                                                                class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="text-light-white fw-700">Card
                                                                                        Number</label>
                                                                                    <div
                                                                                        class="credit-card amex-card-front p-relative">
                                                                                        <input type="text"
                                                                                            name="#"
                                                                                            class="form-control form-control-submit"
                                                                                            placeholder="1234 5678 9101 1234">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xl-2 col-lg-6 col-md-2 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="text-light-white fw-700">Expires
                                                                                        on</label>
                                                                                    <input type="text"
                                                                                        name="#"
                                                                                        class="form-control form-control-submit"
                                                                                        placeholder="12/21">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="text-light-white fw-700">Security
                                                                                        Code</label>
                                                                                    <div
                                                                                        class="credit-card amex-card-back p-relative">
                                                                                        <input type="text"
                                                                                            name="#"
                                                                                            class="form-control form-control-submit"
                                                                                            placeholder="123">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="text-light-white fw-700">ZIP
                                                                                        Code</label>
                                                                                    <input type="text"
                                                                                        name="#"
                                                                                        class="form-control form-control-submit"
                                                                                        placeholder="123456">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <label class="custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                            name="#"> <span
                                                                                            class="checkmark"></span>
                                                                                        Save Credit card</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Add a tip for
                                                                    your driver</h3>
                                                            </div>
                                                            <div class="driver-tip-sec mb-xl-20">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="nav-item"> <a
                                                                            class="nav-link fw-600 active"
                                                                            data-toggle="tab" href="#tipcard">Tip with
                                                                            Credit Card</a>
                                                                    </li>
                                                                    <li class="nav-item"> <a
                                                                            class="nav-link fw-600 disabled"
                                                                            data-toggle="tab" href="#cashtip">Tip with
                                                                            Cash</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="tipcard">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="tip-percentage">
                                                                                    <form>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage"
                                                                                                checked>
                                                                                            <span>15%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>25%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>25%</span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="radio-inline text-light-green fw-600">
                                                                                            <input type="radio"
                                                                                                name="tip-percentage">
                                                                                            <span>30%</span>
                                                                                        </label>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="custom-tip">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text text-light-green fw-500">Custom
                                                                                                tip</span>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                            class="form-control form-control-submit"
                                                                                            placeholder="Custom tip">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Donate the
                                                                    change</h3>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="#"> <span
                                                                        class="checkmark"></span>
                                                                    Donate $0.77 to No kid Hungry. By checking this box
                                                                    you agree to the Donate the Change <a
                                                                        href="#">Terms of use</a> <span
                                                                        class="ml-2"><a href="#">Learn
                                                                            More</a></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                {{-- <a href="{{url('/orderstore')}}" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</a> --}}
                                                                <button type="submit"
                                                                    class="btn-first green-btn text-custom-white full-width fw-500">Place
                                                                    Your Order</button>
                                                            </div>
                                                            <p class="text-center text-light-black no-margin">By
                                                                placing your order, you agree to Munchbox's <a
                                                                    href="#">terms of use</a> and <a
                                                                    href="#">privacy agreement</a>
                                                            </p>
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
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="cart-detail-box">
                            <div class="card">
                                <div class="card-header padding-15 fw-700">Your order from
                                    <p class="text-light-white no-margin fw-500">{{ Auth::user()->firstName }}</p>
                                </div>
                                <div class="card-body no-padding" id="scrollstyle-4">
                                    @php $subtotal = 0 @endphp
                                    @if (session('cart'))
                                        @foreach (session('cart') as $id => $details)
                                            @php $subtotal += $details['price'] * $details['quantity'] @endphp
                                            <div class="cat-product-box">
                                                <div class="cat-product">
                                                    <div class="cat-name">
                                                        <a href="#">
                                                            <p class="text-light-green fw-700"><span
                                                                    class="text-dark-white">{{ $details['quantity'] }}</span>
                                                                {{ $details['name'] }}</p> <span
                                                                class="text-light-white fw-700">small, chilli
                                                                chicken</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete-btn">
                                                        {{-- <a href="{{route('remove')}}" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                            </a> --}}
                                                    </div>
                                                    <div class="price"> <a href="#"
                                                            class="text-dark-white fw-500">
                                                            ${{ $details['price'] }} </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                    <div class="item-total">
                                        <div class="total-price border-0 pb-0"> <span
                                                class="text-dark-white fw-600">Items subtotal:</span>
                                            <span class="text-dark-white fw-600">$ {{ $subtotal }}</span>
                                        </div>
                                        <div class="total-price border-0 pt-0 pb-0"> <span
                                                class="text-light-green fw-600">Delivery fee:</span>
                                            <span class="text-light-green fw-600">Free</span>
                                        </div>
                                        <div class="total-price border-0 pt-0 pb-0"> <span
                                                class="text-light-green fw-600">coupon code:</span>
                                            <span class="text-light-green fw-600">10%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 modify-order">
                                    <button class="text-custom-white full-width fw-500 bg-light-green"><i
                                            class="fas fa-chevron-left mr-2"></i> Modify Your Order</button>
                                    <a href="#" class="total-amount"> <span
                                            class="text-custom-white fw-700">TOTAL Bill</span>
                                        <span class="text-custom-white fw-700">$ {{ $subtotal }}</span>
                                    </a>
                                    <a href="#" class="total-amount">
                                        <span class="text-custom-white fw-700">Discount Bill</span>
                                        <span class="text-custom-white fw-700">$ {{ $subtotal * 0.9 }}</span>
                                      </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
  var $form = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form = $(".require-validation"),
    inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
    $inputs = $form.find('.required').find(inputSelector),
    $errorMessage = $form.find('div.error'),
    valid = true;
    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
        var $input = $(el);
        if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
        }
    });
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
          number: $('.card-number').val(),
          cvc: $('.card-cvc').val(),
          exp_month: $('.card-expiry-month').val(),
          exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
      if (response.error) {
          $('.error')
              .removeClass('hide')
              .find('.alert')
              .text(response.error.message);
      } else {
          /* token contains id, last4, and card type */
          var token = response['id'];
          $form.find('input[type=text]').empty();
          $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
          $form.get(0).submit();
      }
  }
});
</script>
</section>
