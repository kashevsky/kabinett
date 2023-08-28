@extends('layouts.main')
@section('content')
@if(!isset($sub_category->content))
<div class="categories_container">
    <h2>продукты</h2>
    <div class="categories_items">
        @foreach ($products as $product)
            <a href="{{route('product.show',[$category->id, $sub_category->id,$product->id])}}">
                <div class="category_item">
                    <div class="category_item_img">
                        <img src="{{$product->preview_image}}">
                    </div>
                    <div class="category_item_title">
                        <h3>{{$product->title}}</h3>
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