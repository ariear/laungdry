<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class CheckOrder extends Component
{
    public $code_order;
    public $isCodeOrder;
    public $isNotFound;
    public $order;

    public function check(){
        if ($this->code_order) {
            $this->order = Order::where('order_code',$this->code_order)->first();
            if ($this->order) {
                $this->isCodeOrder = true;
            }else{
                $this->isNotFound = true;
            }
        }
    }
    public function render()
    {
        return view('livewire.check-order');
    }
}
