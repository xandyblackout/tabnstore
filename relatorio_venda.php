<?php
function ValidateEmail($email)
{
   $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
   return preg_match($pattern, $email);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formid']) && $_POST['formid'] == 'form1')
{
   $mailto = 'yourname@yourdomain.com';
   $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
   $subject = 'Website form';
   $message = 'Values submitted from web site form:';
   $success_url = '';
   $error_url = './../login/pagina_erro.php';
   $error = '';
   $mysql_server = '127.0.0.1';
   $mysql_database = 'tabn_store';
   $mysql_table = 'venda';
   $mysql_username = 'root';
   $mysql_password = '';
   $eol = "\n";
   $max_filesize = isset($_POST['filesize']) ? $_POST['filesize'] * 1024 : 1024000;
   $boundary = md5(uniqid(time()));

   $header  = 'From: '.$mailfrom.$eol;
   $header .= 'Reply-To: '.$mailfrom.$eol;
   $header .= 'MIME-Version: 1.0'.$eol;
   $header .= 'Content-Type: multipart/mixed; boundary="'.$boundary.'"'.$eol;
   $header .= 'X-Mailer: PHP v'.phpversion().$eol;
   if (!ValidateEmail($mailfrom))
   {
      $error .= "The specified email address is invalid!\n<br>";
   }

   if (!empty($error))
   {
      $errorcode = file_get_contents($error_url);
      $replace = "##error##";
      $errorcode = str_replace($replace, $error, $errorcode);
      echo $errorcode;
      exit;
   }

   $internalfields = array ("submit", "reset", "send", "filesize", "formid", "captcha_code", "recaptcha_challenge_field", "recaptcha_response_field", "g-recaptcha-response");
   $message .= $eol;
   $message .= "IP Address : ";
   $message .= $_SERVER['REMOTE_ADDR'];
   $message .= $eol;
   $logdata = '';
   foreach ($_POST as $key => $value)
   {
      if (!in_array(strtolower($key), $internalfields))
      {
         if (!is_array($value))
         {
            $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;
         }
         else
         {
            $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;
         }
      }
   }
   $body  = 'This is a multi-part message in MIME format.'.$eol.$eol;
   $body .= '--'.$boundary.$eol;
   $body .= 'Content-Type: text/plain; charset=ISO-8859-1'.$eol;
   $body .= 'Content-Transfer-Encoding: 8bit'.$eol;
   $body .= $eol.stripslashes($message).$eol;
   if (!empty($_FILES))
   {
       foreach ($_FILES as $key => $value)
       {
          if ($_FILES[$key]['error'] == 0 && $_FILES[$key]['size'] <= $max_filesize)
          {
             $body .= '--'.$boundary.$eol;
             $body .= 'Content-Type: '.$_FILES[$key]['type'].'; name='.$_FILES[$key]['name'].$eol;
             $body .= 'Content-Transfer-Encoding: base64'.$eol;
             $body .= 'Content-Disposition: attachment; filename='.$_FILES[$key]['name'].$eol;
             $body .= $eol.chunk_split(base64_encode(file_get_contents($_FILES[$key]['tmp_name']))).$eol;
          }
      }
   }
   $body .= '--'.$boundary.'--'.$eol;
   if ($mailto != '')
   {
      mail($mailto, $subject, $body, $header);
   }
   $search = array("ä", "Ä", "ö", "Ö", "ü", "Ü", "ß", "!", "§", "$", "%", "&", "/", "\x00", "^", "°", "\x1a", "-", "\"", " ", "\\", "\0", "\x0B", "\t", "\n", "\r", "(", ")", "=", "?", "`", "*", "'", ":", ";", ">", "<", "{", "}", "[", "]", "~", "²", "³", "~", "µ", "@", "|", "<", "+", "#", ".", "´", "+", ",");
   $replace = array("ae", "Ae", "oe", "Oe", "ue", "Ue", "ss");
   foreach($_POST as $name=>$value)
   {
      $name = str_replace($search, $replace, $name);
      $name = strtoupper($name);
      $form_data[$name] = $value;
   }
   $db = mysqli_connect($mysql_server, $mysql_username, $mysql_password) or die('Failed to connect to database server!<br>'.mysqli_error($db));
   mysqli_query($db, "CREATE DATABASE IF NOT EXISTS $mysql_database");
   mysqli_select_db($db, $mysql_database) or die('Failed to select database<br>'.mysqli_error($db));
   mysqli_query($db, "CREATE TABLE IF NOT EXISTS $mysql_table (ID int(9) NOT NULL auto_increment, `DATESTAMP` DATE, `TIME` VARCHAR(8), `IP` VARCHAR(15), `BROWSER` TINYTEXT, PRIMARY KEY (id))");
   foreach($form_data as $name=>$value)
   {
      mysqli_query($db ,"ALTER TABLE $mysql_table ADD $name VARCHAR(255)");
   }
   mysqli_query($db, "INSERT INTO $mysql_table (`DATESTAMP`, `TIME`, `IP`, `BROWSER`)
                VALUES ('".date("Y-m-d")."',
                '".date("G:i:s")."',
                '".$_SERVER['REMOTE_ADDR']."',
                '".$_SERVER['HTTP_USER_AGENT']."')")or die('Failed to insert data into table!<br>'.mysqli_error($db)); 
   $id = mysqli_insert_id($db);
   foreach($form_data as $name=>$value)
   {
      mysqli_query($db, "UPDATE $mysql_table SET $name='".mysqli_real_escape_string($db, $value)."' WHERE ID=$id") or die('Failed to update table!<br>'.mysqli_error($db));
   }
   mysqli_close($db);
   header('Location: '.$success_url);
   exit;
}
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>.:: CADASTRAR ::.</title>
<meta name="author" content="Alexandre Nunes /  Tiago Bagatini">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="extra.png" rel="shortcut icon" type="image/x-icon">
<link href="projeto_tabn_store.css" rel="stylesheet">
<link href="relatorio_venda.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:10px;top:17px;width:140px;height:65px;z-index:6;">
<a href="./../index.php"><img src="images/CAMISA_TABN_VIRTUAL_STORE.jpg" id="Image1" alt=""></a></div>
<div id="wb_Text17" style="position:absolute;left:151px;top:30px;width:542px;height:42px;z-index:7;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:37px;">Relatório de Vendas</span></div>
<input type="submit" id="Button1" name="relatorio_venda" value="GERAR RELATÓRIO" style="position:absolute;left:371px;top:171px;width:144px;height:25px;z-index:8;">
<input type="submit" id="Button2" name="cancelar" value="CANCELAR" style="position:absolute;left:530px;top:171px;width:144px;height:25px;z-index:9;">
<div id="wb_Form1" style="position:absolute;left:10px;top:90px;width:681px;height:68px;z-index:10;">
<form name="Form1" method="post" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" id="Form1">
<input type="hidden" name="formid" value="form1">
<input type="number" id="Editbox8" style="position:absolute;left:88px;top:21px;width:113px;height:18px;line-height:18px;z-index:0;" name="cod_venda" value="" maxlength="12">
<div id="wb_Text5" style="position:absolute;left:223px;top:26px;width:80px;height:16px;z-index:1;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Data Inicial</span></div>
<input type="number" id="Editbox3" style="position:absolute;left:303px;top:20px;width:113px;height:18px;line-height:18px;z-index:2;" name="data_pedido_inicio" value="" maxlength="8">
<div id="wb_Text6" style="position:absolute;left:460px;top:26px;width:80px;height:16px;z-index:3;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Data Final</span></div>
<input type="number" id="Editbox6" style="position:absolute;left:540px;top:20px;width:113px;height:18px;line-height:18px;z-index:4;" name="data_pedido_final" value="" maxlength="8">
<div id="wb_Text8" style="position:absolute;left:15px;top:19px;width:73px;height:32px;z-index:5;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Número do Pedido</span></div>
</form>
</div>
</div>
</body>
</html>