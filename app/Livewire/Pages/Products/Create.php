<?php

namespace App\Livewire\Pages\Products;

use App\Livewire\Forms\ProductForm;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Create extends Component
{
    public ProductForm $form;

    public function save()
    {
        $this->form->store();

        return $this->redirect('/products');
    }

    #[Layout('layouts.app')]
    #[Title('Create Product')]
    public function render()
    {
        return view('livewire.pages.products.create');
    }
}
