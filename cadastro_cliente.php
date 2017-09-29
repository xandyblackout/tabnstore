<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>.:: CADASTRAR CLIENTE ::.</title>
        <meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="extra.png" rel="shortcut icon" type="image/x-icon">
        <link href="projeto_tabn_store.css" rel="stylesheet">
        <link href="cadastro_cliente.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <div id="wb_Image1" style="position:absolute;left:20px;top:5px;width:140px;height:65px;z-index:51;">
                <a href="index.php"><img src="images/CAMISA_TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
            </div>
            <div id="wb_Text17" style="position:absolute;left:160px;top:13px;width:556px;height:49px;z-index:52;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:43px;">CADASTRO DE CLIENTE</span>
            </div>
           
            <div id="wb_Form1" style="position:absolute;left:20px;top:75px;width:692px;height:712px;z-index:55;">
                <form name="cadastro_cliente" method="get" action="salvar_cliente.php?acao=inserir">
                    <input type="hidden" name="formid" value="form1">
                    <input type="hidden" name="acao" value="<?php echo $_GET['acao']; ?>">
                    
                    <div id="wb_Text2" style="position:absolute;left:8px;top:23px;width:50px;height:16px;z-index:0;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">CPF</span>
                    </div>
                    <div id="wb_Text8" style="position:absolute;left:378px;top:23px;width:112px;height:16px;z-index:2;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Data de Cadastro</span>
                    </div>
                    <div id="wb_Text3" style="position:absolute;left:7px;top:63px;width:50px;height:16px;z-index:3;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Nome</span>
                    </div>
                    <div id="wb_Text5" style="position:absolute;left:7px;top:102px;width:50px;height:16px;z-index:4;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">RG</span>
                    </div>
                    <div id="wb_Text4" style="position:absolute;left:365px;top:102px;width:124px;height:16px;z-index:6;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Data de Nascimento</span>
                    </div>
                    <div id="wb_Text30" style="position:absolute;left:445px;top:142px;width:45px;height:16px;z-index:8;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Celular</span>
                    </div>
                    <div id="wb_Text28" style="position:absolute;left:8px;top:349px;width:220px;height:24px;z-index:9;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:20px;"><strong>Endereço de Cobrança</strong></span>
                    </div>
                    <div id="wb_Text13" style="position:absolute;left:494px;top:385px;width:58px;height:16px;z-index:14;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Número</span>
                    </div>
                    <div id="wb_Text18" style="position:absolute;left:513px;top:423px;width:39px;height:16px;z-index:16;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">CEP</span>
                    </div>
                    <div id="wb_Text16" style="position:absolute;left:8px;top:495px;width:58px;height:16px;z-index:18;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Estado</span>
                    </div>
                    <div id="wb_Text14" style="position:absolute;left:267px;top:497px;width:58px;height:16px;z-index:20;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Cidade</span>
                    </div>
                    <div id="wb_Text11" style="position:absolute;left:8px;top:385px;width:68px;height:16px;z-index:24;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Endereço </span>
                    </div>
                    <div id="wb_Text12" style="position:absolute;left:8px;top:422px;width:58px;height:16px;z-index:25;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Bairro</span>
                    </div>
                    <div id="wb_Text15" style="position:absolute;left:9px;top:459px;width:92px;height:16px;z-index:26;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Complemento</span>
                    </div>
                    <div id="wb_Text29" style="position:absolute;left:8px;top:541px;width:220px;height:24px;z-index:27;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:20px;"><strong>Endereço de Entrega</strong></span>
                    </div>
                    <div id="wb_Text20" style="position:absolute;left:8px;top:577px;width:68px;height:16px;z-index:28;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Endereço </span>
                    </div>
                    <div id="wb_Text22" style="position:absolute;left:493px;top:577px;width:58px;height:16px;z-index:30;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Número</span>
                    </div>
                    <div id="wb_Text21" style="position:absolute;left:9px;top:612px;width:58px;height:16px;z-index:31;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Bairro</span>
                    </div>
                    <div id="wb_Text24" style="position:absolute;left:511px;top:612px;width:39px;height:16px;z-index:33;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">CEP</span>
                    </div>
                    <div id="wb_Text26" style="position:absolute;left:8px;top:647px;width:88px;height:16px;z-index:34;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Complemento</span>
                    </div>
                    <div id="wb_Text1" style="position:absolute;left:8px;top:679px;width:58px;height:16px;z-index:36;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Estado</span>
                    </div>
                    <div id="wb_Text9" style="position:absolute;left:267px;top:681px;width:58px;height:16px;z-index:38;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Cidade</span>
                    </div>
                    <div id="wb_Text7" style="position:absolute;left:8px;top:142px;width:58px;height:16px;z-index:42;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Telefone</span>
                    </div>
                    <div id="wb_Text6" style="position:absolute;left:8px;top:180px;width:50px;height:16px;z-index:43;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Email</span>
                    </div>
                    <div id="wb_Text19" style="position:absolute;left:6px;top:283px;width:72px;height:16px;z-index:48;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Senha</span>
                    </div>
                    <div id="wb_Text23" style="position:absolute;left:388px;top:275px;width:72px;height:32px;z-index:49;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:13px;">Confirma Senha</span>
                    </div>
                    <div id="wb_Text10" style="position:absolute;left:9px;top:237px;width:296px;height:22px;z-index:50;text-align:left;">
                        <span style="color:#000000;font-family:Arial;font-size:19px;">Cadastrar senha para efetuar login</span>
                    </div>
                    
                    <select name="estado1" size="1" style="position:absolute;left:106px;top:491px;width:124px;height:28px;z-index:19;" tabindex="19">
                    <option selected value="SP">SP</option>
                    </select>
                    
                    <select name="cidade1" size="1" style="position:absolute;left:336px;top:491px;width:347px;height:28px;z-index:21;" tabindex="20">
                    <option selected value="birigui">BIRIGUI</option>
                    </select>
                    
                    <select name="estado2" size="1" style="position:absolute;left:106px;top:675px;width:124px;height:28px;z-index:37;" tabindex="26">
                    <option selected value="SP">SP</option>
                    </select>
                    
                    <select name="cidade2" size="1" style="position:absolute;left:334px;top:675px;width:350px;height:28px;z-index:39;" tabindex="27">
                    <option selected value="birigui">BIRIGUI</option>
                    </select>

                    <input type="text" style="position:absolute;left:90px;top:17px;width:113px;height:18px;line-height:18px;z-index:1;" name="cpf_cliente" value="" maxlength="15" tabindex="1">

                    <input type="text" style="position:absolute;left:90px;top:96px;width:117px;height:18px;line-height:18px;z-index:5;" name="rg_cliente" value="" maxlength="15" tabindex="4">

                    <input type="text"style="position:absolute;left:90px;top:57px;width:581px;height:18px;line-height:18px;z-index:44;" name="nome_cliente" value="" tabindex="3">

                    <input type="date" style="position:absolute;left:501px;top:96px;width:170px;height:18px;line-height:18px;z-index:11;" name="data_nasc" value="" maxlength="12" tabindex="6">

                    <input type="date" style="position:absolute;left:502px;top:17px;width:170px;height:18px;line-height:18px;z-index:10;" name="data_cadastro" value="" maxlength="12" tabindex="2">

                    <input type="text" style="position:absolute;left:90px;top:136px;width:156px;height:18px;line-height:18px;z-index:7;" name="telefone1" value="" maxlength="15" tabindex="7">

                    <input type="text" style="position:absolute;left:502px;top:136px;width:170px;height:18px;line-height:18px;z-index:12;" name="celular1" value="" maxlength="15" tabindex="8">

                    <input type="text" style="position:absolute;left:560px;top:417px;width:113px;height:18px;line-height:18px;z-index:23;" name="cep1" value="" maxlength="10" tabindex="17">

                    <input type="text" style="position:absolute;left:559px;top:606px;width:113px;height:18px;line-height:18px;z-index:41;" name="cep2" value="" maxlength="10" tabindex="24">

                    <input type="text" style="position:absolute;left:107px;top:379px;width:362px;height:18px;line-height:18px;z-index:13;" name="endereco1" value="" maxlength="75" tabindex="14">

                    <input type="text" style="position:absolute;left:106px;top:571px;width:362px;height:18px;line-height:18px;z-index:29;" name="endereco2" value="" maxlength="75" tabindex="21">

                    <input type="text" style="position:absolute;left:107px;top:417px;width:361px;height:18px;line-height:18px;z-index:15;" name="bairro1" value="" maxlength="50" tabindex="16">

                    <input type="text" style="position:absolute;left:106px;top:606px;width:361px;height:18px;line-height:18px;z-index:32;" name="bairro2" value="" maxlength="50" tabindex="23">

                    <input type="text" style="position:absolute;left:559px;top:379px;width:113px;height:18px;line-height:18px;z-index:22;" name="numero1" value="" maxlength="5" tabindex="15">

                    <input type="text" style="position:absolute;left:559px;top:571px;width:113px;height:18px;line-height:18px;z-index:40;" name="numero2" value="" maxlength="5" tabindex="22">

                    <input type="text" style="position:absolute;left:107px;top:453px;width:305px;height:18px;line-height:18px;z-index:17;" name="complemento1" value="" maxlength="30" tabindex="18">

                    <input type="text" style="position:absolute;left:105px;top:641px;width:305px;height:18px;line-height:18px;z-index:35;" name="complemento2" value="" maxlength="30" tabindex="25">

                    <input type="password" style="position:absolute;left:90px;top:277px;width:194px;height:18px;line-height:18px;z-index:46;" name="senha" value="" tabindex="12">

                    <input type="text" style="position:absolute;left:90px;top:175px;width:581px;height:18px;line-height:18px;z-index:45;" name="email" value="" maxlength="50" tabindex="9">

                    <input type="password" style="position:absolute;left:474px;top:277px;width:194px;height:18px;line-height:18px;z-index:47;" name="confirmasenha" value="" tabindex="13">
                    
                    <input type="submit" id="Button4" name="confirmar" value="GRAVAR" style="position:absolute;left:438px;top:728px;width:96px;height:25px;z-index:53;" tabindex="28">
                    <input type="reset" id="Button5" onclick="window.location.href='index.php';return false;" name="cancelar" value="CANCELAR"style="position:absolute;left:580px;top:728px;width:96px;height:25px;z-index:54;" tabindex="29">
                </form>
            </div>
        </div>
        <div id="PageFooter2" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:856px;width:100%;height:21px;z-index:56;">
        </div>
        <div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:856px;width:100%;height:21px;z-index:57;">
        </div>
        <script src="cadastro_cliente.js"></script>
    </body>
</html>