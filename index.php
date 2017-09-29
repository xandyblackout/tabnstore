 <?php  
        /*session_start();
        if((!isset ($_SESSION['cpf_cliente']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            unset($_SESSION['cpf_cliente']);
            unset($_SESSION['senha']);
            header('location:index.php');
            }
        $logado = $_SESSION['login'];*/

        /*session_start();
        if(empty($_SESSION['login'])) { ?>
        <script>location='index.php';</script> <?php
        exit;
        }*/
?>
<!doctype html>
<html lang="pt-br">
	<head>
        <meta charset="utf-8">
        <title>.:: PRINCIPAL ::.</title>
        <meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
        <link href="extra.png" rel="shortcut icon" type="image/x-icon">
        <link href="font-awesome.min.css" rel="stylesheet">
        <link href="projeto_tabn_store.css" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
        <script src="jquery-1.12.4.min.js"></script>
        <script src="wb.carousel.min.js"></script>
        <script src="fancybox/jquery.easing-1.3.pack.js"></script>
        <link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css">
        <script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	</head>
<body>
	<div id="PageHeader1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:0px;width:100%;height:122px;z-index:7777;">
		<div id="PageHeader1_Container" style="width:1200px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
			<div id="Layer1" style="position:absolute;text-align:left;left:0px;top:0px;width:1196px;height:104px;z-index:11;">
				<div id="wb_LoginName1" style="position:absolute;left:211px;top:10px;width:242px;height:23px;z-index:1;">
				    <span id="LoginName1">Bem Vindo:
                        <?php
                            /*if (isset($_SESSION['login'])){
                               echo $_SESSION['login'];
                            }else{
                               echo '';
                            }*/
                        ?>
                    </span>
                </div>
					<input type="text" id="Editbox1" style="position:absolute;left:211px;top:60px;width:374px;height:18px;line-height:18px;z-index:2;" name="pesquisar" value="Procure o produto desejado?" maxlength="50" autofocus>
					<input type="submit" id="Button1" name="pesquisa" value="" style="position:absolute;left:616px;top:55px;width:38px;height:38px;z-index:3;">
					<div id="wb_Text4" style="position:absolute;left:792px;top:66px;width:109px;height:16px;z-index:4;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;"><strong>Novo Usuário(a)</strong></span>
					</div>
					<div id="wb_logo_site" style="position:absolute;left:7px;top:10px;width:190px;height:88px;z-index:5;">
						<a href="index.php"><img src="images/TABN_VIRTUAL_STORE.jpg" id="logo_site" alt=""></a>
					</div>
					<div id="wb_Text5" style="position:absolute;left:901px;top:66px;width:77px;height:16px;z-index:6;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;"><a href="cadastro_cliente.php?acao=inserir" title="cadastrar_usuario">Cadastra-se</a></span>
					</div>
					<div id="wb_Text6" style="position:absolute;left:978px;top:66px;width:40px;height:16px;z-index:7;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;"><a href="efetuar_login.php" title="efetuar_login">Entrar</a></span>
					</div>
					<div id="wb_Logout1" style="position:absolute;left:1143px;top:10px;width:34px;height:12px;z-index:8;">
						<form name="logoutform" method="post" action="login.php">
							<input type="hidden" name="form_name" value="logoutform">
							<a id="Logout1" href="logout.php">Sair</a>
						</form>
					</div>
					<div id="wb_TextMenu1" style="position:absolute;left:792px;top:9px;width:203px;height:24px;text-align:center;z-index:9;">
						<span><a href="./dados_cliente.php" title="minha_contas">Minha Conta</a></span><span><a href="./area_compras.php" title="pedidos">Meus Pedidos</a></span>
					</div>
				<div id="Layer3" style="position:absolute;text-align:left;left:1037px;top:33px;width:150px;height:66px;z-index:10;">
					<div id="wb_Image10" style="position:absolute;left:15px;top:4px;width:65px;height:58px;z-index:0;">
						<a href="./area_compras.php" title="carrinho_compra"><img src="images/img0001.png" id="Image10" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="container">
		<div id="wb_giro_promocao" style="position:absolute;left:45px;top:219px;width:1110px;height:380px;z-index:43;overflow:hidden;">
			<div id="giro_promocao" style="position:absolute">
				<div class="frame frame-1"> </div>
				<div class="frame frame-2"> </div>
				<div class="frame frame-3"> </div>
				<div class="frame frame-4"> </div>
				<div class="frame frame-5"> </div>
			</div>
			<div id="giro_promocao_back" style="position:absolute;left:4px;top:46%;width:30px;height:30px;z-index:999">
				<a style="cursor:pointer"><img alt="Back" style="border-width:0" src="images/carousel_back.png"></a>
			</div>
			<div id="giro_promocao_next" style="position:absolute;right:4px;top:46%;width:30px;height:30px;z-index:999">
				<a style="cursor:pointer"><img alt="Next" style="border-width:0" src="images/carousel_next.png"></a>
			</div>
		</div>
			<div id="wb_Text7" style="position:absolute;left:435px;top:713px;width:359px;height:62px;z-index:44;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:53px;"><strong>CATEGORIAS</strong></span>
			</div>
			<div id="wb_Image8" style="position:absolute;left:204px;top:810px;width:152px;height:236px;z-index:45;">
				<a href="pagina_lista_produto.php"><img src="images/img0006.png" id="Image8" alt="" title="CAMISA"></a>
			</div>
			<div id="wb_Image9" style="position:absolute;left:524px;top:810px;width:154px;height:235px;z-index:46;">
				<a href="pagina_lista_produto.php"><img src="images/img0007.png" id="Image9" alt="" title="WHISKY"></a>
			</div>
			<div id="wb_Image11" style="position:absolute;left:845px;top:811px;width:167px;height:234px;z-index:47;">
				<a href="pagina_lista_produto.php"><img src="images/img0008.png" id="Image11" alt="" title="VINHOS"></a>
			</div>
			<div id="wb_Breadcrumb1" style="position:absolute;left:492px;top:108px;width:196px;height:34px;z-index:48;">
				<ul id="Breadcrumb1">
				<li><a href="pagina_quem_somos.php"><i class="fa fa-user-o">&nbsp;</i>Quem Somos N&#243;s</a></li>
				</ul>
			</div>
			<div id="wb_botão_menu" style="position:absolute;left:0px;top:122px;width:76px;height:80px;z-index:49;">
					<label class="toggle" for="botão_menu-submenu" id="botão_menu-title"><span id="botão_menu-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
					<input type="checkbox" id="botão_menu-submenu">
				<ul class="botão_menu" id="botão_menu">
					<li>
						<label for="botão_menu-submenu-0" class="toggle"><i class="fa fa-bars fa-2x">&nbsp;</i><b class="arrow-down"></b></label>
						<a href="index.php" title="home"><i class="fa fa-bars fa-2x">&nbsp;</i><br><b class="arrow-down"></b></a>
						<input type="checkbox" id="botão_menu-submenu-0">
						<ul>
							<li><a href="area_admin.php" title="administrativo"><i class="fa fa-user-circle-o fa-2x">&nbsp;</i>Administrativo</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div id="wb_Text8" style="position:absolute;left:227px;top:1024px;width:132px;height:29px;z-index:50;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>CERVEJAS</strong></span>
			</div>
			<div id="wb_Text9" style="position:absolute;left:565px;top:1024px;width:99px;height:29px;z-index:51;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>WHISKY</strong></span>
			</div>
			<div id="wb_Text10" style="position:absolute;left:893px;top:1024px;width:97px;height:29px;z-index:52;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>VINHOS</strong></span>
			</div>
			<div id="wb_Text11" style="position:absolute;left:438px;top:1117px;width:353px;height:41px;z-index:53;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:35px;"><strong>MARCAS CERVEJAS</strong></span>
			</div>
			<div id="wb_Image1" style="position:absolute;left:17px;top:1195px;width:130px;height:132px;z-index:54;">
				<img src="images/bebidas13.jpg" id="Image1" alt="">
			</div>
			<div id="wb_Image2" style="position:absolute;left:178px;top:1195px;width:135px;height:132px;z-index:55;">
				<img src="images/bebidas14.png" id="Image2" alt="">
			</div>
			<div id="wb_Image3" style="position:absolute;left:344px;top:1195px;width:142px;height:132px;z-index:56;">
				<img src="images/bebidas15.png" id="Image3" alt="">
			</div>
			<div id="wb_Image4" style="position:absolute;left:522px;top:1196px;width:139px;height:131px;z-index:57;">
				<img src="images/bebidas16.jpg" id="Image4" alt="">
			</div>
			<div id="wb_Image5" style="position:absolute;left:704px;top:1198px;width:133px;height:127px;z-index:58;">
				<img src="images/bebidas17.jpg" id="Image5" alt="">
			</div>
			<div id="wb_Image6" style="position:absolute;left:873px;top:1198px;width:136px;height:127px;z-index:59;">
				<img src="images/bebidas19.jpg" id="Image6" alt="">
			</div>
			<div id="wb_Image14" style="position:absolute;left:1055px;top:1198px;width:119px;height:127px;z-index:60;">
				<img src="images/bebidas20.jpg" id="Image14" alt="">
			</div>
	</div>

	<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:1448px;width:100%;height:143px;z-index:61;">
		<div id="PageFooter1_Container" style="width:1200px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
			<div id="Layer4" style="position:absolute;text-align:left;left:0px;top:0px;width:1196px;height:105px;z-index:42;">
					<div id="wb_Text1" style="position:absolute;left:240px;top:60px;width:432px;height:34px;z-index:39;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:29px;"><strong>Aqui sua loja vira destaque...</strong></span>
					</div>
					<div id="Layer2" style="position:absolute;text-align:left;left:928px;top:27px;width:254px;height:65px;z-index:40;">
						<div id="wb_Image13" style="position:absolute;left:213px;top:27px;width:34px;height:30px;z-index:35;">
							<a href="javascript:displaylightbox('pagina_contato.php',{})" target="_self" title="pagina_contato_whatsapp"><img src="images/WhatsApp-icon.png" id="Image13" alt=""></a>
						</div>
						<div id="wb_Text2" style="position:absolute;left:44px;top:33px;width:166px;height:18px;z-index:36;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:16px;">tabnstore@gmail.com</span>
						</div>
						<div id="wb_Text3" style="position:absolute;left:6px;top:7px;width:95px;height:19px;z-index:37;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>CONTATOS</strong></span>
						</div>
						<div id="wb_Image7" style="position:absolute;left:6px;top:31px;width:33px;height:23px;z-index:38;">
							<img src="images/gmail-logo.png" id="Image7" alt="">
						</div>
					</div>
					<div id="wb_Image12" style="position:absolute;left:15px;top:0px;width:221px;height:103px;z-index:41;">
						<img src="images/TABN_VIRTUAL_STORE.jpg" id="Image12" alt="">
					</div>
			</div>
		</div>
	</div>
		<script src="index.js"></script>
	</body>
</html>