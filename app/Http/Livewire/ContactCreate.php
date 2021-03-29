<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactCreate extends Component
{
    public $nome;
    public $cidade;
    public $bairro;
    public $endereco;
    public $nascimento;
    public $cep;

    public function create()
    {
        dd($this->nome,$this->cidade,$this->bairro,$this->endereco,$this->cep,$this->nascimento );

    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
