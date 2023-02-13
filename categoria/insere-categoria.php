<?php
include_once '../../03 - Funcoes, Include, Require/comunica.php';
$sCatDescricao = $_POST['descricao'];
$sInsert = "INSERT INTO MERCADO.TBCATEGORIA (CATDESCRICAO)
            VALUES ('$sCatDescricao')";
pg_query($oConexao, $sInsert);
header('location:categoria.php');
?>