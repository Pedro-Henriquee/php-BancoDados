<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$iCatCodigo = $_GET['catcodigo'];
$sQuery = "DELETE FROM MERCADO.TBCATEGORIA WHERE CATCODIGO = $iCatCodigo";
pg_query($oConexao, $sQuery);
header('location:categoria.php');
?>