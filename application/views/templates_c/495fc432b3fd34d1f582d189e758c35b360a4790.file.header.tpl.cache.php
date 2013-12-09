<?php /* Smarty version Smarty-3.1.12, created on 2013-12-09 14:44:52
         compiled from "application\views\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1971852a5ad34bddb81-34410824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '495fc432b3fd34d1f582d189e758c35b360a4790' => 
    array (
      0 => 'application\\views\\templates\\header.tpl',
      1 => 1386579438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1971852a5ad34bddb81-34410824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a5ad34bf9091_33096184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a5ad34bf9091_33096184')) {function content_52a5ad34bf9091_33096184($_smarty_tpl) {?><html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <script src="http://yandex.st/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <script src="js/datepicker-2.6.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/style.css" />
</head>
<?php }} ?>