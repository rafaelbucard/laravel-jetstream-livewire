<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Info;
use App\Models\Contato;


class ItemList extends Component
{
    public $name;
    
    public function render()
    {
        return view('livewire.item-list',[
            'infos' => Info::all(),
            'contatos' => Contato::all()
        ]);
    }
}
