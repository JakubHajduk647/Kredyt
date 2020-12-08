<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-08 02:07:28
  from 'C:\xampp\htdocs\kredyt\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fced1d0eed678_98154895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a6efc9f3215ce07b1de9d69172aa97afb6fc94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kredyt\\templates\\login.tpl',
      1 => 1606242029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fced1d0eed678_98154895 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">

<form action="<?php echo '<?php ';?>
print(_APP_ROOT); <?php echo '?>';?>
/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_login">login: </label>
		<input id="id_login" type="text" name="login" value="<?php echo '<?php ';?>
out($form['login']); <?php echo '?>';?>
" />
		<label for="id_pass">pass: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	

<?php echo '<?php
';?>
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
<?php echo '?>';?>


</div>

</body>
</html><?php }
}
