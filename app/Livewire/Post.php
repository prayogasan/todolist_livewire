<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kegiatan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Post extends Component
{
    use LivewireAlert;
    public $name;
    public $activity;
    public $judul_kegiatan;
    public $isi_kegiatan;

    public function store()
    {

        $this->validate([
            'name' => 'required|string|min:5',
            'activity' => 'required|string|min:5',
        ]);

        Kegiatan::create([
            'judul_kegiatan' => $this->name,
            'isi_kegiatan' => $this->activity,
        ]);

        $this->alert('success', 'Data berhasil disimpan!');
        $this->resetForms();
        
    }

    public function resetForms(){
        
        $this->name = "";
        $this->activity = "";

    }

    public function render()
    {
        return view('livewire.post');
    }
}
