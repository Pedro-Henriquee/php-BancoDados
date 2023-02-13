<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1252">
        <title>php-banco</title>
        <style>
            body {
                text-align: center;
                width: 50%;
            }
            ul  {
                display:inline-block;
                padding: 4px;

            }
            li a {
                text-decoration: none;
                color:black;
            }
            li {
                list-style-type: none;
            }
        </style>
    </head>
    <body>
        <fieldset>  
            <ul> <li> <a href="../categoria/categoria.php">Categoria |</a> </li> </ul>
            <ul> <li> <a href="../departamento/departamento.php">Departamento |</a> </li> </ul>
            <ul> <li> <a href="../cidade/cidade.php">Cidade |</a> </li> </ul> 
            <ul> <li> <a href="../cliente/cliente.php">Cliente |</a> </li> </ul>
            <ul> <li> <a href="../fornecedor/fornecedor.php">Fornecedor |</a> </li> </ul>
            <ul> <li> <a href="../funcionario/funcionario.php">Funcionário |</a> </li> </ul>
            <ul> <li> <a href="produto.php">Produto |</a> </li> </ul>
        </fieldset>

        <fieldset>
            <form method="POST" action="insere-produto.php">
                <legend>Cadastro de produto</legend>
                <label>Nome do produto</label>
                <input type="text" name="nome">
                <label>Descrição do produto</label>
                <input type="text" name="desc">
                <label>Valor do produto</label>
                <input type="text" name="valor">
                <label>Estoque do produto</label>
                <input type="text" name="estoque">
                <label>Código da categoria</label>
                <input type="number" name="catCodigo">
                <label>Código do fornecedor</label>
                <input type="number" name="forCodigo">
                <input type="submit" value="cadastrar">
            </form>
        </fieldset>

        <?php
        include_once '../../03 - Funcoes, Include, Require/comunica.php';

        //Deletar Valores
        $sSelect = "SELECT * FROM MERCADO.TBPRODUTO LEFT JOIN MERCADO.TBCATEGORIA ON TBPRODUTO.CATCODIGO = TBCATEGORIA.CATCODIGO LEFT JOIN MERCADO.TBFORNECEDOR ON TBPRODUTO.FORCODIGO = TBFORNECEDOR.FORCODIGO";
        $oResult = pg_query($oConexao, $sSelect);
        echo "<fieldset> <legend> Listagem de Funcionários </legend>";
        echo "<table style='display:inline-block;'>";
        echo "<tr>";
        echo "<th> Código </th>";
        echo "<th> Nome do produto </th>";
        echo "<th> Produto descrição </th>";
        echo "<th> Valor do produto</th>";
        echo "<th> Estoque do produto </th>";
        echo "<th> Código da categoria </th>";
        echo "<th> Descriçao da categoria </th>";
        echo "<th> Código do fornecedor </th>";
        echo "<th> Nome do fornecedor </th>";
        echo "<th> CNPJ do fornecedor </th>";
        echo "<th> Código cidade do fornecedor </th>";
        echo "<th> Ações </th>";
        echo "</tr>";
        while ($aResultado = pg_fetch_assoc($oResult)) {
            echo "<tr>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[procodigo] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[pronome] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[prodescricao] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[provalor] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[proestoque] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[catcodigo] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[catdescricao] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[forcodigo] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[fornome] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[forcnpj] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[cidcodigo] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> <a href='delete-produto.php?procodigo=$aResultado[procodigo]'> Deletar </a> </td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</fieldset>";
        ?>
    </body>
</html>
