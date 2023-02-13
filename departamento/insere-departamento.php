<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$sDptDescricao = $_POST['descricao'];
$sInsert = "INSERT INTO MERCADO.TBDEPARTAMENTO (DPTDESCRICAO)
            VALUES ('$sDptDescricao')";
pg_query($oConexao, $sInsert);
header('location:departamento.php');
?>