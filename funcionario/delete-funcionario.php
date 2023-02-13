<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$iFcnCodigo = $_GET['fcncodigo'];
$sQuery = "DELETE FROM MERCADO.TBFUNCIONARIO WHERE FCNCODIGO = $iFcnCodigo";
pg_query($oConexao, $sQuery);
header('location:funcionario.php');
?>