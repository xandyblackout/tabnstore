<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: LOGIN ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="efetuar_login.css" rel="stylesheet">
		</head>
	<body>
		<div id="container">
            <div id="wb_Image1" style="position:absolute;left:54px;top:1px;width:392px;height:169px;z-index:1;">
                <a href="index.php"><img src="images/TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a>
            </div>
			<div id="wb_Login1" style="position:absolute;left:54px;top:170px;width:392px;height:293px;z-index:0;">
				<form name="loginform" method="post" accept-charset="UTF-8" action="login.php" id="loginform">
					<input type="hidden" name="form_name" value="loginform">
						<table id="Login1">
							<tr>
							   <td class="header">ACESSO</td>
							</tr>
							<tr>
							   <td class="label"><label for="username">CPF</label></td>
							</tr>
							<tr>
							   <td class="row"><input class="input" name="cpf_cliente" type="text" id="username" value=""></td>
							</tr>
							<tr>
							   <td class="label"><label for="password">Senha</label></td>
							</tr>
							<tr>
							   <td class="row"><input class="input" name="senha" type="password" id="password" value=""></td>
							</tr>
							<tr>
							   <td class="row"><input id="rememberme" type="checkbox" name="rememberme"><label for="rememberme">Lembra-me</label></td>
							</tr>
							<tr>
							   <td style="text-align:center;vertical-align:bottom"><input class="button" type="submit" name="login" value="ENTRAR" id="login"></td>
							</tr>
						</table>
				</form>
			</div>
        </div>
	</body>
</html>