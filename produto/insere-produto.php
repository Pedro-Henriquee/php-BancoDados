<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$sNome = $_POST['nome'];
$sDesc = $_POST['desc'];
$fValor = $_POST['valor'];
$fEstoque = $_POST['estoque'];
$iCatCodigo = $_POST['catCodigo'];
$iForCodigo = $_POST['forCodigo'];
$sQuery = "INSERT INTO MERCADO.TBPRODUTO(PRONOME, PRODESCRICAO, PROVALOR, PROESTOQUE, CATCODIGO, FORCODIGO)
           VALUES ('$sNome', '$sDesc', $fValor, $fEstoque, $iCatCodigo, $iForCodigo)";
pg_query($oConexao, $sQuery);
header('location:produto.php');
?>