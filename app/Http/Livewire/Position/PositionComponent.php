<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class PositionComponent extends Component
{
    public function deletePosition($id)
    {
        $position = Position::find($id);
        $position->delete();
        session()->flash('notif', 'Delete Berhasil');

    }
    public function render()
    {
        $positions = Position::all();
        return view('livewire.position.position-component', [
            'positions' => $positions
        ])->layout('layout.fe-employe');
    }
}
