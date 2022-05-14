<?php 

    require_once 'conexao.php'; 

    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

    // seleciona todos os itens da tabela 

    $primeira_query = $dbcon->query("SELECT * FROM personagens"); 

    // conta o total de itens   
    $total = mysqli_num_rows($primeira_query); 

    // seta a quantidade de itens por página, neste caso, 5 itens 
    $registros = 5; 

    // calcula o número de páginas arredondando o resultado para cima 
    $numPaginas = ceil($total/$registros); 

    // Variavel para calcular o inicio da visualização com base na página atual 
    $inicio = ($registros*$pagina)-$registros; 

    // seleciona os itens por página 
    $query_paginacao = $dbcon->query("SELECT * FROM personagens limit $inicio,$registros"); 

    $total = mysqli_num_rows($query_paginacao); 
   
    while ($dados = $query_paginacao-> fetch_array()) {

        $tabIdBoneco = $dados['id'];
        $tabNome = $dados['per_nome']; 
        $tabNacionalidade = $dados['per_nac']; 
        $tabCor = $dados['per_cor'];
        $tabPerfil = $dados['per_perfil']; 
        $tabTipo = $dados['per_tipo'];

        echo "
        
        <tr> 
            <td>$tabIdBoneco</td>
            <td>$tabNome</td>
            <td>$tabNacionalidade</td>
            <td>$tabCor</td>
            <td>$tabPerfil</td>
            <td>$tabTipo</td>

            <td class='acoes-tabela'>

                <a class='fa fa-pencil-square-o btn btn-primary' href='dao/gerenciar_boneco.php?alterarBoneco&idBoneco=$tabIdBoneco' title='EDITAR ATIVIDADE'></a>

                <a class='fa fa-trash btn btn-danger' href='dao/gerenciar_boneco.php?excluirBoneco&idBoneco=$tabIdBoneco' title='EXCLUIR ATIVIDADE'></a> 

            </td>

        </tr>"; 
        
    }

?>