<link rel="stylesheet" href="/css/exercicios.css">
<script src="/js/exercicios.js"></script>

<x-layout>
  <div class="flex-row space-30 content-space-bewteen ">
  
    <div class="box1">
      <div class="caixa1">
        <div class="flex-row space-30 content-center">
          <div class="btn-tipo-corpo" data-value="homem-frente" onclick="mostrarCorpo(this)">Homem: Frente</div>
          <div class="btn-tipo-corpo" data-value="mulher-frente" onclick="mostrarCorpo(this)">Mulher: Frente</div>
          <div class="btn-tipo-corpo" data-value="homem-costas" onclick="mostrarCorpo(this)">Homem: Costas</div>
          <div class="btn-tipo-corpo" data-value="mulher-costas" onclick="mostrarCorpo(this)">Mulher: Costas</div>
        </div>

        <div id="homem-frente" class="corpo-humano hidden">
          <?php include base_path() . '\public\img\corpo-humano\homem-frente.svg'; ?>
        </div>

        <div id="homem-costas" class="corpo-humano hidden">
          <?php include base_path() . '\public\img\corpo-humano\homem-costas.svg'; ?>
        </div>

        <div id="mulher-frente" class="corpo-humano hidden">
          <?php include base_path() . '\public\img\corpo-humano\mulher-frente.svg'; ?>
        </div>

        <div id="mulher-costas" class="corpo-humano hidden">
          <?php include base_path() . '\public\img\corpo-humano\mulher-costas.svg'; ?>
        </div>
      </div>
    </div>

    <div class="flex-row space-20" id="direito">
      <img src="../img/cartaz/teste.jpg">
      <img src="../img/cartaz/teste.jpg">
      <img src="../img/cartaz/teste.jpg">
      <img src="../img/cartaz/teste.jpg">
    </div>

  </div>
</x-layout>