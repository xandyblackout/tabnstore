<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: CADASTRAR CATEGORIA ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="cadastro_categoria.css" rel="stylesheet">
	</head>
	<body>
		<div id="container">
				<div id="wb_Image1" style="position:absolute;left:10px;top:5px;width:140px;height:65px;z-index:4;">
					<a href="area_admin.php"><img src="images/CAMISA_TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
				</div>
				<div id="wb_Text17" style="position:absolute;left:150px;top:16px;width:551px;height:42px;z-index:5;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:37px;">CADASTRO DE CATEGORIA</span>
				</div>

				<div id="wb_Form1" style="position:absolute;left:10px;top:82px;width:689px;height:98px;z-index:10;">
				    <form method="GET" action="salvar_categoria.php">
						<input type="hidden" name="formid" value="form1">
						<input type="hidden" name="codigo" value="">
						<input type="number" id="Editbox1"style="position:absolute;left:93px;top:12px;width:113px;height:18px;line-height:18px;z-index:0;" name="cod_categoria" value="" maxlength="12">
						<input type="text" id="Editbox2" style="position:absolute;left:93px;top:50px;width:571px;height:18px;line-height:18px;z-index:1;" name="descricao_categoria" value="">
						<div id="wb_Text1" style="position:absolute;left:10px;top:18px;width:50px;height:16px;z-index:2;text-align:left;">
                            <span style="color:#000000;font-family:Arial;font-size:13px;">Código</span></div>
						<div id="wb_Text3" style="position:absolute;left:10px;top:48px;width:62px;height:32px;z-index:3;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:13px;">Descrição<br>Categoria</span>
						</div>
                      
                        <input type="submit" id="Button3" name="gravar" value="GRAVAR" style="position:absolute;left:475px;top:120px;width:96px;height:25px;z-index:8;">
                        <input type="submit" id="Button4" name="cancelar" value="CANCELAR" style="position:absolute;left:591px;top:120px;width:96px;height:25px;z-index:9;">  
					</form>
				</div>
		</div>
	</body>
    <script>
        alert('<?php echo $msg; ?>');
    </script>
</html>