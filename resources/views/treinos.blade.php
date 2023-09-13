<link rel="stylesheet" href="/css/treinoBox.css">

<x-layout>
  <style>



  </style>

  <div class="flex-row space-10 content-center">
    @for ($i = 1; $i <=36; $i++)
    <a  data-animation="zoom" data-animation-delay="{{ 50 * $i }}"  href="/treino">
      <img src="../img/banners/biceps.jpg" id="img3">
      <img src="../img/banners/bumbum.jpg" id="img3">
      <img src="../img/banners/costas.jpg" id="img3">


     
    </a>
  @endfor
  </div>
</x-layout>