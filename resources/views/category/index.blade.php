@extends('layouts.main')
@section('content')


<div class="categories_container">
    <h2>суб Категории</h2>
    <div class="categories_items">
        @foreach ($sub_categories as $sub_category)
            <a href="{{route('sub_category.index', [$category->id, $sub_category->id])}}">
                <div class="category_item">
                    <div class="category_item_img">
                        <img src="{{$sub_category->preview_image}}">
                    </div>
                    <div class="category_item_title">
                        <h3>{{$sub_category->title}}</h3>
                    </div>
                </div> 
            </a>      
        @endforeach
    </div>
</div>


@endsection