<link rel="stylesheet" href="/css/contaCadas.css">
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

 <div class="box flex-row content-center space-30 " >
        <div class="flex-col">
            <p id="texo2">Venha mudar seu futuro com a gente! </p>
            <img src="/img/imgCadastro.png" id="img-cadastro">
            
            </div>
        <div class="flex-col">
        <form action="" id="form-cadastro" class="flex-col space-30">
           
            <input type="name" name="name" placeholder="Nome Completo">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="senha" placeholder="Criar Senha">
            <input type="password" name="senha" placeholder="Confirmar Senha">
            <button id="but-cadastro" type="submit">Cadastrar-se</button>
            
        </form>
                
           
        </div>
      
    </div>

</x-layout>