@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <x-hero 
        :banners="$banners"
        />

    <!-- Product Section -->
    <x-product.product 
        :categories="$categories" 
        :products="$products"
        />

    <!-- Shop Service Section -->
    <x-shop.service />

    <!-- Modal Section -->
    <x-modal.signin />
    <x-modal.show_product />
@endsection