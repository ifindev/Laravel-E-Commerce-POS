<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product as ProductModel;

class Product extends Component
{

    public $name, $image, $description, $qty, $price;

    public function render()
    {
        $products = ProductModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.product', [
            'products' => $products
        ]);
    }
}
