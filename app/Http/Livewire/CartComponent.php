<?php

namespace App\Http\Livewire;

use Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
   
    public function increaseQuantity($rowId)   
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component', 'refreshComponent'); 

        
    }
    
    public function decreaseQuantity($rowId)
    { 
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);


    }

    public function destroy($rowId)
    { 
        
        Cart::instance('cart')->remove($rowId);
        session()->flash('succes_message', 'Item has been removed ');

    }

    public function switchToSaveForLater($rowId)
    {
        $item = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent'); 
        session()->flash('succes_message', 'Item has been saved successfully ');
    }

    public function moveToCart($rowId)
    {
       $item = Cart::instance('saveForLater')->get($rowId);
        Cart::instance('saveForLater')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent'); 
        session()->flash('s_succes_message', 'Item has been saved successfully ');  
    }

    public function deleteFromSaveForLater($rowId)
    {
        Cart::instance('saveForLater')->remove($rowId);
        session()->flash('s_succes_message', 'Item has been removed from save for later successfully ');  
    }

    public function checkout()
    {
        if(Auth::check()) 
        {
            return redirect()->route('checkout');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout()
    {
        if(!Cart::instance('cart')->count() > 0)
        {
            session()->forget('checkout');
            return;
        }
        
        if(session()->has('coupon'))
        {
            session()->put('checkout', [
                'discount'=>$this->discount,
                'subtotal'=>$this-> subtotalAfterDiscount,
                'tax'=>$this->taxAfterDiscount,
                'total'=>$this->totalAfterDiscount
            ]);
        }
        else
        {
            session()->put('checkout', [
                'discount'=> 0,
                'subtotal'=> Cart::instance('cart')->subtotal(),
                'tax'=>$this->Cart::instance('cart')->tax(),
                'total'=>$this->Cart::instance('cart')->total(),
            ]);
        }
        
    }

    public function render()
    {
        if(session()->has('coupon'))
        {
            if(Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value'])
            {
                session()->forget('coupon');

            }
            else
            {
                $this->calculateDiscounts();
            }
            
            $this->setAmountForCheckout();
        }
        return view('livewire.cart-component')->layout('layouts.master');
    }
}
 