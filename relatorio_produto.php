<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: RELATÓRIO ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="relatorio_produto.css" rel="stylesheet">
	</head>
	<body>
		<div id="container">
			<div id="wb_Image1" style="position:absolute;left:10px;top:17px;width:140px;height:65px;z-index:4;">
				<a href="./../index.php"><img src="images/CAMISA_TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
			</div>
			<div id="wb_Text17" style="position:absolute;left:151px;top:30px;width:542px;height:42px;z-index:5;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:37px;">Relatório de Produtos</span>
			</div>
			<input type="submit" id="Button1" name="relatorio_produto" value="GERAR RELATÓRIO" style="position:absolute;left:363px;top:211px;width:144px;height:25px;z-index:6;">
			<input type="submit" id="Button2" name="cancelar" value="CANCELAR" style="position:absolute;left:530px;top:211px;width:144px;height:25px;z-index:7;">
			<div id="wb_Form1" style="position:absolute;left:10px;top:91px;width:681px;height:98px;z-index:8;">
				<form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
					<div id="wb_Text1" style="position:absolute;left:18px;top:22px;width:62px;height:16px;z-index:0;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Código</span>
					</div>
					<input type="number" id="Editbox1" style="position:absolute;left:99px;top:16px;width:113px;height:18px;line-height:18px;z-index:1;" name="cod_produto" value="" maxlength="12">
					<div id="wb_Text3" style="position:absolute;left:18px;top:60px;width:62px;height:16px;z-index:2;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Descrição</span>
					</div>
					<input type="text" id="Editbox2" style="position:absolute;left:98px;top:54px;width:554px;height:18px;line-height:18px;z-index:3;" name="descricao_produto" value="">
				</form>
			</div>
		</div>
	</body>
</html>