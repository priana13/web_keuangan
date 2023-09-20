<?php

namespace App\Livewire;

use Livewire\Component;

class HalamanPengaturan extends Component
{
    public function render()
    {
        return view('livewire.halaman-pengaturan')->extends('layouts.main')->section('content');
    }
}
