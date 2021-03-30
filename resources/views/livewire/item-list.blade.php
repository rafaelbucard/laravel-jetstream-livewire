<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <!-- component -->
<div class="w-full max-w-screen-xl mx-auto px-6">
    <div class="flex justify-center p-4 px-3 py-10">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">
                <div class=" block text-right text-gray-700 text-lg font-semibold py-2 px-2">
                    Lista dos contatos 
                    <a href="{{ route('create') }}">
                        <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-20">
                            Novo Registro
                        </button>
                    </a>    
                </div>
                <div class="flex items-center bg-gray-200 rounded-md">
                    <div class="pl-2">
                        <svg class="fill-current text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path class="heroicon-ui"
                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                        </svg>
                    </div>
                    <input
                        class="w-full rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none py-2 px-2"
                        wire:model="search" type="text" placeholder="Procure por nome"> 
                </div>
                @foreach ($infos as $info)
                <div class=" py-3 text-sm">
                    <form wire:submit.prevent="deleteregistro({{$info->id}})"  method="POST">
                        <div class="pt-4 flex items-center space-x-4">
                          <button  type="submit" class="bg-red-500 flex justify-center items-center  text-white px-4 py-3 rounded-md focus:outline-none">Deletar Registro Abaixo</button> </a>
                        </div>
                      </form>
                    <div class="flex-colum justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                        <div class="flex-grow font-medium px-2"><b>{{$info->nome}}</b>-
                        </div>
                        <div class="  text-sm font-normal text-gray-500 tracking-wide">
                            @foreach ($contatos as $contato)
                                @if ($info->id == $contato->id_info)
                                    <b>{{$contato->tipo}}</b>: {{$contato->contato}} &nbsp; &nbsp;  
                                @endif
                            @endforeach 
                        </div>  
                    </div>
                @endforeach        
            </div>
            <div >{{$infos->links()}}</div> 
        </div>
    </div>
</div>
</div>
