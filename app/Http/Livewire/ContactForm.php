<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Info;
use App\Models\Contato;

class ContactForm extends Component
{
   

    public function render()
    {
        return view('livewire.contact-form');
    }
}
