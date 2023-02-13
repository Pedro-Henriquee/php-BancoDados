<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$sNomeCidade = $_POST['cidade'];
$sInsert = "INSERT INTO MERCADO.TBCIDADE (CIDNOME)
            VALUES ('$sNomeCidade')";
pg_query($oConexao, $sInsert);
header('location:cidade.php');
?>