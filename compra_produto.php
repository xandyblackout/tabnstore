<?php
	if (session_id() == "")
	{
	   session_start();
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'logoutform')
	{
	   if (session_id() == "")
	   {
		  session_start();
	   }
	   unset($_SESSION['cpf_cliente']);
	   unset($_SESSION['nome_cliente']);
	   header('Location: ./compra_produto.php');
	   exit;
	}
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: DETALHES DOS PRODUTOS ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="compra_produto.css" rel="stylesheet">
		<script src="jquery-1.12.4.min.js"></script>
		<script src="fancybox/jquery.easing-1.3.pack.js"></script>
		<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css">
		<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
		<link rel="stylesheet" href="prettyPhoto/css/prettyPhoto.css">
		<script src="prettyPhoto/js/jquery.prettyPhoto.js"></script>
	</head>
	<body>
		<div id="container">
			<div id="wb_Form1" style="position:absolute;left:199px;top:122px;width:779px;height:693px;z-index:54;">
				<form name="tela_produto" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
					<div id="wb_Text7" style="position:absolute;left:483px;top:39px;width:278px;height:27px;z-index:12;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:24px;">Cerveja Brahma Litrão 1L</span>
					</div>
					<div id="wb_Text8" style="position:absolute;left:483px;top:82px;width:250px;height:16px;z-index:13;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Beba bem gelado</span>
					</div>
					<div id="wb_Text9" style="position:absolute;left:483px;top:150px;width:45px;height:34px;z-index:14;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:29px;"><strong>R$</strong></span>
					</div>
					<div id="wb_Text10" style="position:absolute;left:528px;top:150px;width:197px;height:83px;z-index:15;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:75px;">5,50</span>
					</div>
					<div id="SlideShow1" style="position:absolute;left:102px;top:39px;width:254px;height:416px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;z-index:16;">
						<a href="images/garrafa_brahma600ml.png" data-rel="prettyPhoto_SlideShow1[SlideShow1]"><img class="image" src="images/garrafa_brahma600ml.png" alt="" title=""></a>
						<a href="images/garrafa_brahma600ml2.png" data-rel="prettyPhoto_SlideShow1[SlideShow1]"><img class="image" src="images/garrafa_brahma600ml2.png" style="display:none;" alt="" title=""></a>
						<a href="images/Cerveja_Brahma300ml.jpg" data-rel="prettyPhoto_SlideShow1[SlideShow1]"><img class="image" src="images/Cerveja_Brahma300ml.jpg" style="display:none;" alt="" title=""></a>
					</div>
					<input type="submit" id="Button2" onclick="window.location.href='./realizar_venda.php';return false;" name="comprar" value="COMPRAR" style="position:absolute;left:481px;top:341px;width:254px;height:42px;z-index:17;">
					<div id="wb_Text11" style="position:absolute;left:520px;top:270px;width:96px;height:19px;z-index:18;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>Quantidade</strong></span>
					</div>
					<div id="wb_Text14" style="position:absolute;left:45px;top:569px;width:686px;height:96px;z-index:19;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:21px;">Quando o assunto é classificar cerveja, surgem diversas maneiras formais e informais de classificá-las. Um exemplo disso é a classificação das cervejas como fraca, extra ou forte. Ou quando alusivamente classificamos pelo teor alcoólico baixo, moderado ou forte.</span>
					</div>
					<input type="submit" id="Button3" onclick="window.location.href='./area_compras.php';return false;" name="adiciona_carrinho" value="Adicionar ao Carrinho" style="position:absolute;left:129px;top:467px;width:200px;height:25px;z-index:20;">
					<div id="wb_Text15" style="position:absolute;left:47px;top:530px;width:365px;height:32px;z-index:21;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:27px;"><strong>DETALHES DO PRODUTO</strong></span>
					</div>
					<input type="number" id="Editbox2" style="position:absolute;left:631px;top:265px;width:84px;height:18px;line-height:18px;z-index:22;" name="quantidade" value="1" maxlength="100">
				</form>
			</div>
		</div>
		<div id="PageHeader1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:0px;width:100%;height:122px;z-index:7777;">
			<div id="PageHeader1_Container" style="width:1200px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
				<div id="Layer1" style="position:absolute;text-align:left;left:0px;top:0px;width:1196px;height:104px;z-index:11;">
					<div id="wb_LoginName1" style="position:absolute;left:211px;top:10px;width:242px;height:23px;z-index:1;">
						<span id="LoginName1">Bem Vindo<?php
						if (isset($_SESSION['cpf_cliente']))
						{
						   echo $_SESSION['nome_cliente'];
						}
						else
						{
						   echo 'Não Conectado';
						}
						?>!</span>
					</div>
					<input type="text" id="Editbox1" style="position:absolute;left:211px;top:60px;width:374px;height:18px;line-height:18px;z-index:2;" name="pesquisar" value="Procurar" maxlength="50" autofocus>
					<input type="submit" id="Button1" name="pesquisa" value="" style="position:absolute;left:616px;top:55px;width:38px;height:38px;z-index:3;">
						<div id="wb_Text4" style="position:absolute;left:792px;top:66px;width:109px;height:16px;z-index:4;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:13px;"><strong>Novo Usuário(a)</strong></span>
						</div>
						<div id="wb_logo_site" style="position:absolute;left:7px;top:10px;width:190px;height:88px;z-index:5;">
							<a href="index.php"><img src="images/TABN_VIRTUAL_STORE.jpg" id="logo_site" alt=""></a>
						</div>
						<div id="wb_Text5" style="position:absolute;left:901px;top:66px;width:77px;height:16px;z-index:6;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:13px;"><a href="#" title="cadastrar_usuario">Cadastra-se</a></span>
						</div>
						<div id="wb_Text6" style="position:absolute;left:978px;top:66px;width:40px;height:16px;z-index:7;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:13px;"><a href="./login/fazer_login.php" title="fazer_login">Entrar</a></span>
						</div>
						<div id="wb_Logout1" style="position:absolute;left:1143px;top:10px;width:34px;height:12px;z-index:8;">
							<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
								<input type="hidden" name="form_name" value="logoutform">
								<a id="Logout1" href="javascript:document.logoutform.submit()">Sair</a>
							</form>
						</div>
						<div id="wb_TextMenu1" style="position:absolute;left:793px;top:9px;width:203px;height:24px;text-align:center;z-index:9;">
							<span><a href="./cadastro/cadastro_cliente.php" title="minha_contas">Minha Conta</a></span><span><a href="area_compras.php" title="pedidos">Meus Pedidos</a></span>
						</div>
						<div id="Layer3" style="position:absolute;text-align:left;left:1037px;top:33px;width:150px;height:66px;z-index:10;">
							<div id="wb_Image10" style="position:absolute;left:15px;top:4px;width:65px;height:58px;z-index:0;">
								<a href="area_compras.php" title="carrinho_compra"><img src="images/img0010.png" id="Image10" alt=""></a>
							</div>
						</div>
				</div>
			</div>
		</div>
			<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:830px;width:100%;height:143px;z-index:55;">
				<div id="PageFooter1_Container" style="width:1200px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
					<div id="Layer4" style="position:absolute;text-align:left;left:0px;top:0px;width:1196px;height:105px;z-index:53;">
						<div id="wb_Text1" style="position:absolute;left:240px;top:60px;width:432px;height:34px;z-index:50;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:29px;"><strong>Aqui sua loja vira destaque...</strong></span>
						</div>
						<div id="Layer2" style="position:absolute;text-align:left;left:928px;top:27px;width:254px;height:65px;z-index:51;">
							<div id="wb_Image13" style="position:absolute;left:213px;top:27px;width:34px;height:30px;z-index:46;">
								<a href="javascript:displaylightbox('./login/pagina_contato.php',{})" target="_self" title="pagina_contato_whatsapp"><img src="images/WhatsApp-icon.png" id="Image13" alt=""></a>
							</div>
							<div id="wb_Text2" style="position:absolute;left:44px;top:33px;width:166px;height:18px;z-index:47;text-align:left;">
								<span style="color:#000000;font-family:Arial;font-size:16px;">tabnstore@gmail.com</span>
							</div>
							<div id="wb_Text3" style="position:absolute;left:6px;top:7px;width:95px;height:19px;z-index:48;text-align:left;">
								<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>CONTATOS</strong></span>
							</div>
							<div id="wb_Image7" style="position:absolute;left:6px;top:31px;width:33px;height:23px;z-index:49;">
								<img src="images/gmail-logo.png" id="Image7" alt="">
							</div>
						</div>
						<div id="wb_Image12" style="position:absolute;left:15px;top:0px;width:221px;height:103px;z-index:52;">
							<img src="images/TABN_VIRTUAL_STORE.jpg" id="Image12" alt="">
						</div>
					</div>
				</div>
			</div>
		<script src="compra_produto.js"></script>
	</body>
</html>