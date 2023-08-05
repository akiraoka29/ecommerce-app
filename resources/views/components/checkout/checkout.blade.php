<section class="shop checkout section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="checkout-form">
                    <h2>{{ __('checkout.title') }}</h2>
                    <p>{{ __('checkout.description') }}</p>
                    <x-form.checkout :user="$user"/>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="order-details">
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>{{ __('checkout.cart_totals') }}</h2>
                        <?php
                            $subTotal = array_sum(array_column($carts, 'price'));
                            $grandTotal = $subTotal;
                        ?>
                        <div class="content">
                            <ul>
                                <li>{{ __('checkout.sub_total') }}<span>Rp. {{ number_format($subTotal) }}</span></li>
                                <li>(+) {{ __('checkout.shipping') }}<span>FREE</span></li>
                                <li class="last">{{ __('checkout.total') }}<span>Rp. {{ number_format($grandTotal) }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>{{ __('checkout.payments') }}</h2>
                        <div class="content">
                            <div class="checkbox">
                                <label class="checkbox-inline" for="1"><input name="payment" id="1" type="checkbox">
                                    BCA VA</label>
                                <label class="checkbox-inline" for="2"><input name="payment" id="2" type="checkbox">
                                    BNI VA</label>
                                <label class="checkbox-inline" for="3"><input name="payment" id="3" type="checkbox">
                                    BRI VA</label>
                            </div>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Payment Method Widget -->
                    <div class="single-widget payement">
                        <div class="content">
                            <img src="images/payment-method.png" alt="#">
                        </div>
                    </div>
                    <!--/ End Payment Method Widget -->
                    <!-- Button Widget -->
                    <div class="single-widget get-button">
                        <div class="content">
                            <div class="button">
                                <button type="submit" id="checkoutBtn" class="btn">{{ __('checkout.proceed_checkout') }}</button>
                            </div>
                        </div>
                    </div>
                    <!--/ End Button Widget -->
                </div>
            </div>
        </div>
    </div>
</section>