<!-- Form -->
<form class="form" id="checkoutForm" method="post" action="#">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>{{ __('checkout.first_name') }}<span>*</span></label>
                <input type="text" name="first_name" placeholder="" value="{{ $user->first_name ?? '' }}" required="required">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>{{ __('checkout.last_name') }}</label>
                <input type="text" name="last_name" placeholder="" value="{{ $user->last_name ?? '' }}" required="required">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>{{ __('checkout.email_address') }}<span>*</span></label>
                <input type="email" name="email" placeholder="" value="{{ $user->email ?? '' }}" required="required">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>{{ __('checkout.phone_number') }}<span>*</span></label>
                <input type="number" name="phone_number" placeholder="" value="{{ $user->phone_number ?? '' }}" required="required">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>{{ __('checkout.country') }}<span>*</span></label>
                <select name="country" id="country">
                    <option value="ID">Indonesia</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>{{ __('checkout.city') }}<span>*</span></label>
                <select name="city" id="state-province">
                    <option value="11">
                        ACEH
                    </option>
                    <option value="12">
                        SUMATERA UTARA
                    </option>
                    <option value="13">
                        SUMATERA BARAT
                    </option>
                    <option value="14">
                        R I A U
                    </option>
                    <option value="15">
                        J A M B I
                    </option>
                    <option value="16">
                        SUMATERA SELATAN
                    </option>
                    <option value="17">
                        BENGKULU
                    </option>
                    <option value="18">
                        LAMPUNG
                    </option>
                    <option value="19">
                        KEPULAUAN BANGKA BELITUNG
                    </option>
                    <option value="21">
                        KEPULAUAN RIAU
                    </option>
                    <option value="31">
                        DKI JAKARTA
                    </option>
                    <option value="32">
                        JAWA BARAT
                    </option>
                    <option value="33">
                        JAWA TENGAH
                    </option>
                    <option value="34">
                        DI YOGYAKARTA
                    </option>
                    <option value="35">
                        JAWA TIMUR
                    </option>
                    <option value="36">
                        B A N T E N
                    </option>
                    <option value="51">
                        BALI
                    </option>
                    <option value="52">
                        NUSA TENGGARA BARAT
                    </option>
                    <option value="53">
                        NUSA TENGGARA TIMUR
                    </option>
                    <option value="61">
                        KALIMANTAN BARAT
                    </option>
                    <option value="62">
                        KALIMANTAN TENGAH
                    </option>
                    <option value="63">
                        KALIMANTAN SELATAN
                    </option>
                    <option value="64">
                        KALIMANTAN TIMUR
                    </option>
                    <option value="71">
                        SULAWESI UTARA
                    </option>
                    <option value="73">
                        SULAWESI SELATAN
                    </option>
                    <option value="74">
                        SULAWESI TENGGARA
                    </option>
                    <option value="75">
                        GORONTALO
                    </option>
                    <option value="76">
                        SULAWESI BARAT
                    </option>
                    <option value="81">
                        MALUKU
                    </option>
                    <option value="82">
                        MALUKU UTARA
                    </option>
                    <option value="94">
                        PAPUA
                    </option>
                    <option value="91">
                        PAPUA BARAT
                    </option>
                    <option value="72">
                        SULAWESI TENGAH
                    </option>
                    <option value="65">
                        KALIMANTAN UTARA
                    </option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>{{ __('checkout.address_line_1') }}<span>*</span></label>
                <input type="text" name="address_line_1" placeholder="" required="required">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>{{ __('checkout.address_line_2') }}</label>
                <input type="text" name="address_line_2" placeholder="" required="required">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>{{ __('checkout.postal_code') }}<span>*</span></label>
                <input type="text" name="postal_code" placeholder="" required="required">
            </div>
        </div>
        {{-- <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <label>Company<span>*</span></label>
                <select name="company_name" id="company">
                    <option value="company" selected="selected">Microsoft</option>
                    <option>Apple</option>
                    <option>Xaiomi</option>
                    <option>Huawer</option>
                    <option>Wpthemesgrid</option>
                    <option>Samsung</option>
                    <option>Motorola</option>
                </select>
            </div>
        </div> --}}
        @if(!$user)
        <div class="col-12">
            <div class="form-group create-account">
                <input id="cbox" type="checkbox">
                <label>{{ __('checkout.create_account') }}</label>
            </div>
        </div>
        @endif
    </div>
</form>
<!--/ End Form -->