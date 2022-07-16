<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;


class CartCountComponent extends Component
{
    
    public function destroy($rowId)
    { 
    
    Cart::instance('cart')->remove($rowId);
    session()->flash('succes_message', 'Item has been removed ');

    }
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.cart-count-component');
    }
}
