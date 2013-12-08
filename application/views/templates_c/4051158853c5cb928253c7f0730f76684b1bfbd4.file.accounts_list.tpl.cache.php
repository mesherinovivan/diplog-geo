<?php /* Smarty version Smarty-3.1.12, created on 2013-12-08 14:31:03
         compiled from "application\views\templates\accounts_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2301852a482a7060449-81941677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4051158853c5cb928253c7f0730f76684b1bfbd4' => 
    array (
      0 => 'application\\views\\templates\\accounts_list.tpl',
      1 => 1386512700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2301852a482a7060449-81941677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 0,
    'data' => 0,
    'AccountData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a482a70e00a7_43339599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a482a70e00a7_43339599')) {function content_52a482a70e00a7_43339599($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Примеры. Построение маршрута</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <script src="http://yandex.st/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script>
ymaps.ready(init);

function setLength(route){
    ////console.log(route.requestPoints[0]+" ::: "+route.requestPoints[1]+"::::"+route.getLength());
    $.get('/accounts/setpoint/'+route.requestPoints[0]+'/'+route.requestPoints[1]+'/'+
            route.getLength(),{},
    function(data){
        console.log(data);
    });
		
}

var tmp  = new Array();
function init() {
    var myMap = new ymaps.Map("map", {
            center: [51.745508, 55.135225],
            zoom: 11
    });	
	
	var Point = ['Оренбург 60 Лет октября 2Г','Оренбург Победы 3а','Оренбург Аксакова 8',
                    'Оренбург Терешковой 2А','Оренбург Дзержинского 10', 'Оренбург Майский 1А'
                    ];
		for (var i =0; i< Point.length; i++){
			fistPoint = Point[i];
			for (var j=i; j<Point.length; j++){
				var endPoint = Point[j];
				if (fistPoint == endPoint){
					continue;
				}
				ymaps.route(new Array(fistPoint,endPoint)).then(function(route){
					setLength(route)});
			}	
		}	
		
	};
	
	
		
		////
</script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</title>
</head>
<body>
    

    <div style="padding-top: 30px; width: 90px; height: 30px; border-radius:10px; border-width: 1px; border-style: solid;border-color: #453678;">Контагенты</div>
    
    <table class="" border=1>
        <tr>
            <td>
                <b>Название</b>
            </td>
            <td>
                <b>Адрес</b>
            </td>
            <td>
                <b>Телефон</b>
            </td>
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
    

 <div id="map" style="width:500px; height:400px"></div>
    
</body>
</html>
<html>

</body>
</html><?php }} ?>