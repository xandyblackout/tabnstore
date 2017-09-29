<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: MINHAS COMPRAS ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="lista_categoria.css" rel="stylesheet">
	</head>
	<body>
		<div id="container">
			<div id="wb_Image1" style="position:absolute;left:56px;top:17px;width:140px;height:65px;z-index:17;">
				<a href="index.php"><img src="images/TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
			</div>
			<div id="wb_Text17" style="position:absolute;left:201px;top:28px;width:543px;height:42px;z-index:18;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:37px;">MINHAS COMPRAS</span>
			</div>
			<div id="wb_Form1" style="position:absolute;left:28px;top:89px;width:742px;height:373px;z-index:19;">
				<form name="carrinho_compra" method="POST" action="carrinho.php">
                <?php
                    require ("conexao_banco.php");
                    $sql = "SELECT cod_produto, descricao_produto, preco_produto, imagem 
                            FROM produto";
                    //echo $sql;
                    $qr = mysqli_query($link,$sql) or die(mysqli_error());
                        while ($ln = mysql_fetch_array($qr)){
                            echo '<h2>'.$ln['cod_produto'].'</h2>';
                            echo '<h2>'.$ln['descricao_produto'].'</h2>';
                            echo 'Preço : R$ '.number_format($ln['preco_produto'], 2, ',', '.').'<br/ >';
                            echo '<img src="img/'.$ln['imagem'].'" />  <br/ >';
                            echo '<a href="carrinho.php?acao=add&id='.$ln['cod_produto'].'">Comprar</a>';
                            echo '<br/ > <hr />';
                    }
                    
                ?>
                <input type="submit" id="Button1" onclick="window.location.href='./pagina_lista_produto/pagina_lista_produto.php';return false;" name="continuar_comprando" value="CONTINUAR COMPRANDO" style="position:absolute;left:393px;top:400px;width:178px;height:25px;z-index:20;">
                <input type="submit" id="Button2" onclick="window.location.href='./dados_cliente.php';return false;" name="finalizar_compra" value="FINALIZAR COMPRA" style="position:absolute;left:591px;top:400px;width:153px;height:25px;z-index:21;">
                </form>
            </div>
		</div>
		<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:1271px;width:100%;height:35px;z-index:22;">
		</div>
	</body>
</html>