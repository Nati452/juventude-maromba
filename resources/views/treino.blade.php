<link rel="stylesheet" href="/css/treino.css">

<x-layout>

    <div class="content-center">
        <img src="{{$treino->imagem}}">

        <div class="descricao">{{$treino->descricao}}</div>


    </div>

    <?php $contador = 1; ?>
    @foreach($treino->series as $serie)
    <table class="tabela">
        <tbody>
            <tr>
                <td class="text2">{{ $contador }}ª SÉRIE</td>
                <td class="content-center">
                    <a href="/exselecionado">
                    <img src="{{ $serie->exercicio->imagem }}" >
                    </a>
                    <div>{{$serie->exercicio->nome}}</div>
                </td>
                <td>
                    <div class="text">{{$serie->repeticoes}}</div>
                    <div>repetições</div>
                </td>
                <td>
                    <div class="text">{{ $serie->descanso }}s</div>
                    <div>segundos</div>
                </td>
            </tr>
        </tbody>
    </table>
    <?php $contador++; ?>
    @endforeach

</x-layout>