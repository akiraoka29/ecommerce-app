@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <x-hero />

    <!-- Product Section -->
    <x-product.product 
        :categories="$categories" />

    <!-- Shop Service Section -->
    <x-shop.service />

    <!-- Modal Section -->
    <x-modal.signin />
@endsection