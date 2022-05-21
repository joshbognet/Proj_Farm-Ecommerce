<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    
    
    public function deleteCategory($id)
{
	$category = Category::find($id);
	$category->delete();
	session()->flash('message','Category has been deleted successfully!');
}

    use WithPagination;
    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.master');
    }
}
