<?php

namespace App\Livewire\Front;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Klasifikasi extends Component
{
    public $title = "Kode Klasifikasi";

    public function render()
    {
        if(Auth::check()){
            return view('livewire.front.klasifikasi');
        }
        return view('livewire.front.klasifikasi')->layout('components.layouts.front');
    }
}
