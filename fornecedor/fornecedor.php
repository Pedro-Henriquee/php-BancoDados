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
            <ul> <li> <a href="fornecedor.php">Fornecedor |</a> </li> </ul>
            <ul> <li> <a href="../funcionario/funcionario.php">Funcionário |</a> </li> </ul>
            <ul> <li> <a href="../produto/produto.php">Produto |</a> </li> </ul>
        </fieldset>

        <fieldset>
            <form method="POST" action="insere-fornecedor.php">
                <legend>Cadastro de fornecedor</legend>
                <label>Nome do fornecedor</label>
                <input type="text" name="nome">
                <label>CNPJ do fornecedor</label>
                <input type="text" name="cnpj">
                <label>Código da cidade</label>
                <input type="number" name="codigo-cid">
                <input type="submit" value="cadastrar">
            </form>
        </fieldset>
        <?php
        include_once '../../03 - Funcoes, Include, Require/comunica.php';
        //Deletar Valores
        $sSelect = "SELECT * FROM MERCADO.TBFORNECEDOR LEFT JOIN MERCADO.TBCIDADE ON TBFORNECEDOR.CIDCODIGO = TBCIDADE.CIDCODIGO";
        $oResult = pg_query($oConexao, $sSelect);
        echo "<fieldset> <legend> Listagem de Fornecedores </legend>";
        echo "<table style='display:inline-block;'>";
        echo "<tr>";
        echo "<th> Código </th>";
        echo "<th> Nome </th>";
        echo "<th> CNPJ </th>";
        echo "<th> Código - Cidade </th>";
        echo "<th> Nome - Cidade </th>";
        echo "<th> Ações </th>";
        echo "</tr>";
        while ($aResultado = pg_fetch_assoc($oResult)) {
            echo "<tr>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[forcodigo] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[fornome] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[forcnpj] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[cidcodigo] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[cidnome] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> <a href='delete-fornecedor.php?forcodigo=$aResultado[forcodigo]'> Deletar </a> </td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</fieldset>";
        ?>
    </body>
</html>
