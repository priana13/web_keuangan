<?php

namespace App\Livewire;

use Livewire\Component;

use LivewireUI\Modal\ModalComponent;

class HelloWorld extends ModalComponent
{
    public function render()
    {
        return view('livewire.hello-world');
    }
}
