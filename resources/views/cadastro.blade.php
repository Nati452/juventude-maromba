<x-layout>
<style>
  body {
    background-image: url('/img/fundo6.jpeg');
    background-repeat: no-repeat;
    background-position: center 0%;
    background-color: blue;
    background-size: cover;

  }
    #conteudo {
      justify-content: center;
      align-items: center;
    }
</style>

 <div class="box flex-row " id="form-cadastro">
        <div class="flex-col">
            <p>Venha mudar seu futuro com a gente!</p>
            <img src="/img/imgCadastro.png" alt="">
            
            </div>
        <div class="flex-col">
        <form action="" id="form-cadastro" class="flex-col box-round space-30">
           
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="senha" placeholder="Senha">
            <button id="but-cadastro" type="submit">Cadastrar-se</button>
            
        </form>
                
           
        </div>
      
    </div>

</x-layout>