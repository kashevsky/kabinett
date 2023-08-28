<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubProduct;
use App\Models\SubCategory;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        Category::class => 'App\Http\Sections\Category',
        SubCategory::class => 'App\Http\Sections\SubCategory',
        Product::class => 'App\Http\Sections\Product',
        SubProduct::class => 'App\Http\Sections\SubProduct',
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
