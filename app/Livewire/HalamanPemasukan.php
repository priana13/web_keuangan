<?php

namespace App\Livewire;

use Livewire\Component;

class HalamanPemasukan extends Component
{
    public function render()
    {
        return view('livewire.halaman-pemasukan')->extends('layouts.main')->section('content');
    }
}
