<?php

namespace App\Models;

use App\Models\Category;
use App\Models\SubProduct;
use App\Models\SubCategory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use HasSlug;

    public function subProducts()
    {
        return $this->hasMany(SubProduct::class, 'product_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'category_id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
