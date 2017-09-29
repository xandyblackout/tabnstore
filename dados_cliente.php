<?php
    @session_start();
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: DADOS DO CLIENTE ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="dados_cliente.css" rel="stylesheet">
		<script src="jquery-1.12.4.min.js"></script>
		<script src="fancybox/jquery.easing-1.3.pack.js"></script>
		<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css">
		<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	</head>
	<body>
		<div id="PageHeader1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:0px;width:100%;height:122px;z-index:7777;">
			<div id="PageHeader1_Container" style="width:1200px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
				<div id="Layer1" style="position:absolute;text-align:left;left:0px;top:0px;width:1196px;height:104px;z-index:8;">
					<div id="wb_LoginName1" style="position:absolute;left:211px;top:10px;width:242px;height:23px;z-index:1;">
						<span id="LoginName1">Bem Vindo, <?php
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
						<div id="wb_logo_site" style="position:absolute;left:7px;top:10px;width:190px;height:88px;z-index:4;">
							<a href="index.php"><img src="images/TABN_VIRTUAL_STORE.jpg" id="logo_site" alt=""></a>
						</div>
						<div id="wb_Logout1" style="position:absolute;left:1143px;top:10px;width:34px;height:12px;z-index:5;">
							<form name="logoutform" method="GET" action="<?php echo basename(__FILE__); ?>" id="logoutform">
								<input type="hidden" name="form_name" value="logoutform">
								<a id="Logout1" href="javascript:document.logoutform.submit()">Sair</a>
							</form>
						</div>
						<div id="wb_TextMenu1" style="position:absolute;left:793px;top:9px;width:203px;height:24px;text-align:center;z-index:6;">
							
						</div>
						<div id="Layer3" style="position:absolute;text-align:left;left:1037px;top:33px;width:150px;height:66px;z-index:7;">
							<div id="wb_Image10" style="position:absolute;left:15px;top:4px;width:65px;height:58px;z-index:0;">
								<a href="area_compras.php" title="carrinho_compra"><img src="images/img0002.png" id="Image10" alt=""></a>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div id="container">
			<div id="wb_Form1" style="position:absolute;left:140px;top:128px;width:919px;height:405px;z-index:67;">
				<form name="tela_produto" method="GET" action="salvar_cliente.php&acao=alterar">
					<input type="hidden" name="formid" value="form1">
                    <input type="hidden" name="acao" value="<?php echo $_GET['acao']; ?>">
                    <?php
                        include "conexao_banco.php";
                            @$cpf_cliente = $_GET["cpf_cliente"];
                            $sql = "SELECT cpf_cliente, rg_cliente, nome_cliente, data_nasc, data_cadastro, telefone1, celular1, cep1, cep2, endereco1, endereco2, numero1, numero2, bairro1, bairro2, complemento1, complemento2, email
                                FROM cliente
                                WHERE cpf_cliente = 30870386875";
                            //colocar WHERE para comparar o CPF logado '$cpf_cliente';
                        $rs = mysqli_query($link,$sql);
                            echo '<table border=0>
                                    <th bgcolor=#C0C0C0><h2>DADOS DO CLIENTE</h2></th>
                                    <table border=0>
                                    
                                    <td width= "40">&nbsp;</td>';
                                   
                        if(empty($rs) OR mysqli_num_rows($rs)==0) {
                            echo '<tr><td colspan=8 align=center>SEM DADOS</td></tr>';
                        } else {
                            while($r = mysqli_fetch_array($rs)){
                                echo "<table border=0>
                                <tr> <td><b>CPF: </td> <td>".$r['cpf_cliente']."</td> <td><b>RG: </td> <td>".$r['rg_cliente']."</td> <td><b>Data de Nascimento: </td> <td>".$r['data_nasc']."</td> <td><b>Data de Cadastro: </td> <td>".$r['data_cadastro']."</td> </tr>
                                </table>
                                
                                <table border=0>
                                <tr>   <td><b>NOME: </td> <td>".$r['nome_cliente']."</td> </tr> 
                                </table>
                                <table border=0>
                                <tr> <td><b>TELEFONE: </td> <td>".$r['telefone1']."</td>  <td><b>CELULAR: </td> <td>".$r['celular1']."</td></tr> 
                                </table>
                                <table border=0>
                                <tr> <td><b>EMAIL: </td> <td>".$r['email']."</td> </tr>
                                </table>
                                <br>
                                <table border=0>
                                <td bgcolor=#C0C0C0><b>ENDEREÇO DE COBRANÇA</td>  
                                </table>
                                <table border=0>
                                <tr> <td><b>ENDEREÇO: </td> <td>".$r['endereco1']."</td> <td><b>NUMERO: </td> <td>".$r['numero1']."</td><tr> <td><b>BAIRRO: </td> <td>".$r['bairro1']."</td> <td> <b>COMPLEMENTO: </td> <td>".$r['complemento1']."</td></tr> <td><b>CEP: </td> <td>".$r['cep1']."</td> </tr>
                                </table>
                                <br>
                                <table border=0>
                                <td bgcolor=#C0C0C0><b>ENDEREÇO DE ENTREGA</td>  
                                </table>
                                <table border=0>
                                <tr> <td><b>ENDEREÇO: </td> <td>".$r['endereco2']."</td> <td><b>NUMERO: </td> <td>".$r['numero2']."</td> <tr><td><b>BAIRRO: </td> <td>".$r['bairro2']."</td> <td> <b>COMPLEMENTO: </td> <td>".$r['complemento2']."</td></tr> <td><b>CEP: </td> <td>".$r['cep2']."</td> </tr>
                                </table>"; 
                                
                                }
                            }
                                echo "</table></td></tr>";
                                echo "</td></tr></table>";
                            mysqli_free_result($rs);
                        mysqli_close($link);
                    ?>

                    <input type="submit" id="Button2" onclick="window.location.href='cadastro_cliente.php?acao=alterar';return false;" name="editar" value="EDITAR" style="position:absolute;left:540px;top:359px;width:96px;height:25px;z-index:14;">
					<input type="submit" id="Button3" name="cancelar" value="CANCELAR" style="position:absolute;left:794px;top:359px;width:96px;height:25px;z-index:15;">
					<input type="submit" id="Button4" onclick="window.location.href='./realizar_venda.php';return false;" name="continuar" value="CONTINUAR" style="position:absolute;left:673px;top:359px;width:96px;height:25px;z-index:46;">
				</form>
			</div>
				<div id="Layer4" style="position:absolute;text-align:left;left:0px;top:555px;width:1196px;height:105px;z-index:68;">
					<div id="wb_Text1" style="position:absolute;left:240px;top:60px;width:432px;height:34px;z-index:52;text-align:left;">
						<span style="color:#000000;font-family:Arial;font-size:29px;"><strong>Aqui sua loja vira destaque...</strong></span>
					</div>
					<div id="Layer2" style="position:absolute;text-align:left;left:928px;top:27px;width:254px;height:65px;z-index:53;">
						<div id="wb_Image13" style="position:absolute;left:213px;top:27px;width:34px;height:30px;z-index:48;">
							<a href="javascript:displaylightbox('./login/pagina_contato.php',{})" target="_self" title="pagina_contato_whatsapp"><img src="images/WhatsApp-icon.png" id="Image13" alt=""></a>
						</div>
						<div id="wb_Text2" style="position:absolute;left:44px;top:33px;width:166px;height:18px;z-index:49;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:16px;">tabnstore@gmail.com</span>
						</div>
						<div id="wb_Text3" style="position:absolute;left:6px;top:7px;width:95px;height:19px;z-index:50;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>CONTATOS</strong></span>
						</div>
						<div id="wb_Image7" style="position:absolute;left:6px;top:31px;width:33px;height:23px;z-index:51;">
							<img src="images/gmail-logo.png" id="Image7" alt="">
						</div>
					</div>
					<div id="wb_Image12" style="position:absolute;left:15px;top:0px;width:221px;height:103px;z-index:54;">
						<img src="images/TABN_VIRTUAL_STORE.jpg" id="Image12" alt="">
					</div>
				</div>
		</div>
				
<script src="dados_cliente.js"></script>
	</body>
</html>