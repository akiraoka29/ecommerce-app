@extends('layouts.master')

@section('content')
	<!-- Breadcrumbs -->
    <x-breadcrumb.breadcrumb :lists="$breadcrumbs" />
	<!-- End Breadcrumbs -->

    <x-cart.shopping_cart :carts="$carts" />

@endsection