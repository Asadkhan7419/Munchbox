<!-- Browse by category -->
<section class="browse-cat u-line section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Browse by cuisine <span class="fs-14"><a href="restaurant.html">See all restaurant</a></span></h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="category-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon icon-parent text-custom-white bg-light-green"> <i class="fas fa-map-marker-alt"></i>
                                    </div> <span class="text-light-black cat-name">Brooklyn</span>
                                </a>
                            </div>
                           @foreach ($categories as $data )
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green ">
                                        <img src="{{ asset('/cuisine/'.$data->image) ?? ''}}" class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name">{{$data->name}} </span>
                                </a>
                            </div>
                            @endforeach

                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse by category -->
