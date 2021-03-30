<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Info;
use App\Models\Contato;

class ContactForm extends Component
{
    public $tipo;
    public $contato;
    public $userid;
    
 
    public function deletecontato ($id){
         $id;
        Contato::find($id)->delete();
    }

    public function deleteregistro($id) {

        Contato::where('id_info',$id)->delete();
        Info::find($id)->delete();

        return redirect('dashboard');
    }
 

    protected $rules = [
        'contato'=>'required',
        'tipo'=>'required',
        
    ];
    
    public function createcontato()
    {
        $this->userid = Info::orderBy('id', 'desc')->first();
     
       $this->validate();
       
        Contato::create([
            'id_info'=>  $this->userid->id,
            'tipo'=> $this->tipo,
            'contato'=> $this->contato
           
        ]);

      
    } 

    public function render()
    {
        return view('livewire.contact-form',[
            'infos' => Info::orderBy('nome')->paginate(10),
            'contatos' => Contato::orderBy('id','desc')->get(),
            'lastid'=> Info::orderBy('id', 'desc')->first()
        ]);
    }
}
