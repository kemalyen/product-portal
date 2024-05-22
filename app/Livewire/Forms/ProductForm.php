<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    public ?Product $product;

    public $name;
    public $sku;
    public $barcode;
    public $description;
    public $published_at;       
    public $status;
    public $price;
    public $quantity;
    public $category_id;

    public function setProduct(Product $product)
    {
        $this-> name = $product->name;
        $this-> sku = $product->sku;
        $this-> barcode = $product->barcode;
        $this-> description = $product->description;
        $this-> published_at = $product->published_at;       
        $this-> status = $product->status;
        $this-> price = $product->price;
        $this-> quantity = $product->quantity;
    }

    public function store()
    {
        $this->validate();
    }

    public function update()
    {
        $this->validate();
    }
}
