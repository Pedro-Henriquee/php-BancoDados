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
            <ul> <li> <a href="cliente.php">Cliente |</a> </li> </ul>
            <ul> <li> <a href="../fornecedor/fornecedor.php">Fornecedor |</a> </li> </ul>
            <ul> <li> <a href="../funcionario/funcionario.php">Funcionário |</a> </li> </ul>
            <ul> <li> <a href="../produto/produto.php">Produto |</a> </li> </ul>
        </fieldset>

        <fieldset>
            <form method="POST" action="insere-cliente.php">
                <legend>Cadastro de cliente</legend>
                <label>Nome</label>
                <input type="text" name="nomeCliente">
                <label>CPF:</label>
                <input type="text" name="cpf">
                <input type="submit" value="cadastrar">
                <?php
                include_once '../../03 - Funcoes, Include, Require/comunica.php';
                //Monta SELECT
                $sCidades = "SELECT * FROM MERCADO.TBCIDADE";
                $oResultS = pg_query($oConexao, $sCidades);
                $aData = [];
                echo "Cidade: ";
                echo "<select name='cidades' id='cidades'>";
                while ($row = pg_fetch_assoc($oResultS)) {
                    echo "<option value='$row[cidcodigo]'> $row[cidnome] </option>";
                }
                echo "</select>";
                echo "</form>";
                //Listagem clientes
                $sSELECT = "SELECT * FROM MERCADO.TBCLIENTE LEFT JOIN MERCADO.TBCIDADE ON TBCLIENTE.CIDCODIGO = TBCIDADE.CIDCODIGO";
                $oResult = pg_query($oConexao, $sSELECT);
                $aData = [];
                echo "<fieldset> <legend> Listagem de Clientes </legend>";
                echo "<table style='display:inline-block; border: 1px solid black; border-collapse: collapse'>";
                echo "<tr>";
                echo "<th> Código </th>";
                echo "<th> Nome </th>";
                echo "<th> Cpf </th>";
                echo "<th> Cidade - Código </th>";
                echo "<th> Cidade - Nome </th>";
                echo "<th> Ações </th>";
                echo "</tr>";
                //deletar
                while ($aResultado = pg_fetch_assoc($oResult)) {
                    echo "<tr style='border: 1px solid black; borderr-collapse: collapse;'>";
                    echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[clicodigo] </td>";
                    echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[clinome] </td>";
                    echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[clicpf] </td>";
                    echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[cidcodigo] </td>";
                    echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> $aResultado[cidnome] </td>";
                    echo "<td style='border: 1px solid black; borderr-collapse: collapse;'> <a href='delete-cliente.php?cidcodigo=$aResultado[cidcodigo]'> Deletar </a></td>";
                    echo "</tr>";
                }

                echo "</table>";
                echo "</fieldset>"
                ?>
                </body>
                </html>
