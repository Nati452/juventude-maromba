<link rel="stylesheet" href="/css/exselecionado.css">
<x-layout>
    <h1 class="txt-nome">{{ $exercicio->nome }}</h1>
    
    <div class="padding-30">
        <div class="float-left">
            <img id="img-ex" src="{{ $exercicio->imagem }}" alt="">
            <a href="#" class="btn-back" onclick="history.back()">Voltar</a>
        </div>
        <div id="txt-descricao">
            {{ $exercicio->descricao }}
            @if(empty($exercicio->descricao))
                Este exercício ainda não possui descrição
            @endif 
        </div>
    </div>

</x-layout>