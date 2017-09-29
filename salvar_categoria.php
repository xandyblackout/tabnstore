<?php
    include "conexao_banco.php";
    @$cod_categoria = null;
    @$descricao_categoria = $_GET["descricao_categoria"];
           if(!empty($descricao_categoria)) {
            $sql = "INSERT INTO categoria(descricao_categoria)
                    VALUES('$descricao_categoria')";
        }
        else {
            $sql = "UPDATE categoria
                    SET descricao_categoria = '$descricao_categoria',
                    WHERE cod_categoria = $cod_categoria";
        }
    //echo $sql."<br>";
            $status = mysqli_query($link,$sql);
            mysqli_close($link);
            if($status==1)
                $msg = "Sucesso ao salvar registro";
            else
                $msg = "Erro ao salvar registro";
?>
<script>
    alert('<?php echo $msg; ?>');
    location = 'lista_categoria.php';
</script>