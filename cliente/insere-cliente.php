<?php

include_once '../../03 - Funcoes, Include, Require/comunica.php';
$sNome = $_POST['nomeCliente'];
$sCPF = $_POST['cpf'];
$iCidade = filter_input(INPUT_POST, 'cidades', FILTER_SANITIZE_NUMBER_INT);
$sQuery = "INSERT INTO MERCADO.TBCLIENTE (CLINOME, CLICPF, CIDCODIGO)
VALUES ('$sNome', '$sCPF', $iCidade)";
pg_query($oConexao, $sQuery);
header('location:cliente.php');
?>