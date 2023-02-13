<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$iCidCodigo = $_GET['cidcodigo'];
$sDelete = "DELETE FROM MERCADO.TBCLIENTE WHERE CIDCODIGO = $iCidCodigo";
pg_query($oConexao, $sDelete);
header('location:cliente.php');
?>