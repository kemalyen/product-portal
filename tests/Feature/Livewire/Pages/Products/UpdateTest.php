<?php

use App\Livewire\Pages\Products\Update;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Update::class)
        ->assertStatus(200);
});
