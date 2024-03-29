@extends('layouts.main')
@section('content')
@if(!isset($product->content))
<div class="categories_container">
    <h2>суб продукты1</h2>
    <div class="categories_items">
        @foreach ($sub_products as $sub_product)
            <a href="{{route('sub_product.show',[$category->id, $sub_category->id,$product->id, $sub_product->id])}}">
                <div class="category_item">
                    <div class="category_item_img">
                        <img src="{{$sub_product->preview_image}}">
                    </div>
                    <div class="category_item_title">
                        <h3>{{$sub_product->title}}</h3>
                    </div>
                </div> 
            </a>      
        @endforeach
    </div>
</div>
@else
show
@endif
@endsection