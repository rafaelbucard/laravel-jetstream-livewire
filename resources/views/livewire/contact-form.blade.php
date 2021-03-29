<div>
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
              <div class="flex items-center space-x-5">
                
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                  <h2 class="leading-relaxed">Tipo de contatos e Remoção</h2>
                  <p class="text-sm text-gray-500 font-normal leading-relaxed">Contatos Pessoais.</p>
                </div>
              </div>
              <form wire:submit.prevent="create"  method="POST">
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                  
                 
                 
                  <div class="flex flex-col">
                    <label class="leading-loose">Endereço</label>
                    <input type="text"  wire:model="endereco" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="EX: Rua das Flores, 23 Ap 230">
                    <div class="text-red-600">
                      @error('endereco')
                      {{$message}}
                      @enderror
                  </div>
                  </div>
                  
                 
                  <div class="flex flex-col">
                    <label class="leading-loose"> Tipo de Contato</label>
                    <select class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                      <option value="Facebook">Facebook</option>
                      <option value="E-mail">E-mail</option>
                      <option value="Telefone">Telefone</option>
                    </select>
                  </div>
                  <div class="flex flex-col">
                    <label class="leading-loose">Contato</label>
                    <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Contato">
                  </div>
                </div>
                <div class="pt-4 flex items-center space-x-4">
                   
                   <a href="{{ route('form')}}"> <button href="{{ route('form')}}" type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Criar</button> </a>
                </div>
              </div>
              </form>
              <a href="{{ route('dashboard') }}"> 
                <button class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancelar
                </button>
              </a>    
            </div>
          </div>
        </div>
      </div>
</div>
