<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubProduct;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'title' => 'Кабинет физики',
        ]);
        $sub_category = SubCategory::create([
            'title' => 'ГИА-лаборатория по физике 2021 - 2023',
            'category_id' => $category->id
        ]);
        $product = Product::create([
            'title' => 'Комплект №1 ГИА-лаборатория по физике',
            'sub_category_id' => $sub_category->id,
        ]);
        $product = Product::create([
            'title' => 'Комплект №2 ГИА-лаборатория по физике',
            'sub_category_id' => $sub_category->id,
        ]);
        $product = Product::create([
            'title' => 'Комплект №3 ГИА-лаборатория по физике',
            'sub_category_id' => $sub_category->id,
        ]);
        $product = Product::create([
            'title' => 'Комплект №3 ГИА-лаборатория по физике (с батарейным блоком)',
            'sub_category_id' => $sub_category->id,
        ]);
        $product = Product::create([
            'title' => 'Комплект №4 ГИА-лаборатория по физике',
            'sub_category_id' => $sub_category->id,
        ]);
        $product = Product::create([
            'title' => 'Комплект №4 ГИА-лаборатория по физике (с батарейным блоком)',
            'sub_category_id' => $sub_category->id,
        ]);
        $product = Product::create([
            'title' => 'Комплект №5 ГИА-лаборатория по физике',
            'sub_category_id' => $sub_category->id,
        ]);
        $product = Product::create([
            'title' => 'Комплект №6 ГИА-лаборатория по физике',
            'sub_category_id' => $sub_category->id,
        ]);
        $product = Product::create([
            'title' => 'Комплект №7 ГИА-лаборатория по физике',
            'sub_category_id' => $sub_category->id,
        ]);
        $product = Product::create([
            'title' => 'Набор оборудования для лабораторных работ и ученических опытов (на базе комплектов для ОГЭ)',
            'sub_category_id' => $sub_category->id,
        ]);
        $sub_category = SubCategory::create([
            'title' => 'Цифровые лаборатории и датчики',
            'category_id' => $category->id
        ]);
        $product = Product::create([
            'title' => 'Цифровые лаборатории',
            'sub_category_id' => $sub_category->id,
        ]);
        SubProduct::create([
            'title' => 'Комплект оборудования к цифровой лаборатории по физике для учителя',
            'product_id' => $product->id,
            'content' => '',
            'price' => '',
            'article' => '',
            'opt_price' => '',
        ]);
        SubProduct::create([
            'title' => 'Цифровая лаборатория "Вращение" (набор для демонстраций с комплектом датчиков)',
            'product_id' => $product->id,
        ]);
        SubProduct::create([
            'title' => 'Цифровая лаборатория "Механика" (набор для демонстраций с комплектом датчиков)',
            'product_id' => $product->id,
        ]);
        SubProduct::create([
            'title' => 'Цифровая лаборатория "Статика" (набор для демонстраций с комплектом датчиков)',
            'product_id' => $product->id,
        ]);
        SubProduct::create([
            'title' => 'Цифровая лаборатория "Электричество" (набор для демонстраций с комплектом датчиков)',
            'product_id' => $product->id,
        ]);
        SubProduct::create([
            'title' => 'Цифровая лаборатория по физике для ученика (оборудование и комплект датчиков с ПО)',
            'product_id' => $product->id,
        ]);
        SubProduct::create([
            'title' => 'Цифровая лаборатория по физике для учителя (комплект датчиков с программным обеспечением)',
            'product_id' => $product->id,
        ]);
        // $product = Product::create([
        //     'title' => 'Датчики',
        //     'sub_category_id' => $sub_category->id,
        // ]);
        // SubProduct::create([
        //     'title' => '',
        //     'product_id' => $product->id,
        // ]);
        // SubProduct::create([
        //     'title' => '',
        //     'product_id' => $product->id,
        // ]);
        // SubProduct::create([
        //     'title' => '',
        //     'product_id' => $product->id,
        // ]);
        // SubProduct::create([
        //     'title' => '',
        //     'product_id' => $product->id,
        // ]);
        // SubProduct::create([
        //     'title' => '',
        //     'product_id' => $product->id,
        // ]);
        // SubProduct::create([
        //     'title' => '',
        //     'product_id' => $product->id,
        // ]);
        
        // $sub_category = SubCategory::create([
        //     'title' => 'Цифровые лаборатории и датчики',
        //     'category_id' => $category->id
        // ]);
        // $sub_category = SubCategory::create([
        //     'title' => 'Технические средства обучения',
        //     'category_id' => $category->id
        // ]);
        // $sub_category = SubCategory::create([
        //     'title' => 'Приборы и принадлежности демонстрационные',
        //     'category_id' => $category->id
        // ]);
        // $sub_category = SubCategory::create([
        //     'title' => 'Приборы и принадлежности лабораторные',
        //     'category_id' => $category->id
        // ]);
        // $sub_category = SubCategory::create([
        //     'title' => 'Печатные пособия',
        //     'category_id' => $category->id
        // ]);
        // $sub_category = SubCategory::create([
        //     'title' => 'Интерактивные учебные пособия',
        //     'category_id' => $category->id
        // ]);
        // $sub_category = SubCategory::create([
        //     'title' => 'Экранно-звуковые средства обучения',
        //     'category_id' => $category->id
        // ]);
        // Category::create([
        //     'title' => 'Кабинет химии',
        // ]);
        // Category::create([
        //     'title' => 'Кабинет биологии',
        // ]);
        // Category::create([
        //     'title' => 'Кабинет математики',
        // ]);
        // Category::create([
        //     'title' => 'Кабинет информатики',
        // ]);
        // Category::create([
        //     'title' => 'Технология',
        // ]);
        // Category::create([
        //     'title' => 'Экология и ОБЖ',
        // ]);
        // Category::create([
        //     'title' => 'Философия',
        // ]);
        // Category::create([
        //     'title' => 'Искусство',
        // ]);
        // Category::create([
        //     'title' => 'Профессиональное оборудование',
        // ]);
    }
}
