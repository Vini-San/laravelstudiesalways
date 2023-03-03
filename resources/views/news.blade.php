<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- {!! $html !!} --}}
                    
                    @guest
                        não está autenticado
                    @endguest
                    <br>
                    @auth
                        está autenticado
                    @endauth
                    <br>
                    @if (isset($nome))
                        meu nome é {{$nome}}
                    @endif
                    
                    <br>
                    @isset($idade)
                    e minha idade é {{$idade}}
                    @endisset

                    <br>
                    {{ isset($flip) ? 'existe' : 'não existe'}}
                    <br>
                    {{ $teste ?? 'padrao'}}
                    <br>
                    @isset($produtos)
                        @foreach ($produtos as $produtoitem)

                        {{$produtoitem->nome}}
                        <br>
                            
                        @endforeach
                    @endisset
                    <br>
                    
                    @isset($idproduto)
                    @foreach ($idproduto as $item)
                        {{$item->testeprod}}                        
                    @endforeach
                        
                    @endisset

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
