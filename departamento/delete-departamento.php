<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$iDptCodigo = $_GET['dptcodigo'];
$sQuery = "DELETE FROM MERCADO.TBDEPARTAMENTO WHERE DPTCODIGO = $iDptCodigo";
pg_query($oConexao, $sQuery);
header('location:departamento.php');
?>