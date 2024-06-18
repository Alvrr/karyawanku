<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class PositionEditComponent extends Component
{
    public $nama;
    public $position_id;

    public function mount($position_id)
    {
        $position = Position::where('id', $position_id)->first();
        $this->nama = $position->nama;
        $this->position_id = $position->id;
        $position->save();
    }

    public function editPosition()
    {
        $this->validate([
            'nama' => 'required',
        ]);

        $position = Position::find($this->position_id);
        $position->nama = $this->nama;
        $position->save();

        session()->flash('notif', 'Kategori Position Berhasil Diupdate');
        return redirect()->route('position.all');


    }

    public function render()
    {
        return view('livewire.position.position-edit-component')->layout('layout.fe-employe');
    }
}
