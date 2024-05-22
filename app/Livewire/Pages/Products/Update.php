<?php

namespace App\Livewire\Pages\Products;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Update extends Component
{
    public ProductForm $form;

    public function mount(Product $product)
    {
        $this->form->setProduct($product);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirect('/products');
    }
    
    #[Layout('layouts.app')]
    #[Title('Update User')] 
    public function render()
    {
        $categories = Category::all();
        return view('livewire.pages.products.update', compact('categories'));
    }
}
