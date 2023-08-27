@extends('layouts.main')
@section('content')
<div class="categories_container">
    <h2>Категории</h2>
    <div class="categories_items">
        @foreach ($products as $product)
            <a href="{{route('product.show', $product->id)}}">
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
@endsection