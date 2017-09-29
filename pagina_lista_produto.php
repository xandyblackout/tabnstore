<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: PRODUTOS ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="pagina_lista_produto.css" rel="stylesheet">
		<script src="jquery-1.12.4.min.js"></script>
		<script src="fancybox/jquery.easing-1.3.pack.js"></script>
		<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css">
		<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	</head>
	<body>
		<div id="container">
			<div id="Layer5" style="position:absolute;text-align:left;left:2px;top:180px;width:198px;height:450px;z-index:48;" title="layer_menu">
				<div id="wb_Heading11" style="position:absolute;left:11px;top:7px;width:100px;height:38px;z-index:28;">
					<h1 id="Heading11">Filtro</h1>
				</div>
				<div id="wb_Text15" style="position:absolute;left:2px;top:83px;width:48px;height:16px;z-index:29;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">categoria</span>
				</div>
				<div id="wb_Text16" style="position:absolute;left:2px;top:118px;width:73px;height:16px;z-index:30;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">marca</span>
				</div>
				<div id="wb_Text17" style="position:absolute;left:2px;top:213px;width:133px;height:18px;z-index:32;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:15px;"><strong>FAIXA DE PREÇO</strong></span>
				</div>
				<div id="wb_Text19" style="position:absolute;left:2px;top:245px;width:86px;height:16px;z-index:33;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">Até R$ 9,90</span>
				</div>
				<div id="wb_Text20" style="position:absolute;left:2px;top:269px;width:153px;height:16px;z-index:34;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">R$ 9,90 á R$ 49,99</span>
				</div>
				<div id="wb_Text20" style="position:absolute;left:2px;top:293px;width:153px;height:16px;z-index:34;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">R$ acima de R$ 49,99</span>
				</div>
			</div>
			<div id="wb_Form1" style="position:absolute;left:238px;top:180px;width:953px;height:1101px;z-index:49;">
				<form name="lista_produtos" method="post" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" id="Form1">
					<input type="hidden" name="formid" value="form1">
					<div id="wb_Heading10" style="position:absolute;left:50px;top:25px;width:172px;height:44px;z-index:35;">
						<h1 id="Heading10">Produtos</h1>
					</div>
					<div id="wb_Image1" style="position:absolute;left:87px;top:89px;width:196px;height:190px;z-index:36;">
						<a href="compra_produto.php"><img src="images/sem_imagem.jpg" id="Image1" alt=""></a>
					</div>
					<div id="wb_Text7" style="position:absolute;left:87px;top:287px;width:200px;height:32px;text-align:center;z-index:37;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">EXEMPLO DE DESCRIÇÃO DO PRODUTO A SER INSERIDO</span>
					</div>
					<div id="wb_Heading1" style="position:absolute;left:87px;top:323px;width:135px;height:38px;z-index:38;">
						<h1 id="Heading1">R$ 0,00<br></h1>
					</div>
					<input type="submit" id="Button2" onclick="window.location.href='area_compras.php';return false;" name="add_carrinho" value="Adicionar ao Carrinho" style="position:absolute;left:87px;top:369px;width:200px;height:25px;z-index:39;">
				</form>
			</div>
		</div>
		<div id="PageHeader1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:0px;width:100%;height:122px;z-index:7777;">
			<div id="PageHeader1_Container" style="width:1200px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
				<div id="Layer1" style="position:absolute;text-align:left;left:0px;top:0px;width:1196px;height:104px;z-index:8;">
					<div id="wb_LoginName1" style="position:absolute;left:211px;top:10px;width:242px;height:23px;z-index:1;">
						<span id="LoginName1">Bem Vindo<?php
						if (isset($_SESSION['username']))
						{
							echo $_SESSION['fullname'];
						}
						else
						{
							echo 'Não Conectado';
						}
						?>!</span></div>
					<input type="text" id="Editbox1" style="position:absolute;left:211px;top:60px;width:374px;height:18px;line-height:18px;z-index:2;" name="pesquisar" value="Procurar" maxlength="50" autofocus>
					<input type="submit" id="Button1" name="pesquisa" value="" style="position:absolute;left:616px;top:55px;width:38px;height:38px;z-index:3;">
						<div id="wb_logo_site" style="position:absolute;left:7px;top:10px;width:190px;height:88px;z-index:4;">
							<a href="index.php"><img src="images/CAMISA_TABN_VIRTUAL_STORE.jpg" id="logo_site" alt=""></a>
						</div>
						<div id="wb_Logout1" style="position:absolute;left:1143px;top:10px;width:34px;height:12px;z-index:5;">
							<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
								<input type="hidden" name="form_name" value="logoutform">
								<a id="Logout1" href="javascript:document.logoutform.submit()">Sair</a>
							</form>
						</div>
						<div id="wb_TextMenu1" style="position:absolute;left:793px;top:9px;width:203px;height:24px;text-align:center;z-index:6;">
							<span><a href="cadastro_cliente.php" title="minha_contas">Minha Conta</a></span><span><a href="area_compras.php" title="pedidos">Meus Pedidos</a></span>
						</div>
						<div id="Layer3" style="position:absolute;text-align:left;left:1037px;top:33px;width:150px;height:66px;z-index:7;">
							<div id="wb_Image10" style="position:absolute;left:15px;top:4px;width:65px;height:58px;z-index:0;">
							<a href="area_compras.php" title="carrinho_compra"><img src="images/img0009.png" id="Image10" alt=""></a></div>
						</div>
				</div>
			</div>
		</div>
		<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:1346px;width:100%;height:143px;z-index:50;">
			<div id="PageFooter1_Container" style="width:1200px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
				<div id="Layer4" style="position:absolute;text-align:left;left:0px;top:0px;width:1196px;height:128px;z-index:46;">
					<div id="Layer2" style="position:absolute;text-align:left;left:928px;top:27px;width:254px;height:65px;z-index:44;">
						<div id="wb_Image13" style="position:absolute;left:213px;top:27px;width:34px;height:30px;z-index:40;">
							<a href="javascript:displaylightbox('pagina_contato.php',{})" target="_self" title="pagina_contato_whatsapp"><img src="images/WhatsApp-icon.png" id="Image13" alt=""></a>
						</div>
						<div id="wb_Text2" style="position:absolute;left:44px;top:33px;width:166px;height:18px;z-index:41;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:16px;">tabnstore@gmail.com</span>
						</div>
						<div id="wb_Text3" style="position:absolute;left:6px;top:7px;width:95px;height:19px;z-index:42;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>CONTATOS</strong></span>
						</div>
						<div id="wb_Image7" style="position:absolute;left:6px;top:31px;width:33px;height:23px;z-index:43;">
							<img src="images/gmail-logo.png" id="Image7" alt="">
						</div>
					</div>
					<div id="wb_Image12" style="position:absolute;left:15px;top:0px;width:221px;height:103px;z-index:45;">
						<img src="images/CAMISA_TABN_VIRTUAL_STORE.jpg" id="Image12" alt="">
					</div>
				</div>
				<div id="wb_Text1" style="position:absolute;left:242px;top:62px;width:489px;height:34px;z-index:47;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:29px;"><strong>Aqui sua empresa vira destaque...</strong></span>
				</div>
			</div>
		</div>
		<script src="pagina_lista_produto.js"></script>
	</body>
</html>