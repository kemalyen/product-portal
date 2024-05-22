<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProductsList extends Component
{
    #[Layout('layouts.app')]
    #[Title('Product List')]
    public function render()
    {
        return view('livewire.pages.products-list');
    }
}
