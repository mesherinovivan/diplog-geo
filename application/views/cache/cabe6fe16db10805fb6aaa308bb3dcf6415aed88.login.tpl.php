<?php /*%%SmartyHeaderCode:146152a469b555de46-84260226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cabe6fe16db10805fb6aaa308bb3dcf6415aed88' => 
    array (
      0 => 'application\\views\\templates\\login.tpl',
      1 => 1386503132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146152a469b555de46-84260226',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a469b55b2673_79697370',
  'cache_lifetime' => 86400,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a469b55b2673_79697370')) {function content_52a469b55b2673_79697370($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Toggle Switches</title>
  <style>
      .loginForm, .importantLinks {
	width:400px;
}

.loginForm {
	padding: 30px;
	margin-top:100px;
}

.importantLinks {
	text-align: center;
	padding: 30px;
	padding-top: 10px;
	font-size: 0.8em;
}

.loginForm {
	background: rgb(80,133,206); /* Old browsers */
	background: -moz-linear-gradient(top, rgba(80,133,206,1) 0%, rgba(123,165,216,1) 15%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 50%, rgba(123,165,216,1) 85%, rgba(80,133,206,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(80,133,206,1)), color-stop(15%,rgba(123,165,216,1)), color-stop(50%,rgba(255,255,255,1)), color-stop(50%,rgba(255,255,255,1)), color-stop(85%,rgba(123,165,216,1)), color-stop(100%,rgba(80,133,206,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, rgba(80,133,206,1) 0%,rgba(123,165,216,1) 15%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 50%,rgba(123,165,216,1) 85%,rgba(80,133,206,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, rgba(80,133,206,1) 0%,rgba(123,165,216,1) 15%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 50%,rgba(123,165,216,1) 85%,rgba(80,133,206,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, rgba(80,133,206,1) 0%,rgba(123,165,216,1) 15%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 50%,rgba(123,165,216,1) 85%,rgba(80,133,206,1) 100%); /* IE10+ */
	background: linear-gradient(top, rgba(80,133,206,1) 0%,rgba(123,165,216,1) 15%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 50%,rgba(123,165,216,1) 85%,rgba(80,133,206,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5085ce', endColorstr='#FFFFFF',GradientType=0 ); /* IE6-9 */
}

.loginForm {
	-webkit-box-shadow: 3px 3px 3px 3px rgba(150, 150, 150, 0.5);
	-moz-box-shadow: 3px 3px 3px 3px rgba(150, 150, 150, 0.5);
	box-shadow: 3px 3px 3px 3px rgba(150, 150, 150, 0.5);
}

.loginForm .poweredBy {
	width: 100%;
	font-size: 0.8em;
	text-align: right;
	padding-bottom: 1.5em;
	color: #2d3642;
}

.loginForm .label {
	font-weight: bold;
}

.loginForm .input input {
	width: 20em;
	font-size: large;
	color: #3D698E;
}

.loginForm .input input:focus {
	border: 2px solid #3D698E;
}

.loginForm .button #submitButton {
	cursor: pointer;
	background-color: #3D698E;
	color: #ffffff;
	text-align: center;
	font-size: medium;
	font-weight: bold;
	border: 2px outset #3D698E;
	width: 10em;
}
  </style>
</head>
<body>
<center>
<div class="loginForm">
	<div class="poweredBy">Terrasoft Web XRM <img src="img/connect-large.png"/></div>
	<form action="login/auth" method="post" name="DetailView" id="form">
                <input type="hidden" name="module" value="Users" />
                <input type="hidden" name="action" value="Authenticate" />
                <input type="hidden" name="return_module" value="Users" />
                <input type="hidden" name="return_action" value="Login" />
                <div class="inputs">
                    <div class="label">Логин</div>
                    <div class="input"><input type="text" name="user_name"/></div>
                    <div class="label">Пароль</div>
                    <div class="input"><input type="password" name="user_password"/></div>
                    </div>
                    <br />
                    <div class="button">
                        <input type="submit" id="submitButton" value="Войти" />
                    </div>
                </div>
        </form>
</div>  
</center>
</body>
</html><?php }} ?>