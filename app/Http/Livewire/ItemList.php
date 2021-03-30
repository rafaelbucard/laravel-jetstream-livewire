<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Info;
use App\Models\Contato;
use Livewire\WithPagination;


class ItemList extends Component
{
    use WithPagination;
    
    public $search;

    
    public function render()
    {
        if($this->search){
            return view('livewire.item-list',[
                'infos' => Info::where('nome','like','%'.$this->search.'%')->orderBy('nome')->paginate(10),
                'contatos' => Contato::all()
            ]);
        } else{
        return view('livewire.item-list',[
            'infos' => Info::orderBy('nome')->paginate(10),
            'contatos' => Contato::all(),
            'lastid'=> Info::orderBy('id', 'desc')->first()
        ]);
    }
    }

    public function deleteregistro($id) {

        Contato::where('id_info',$id)->delete();
        Info::find($id)->delete();

//return redirect('dashboard');
    }
}
