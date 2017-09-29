<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: RELATÓRIO ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="relatorio_venda_cliente.css" rel="stylesheet">
	</head>
	<body>
		<div id="container">
			<div id="wb_Image1" style="position:absolute;left:10px;top:17px;width:140px;height:65px;z-index:6;">
				<a href="./../index.php"><img src="images/CAMISA_TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
			</div>
			<div id="wb_Text17" style="position:absolute;left:151px;top:30px;width:542px;height:42px;z-index:7;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:37px;">Relatório de Vendas por Clientes</span>
			</div>
			<input type="submit" id="Button1" name="relatorio_venda_cliente" value="GERAR RELATÓRIO" style="position:absolute;left:363px;top:235px;width:144px;height:25px;z-index:8;">
			<input type="submit" id="Button2" name="cancelar" value="CANCELAR" style="position:absolute;left:530px;top:235px;width:144px;height:25px;z-index:9;">
			<div id="wb_Form1" style="position:absolute;left:10px;top:96px;width:681px;height:99px;z-index:10;">
				<form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
					<div id="wb_Text5" style="position:absolute;left:477px;top:21px;width:55px;height:16px;z-index:0;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Data</span>
					</div>
					<div id="wb_Text1" style="position:absolute;left:20px;top:21px;width:62px;height:16px;z-index:1;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Código</span>
					</div>
					<input type="text" id="Editbox2" style="position:absolute;left:92px;top:55px;width:554px;height:18px;line-height:18px;z-index:2;" name="descricao_cliente" value="">
					<div id="wb_Text3" style="position:absolute;left:20px;top:52px;width:62px;height:32px;z-index:3;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Nome do Cliente</span>
					</div>
					<input type="number" id="Editbox1" style="position:absolute;left:91px;top:15px;width:113px;height:18px;line-height:18px;z-index:4;" name="cpf_cliente" value="" maxlength="10">
					<input type="date" id="Editbox3" style="position:absolute;left:532px;top:15px;width:113px;height:18px;line-height:18px;z-index:5;" name="data_atual" value="" maxlength="8">
				</form>
			</div>
		</div>
	</body>
</html>