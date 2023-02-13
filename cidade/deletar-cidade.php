<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$iCidCodigo = $_GET['cidcodigo'];
$sQuery = "DELETE FROM MERCADO.TBCIDADE WHERE CIDCODIGO = $iCidCodigo";
pg_query($oConexao, $sQuery);
header('location:cidade.php');
?>