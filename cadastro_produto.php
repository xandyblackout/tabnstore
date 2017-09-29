<!doctype html>
<?php
    include "conexao_banco.php";
   $sql = "SELECT cod_marca, descricao_marca FROM marca";
    $rs = mysqli_query($link, $sql);
    $marca = array();
    while($r = mysqli_fetch_array($rs)) {
        $marca[] = $r;
    }
    $sql = "SELECT cod_categoria, descricao_categoria FROM categoria";
    $rs = mysqli_query($link, $sql);
    $categoria = array();
    while($r = mysqli_fetch_array($rs)) {
        $categoria[] = $r;
    }   

    $r = array();
    @$r['cod_produto'] = $_GET['cod_produto'];
    $r['descricao_produto'] = null;
    $r['preco_produto'] = null;
    $r['qtde_produto'] = null;
    $r['descricao_marca'] = null;
    $r['descricao_categoria'] = null;

        if(!empty($r['descricao_produto'])) {
        $sql = "SELECT descricao_produto, preco_produto, qtde_produto, descricao_marca, descricao_categoria
                FROM produto, marca, categoria
                WHERE cod_produto=".$r['cod_produto'];
        echo $sql."<br>";
        $rs = mysqli_query($link,$sql);
        $r = mysqli_fetch_array($rs);
        mysqli_close($link);
    }
?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: CADASTRAR PRODUTO ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="cadastro_produto.css" rel="stylesheet">
	</head>
	<body>
		<div id="container">
			<div id="wb_Image1" style="position:absolute;left:17px;top:19px;width:140px;height:65px;z-index:16;">
				<a href="area_admin.php"><img src="images/CAMISA_TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
			</div>
			<div id="wb_Text17" style="position:absolute;left:157px;top:30px;width:551px;height:42px;z-index:17;text-align:left;">
				<span style="color:#000000;font-family:Arial;font-size:37px;">CADASTRO DE PRODUTO</span>
			</div>
			<div id="wb_Form1" style="position:absolute;left:17px;top:93px;width:705px;height:220px;z-index:22;">
			<form method="GET" action="salvar_produto.php">
				    <input type="hidden" name="formid" value="form1">
				<div id="wb_Text2" style="position:absolute;left:8px;top:130px;width:50px;height:16px;z-index:0;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">Preço</span>
				</div>
                    <input type="text" id="Editbox4" style="position:absolute;left:90px;top:124px;width:233px;height:18px;line-height:18px;z-index:5;" name="preco_produto" value="">
                
				<div id="wb_Text13" style="position:absolute;left:8px;top:161px;width:70px;height:32px;z-index:1;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">Imagem do Produto</span>
				</div>
                    <input type="file" id="FileUpload1" style="position:absolute;left:90px;top:162px;width:275px;height:28px;line-height:28px;z-index:6;" name="imagem_produtos">
			
				<div id="wb_Text5" style="position:absolute;left:8px;top:51px;width:70px;height:16px;z-index:3;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">Descrição</span>
				</div>
                    <input type="text" id="Editbox2" style="position:absolute;left:90px;top:45px;width:593px;height:18px;line-height:18px;z-index:15;" name="descricao_produto" value="">
				    
				<div id="wb_Text6" style="position:absolute;left:356px;top:90px;width:50px;height:16px;z-index:7;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">Marca</span>
				</div>
                    <select name="marca" size="1" id="Combobox6" style="position:absolute;left:450px;top:84px;width:243px;height:28px;z-index:13;">
                       <?php 
                        for($i=0; $i<count($marca); $i++) { 
                            $r = $marca[$i]; ?>
                            <option value="<?php echo $r['cod_marca']; ?>"><?php echo $r['descricao_marca']; ?></option>
                        <?php } ?>
				    </select>
                
				<div id="wb_Text10" style="position:absolute;left:356px;top:129px;width:77px;height:16px;z-index:8;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">Quantidade</span>
				</div>
                    <input type="text" id="Editbox10" style="position:absolute;left:451px;top:123px;width:232px;height:18px;line-height:18px;z-index:14;" name="qtde_produto" value="">
                
				<div id="wb_Text1" style="position:absolute;left:8px;top:14px;width:50px;height:16px;z-index:9;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">Código</span>
				</div>
                    <input type="text" id="Editbox1" style="position:absolute;left:90px;top:8px;width:113px;height:18px;line-height:18px;z-index:2;" name="cod_produto" value="" maxlength="12">
                
				<div id="wb_Text11" style="position:absolute;left:8px;top:90px;width:77px;height:16px;z-index:10;text-align:left;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">Categoria</span>
				</div>
                    <select name="categoria" size="1" id="Combobox2" style="position:absolute;left:90px;top:84px;width:243px;height:28px;z-index:4;" >
                        <?php 
                        for($i=0; $i<count($categoria); $i++) { 
                            $r = $categoria[$i]; ?>
                            <option value="<?php echo $r['cod_categoria']; ?>"><?php echo $r['descricao_categoria']; ?></option>
                        <?php } ?>
				    </select>
				
				<input type="submit" id="Button3" name="gravar" value="GRAVAR" style="position:absolute;left:489px;top:250px;width:96px;height:25px;z-index:20;">
				<input type="reset" id="Button4" name="cancelar" value="CANCELAR" onClick="location='lista_produto.php'" style="position:absolute;left:605px;top:250px;width:96px;height:25px;z-index:21;">
			</form>
				
			</div>
		</div>
		<script src="cadastro_produto.js"></script>
	</body>
</html>