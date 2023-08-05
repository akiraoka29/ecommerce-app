@extends('layouts.master')

@section('content')
	<!-- Breadcrumbs -->
    <x-breadcrumb.breadcrumb :lists="$breadcrumbs" />
	<!-- End Breadcrumbs -->
    <!-- Start Checkout -->
    <x-checkout.checkout 
        :carts="$carts" 
        test="Halo"
        :user="$user" />
    <!--/ End Checkout -->
@endsection

@section('script')
    <script>
        const checkoutRoute = "{{ route('checkout') }}"
    </script>
    <script src="{{ asset('js/module/checkout/checkout.js') }}"></script>
@endsection