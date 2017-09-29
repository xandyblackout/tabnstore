<?php
    include 'conexao_banco.php';
    @$cod_produto = null;
    @$descricao_produto = $_GET["descricao_produto"];
    @$preco_produto = $_GET["preco_produto"];
    @$qtde_produto = $_GET["qtde_produto"];
    @$imagem = $_GET["imagem"];
    @$cod_marca = $_GET["marca"];
    @$cod_categoria = $_GET["categoria"];
   
  
        if(!empty($descricao_produto)) {
            
            $sql = "INSERT INTO produto(descricao_produto, preco_produto, qtde_produto, imagem, categoria, marca )
                    VALUES('$descricao_produto', '$preco_produto', '$qtde_produto', '$imagem', '$cod_categoria', '$cod_marca')"; 
                     
        
        }else {
            $sql = "UPDATE produto
                    SET cod_produto = '$cod_produto',
                    descricao_produto = '$descricao_produto',
                    preco_produto = '$preco_produto',
                    qtde_produto = '$qtde_produto',
                    imagem = '$imagem';
                    cod_marca = '$cod_marca',
                    cod_categoria = '$cod_categoria',
                    WHERE cod_produto = $cod_produto";
            }
    echo $sql."<br>";
            $status = mysqli_query($link,$sql);
            mysqli_close($link);
            if($status==1)
                $msg = "Sucesso ao salvar registro";
            else
                $msg = "Erro ao salvar registro";
        
?>
<script>
    alert('<?php echo $msg; ?>');
    location = 'lista_produto.php';
</script>