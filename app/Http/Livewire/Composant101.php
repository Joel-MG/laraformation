<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Composant101 extends Component
{
    public $texte = "bonjour";

    public function render()
    {
        return view('livewire.composant101');
    }
}
