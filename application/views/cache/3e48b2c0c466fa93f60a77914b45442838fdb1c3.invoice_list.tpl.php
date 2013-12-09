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
    '495fc432b3fd34d1f582d189e758c35b360a4790' => 
    array (
      0 => 'application\\views\\templates\\header.tpl',
      1 => 1386579438,
      2 => 'file',
    ),
    '1a11a5a0fb8f5ab7ee1cba46436f1cf4622b284c' => 
    array (
      0 => 'application\\views\\templates\\menu.tpl',
      1 => 1386584636,
      2 => 'file',
    ),
    'b533d1edca42649560846b9ebc978c0398de6ee9' => 
    array (
      0 => 'application\\views\\templates\\footer.tpl',
      1 => 1386583644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2806752a59c31a88002-12012385',
  'variables' => 
  array (
    'data' => 0,
    'InvoiceData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a59c31bc2547_37124771',
  'cache_lifetime' => 86400,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a59c31bc2547_37124771')) {function content_52a59c31bc2547_37124771($_smarty_tpl) {?><html>
<head>
    <title>Счета</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <script src="http://yandex.st/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <script src="js/datepicker-2.6.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://diplom/css/style.css" />
</head>

<body>
 <div id="sd2" style="width:900px; height:200px; margin:0 auto;">
<ul class="css-menu-3">
<li><a href="accounts" class="">Контрагенты</a></li>
<li><a href="invoices" class="selected">Счета</a></li>
<li><a href="maps" class="">Карта</a></li>
<li><a href="#"class="">Настройки</a></li>
</ul>    
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
        
                      <tr>  
                      <td>ОренМит</td>  
                      <td>2013-12-31</td>  
                      <td>345.6</td> 
                  </tr>        
                      <tr>  
                      <td>Гамма-8</td>  
                      <td>2013-12-31</td>  
                      <td>245.5</td> 
                  </tr>        
                      <tr>  
                      <td>Оренбургский ремонтно-механический завод</td>  
                      <td>2013-12-31</td>  
                      <td>587.4</td> 
                  </tr>        
        
    </table>
    
</div>
 <div id="map" style="width:800px; height:800px"></div>
</body>
</html> <?php }} ?>