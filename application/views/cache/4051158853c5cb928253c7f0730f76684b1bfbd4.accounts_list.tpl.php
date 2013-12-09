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
  'nocache_hash' => '1383952a59a3f7d66b0-35984207',
  'variables' => 
  array (
    'data' => 0,
    'AccountData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a59a3f91b0a2_99781231',
  'cache_lifetime' => 86400,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a59a3f91b0a2_99781231')) {function content_52a59a3f91b0a2_99781231($_smarty_tpl) {?><html>
<head>
    <title>Контрагенты</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <script src="http://yandex.st/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <script src="js/datepicker-2.6.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://diplom/css/style.css" />
</head>

<body>
 <div id="sd2" style="width:900px; height:200px; margin:0 auto;">
<ul class="css-menu-3">
<li><a href="accounts" class="selected">Контрагенты</a></li>
<li><a href="invoices" class="">Счета</a></li>
<li><a href="maps" class="">Карта</a></li>
<li><a href="#"class="">Настройки</a></li>
</ul>    
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
        
                      <tr>  
                      <td>Стройтехносервис</td>  
                      <td>460051 Оренбургская обл. г. Оренбург пр-кт. Гагарина 43</td>  
                      <td>4957807473</td>  
                  </tr>        
                      <tr>  
                      <td>Региональное проектное бюро</td>  
                      <td>460021 Оренбургская обл. г. Оренбург ул. 60 лет Октября 17</td>  
                      <td>3532373378</td>  
                  </tr>        
                      <tr>  
                      <td>ОренМит</td>  
                      <td>460001 Оренбургская обл. г. Оренбург ул. Потехина 27</td>  
                      <td>3532769082</td>  
                  </tr>        
                      <tr>  
                      <td>Гамма-8</td>  
                      <td>460001 Оренбургская обл. г. Оренбург ул. Потехина 2</td>  
                      <td>3532753995</td>  
                  </tr>        
                      <tr>  
                      <td>Оренбургский ремонтно-механический завод</td>  
                      <td>460028 Оренбургская обл. г. Оренбург ул. Шоссейная 24</td>  
                      <td>3532525309</td>  
                  </tr>        
                      <tr>  
                      <td>Барион</td>  
                      <td>460048 Оренбургская обл. г. Оренбург ул. Транспортная 8 </td>  
                      <td>3532460234</td>  
                  </tr>        
                      <tr>  
                      <td>Волга-Кредит</td>  
                      <td>460038 Оренбургская обл. г. Оренбург пр-кт. Дзержинского 4 </td>  
                      <td>3532647364</td>  
                  </tr>        
                      <tr>  
                      <td>Татаринова Ляна Анатольевна</td>  
                      <td>Оренбургская обл. г. Оренбург ул. Чкалова 35</td>  
                      <td>3532312928</td>  
                  </tr>        
                      <tr>  
                      <td>Банмиллер Е.Ю.</td>  
                      <td>460005 Оренбургская обл. г. Оренбург ул. Абдрашитова 173</td>  
                      <td>3532305191</td>  
                  </tr>        
                      <tr>  
                      <td>Щербин А.П.</td>  
                      <td>460009 Оренбургская обл. г. Оренбург ул. Столпянского 36</td>  
                      <td></td>  
                  </tr>        
                      <tr>  
                      <td>Новый ракурс</td>  
                      <td>460009 Оренбургская обл. г. Оренбург ул. Инструментальная 5 </td>  
                      <td>3532370871</td>  
                  </tr>        
                      <tr>  
                      <td>Ассортимент</td>  
                      <td>460004 Оренбургская обл. г. Оренбург ул. Юркина 9А</td>  
                      <td>3532573995</td>  
                  </tr>        
                      <tr>  
                      <td>Омфала</td>  
                      <td>Оренбургская обл. г. Оренбург пер. Станочный 11</td>  
                      <td>3532452030</td>  
                  </tr>        
        
    </table>
    
</div>
 <div id="map" style="width:800px; height:800px"></div>
</body>
</html> <?php }} ?>