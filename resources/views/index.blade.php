@extends('layouts.main')
@section('content')
<div class="banner">
    <img src="images/baner.svg">
</div>
<div class="categories_container">
    <h2>Категории</h2>
    <div class="categories_items">
        @foreach ($categories as $category)
            <a href="{{route('category.show',$category->id)}}">
                <div class="category_item">
                    <div class="category_item_img">
                        <img src="{{$category->preview_image}}">
                    </div>
                    <div class="category_item_title">
                        <h3>{{$category->title}}</h3>
                    </div>
                </div> 
            </a>      
        @endforeach
    </div>
</div>
@endsection