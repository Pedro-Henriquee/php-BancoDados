<?php
include_once '../../03 - Funcoes, Include, Require/comunica.php';
$iForCodigo = $_GET['forcodigo'];
$sQuery = "DELETE FROM MERCADO.TBFORNECEDOR WHERE FORCODIGO = $iForCodigo";
pg_query($oConexao, $sQuery);
header('location:fornecedor.php');
?>