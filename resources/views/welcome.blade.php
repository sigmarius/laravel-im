@extends('layouts.app')

@section('content')
    @include('home.intro')

    <div class="d-flex gap-2 justify-content-center py-5">
        @each('catalog.shared.category', $categories, 'item')
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @each('catalog.shared.product', $products, 'item')
    </div>

    <div class="d-flex gap-2 justify-content-center py-5">
        @each('catalog.shared.category', $brands, 'item')
    </div>
@endsection
