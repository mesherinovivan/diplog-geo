<?php /* Smarty version Smarty-3.1.12, created on 2013-12-09 13:32:17
         compiled from "application\views\templates\invoice_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2806752a59c31a88002-12012385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e48b2c0c466fa93f60a77914b45442838fdb1c3' => 
    array (
      0 => 'application\\views\\templates\\invoice_list.tpl',
      1 => 1386584556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2806752a59c31a88002-12012385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'InvoiceData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a59c31b39eb5_33184080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a59c31b39eb5_33184080')) {function content_52a59c31b39eb5_33184080($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
    
    <table  style="width:97%;" class="simple-little-table" cellspacing='0'>
        <tr>
            <th>
                Название контрагента
            </th>
            <th>
                Дата счета
            </th>
            <th>
                Сумма счета
            </th>
        </tr>
        
    <?php  $_smarty_tpl->tpl_vars['InvoiceData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['InvoiceData']->_loop = false;
 $_smarty_tpl->tpl_vars['iter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['InvoiceData']->key => $_smarty_tpl->tpl_vars['InvoiceData']->value){
$_smarty_tpl->tpl_vars['InvoiceData']->_loop = true;
 $_smarty_tpl->tpl_vars['iter']->value = $_smarty_tpl->tpl_vars['InvoiceData']->key;
?>
                  <tr>  
                      <td><?php echo $_smarty_tpl->tpl_vars['InvoiceData']->value['accountname'];?>
</td>  
                      <td><?php echo $_smarty_tpl->tpl_vars['InvoiceData']->value['invoice_date'];?>
</td>  
                      <td><?php echo $_smarty_tpl->tpl_vars['InvoiceData']->value['amount'];?>
</td> 
                  </tr>        
    <?php } ?>
    
    </table>
    
</div>
 <div id="map" style="width:800px; height:800px"></div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 <?php }} ?>