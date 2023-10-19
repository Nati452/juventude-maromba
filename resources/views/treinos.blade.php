<link rel="stylesheet" href="/css/treinoBox.css">

<x-layout>
  <div class="flex-row space-40 content-center">
    <?php $i = 1; ?>
    @foreach($treinos as $t)
    <a data-animation="zoom" data-animation-delay="{{ 50 * $i }}" href="/treino?id={{ $t->id }}" class="boxTreino">
      <img src="{{ $t->imagem }}">
    </a>
    <?php $i++; ?>
    @endforeach
  </div>
</x-layout>