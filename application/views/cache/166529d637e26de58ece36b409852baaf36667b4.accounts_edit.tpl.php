<?php /*%%SmartyHeaderCode:302535284b85c8eaa72-96290806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '166529d637e26de58ece36b409852baaf36667b4' => 
    array (
      0 => 'application\\views\\templates\\accounts_edit.tpl',
      1 => 1384417056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302535284b85c8eaa72-96290806',
  'variables' => 
  array (
    'PAGE_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5284b85c95e4b2_72503591',
  'cache_lifetime' => 86400,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5284b85c95e4b2_72503591')) {function content_5284b85c95e4b2_72503591($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Контрагенты</title>
</head>
<body>
    <form method="POST" action="save">
        <table>
            <tr>
                <td>Наименование</td>
                <td>
                    <input name = 'Name' type="text"/>
                </td>
            </tr>
            <tr>
                <td>ИНН</td>
                <td>
                    <input name = 'INN' type="text"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input name = 'send' type="submit" value="Отправить"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html><?php }} ?>