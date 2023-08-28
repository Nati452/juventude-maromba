<link rel="stylesheet" href="/css/treinoBox.css">

<x-layout>
<style>
 

 
</style>

<div class="flex-row space-30 content-center">
@for ($i = 1; $i <=36; $i++)
   <div class="box" data-animation="zoom" data-animation-delay="{{ 50 * $i }}">
    <img  src="../img/a.png">
    <div class="caixa">Agachamento</div>
  </div>
@endfor
</div>
</x-layout>