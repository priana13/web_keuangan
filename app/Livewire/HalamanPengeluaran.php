<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Livewire\Component;
use Livewire\WithPagination;

class HalamanPengeluaran extends Component
{
    use WithPagination;
    
    // public $record;

    public function mount(){        

    }
    
    public function render()
    {      
        $pengeluaran = Transaksi::pengeluaran()->paginate(10);

        return view('livewire.halaman-pengeluaran' , compact('pengeluaran'))
        ->extends('layouts.main')->section('content');
    }
}
