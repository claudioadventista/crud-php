<!--
    Esse projeto foi feito com base em uma aula no youtube no link abaixo.
    https://www.youtube.com/watch?v=SR6xLAbisU8&t=2817s. 
    Eu apenas fiz as modificações abaixo: 
    *  Campo busca, com sua funcionalidade.
    *  Só CSS sem Bootstrap.
    *  Retorna a confirmação de atualização e exclusão.
    *  Tabela com rolagem.
    *  Conta o número de registro encontrado.  
-->

<?php include 'connx.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <h2>CRUD PHP</h2>

     <!-- Formulário de cadastro -->
    <h4>Formulário de Cadastro</h4>
    <form action="cadastrar.php" method="post">
        Nome <input style="width:25%" type="text" name="nome">
        Endereço <input  style="width:25%" type="text" name="endereco">
        Telefone <input  type="text" style="width:15%" maxlength="14"  name="telefone">
        <input class="but but-buscar" type="submit" value="Enviar">
    </form>

    <!-- Campo de busca -->
    <h4 class="campo-busca">Campo de Busca</h4>
    <form class="campo-busca" action="index.php" method="post" name="busca_registro">
        <input type="text" name="busca" value="">
        <input class="but but-buscar"  type="submit" value="Buscar">
    </form>

    <!-- Tabela de resultados -->
    <h4>Tabela de Resultado</h4>
    <?php 
        if(empty($_POST['busca'])){
            $buscar = "SELECT codigo, nome, endereco, telefone FROM cliente ORDER BY codigo DESC";
            $query = mysqli_query($connx, $buscar); 
        }else{ 
            $busca = trim($_POST['busca']);
            $buscar = "SELECT codigo, nome, endereco, telefone FROM cliente WHERE nome LIKE '%$busca%' OR endereco LIKE '%$busca%' OR telefone LIKE '%$busca%' OR codigo = '$busca' ORDER BY codigo DESC ";
            $query = mysqli_query($connx, $buscar);
            if($busca <> ""){echo"Pesquisa por ". $busca.". ";} 
        }; 
        $total = mysqli_num_rows($query);

        // Condição para mostrar a tabela de resultado
        if( $total <> 0){ echo "Encontrado(s) ".$total." cadastro(s)";
    ?>
    <p> 

        <!-- div que faz a rolagem da tabela -->
        <div class="tabela">
            <table border="1" style="border-collapse: collapse ; border-color:#ccc" cellpadding="2" cellspacing="0">   
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th colspan= 2>Ação</th>
                </tr>
                <?php 

                while($cadastro = mysqli_fetch_array($query)) {
                    $codigo_busca = $cadastro['codigo'];
                    $nome_busca = $cadastro['nome'];
                    $endereco_busca = $cadastro['endereco'];
                    $telefone_busca = $cadastro['telefone'];

                ?>
                    <tr>
                        <form action="alterar.php" method="post">
                            <input type="hidden" name="codigo" value="<?php echo $codigo_busca; ?>">
                            <td><input style="width:60px;border:none" type="text" disabled value="<?php echo $codigo_busca; ?>"></td>
                            <td><input  style="width:300px;border:none" type="text" name="nome" value="<?php echo $nome_busca; ?>"></td>
                            <td><input style="width:300px;border:none" type="text" name="endereco" value="<?php echo $endereco_busca; ?>"></td>
                            <td><input style="width:100px;border:none" maxlength="14" type="text" name="telefone" value="<?php echo $telefone_busca; ?>"></td>
                            <td><input type="submit" class="but but-alterar" value="Alterar" onclick="return confirm('Confirme a alteração?');"></td>
                        </form>

                        <td>
                            <form action="excluir.php" method="post">
                                <input type="hidden" name="codigo" value="<?php echo $codigo_busca; ?>">
                                <input type="submit" class="but but-excluir" value="Excluir" onclick="return confirm('Confirme a  exclusão?');">
                            </form>
                        </td>
                    
                    </tr>
                <?php }; ?>
            </table>
        </div>
        <p><center>claudioadventista@hotmail.com. &#9742 / Whatsapp (81) 9.9924-6724</center></p>
        <p>
            <center>Links e redes sociais
                <a class="but" href="https://m.facebook.com/claudio.xavier.37669?eav=AfYGlCND-Y3ECEIjKY2iiAaIzCIyhNAQYMwixLpQmCMg9e4scIVCUQaYagTlW-uxglk&paipv=0" target="blank">Facebook</a> 
                <a class="but" href="https://www.instagram.com/oficina.c.t.eletronica/" target="blank">Instagram</a> 
                <a class="but" href="https://www.youtube.com/channel/UClYcoL8yyFcxcSzK2L2zByw" target="blank">Youtube</a> 
                <a class="but" href="https://www.youtube.com/watch?v=SR6xLAbisU8&t=2817s" target="blank"> Aula </a>
            </center>
        </p>
    <?php 
        }else{
            echo "Nada encontrado.";
        };  
    ?>

</body>
</html>
