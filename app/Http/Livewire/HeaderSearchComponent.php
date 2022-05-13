<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class HeaderSearchComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_id_cat;
    
    public function mount()
    {
        $this-> product_cat = 'All Category';
        $this->fill(request()->only('search', 'product_cat', 'product_id_cat'));

    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.header-search-component',['categories'=> $categories]);
    }
}
 