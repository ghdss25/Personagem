<?php 

	require_once 'conexao.php';
	session_start();

    #FUNÇÃO PARA CADASTRAR Boneco
	if(@$_GET['go'] == 'cadastrarBonecos'){

		$nome = $_POST['nome'];
		$nacionalidade = $_POST['nacionalidade'];
		$cor = $_POST['cor'];
		$perfil = $_POST['perfil'];
        $tipo = $_POST['tipo'];

		$sql_query_verifica_boneco = $dbcon->query("SELECT id, nome FROM personagens WHERE nome = '$nome'");

		$linhas = mysqli_num_rows($sql_query_verifica_boneco);

		if($linhas > 0){

			echo "<script>alert('BONECO JÁ CADASTRADO !');</script>";
			echo "<meta http-equiv='refresh' content='0, url=./cadastro.php'>";

		} else {

			$sql_query = $dbcon->query("INSERT INTO personagens (per_nome, per_nac, per_cor, per_perfil, per_tipo) VALUES ('$nome', '$nacionalidade', '$cor', '$perfil', '$tipo')");

			if($sql_query){

				echo "<script>alert('BONECO CADASTRADO COM SUCESSO !');</script>";

				echo "<meta http-equiv='refresh' content='0, url=./cadastro.php'>";

			}else{

				echo "<script>alert('ERRO AO CADASTRAR BONECO !');</script>";
			}

		}

	}

	#FUNÇÃO PARA PEGAR ID DA TABELA
	if (isset($_GET['alterarBoneco'])) {

		$idBoneco = @$_GET['idBoneco'];
		
		if ($idBoneco != 0) {

			echo "<meta http-equiv='refresh' content='0, url=../visualizar.php?alterarBoneco=$idBoneco'>";

		} else {

			$idBoneco = 0;
		}

	}

	#FUNÇÃO PARA EXCLUIR BONECO
	if (isset($_GET['excluirBoneco'])) {

		$idBoneco = $_GET['idBoneco'];

		$sql_query_delete = $dbcon->query("DELETE FROM personagens WHERE id =".$idBoneco); 

		if($sql_query_delete) {

			echo "<script>alert('Boneco deletada com sucesso');</script>";
			echo "<meta http-equiv='refresh' content='0, url=../visualizar.php'>";

		} else {
			echo "<script>alert('Erro ao deletar Boneco');</script>";
		}

	}

	#FUNÇÃO PARA EDITAR BONECO
	if(@$_GET['go'] == 'editarBoneco'){

		$nome = $_POST['nome'];
		$nacionalidade = $_POST['nacionalidade'];
		$cor = $_POST['cor'];
		$perfil = $_POST['perfil'];
        $tipo = $_POST['tipo'];

		$idBoneco = $_POST['idBonecoEdit'];

		$sql_query = $dbcon->query("UPDATE personagens SET per_nome = '$nome', per_nac = '$nacionalidade', per_cor = '$cor', per_perfil = '$perfil' WHERE id = '$idBoneco';");

		if($sql_query){
												
			echo "<script>alert('BONECO ALTERADA COM SUCESSO !');</script>";
			
			echo "<meta http-equiv='refresh' content='0, url=./visualizar.php'>";

		} else {

			echo "<script>alert('ERRO AO ATIVIDADE BONECO !');</script>";
		}

	}


?>