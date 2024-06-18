<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class PositionAddComponent extends Component
{
    public $nama;

    public function addPosition()
    {
        $this->validate([
            'nama' => 'required',
        ]);

        $position = new Position();
        $position->nama = $this->nama;
        $position->save();

        session()->flash('notif', 'Kategori Position Berhasil Ditambahkan');
        return redirect()->route('position.all');
    }

    public function render()
    {
        return view('livewire.position.position-add-component')->layout('layout.fe-employe');
    }
}
