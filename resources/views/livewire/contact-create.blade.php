<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
              <div class="flex items-center space-x-5">
                
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                  <h2 class="leading-relaxed">Registrar Contato</h2>
                  <p class="text-sm text-gray-500 font-normal leading-relaxed">Informaçoes Pessoais.</p>
                </div>
              </div>
              <form wire:submit.prevent="create"  method="POST">
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                  <div class="flex flex-col">
                    <label class="leading-loose">Nome</label>
                    <input type="text" wire:model="nome" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Nome">
                    <div class="text-red-600">
                        @error('nome')
                        {{$message}}
                        @enderror
                    </div>
                  </div>
                  <div class="flex flex-col">
                    <label class="leading-loose">Cidade</label>
                    <input type="text" wire:model="cidade"class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Cidade">
                    <div class="text-red-600">
                      @error('cidade')
                      {{$message}}
                      @enderror
                  </div>
                  </div>
                  <div class="flex flex-col">
                    <label class="leading-loose">Bairro</label>
                    <input type="text"  wire:model="bairro"class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Bairro">
                    <div class="text-red-600">
                      @error('bairro')
                      {{$message}}
                      @enderror
                  </div>
                  </div>
                  <div class="flex flex-col">
                    <label class="leading-loose">Endereço</label>
                    <input type="text"  wire:model="endereco" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="EX: Rua das Flores, 23 Ap 230">
                    <div class="text-red-600">
                      @error('endereco')
                      {{$message}}
                      @enderror
                  </div>
                  </div>
                  
                  <div class="flex items-center space-x-4">
                    <div class="flex flex-col">
                      <label class="leading-loose">Nascimento</label>
                      <div class="relative focus-within:text-gray-600 text-gray-400">
                        <input type="date"  wire:model="nascimento" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="25/02/2020">
                        <div class="absolute left-3 top-2">
                          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                      </div>
                      <div class="text-red-600">
                        @error('nascimento')
                        {{$message}}
                        @enderror
                    </div>
                    </div>
                    <div class="flex flex-col">
                      <label class="leading-loose">Cep</label>
                      <input type="text"  wire:model="cep" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Cep">
                      <div class="text-red-600">
                        @error('cep')
                        {{$message}}
                        @enderror
                    </div>
                    </div>
                   
                  </div>
                </div>
                <div class="pt-4 flex items-center space-x-4">
                   
                    <button  type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Criar</button>
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
