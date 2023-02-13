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
            <ul> <li> <a href="categoria.php">Categoria |</a> </li> </ul>
            <ul> <li> <a href="../departamento/departamento.php">Departamento |</a> </li> </ul>
            <ul> <li> <a href="../cidade/cidade.php">Cidade |</a> </li> </ul> 
            <ul> <li> <a href="../cliente/cliente.php">Cliente |</a> </li> </ul>
            <ul> <li> <a href="../fornecedor/fornecedor.php">Fornecedor |</a> </li> </ul>
            <ul> <li> <a href="../funcionario/funcionario.php">Funcionário |</a> </li> </ul>
            <ul> <li> <a href="../produto/produto.php">Produto |</a> </li> </ul>
        </fieldset>

        <fieldset>
            <form method="POST" action="insere-categoria.php">
                <legend>Cadastro da categoria</legend>
                <label>Categoria descrição</label>
                <input type="text" name="descricao">
                <input type="submit" value="cadastrar">
            </form>
        </fieldset>
        <?php
        include_once '../../03 - Funcoes, Include, Require/comunica.php';
        //Deletar Valores
        $sSelect = "SELECT * FROM MERCADO.TBCATEGORIA";
        $oResult = pg_query($oConexao, $sSelect);
        echo "<fieldset> <legend> Listagem de Categorias </legend>";
        echo "<table style='display:inline-block;'>";
        echo "<tr>";
        echo "<th> Código </th>";
        echo "<th> Descrição </th>";
        echo "<th> Ações </th>";
        echo "</tr>";
        while ($aResultado = pg_fetch_assoc($oResult)) {
            echo "<tr>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[catcodigo] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[catdescricao] </td>";
            echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> <a href='delete-categoria.php?catcodigo=$aResultado[catcodigo]'> Deletar </a> </td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</fieldset>";
        ?>
    </body>
</html>
