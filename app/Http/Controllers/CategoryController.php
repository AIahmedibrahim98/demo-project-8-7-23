<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories  = Category::all();
        foreach ($categories as $category) {
            echo "<h5>" . $category->id . '-' . $category->name . "</h5>";
        }
    }

    public function store()
    {
        /*$category = new Category();
        $category->name = "cars";
        $category->category_id = 1;
        $category->save(); */

        // $category = Category::create([
        //     'name' => 'small cars',
        // ]);
        ProductImage::create(['product_id' => 2, 'url' => 'test.com']);
    }

    public function update()
    {
        /* $category = Category::find(3);
        $category->name  = 'Big Cars';
        $category->save(); */

        /* Category::find(3)->update([
            'name' => 'very Big Cars'
        ]); */

        // Category::where('category_id', 2)->update(['category_id' => 3]);

    }

    public function find()
    {
        $category = Category::find(10);
        // $category = Category::findOrFail(10);
        if ($category) echo $category->name;
    }

    public function delete()
    {
        // Category::find(4)->delete();
        // Category::destroy(3);
        // Category::destroy([2, 1]);
        // Category::truncate();
        // Product::truncate();
        // ProductImage::truncate();
    }
}
