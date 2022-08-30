<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use App\Models\Rendezvous;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class HomeMedecinRv extends Component
{
    use WithPagination;
    public $perPage = 5;
    public $query;
    public function render()
    {
        $medecinConnect = Auth::user()->Medecin->id;
        return view('livewire.home-medecin-rv', [
            'rendezvous' => Rendezvous::where('medecin_id', $medecinConnect)->paginate($this->perPage)
        ]);
    }
}
