<link rel="stylesheet" href="/css/exercicios.css">
<script src="/js/exercicios.js"></script>

<x-layout>

  <div class="flex-row space-30 content-space-bewteen ">
    <div class="box1">

      <div class="caixa1">
        <div class="flex-row space-30 content-center">
          <div onclick="mostrarCorpo()">Homem: Frente</div>
          <div onclick="mostrarCorpo()">Mulher: Frente</div>
          <div onclick="mostrarCorpo()">Homem: Costas</div>
          <div onclick="mostrarCorpo()">Mulher: Costas</div>
        </div>

        <div id="front-male"  class="corpo-humano">
          <?php include base_path() . '\public\img\corpo-humano\homem-frente.svg'; ?>
        </div>
        
        
        <div id="end-male" class="corpo-humano hidden">
          <?php include base_path() . '\public\img\corpo-humano\homem-costas.svg'; ?>
        </div>

        
        <div id="front-female" class="corpo-humano hidden">
          <?php include base_path() . '\public\img\corpo-humano\mulher-frente.svg'; ?>
        </div>

        
        <div id="end-female" class="corpo-humano hidden">
          <?php include base_path() . '\public\img\corpo-humano\mulher-costas.svg'; ?>
        </div>

      </div>
    </div>
  </div>

</x-layout>