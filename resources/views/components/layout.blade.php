<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>juventude maromba</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device,width" , initial-scale=1.0>
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/flex-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header class="flex-row content-vcenter  content-space-between " id="cabecalho">
        <span class="material-symbols-outlined" id="btnmenu">
            menu

        </span>
        <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Buscar..." />
            <img src="../img/pesquisa.png " id="pesquisa" id="btnBusca" alt="Buscar" />
        </div>
        </div>
        </span>
        <img src="../img/logo.jpg" id="imagem">

     

    </header>
    <nav id="menu" class="flex-col box fit-width space-30">
     <a href="" class="flex-row gap-10 content-vcenter">
       <img src="../img/treino2.png" id="imgtreino">
       <span>TREINOS</span>
     </a>
     <a href="" class="flex-row space-10 content-vcenter">
     <img src="../img/exercicio2.png" id="imgexercicios">
     <span>EXERCÍCIOS</span>
     </a>
     <a href="" class="flex-row space-10 content-vcenter">
     <img src="../img/conta2.png" id="imgconta">
     <span>CONTA</span>
     </a>
     </nav>
     
    <div id="conteudo" class="grow flex-col">
        {{ $slot }}
    </div>

</body>

</html>