<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: REALIZAR VENDA ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="realizar_venda.css" rel="stylesheet">
	</head>
	<body>
		<div id="container">
			<div id="logo_site" style="position:absolute;left:10px;top:17px;width:140px;height:65px;z-index:13;">
				<a href="./index.php"><img src="images/TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
			</div>
			<div id="wb_Text17" style="position:absolute;left:151px;top:31px;width:542px;height:42px;z-index:14;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:37px;">Forma de Pagamento</span>
			</div>
			<input type="submit" id="Button1" name="criar" value="FINALIZAR" style="position:absolute;left:358px;top:397px;width:144px;height:25px;z-index:15;">
			<input type="submit" id="Button2" name="cancelar" value="CANCELAR" style="position:absolute;left:528px;top:397px;width:144px;height:25px;z-index:16;">
			<div id="wb_Form1" style="position:absolute;left:8px;top:95px;width:689px;height:276px;z-index:17;">
				<form name="realizar_venda" method="post" action=" " enctype="text/plain" id="Form1" onsubmit="return ValidateForm1(this)">
					<div id="wb_Text8" style="position:absolute;left:28px;top:22px;width:52px;height:32px;z-index:0;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Número Pedido</span>
					</div>
					<input type="number" id="Editbox8" style="position:absolute;left:108px;top:24px;width:113px;height:18px;line-height:18px;z-index:1;" name="Editbox1" value="" maxlength="10">
					<div id="wb_Text4" style="position:absolute;left:27px;top:73px;width:70px;height:16px;z-index:2;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Cliente</span>
					</div>
					<div id="wb_Text1" style="position:absolute;left:108px;top:73px;width:299px;height:16px;z-index:3;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">NOME DO CLIENTE APARECE NESSA AREA</span>
					</div>
					<div id="wb_Text2" style="position:absolute;left:27px;top:128px;width:113px;height:24px;z-index:4;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:21px;"><strong>Valor Total</strong></span>
					</div>
					<div id="wb_Text3" style="position:absolute;left:140px;top:128px;width:40px;height:32px;z-index:5;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:27px;"><strong>R$</strong></span>
					</div>
					<div id="wb_Text10" style="position:absolute;left:180px;top:128px;width:126px;height:41px;z-index:6;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:35px;"><strong>0,00</strong></span>
					</div>
					<div id="wb_Text7" style="position:absolute;left:446px;top:31px;width:79px;height:16px;z-index:7;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Data Venda</span>
					</div>
					<div id="wb_Text6" style="position:absolute;left:319px;top:204px;width:70px;height:16px;z-index:8;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Nº Parcela</span>
					</div>
					<div id="wb_Text9" style="position:absolute;left:28px;top:195px;width:70px;height:32px;z-index:9;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Forma de<br>pagamento</span>
					</div>
					<select name="Combobox1" size="1" id="Combobox1" style="position:absolute;left:108px;top:198px;width:137px;height:28px;z-index:10;">
						<option selected value="a_vista">A VISTA</option>
						<option value="parcela">PARCELADO</option>
					</select>
					<select name="Combobox1" size="1" id="Combobox4" style="position:absolute;left:407px;top:198px;width:123px;height:28px;z-index:11;">
						<option selected value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
					<input type="datetime" id="Editbox3" style="position:absolute;left:538px;top:25px;width:113px;height:18px;line-height:18px;z-index:12;" name="Editbox1" value="" maxlength="10">
				</form>
			</div>
		</div>
		<script src="realizar_venda.js"></script>
	</body>
</html>