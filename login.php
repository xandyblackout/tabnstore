<?php 

session_start();

$cpf_cliente = $_POST['cpf_cliente'];
$senha = $_POST['senha'];

include "conexao_banco.php";

$sql = "SELECT cpf_cliente, senha
        FROM cliente
        WHERE cpf_cliente = '$cpf_cliente' AND senha = '$senha'";
//echo $sql;
//exit;
    if(!empty($usuario) AND !empty($senha)) {
            if($usuario=="cpf_cliente" AND $senha=="senha") {
                $_SESSION['login'] = true;
            }
        }
            if(!empty($_SESSION['login'])) { ?>
                <script>location='index.php';</script> <?php
                exit;
            }
            else { ?>
                <script>location='efetuar_login.php';</script>
        <?php
        }
$status = mysqli_query($link,$sql);
mysqli_close($link);
?>