<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaksi;

class HalamanPemasukan extends Component
{
    public function render()
    {
        $pemasukan = Transaksi::pemasukan()->paginate(10);

        return view('livewire.halaman-pemasukan', compact('pemasukan'))->extends('layouts.main')->section('content');
    }
}
