<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$sNome = $_POST['nome'];
$iDptCodigo = $_POST['dptCodigo'];
$sQuery = "INSERT INTO MERCADO.TBFUNCIONARIO (FCNNOME, DPTCODIGO)
                       VALUES ('$sNome', $iDptCodigo)";
pg_query($oConexao, $sQuery);
header('location:funcionario.php');
?>