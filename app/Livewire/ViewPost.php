<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kegiatan;

class ViewPost extends Component
{
    public function render()
    {
        $kegiatans = Kegiatan::all();
        return view('livewire.view-post', compact('kegiatans'));
    }
}
