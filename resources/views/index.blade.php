@extends('layouts.master')

@section('content')
    {{-- Hero Section --}}
    <x-hero />

    {{-- Product Section --}}
    <x-product.product />

    {{-- Shop Service Section --}}
    <x-shop.service />
@endsection