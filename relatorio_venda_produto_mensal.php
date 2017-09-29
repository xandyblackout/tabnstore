<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: RELATÓRIO ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="relatorio_venda_produto_mensal.css" rel="stylesheet">
	</head>
	<body>
		<div id="container">
			<div id="wb_Image1" style="position:absolute;left:10px;top:17px;width:140px;height:65px;z-index:6;">
				<a href="./../index.php"><img src="images/CAMISA_TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
			</div>
			<div id="wb_Text17" style="position:absolute;left:150px;top:6px;width:542px;height:84px;z-index:7;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:37px;">Relatório de Vendas dos Produtos por Mês</span>
			</div>
			<input type="submit" id="Button1" name="relatorio_venda" value="GERAR RELATÓRIO" style="position:absolute;left:371px;top:225px;width:144px;height:25px;z-index:8;">
			<input type="submit" id="Button2" name="cancelar" value="CANCELAR" style="position:absolute;left:530px;top:225px;width:144px;height:25px;z-index:9;">
			<div id="wb_Form1" style="position:absolute;left:10px;top:108px;width:680px;height:98px;z-index:10;">
				<form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
					<div id="wb_Text5" style="position:absolute;left:254px;top:19px;width:55px;height:16px;z-index:0;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Mês</span>
					</div>
					<input type="number" id="Editbox8" style="position:absolute;left:98px;top:14px;width:113px;height:18px;line-height:18px;z-index:1;" name="codigo_produto" value="" maxlength="15">
					<input type="text" id="Editbox6" style="position:absolute;left:98px;top:55px;width:555px;height:18px;line-height:18px;z-index:2;" name="descricao_produto" value="">
					<input type="date" id="Editbox3" style="position:absolute;left:309px;top:13px;width:113px;height:18px;line-height:18px;z-index:3;" name="mes_atual" value="" maxlength="8" required pattern="(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.](19|20)[0-9]{2}">
					<div id="wb_Text8" style="position:absolute;left:18px;top:12px;width:62px;height:32px;z-index:4;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Código do Produto</span>
					</div>
					<div id="wb_Text6" style="position:absolute;left:18px;top:54px;width:80px;height:32px;z-index:5;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Descrição do Produto</span>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>