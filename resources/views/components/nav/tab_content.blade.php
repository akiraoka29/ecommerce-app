<div class="tab-content" id="myTabContent">
    <!-- Start Single Tab -->
    @foreach($categories as $key => $category)
    <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}" id="{{ strtolower($category->slug) }}" role="tabpanel">
        <div class="tab-single">
            <div class="row">
                @foreach($products as $product)
                @if(strtolower($category->category_name) == strtolower($product->categories[0]->category_name))
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <?php
                                    $thumbnail = (isset($product->images[0]->file_path)) ? asset('storage/'.$product->images[0]->file_path.'/'.$product->images[0]->file_name) : 'https://via.placeholder.com/550x550';
                                ?>
                                <img class="default-img" src="{{ $thumbnail }}" alt="#">
                                <img class="hover-img" src="{{ $thumbnail }}" alt="#">
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#showProductModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    {{-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a> --}}
                                    {{-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> --}}
                                </div>
                                <div class="product-action-2">
                                    <form action="{{ route('cart.add', $product->product_id) }}" method="post">
                                        @csrf
                                        <button type="submit" title="Add to cart" style="background-color:inherit;border:0;">Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">{{ $product->product_name }}</a></h3>
                            <div class="product-price">
                                <span>Rp {{ number_format($product->price) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                {{-- <div class="col-xl-12 col-12">
                    <p class="text-center mt-4">{{ __('home.product_empty') }}</p>
                </div> --}}
                @endif
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>