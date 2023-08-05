<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>PRODUCT</th>
                            <th>NAME</th>
                            <th class="text-center">UNIT PRICE</th>
                            <th class="text-center">QUANTITY</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(empty($carts))
                            <tr>
                                <td colspan="6" class="text-center">{{ __('cart.empty') }}</td>
                            </tr>
                        @endif
                        <?php
                            $grandTotal = 0;
                        ?>
                        @foreach($carts as $cart)
                        <?php
                            $thumbnail = ($cart['thumbnail'] !== '') ? $cart['thumbnail'] : 'https://via.placeholder.com/70x70';
                            // Calculate Item Price
                            $grandTotal += $cart['price'] * $cart['quantity'];
                        ?>
                        <tr>
                            <td class="image" data-title="No"><img src="{{ $thumbnail }}" width="100" height="100" alt="#">
                            </td>
                            <td class="product-des" data-title="Description">
                                <p class="product-name"><a href="#">{{ $cart['product_name'] }}</a></p>
                                {{-- <p class="product-des">Maboriosam in a tonto nesciung eget distingy magndapibus.</p> --}}
                            </td>
                            <td class="price" data-title="Price"><span>Rp {{ number_format($cart['price']) }} </span></td>
                            <td class="qty" data-title="Qty">
                                <!-- Input Order -->
                                <div class="input-group">
                                    <div class="button minus">
                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled"
                                            data-type="minus" data-field="quant[1]">
                                            <i class="ti-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="100"
                                        value="{{ $cart['quantity'] }}">
                                    <div class="button plus">
                                        <button type="button" class="btn btn-primary btn-number" data-type="plus"
                                            data-field="quant[1]">
                                            <i class="ti-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!--/ End Input Order -->
                            </td>
                            <td class="total-amount" data-title="Total"><span>Rp {{ number_format($cart['price']) }}</span></td>
                            <td class="action" data-title="Remove">
                                <form method="post" action="{{ route('cart.remove', $cart['product_id']) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="remove" title="Remove this item"><i class="ti-trash remove-icon"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--/ End Shopping Summery -->
            </div>
        </div>
        @if(!empty($carts))
        <div class="row">
            <div class="col-12">
                <!-- Total Amount -->
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-5 col-12">
                            {{-- <div class="left">
                                <div class="coupon">
                                    <form action="#" target="_blank">
                                        <input name="Coupon" placeholder="Enter Your Coupon">
                                        <button class="btn">Apply</button>
                                    </form>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">
                                        Shipping (+10$)</label>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-lg-4 col-md-7 col-12">
                            <div class="right">
                                <ul>
                                    <li>Cart Subtotal<span>Rp {{ number_format($grandTotal) }}</span></li>
                                    <li>Shipping<span>Free</span></li>
                                    {{-- <li>You Save<span>$20.00</span></li> --}}
                                    <li class="last">Grand Total<span>{{ number_format($grandTotal) }}</span></li>
                                </ul>
                                <div class="button5">
                                    <a href="{{ route('checkout.index') }}" class="btn">Checkout</a>
                                    <a href="{{ route('home') }}" class="btn">Continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Total Amount -->
            </div>
        </div>
        @endif
    </div>
</div>