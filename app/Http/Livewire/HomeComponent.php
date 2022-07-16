<?php

namespace App\Http\Livewire;

use App\Models\Sale;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\HomeCategory;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $category = HomeCategory::find(1);
        $cats = explode(',',$category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $no_of_products = $category->no_of_products;
        $sproducts = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        $sale = Sale::find(1);
        $hcategories = Category::all();



        return view('livewire.home-component', ['sliders'=>$sliders,'lproducts'=>$lproducts,'sproducts'=>$sproducts, 'categories'=> $categories, 'hcategories'=> $hcategories,'no_of_products'=>$no_of_products, 'sale'=>$sale])->layout('layouts.master');
    }
}
