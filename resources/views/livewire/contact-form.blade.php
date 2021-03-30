<div>
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
              <div class="flex items-center space-x-5">
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                  <h2 class="leading-relaxed">Tipo de contatos de {{$lastid->nome}}</h2>
                  <p class="text-sm text-gray-500 font-normal leading-relaxed">Contatos Pessoais.</p>
                </div>
              </div>
              <form wire:submit.prevent="deleteregistro({{$lastid->id}})"  method="POST">
                <div class="pt-4 flex items-center space-x-4">
                  <button  type="submit" class="bg-red-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Deletar registro e seus Contatos</button> </a>
                </div>
              </form>
              <form wire:submit.prevent="createcontato"  method="POST">
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                  <div class="flex flex-col">
                    <label class="leading-loose"> Tipo de Contato</label>
                    <select  wire:model="tipo"class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                      <option value="Facebook">Facebook</option>
                      <option value="E-mail">E-mail</option>
                      <option value="Telefone">Telefone</option>
                    </select>
                    <div class="text-red-600">
                      @error('tipo')
                      {{$message}}
                      @enderror
                  </div>
                  <div class="flex flex-col">
                    <label class="leading-loose">Contato</label>
                    <input type="text"  wire:model="contato" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Contato">
                  </div>
                </div>
                <div class="text-red-600">
                  @error('contato')
                  {{$message}}
                  @enderror
                <div class="pt-4 flex items-center space-x-4">
                   <button  type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Criar</button> 
                </div>
              </div>
              </form><br>
              <a href="{{ route('dashboard') }}" > 
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Voltar
              </a>    
            </div>
            @foreach ($contatos as $contato)
            @if ($lastid->id == $contato->id_info)
            <form wire:submit.prevent="deletecontato({{$contato->id}})"  method="POST">
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                  <div class="flex flex-col">
                    <label class="leading-loose"> Tipo de Contato</label>
                    <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="{{$contato->contato}}" value="{{$contato->tipo}}">
                  </div>
                  <div class="flex flex-col">
                    <label class="leading-loose">Contato</label>
                    <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="{{$contato->contato}}" value="{{$contato->contato}}">
                  </div>
                </div>
                <div class="pt-4 flex items-center space-x-4">
                    <button  type="submit" class="bg-red-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Deletar</button> </a>
                </div>
              </div>
              </form>
              @endif
              @endforeach 
          </div>
        </div>
      </div>
</div>
