<?php /* Smarty version Smarty-3.1.12, created on 2013-12-09 14:44:52
         compiled from "application\views\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2042352a5ad34c0dca8-86845922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a11a5a0fb8f5ab7ee1cba46436f1cf4622b284c' => 
    array (
      0 => 'application\\views\\templates\\menu.tpl',
      1 => 1386584636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2042352a5ad34c0dca8-86845922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'account_selected' => 0,
    'invoice_selected' => 0,
    'maps_selected' => 0,
    'settings_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a5ad34c37798_80083380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a5ad34c37798_80083380')) {function content_52a5ad34c37798_80083380($_smarty_tpl) {?> <div id="sd2" style="width:900px; height:200px; margin:0 auto;">
<ul class="css-menu-3">
<li><a href="accounts" class="<?php echo $_smarty_tpl->tpl_vars['account_selected']->value;?>
">Контрагенты</a></li>
<li><a href="invoices" class="<?php echo $_smarty_tpl->tpl_vars['invoice_selected']->value;?>
">Счета</a></li>
<li><a href="maps" class="<?php echo $_smarty_tpl->tpl_vars['maps_selected']->value;?>
">Карта</a></li>
<li><a href="#"class="<?php echo $_smarty_tpl->tpl_vars['settings_selected']->value;?>
">Настройки</a></li>
</ul><?php }} ?>