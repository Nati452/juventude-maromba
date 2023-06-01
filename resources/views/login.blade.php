<x-layout>
<style>
body {
    background-image: url('/img/fundo6.jpeg');
    background-repeat: no-repeat;
    background-position: center 0%;
    background-color: blue;
    background-size: cover;
  }
  </style>

<div class="flex-col content-center grow">
        <form action="" id="form-login" class="flex-col box-round space-30">
            <img id="img-login" src="/img/conta2.png" alt="">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="senha" placeholder="Senha">
            <button id="but-entrar" type="submit">Entrar</button>
            <p id="texo1">
                Você possui conta?
                <a href="/cadastro">Criar conta</a>
            </p>
        </form>
    </div>

</x-layout>