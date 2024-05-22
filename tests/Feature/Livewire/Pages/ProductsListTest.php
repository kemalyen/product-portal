<?php

use App\Livewire\Pages\ProductsList;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ProductsList::class)
        ->assertStatus(200);
});
