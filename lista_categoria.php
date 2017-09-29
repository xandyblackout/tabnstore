<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>.:: CATEGORIAS ::.</title>
		<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="extra.png" rel="shortcut icon" type="image/x-icon">
		<link href="projeto_tabn_store.css" rel="stylesheet">
		<link href="lista_categoria.css" rel="stylesheet">
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
				<span style="color:#000000;font-family:Arial;font-size:37px;">CATEGORIAS</span>
			</div>
        <div id="wb_Form1" style="position:absolute;left:8px;top:79px;width:688px;height:103px;z-index:10;">
            <?php
                include "conexao_banco.php";
                @$filtro = trim(addslashes($_GET['filtro']));
                $sql = "SELECT cod_categoria, descricao_categoria
                        FROM categoria
                        WHERE descricao_categoria LIKE '$filtro%'";
                $rs = mysqli_query($link,$sql);
                    echo '<table border=1>
                            <th bgcolor=#EEEEEE>Lista de Categorias Cadastradas</th><tr><td>
                            <table border=0>
                            <tr>
                            <td width= "60">&nbsp;</td>
                            <td width= "60">&nbsp;</td>
                            <td width= "200"><b>Código</td>
                            <td width="260"><b>Descrição Categoria</td>
                            </tr>';
                if(empty($rs) OR mysqli_num_rows($rs)==0) {
                    echo '<tr><td colspan=8 align=center>Nenhum contato encontrado</td></tr>';
                } else {
                    while($r = mysqli_fetch_array($rs)){
                        echo "<tr>
                                    <td> </td>
                                    <td><a href=\"cadastro_categoria.php?codigo=".$r['cod_categoria']."\">
                                    <img src=\"./img/alterar.png\" border=0 alt=alterar></a>
                                    </td>
                                    <td>".$r['cod_categoria']."</td>
                                    <td>".$r['descricao_categoria']."</td>
                                    </tr>";
                        }
                    }
                     echo "</table></td></tr>";
                        echo "<tr><td><table width=100% border=0><tr><td>
                            <input type=button value=Novo onClick=\"location='cadastro_categoria.php';\"></td>
                            <form><td align=right>Pesquisar por: <input name=filtro>&nbsp;
                            <input type=submit value=Buscar></td></form></tr></table>";
                        echo "</td></tr></table>";   
                    mysqli_free_result($rs);
                mysqli_close($link);
            ?>
        </div>
    </div>
    </body>
</html>