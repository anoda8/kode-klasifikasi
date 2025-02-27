<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Klasifikasi extends Component
{
    public $title = "Kode Klasifikasi";

    public function render()
    {
        return view('livewire.front.klasifikasi')->layout('components/layouts/front');
    }
}
