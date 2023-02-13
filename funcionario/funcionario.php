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
            <ul> <li> <a href="funcionario.php">Funcionário |</a> </li> </ul>
            <ul> <li> <a href="../produto/produto.php">Produto |</a> </li> </ul>
        </fieldset>
        <fieldset>
            <form method="POST" action="insere-funcionario.php">
                <legend>Cadastro de funcionário</legend>
                <label>Nome do funcionário</label>
                <input type="text" name="nome">
                <label>Código do departamento</label>
                <input type="number" name="dptCodigo">
                <input type="submit" value="cadastrar">
            </form>
        </fieldset>
        <?php
        include_once '../../03 - Funcoes, Include, Require/comunica.php';
        //Deletar Valores
        $sSelect = "SELECT * FROM MERCADO.TBFUNCIONARIO JOIN MERCADO.TBDEPARTAMENTO ON TBFUNCIONARIO.DPTCODIGO = TBDEPARTAMENTO.DPTCODIGO";
        $oResult = pg_query($oConexao, $sSelect);
        echo "<fieldset> <legend> Listagem de Funcionários </legend>";
        echo "<table style='display:inline-block;'>";
        echo "<tr>";
        echo "<th> Código </th>";
        echo "<th> Nome </th>";
        echo "<th> Código - Departamento </th>";
        echo "<th> Descrição - Departamento </th>";
        echo "<th> Ações </th>";
        echo "</tr>";
        while ($aResultado = pg_fetch_assoc($oResult)) {
            echo "<tr>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[fcncodigo] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[fcnnome] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[dptcodigo] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[dptdescricao] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> <a href='delete-funcionario.php?fcncodigo=$aResultado[fcncodigo]'> Deletar </a> </td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</fieldset>";
        ?>
    </body>
</html>
