<link rel="stylesheet" href="/css/treino.css">

<x-layout>

    <div class="content-center">
        <img src="{{$treino->imagem}}">
        <div class="descricao">{{$treino->descricao}}</div>
    </div>

    <?php $contador = 1; ?>
    <table class="tabela">
        <tbody>
            @foreach($treino->series as $serie)

            <tr>
                <td class="text2">{{ $contador }}ª SÉRIE</td>
                <td class="content-center">
                    <a href="/exselecionado/{{ $serie->exercicio->id }}">
                        <img src="{{ $serie->exercicio->imagem }}">
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

            <?php $contador++; ?>
            @endforeach
        </tbody>
    </table>

</x-layout>