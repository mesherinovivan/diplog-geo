<?php /* Smarty version Smarty-3.1.12, created on 2013-12-09 13:23:59
         compiled from "application\views\templates\accounts_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1383952a59a3f7d66b0-35984207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4051158853c5cb928253c7f0730f76684b1bfbd4' => 
    array (
      0 => 'application\\views\\templates\\accounts_list.tpl',
      1 => 1386583673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1383952a59a3f7d66b0-35984207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'AccountData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a59a3f88d858_31842569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a59a3f88d858_31842569')) {function content_52a59a3f88d858_31842569($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
    
    <table  style="width:97%;" class="simple-little-table" cellspacing='0'>
        <tr>
            <th>
                Название
            </th>
            <th>
                Адрес
            </th>
            <th>
                Телефон
            </th>
        </tr>
        
    <?php  $_smarty_tpl->tpl_vars['AccountData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['AccountData']->_loop = false;
 $_smarty_tpl->tpl_vars['iter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['AccountData']->key => $_smarty_tpl->tpl_vars['AccountData']->value){
$_smarty_tpl->tpl_vars['AccountData']->_loop = true;
 $_smarty_tpl->tpl_vars['iter']->value = $_smarty_tpl->tpl_vars['AccountData']->key;
?>
                  <tr>  
                      <td><?php echo $_smarty_tpl->tpl_vars['AccountData']->value['name'];?>
</td>  
                      <td><?php echo $_smarty_tpl->tpl_vars['AccountData']->value['address'];?>
</td>  
                      <td><?php echo $_smarty_tpl->tpl_vars['AccountData']->value['phone'];?>
</td>  
                  </tr>        
    <?php } ?>
    
    </table>
    
</div>
 <div id="map" style="width:800px; height:800px"></div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 <?php }} ?>