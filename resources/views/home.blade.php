
<link rel="stylesheet" href="/css/home.css">


<x-layout>
  <style>
    body {
      background: #000428;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #004e92, #000428);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #004e92, #000428);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
  </style>
  <div class="frase">
  O único treino ruim é aquele que não acontece
  </div>
  <a class="card" id="card-treino" href="/treinos">
    <div class="text" id="textreino1">
    Treinos
    </div>
    <div class="box" id="video1">
      <video autoplay muted loop class="background-video">
        <source src="/video/homem.mp4" type="video/mp4">
      </video>
    </div>
  </a>
  <a class="card" id="card-exercicio" href="/exercicios">
    
    <div class="box" id="video2">
      <video autoplay muted loop class="background-video">
        <source src="/video/mulher.mp4" type="video/mp4">
      </video>
    </div>
    <div class="text" id="textreino2">
      Exercícios
    </div>
  </a>








</x-layout>