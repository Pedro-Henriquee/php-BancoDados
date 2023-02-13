<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$iProCodigo = $_GET['procodigo'];
$sQuery = "DELETE FROM MERCADO.TBPRODUTO WHERE PROCODIGO = $iProCodigo";
pg_query($oConexao, $sQuery);
header('location:produto.php');
?>
