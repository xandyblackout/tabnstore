<?php
    include "conexao_banco.php";
    //@$cod_cliente = $_GET["cod_cliente"];
    @$acao = $_GET['acao'];
    @$cpf_cliente = $_GET["cpf_cliente"];
    @$rg_cliente = $_GET["rg_cliente"];
    @$nome_cliente = $_GET["nome_cliente"];
    @$data_nasc = $_GET["data_nasc"];
    @$data_cadastro = $_GET["data_cadastro"];
    //@$d = date('Y-m-d'); // Variavél que pegará a data atual no campo data cadastro;
    @$telefone1 = $_GET["telefone1"];
    @$celular1 = $_GET["celular1"];
    @$endereco1 = $_GET["endereco1"];
    @$endereco2 = $_GET["endereco2"];
    @$cep1 = $_GET["cep1"];
    @$cep2 = $_GET["cep2"];
    @$numero1 = $_GET["numero1"];
    @$numero2 = $_GET["numero2"];
    @$bairro1 = $_GET["bairro1"];
    @$bairro2 = $_GET["bairro2"];
    @$complemento1 = $_GET["complemento1"];
    @$complemento2 = $_GET["complemento2"];
    @$senha = MD5($_GET["senha"]);
    @$email = $_GET["email"];
   
            

           if($acao=='inserir') {
            $sql = "SELECT cpf_cliente
                    FROM cliente
                    WHERE cpf_cliente = '$cpf_cliente'";
               
                $sql = "INSERT INTO cliente (cpf_cliente, rg_cliente, nome_cliente, data_nasc, data_cadastro, telefone1, celular1, cep1, cep2, endereco1, endereco2, numero1, numero2, bairro1, bairro2, complemento1, complemento2, senha, email)
                    VALUES('$cpf_cliente', '$rg_cliente', '$nome_cliente', '$data_nasc', '$data_cadastro', '$telefone1', '$celular1', '$cep1', '$cep2', '$endereco1', '$endereco2','$numero1', '$numero2', '$bairro1', '$bairro2', '$complemento1', '$complemento2', '$senha', '$email')";
           }else{
            $sql = "SELECT cpf_cliente,rg_cliente, nome_cliente, data_nasc, data_cadastro, telefone1, celular1, cep1, cep2, endereco1, endereco2, numero1, numero2, bairro1, bairro2, complemento1, complemento2, senha, email
                    FROM cliente
                    WHERE cpf_cliente = $cpf_cliente";
    
            $sql = "UPDATE cliente
                        SET cpf_cliente = '$cpf_cliente', rg_cliente = '$rg_cliente', nome_cliente = '$nome_cliente', data_nasc = '$data_nasc', data_cadastro = '$d', telefone1 = '$telefone1', celular1 = '$celular1', cep1 = '$cep1', cep2 = '$cep2', endereco1 = '$endereco1', endereco2 = '$endereco2', numero1 = '$numero1', numero2 = '$numero2', bairro1 = '$bairro1', bairro2 = '$bairro2', complemento1 = '$complemento1', complemento2 = '$complemento2', senha = '$senha', email = '$email'
                        WHERE cpf_cliente = $cpf_cliente";     
            }
            
    echo $sql."<br>";
    //exit;
            $status = mysqli_query($link,$sql);
            mysqli_close($link);
            if($status==1)
                $msg = "Sucesso ao salvar registro";
            else
                $msg = "Erro ao salvar registro";
?>

<script>
    alert('<?php echo $msg; ?>');
    location = 'efetuar_login.php';
</script>