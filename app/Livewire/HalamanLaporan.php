<?php

namespace App\Livewire;

use Livewire\Component;

class HalamanLaporan extends Component
{
    public function render()
    {
        return view('livewire.halaman-laporan')->extends('layouts.main')->section('content');
    }
}
