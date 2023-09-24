<?php

namespace App\Livewire;

use App\Models\Kas;
use App\Models\Kategori;
use App\Models\Transaksi;
use Livewire\Component;
// use Livewire\WithPagination;

class HalamanPengeluaran extends Component
{
    // use WithPagination;
    
    public $record;

    public $tanggal;
    public $keterangan;
    public $type = "Pengeluaran";
    public $nominal;
    public $kategori_id;
    public $user_id;
    public $kas_id;
    public $metode_bayar;

    public function mount(){        

        $this->tanggal = date('Y-m-d');
    }
    
    public function render()
    {      
        $pengeluaran = Transaksi::pengeluaran()->paginate(10);

        $kategori = Kategori::all();

        $kas = Kas::all();

        return view('livewire.halaman-pengeluaran' , compact('pengeluaran', 'kategori' , 'kas'))
        ->extends('layouts.main')->section('content');
    }

    public function save(){

        $this->validate([ 
            'tanggal' => 'required|min:3',
            'keterangan' => 'required|min:3',
        ]);


        $kas_selected = Kas::find($this->kas_id);

        $pengeluaran = Transaksi::create([
            'tanggal' => $this->tanggal,
            'type' => $this->type,
            'nominal' => $this->nominal,
            'keterangan' => $this->keterangan,
            'kategori_id' => $this->kategori_id,
            'user_id' => auth()->user()->id,
            'kas_id' => $this->kas_id,
            'metode_bayar' => $kas_selected->type,
        ]);


    }
}
