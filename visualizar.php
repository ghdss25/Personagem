<?php require_once "dao/gerenciar_boneco.php"; ?> 

<?php  

    $idBonecoEdit = @$_GET['alterarBoneco'];

    if ($idBonecoEdit != 0) {

    $res = $dbcon->query("SELECT * FROM personagens WHERE id = ".$idBonecoEdit); 

    while($dados = $res->fetch_array()){

        $nomeBonecoEdit = $dados['per_nome'];
        $nacionalidadeBonecoEdit = $dados['per_nac'];
        $corBonecoEdit = $dados['per_cor'];
        $perfilBonecoEdit = $dados['per_perfil'];
        $tipoBonecoEdit = $dados['per_tipo'];

  }

    } else {

        $idBonecoEdit = 0;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização dos Bonecos </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom_menu.css">
    <link rel="css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-left">
  		<a class="navbar-brand" href="index.php">Menu</a>
  		<br><br><br>
  		<ul class="nav navbar-nav" style="margin-left: 0px;">
  			<li><a href="cadastro.php">Cadastro</a></li>
  			<li><a href="index.php">Sair</a></li>
  		</ul>
  	</div>

    <div class="container"> 

        <div class="row">
            <br><br><br>

            <table id="tabelaAtividades" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> 

                <thead>

                    <tr class="titulo_tabela">

                        <th>Id</th>
                        <th>Nome</th> 
                        <th>Nacionalidade</th> 
                        <th>Cor</th> 
                        <th>Perfil</th> 
                        <th>Tipo</th> 
                        <th>Ações</th>

                    </tr>

                </thead>

            <tbody>

                <?php include_once "dao/tabela_bonecos.php"; ?>

            </tbody>

        </table>

        <br><br><br>

        <?php 

            if ($idBonecoEdit != 0){

                 include_once "editar_boneco.php";

            }
        ?>

        </div> 

    </div>
    
</body>
</html>