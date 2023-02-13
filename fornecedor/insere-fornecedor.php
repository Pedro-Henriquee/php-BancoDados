<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$sNome = $_POST['nome'];
$sCNPJ = $_POST['cnpj'];
$iCidCodigo = $_POST['codigo-cid'];
$sQuery = "INSERT INTO MERCADO.TBFORNECEDOR (FORNOME, FORCNPJ, CIDCODIGO)
           VALUES ('$sNome', '$sCNPJ', $iCidCodigo)";
pg_query($oConexao, $sQuery);
header('location:fornecedor.php');
?>