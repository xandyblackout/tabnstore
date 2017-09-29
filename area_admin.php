<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: AREA ADMINISTRATIVA  ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="font-awesome.min.css" rel="stylesheet">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="area_admin.css" rel="stylesheet">
		<script src="jquery-1.12.4.min.js"></script>
		<script src="wb.panel.min.js"></script>
	</head>
	<body>
		<div id="container">
			<div id="wb_PanelMenu1" style="position:absolute;left:19px;top:17px;width:194px;height:33px;z-index:0;">
					<a href="#PanelMenu1_markup" id="PanelMenu1">&nbsp; CADASTROS</a>
				<div id="PanelMenu1_markup">
					<ul>
					   <li><a href="lista_produto.php" title="cadastro_marcas"><i class="fa fa-address-card fa-fw">&nbsp;</i><span>PRODUTOS</span></a></li>
					   <li><a href="lista_categoria.php" title="cadastro_categoria"><i class="fa fa-address-card fa-fw">&nbsp;</i><span>CATEGORIAS</span></a></li>
					   <li><a href="lista_marca.php" title="cadastro"><i class="fa fa-address-card fa-fw">&nbsp;</i><span>MARCAS</span></a></li>
					</ul>
				</div> 
			</div>
			<div id="wb_Text1" style="position:absolute;left:310px;top:143px;width:273px;height:32px;z-index:1;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:27px;"><strong> Área Administrativa</strong></span>
			</div>
			<div id="wb_Image1" style="position:absolute;left:308px;top:17px;width:273px;height:109px;z-index:2;">
				<a href="./index.php"><img src="images/TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
			</div>
			<div id="wb_Text7" style="position:absolute;left:261px;top:192px;width:367px;height:22px;z-index:3;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:19px;">Área com permissão administrativa do site</span>
			</div>
			<div id="wb_PanelMenu3" style="position:absolute;left:19px;top:68px;width:194px;height:33px;z-index:4;">
				<a href="#PanelMenu3_markup" id="PanelMenu3">&nbsp; RELATORIOS</a>
				<div id="PanelMenu3_markup">
					<ul>
						<li><a href="relatorio_venda.php" title="relatorio_venda"><i class="fa fa-file-o fa-fw">&nbsp;</i><span>VENDAS</span></a></li>
						<li><a href="relatorio_produto.php" title="realizar_compras"><i class="fa fa-file-o fa-fw">&nbsp;</i><span>PRODUTOS</span></a></li>
						<li><a href="relatorio_cliente.php" title="relatorio_cliente"><i class="fa fa-file-o fa-fw">&nbsp;</i><span>CLIENTES</span></a></li>
						<li><a href="relatorio_venda_produto_mensal.php" title="relatorio_venda_produto_mensal"><i class="fa fa-file-o fa-fw">&nbsp;</i><span>VENDA&nbsp; PRODUTO MENSAL</span></a></li>
						<li><a href="relatorio_venda_cliente.php" title="relatorio_venda_cliente"><i class="fa fa-file-o fa-fw">&nbsp;</i><span>VENDAS POR CLIENTES</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<script src="area_admin.js"></script>
	</body>
</html>