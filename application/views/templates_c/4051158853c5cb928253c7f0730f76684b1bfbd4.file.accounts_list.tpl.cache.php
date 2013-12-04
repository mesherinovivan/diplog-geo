<?php /* Smarty version Smarty-3.1.12, created on 2013-11-14 14:47:25
         compiled from "application\views\templates\accounts_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262245284b84d34a112-49190750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4051158853c5cb928253c7f0730f76684b1bfbd4' => 
    array (
      0 => 'application\\views\\templates\\accounts_list.tpl',
      1 => 1384418160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262245284b84d34a112-49190750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 0,
    'AccountsData' => 0,
    'iter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5284b84d3e0584_40002530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5284b84d3e0584_40002530')) {function content_5284b84d3e0584_40002530($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</title>
</head>
<body>
    

    <div style="background:url(img/AccountsNormal.png) no-repeat; padding-top: 30px; width: 90px; height: 30px; border-radius:10px; border-width: 1px; border-style: solid;border-color: #453678;">Контагенты</div>
    
    <table class="" border=1>
        <tr><td><b>Название</b></td></tr>
        
    <?php  $_smarty_tpl->tpl_vars['AccountData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['AccountData']->_loop = false;
 $_smarty_tpl->tpl_vars['iter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AccountsData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['AccountData']->key => $_smarty_tpl->tpl_vars['AccountData']->value){
$_smarty_tpl->tpl_vars['AccountData']->_loop = true;
 $_smarty_tpl->tpl_vars['iter']->value = $_smarty_tpl->tpl_vars['AccountData']->key;
?>
                  <tr>  <td><?php echo $_smarty_tpl->tpl_vars['AccountsData']->value[$_smarty_tpl->tpl_vars['iter']->value]['Name'];?>
</td>  </tr>        
    <?php } ?>
    
    </table>
    <a href="http://www.geo-spd.ru/accounts/welcome/edit">Добавить</a>
</body>
</html><?php }} ?>