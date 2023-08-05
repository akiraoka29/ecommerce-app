<!-- Slider Area -->
<section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
        <div class="container">
            <div class="row no-gutters">
                @foreach($banners as $banner)
                <div class="col-lg-9 offset-lg-3 col-12">
                    <div class="text-inner">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="hero-text">
                                    <h1><span>{{ $banner->tag }} </span>{{ $banner->title }}</h1>
                                    <p>{{ $banner->description }}.</p>
                                    @if($banner->show_button === 1)
                                    <div class="button">
                                        <a href="#" class="btn">Shop Now!</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->