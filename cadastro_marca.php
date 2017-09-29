<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: CADASTRAR MARCA ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="cadastro_marca.css" rel="stylesheet">
        <link href="jquery-1.12.4.min.js">
        <link href="jquery.ui.effect-slide.min.js">
        <link href="jquery.ui.effect.min.js">
	</head>
	<body>
		<div id="container">
			<div id="wb_Image1" style="position:absolute;left:10px;top:6px;width:140px;height:65px;z-index:4;">
                <a href="area_admin.php"><img src="images/CAMISA_TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
            </div>
			<div id="wb_Text17" style="position:absolute;left:150px;top:17px;width:550px;height:42px;z-index:5;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:37px;">CADASTRO DE MARCA</span>
			</div>
			
			<div id="wb_Form1" style="position:absolute;left:8px;top:79px;width:688px;height:103px;z-index:10;">
                
				<form method="get" action="salvar_marca.php?acao=inserir">
					<input type="hidden" name="formid" value="">
                    <input type="hidden" name="acao" value="<?php echo $_GET['acao']; ?>">
					<input type="number" id="cod_marca" style="position:absolute;left:94px;top:13px;width:113px;height:18px;line-height:18px;z-index:0;" name="cod_marca" value="" maxlength="12">
					<input type="text" id="descricao_marca" style="position:absolute;left:94px;top:52px;width:571px;height:18px;line-height:18px;z-index:3;" name="descricao_marca" value="">
					<div id="wb_Text1" style="position:absolute;left:12px;top:19px;width:50px;height:16px;z-index:1;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Código</span>
					</div>
					<div id="wb_Text3" style="position:absolute;left:12px;top:50px;width:62px;height:32px;z-index:2;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">Descrição<br>Marca</span>
					</div>
					
					<input type="submit" id="Button3" name="gravar" value="GRAVAR" style="position:absolute;left:476px;top:120px;width:96px;height:25px;z-index:8;">
					<input type="reset" id="Button4" name="cancelar" value="CANCELAR" style="position:absolute;left:591px;top:120px;width:96px;height:25px;z-index:9;">
				</form>
			</div>
		</div>
	</body>
    <script>
        alert('<?php echo $msg; ?>');
    </script>
</html>