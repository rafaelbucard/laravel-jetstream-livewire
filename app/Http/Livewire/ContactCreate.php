<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Info;
use App\Models\Contato;

class ContactCreate extends Component
{
    public $nome;
    public $cidade;
    public $bairro;
    public $endereco;
    public $nascimento;
    public $cep;

 

    protected $rules = [
        'nome'=>'required',
        'cidade'=>'required',
        'bairro'=>'required',
        'endereco'=>'required',
        'nascimento'=>'required',
        'cep'=>'required',
    ];
    public function create()
    {
    
     
       $this->validate();

        Info::create([
            'nome'=>  $this->nome,
            'cidade'=> $this->cidade,
            'bairro'=> $this->bairro,
            'endereco'=> $this->endereco,
            'cep'=> $this->cep,
            'nascimento'=> $this->nascimento 
        ]);

        return redirect('form');

    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
