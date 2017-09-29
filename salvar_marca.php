<?php
    include "conexao_banco.php";
    @$acao = $_GET['acao'];
    @$cod_marca = null;
    @$descricao_marca = $_GET["descricao_marca"];

           if(!empty($descricao_marca)) {
            $sql = "INSERT INTO marca(descricao_marca)
                    VALUES('$descricao_marca')";
        }
        else {
            $sql = "UPDATE marca
                    SET descricao_marca = '$descricao_marca',
                    WHERE cod_marca = $cod_marca";
        }
   // echo $sql."<br>";
            $status = mysqli_query($link,$sql);
            mysqli_close($link);
            if($status==1)
                $msg = "Sucesso ao salvar registro";
            else
                $msg = "Erro ao salvar registro";
?>
<script>
    alert('<?php echo $msg; ?>');
    location = 'lista_marca.php';
</script>