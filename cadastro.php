<?php require_once "dao/gerenciar_boneco.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro dos Personagens </title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/apresentacao.css">
</head>

<body>

    <div class="container doiss tres"> 

        <div class="topo"> 
            <a class="botao-topo1" href="index.php"><button>voltar</button></a>
            <a class="botao-topo1" href="visualizar.php"><button>Visualizar</button></a> 
        </div>

        <form method="POST" enctype="multipart/form-data" action="?go=cadastrarBonecos"> 

            <div class="nome embaixo"> 
                <label>Nome</label>
                <input type="text" class="nome" name="nome" id="nome" placeholder="digite seu nome">
            </div>

            <div class="embaixo">   

                <label>Nacionalidade</label>
                <input type="text" name="nacionalidade" class="nacionalidade"  id="nacionalidade" placeholder="digite seu nome">

            </div>

            <div class="embaixo">   

                <label>Cor</label>
                <input type="text" name="cor" class="cor"  id="cor" placeholder="digite seu nome">

            </div>
            
            <div class="embaixo">   

                <label>Perfil</label>

                <select name="perfil" id="perfil">

                    <option value="King_of_fighters">King of Fighters</option>
                    <option value="Street_Fighter">Street Fighter</option>
                    <option value="X_Men">X Men</option>
                    <option value="Samurai_X">Samurai X</option>

                </select>

            </div>

            <div class="embaixo"> 

                <label>Tipo</label>

                <select name="tipo" id="cars">

                    <option value="ataque">Ataque</option>
                    <option value="defesa">Defesa</option>
                    <option value="equilibrio">Equilibrio</option>

                </select>

            </div>

            <button class="botao-centro" type="submit">Adicionar Personagem</a class="">
            
        </form>

    </div>
    
</body>

</html>