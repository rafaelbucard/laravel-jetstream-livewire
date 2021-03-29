<x-app-layout>
    <x-slot name="header">
        <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
            <div class="mb-2 sm:mb-0 inner">
          
              <a href="{{ route('dashboard') }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Agenda de Contatos</a><br>
              <span class="text-xs text-grey-dark">Criado por Rafael Buçard</span>
          
            </div>
          
            <div class="sm:mb-0 self-center">
              <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
              <a href="{{ route('dashboard') }}" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">Acessar o CRUD de Tipos de Contatos</a>
              
          
            </div>
          </nav>
       
    </x-slot>

   @livewire('contact-form')
   

    
    
</x-app-layout>