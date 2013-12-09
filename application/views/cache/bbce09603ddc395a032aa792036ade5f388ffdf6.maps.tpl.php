<?php /*%%SmartyHeaderCode:304152a5ad34b538b2-51473728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbce09603ddc395a032aa792036ade5f388ffdf6' => 
    array (
      0 => 'application\\views\\templates\\maps\\maps.tpl',
      1 => 1386589450,
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
  'nocache_hash' => '304152a5ad34b538b2-51473728',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a5ad34c59e11_16266787',
  'cache_lifetime' => 86400,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a5ad34c59e11_16266787')) {function content_52a5ad34c59e11_16266787($_smarty_tpl) {?><html>
<head>
    <title>Карта</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <script src="http://yandex.st/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <script src="js/datepicker-2.6.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://diplom/css/style.css" />
</head>


<body>

<script>
ymaps.ready(function(){
    ///init();
    new DatePicker('#data_invoice',{format:"j.n.Y"});
});

    var Test = [];
function setLength(route){
    ////console.log(route.requestPoints[0]+" ::: "+route.requestPoints[1]+"::::"+route.getLength());
    $.getJSON('/accounts/setpoint/'+route.requestPoints[0]+'/'+route.requestPoints[1]+'/'+
            route.getLength(),{},
    function(data){
        ///console.log(data);
        Test = data;
    });
		
}

var myMap;
var Point;
function init() {
    myMap = new ymaps.Map("map", {
            center: [51.745508, 55.135225],
            zoom: 13
    });	
    myMap.controls
        // Кнопка изменения масштаба.
        .add('zoomControl', { left: 5, top: 5 })
        // Список типов карты
        .add('typeSelector')
        // Стандартный набор кнопок
        .add('mapTools', { left: 35, top: 5 });

	/*var Point = ['Оренбург 60 Лет октября 2Г',
                    'Оренбург Победы 3а',
                    'Оренбург Аксакова 8',
                    'Оренбург Терешковой 2А',
                    'Оренбург Дзержинского 10', 
                    'Оренбург Майский 1А',
                    '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51',
                    '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16'
                    ];*/
		for (var i =0; i< Point.length; i++){
			fistPoint = Point[i];
			for (var j=0; j<Point.length; j++){
				var endPoint = Point[j];
				if (fistPoint == endPoint){
					continue;
				}
				ymaps.route(new Array(fistPoint,endPoint)).then(function(route){
					setLength(route)
                                        ///myMap.geoObjects.add(route);
                                });
			}           
		}	
           ///// console.log(Test)	;
	};
	
	
		
		////
function getTest(){
    Test.push("Оренбург 60 Лет октября 2Г");
    ymaps.route(Test).then(function(route){
	myMap.geoObjects.add(route);
        alert(route.getLength());
    });
}
function getAddress(){
    var territory_ids = $('#territory').val();
    var data_invoice = $('#data_invoice').val();
    $.post('/invoices/getaddress/',{'territory_ids':territory_ids,
                                    'data_invoice':data_invoice},
    function(data){
        console.log(data);
        
    });
}
</script>

 <div id="sd2" style="width:900px; height:200px; margin:0 auto;">
<ul class="css-menu-3">
<li><a href="accounts" class="">Контрагенты</a></li>
<li><a href="invoices" class="">Счета</a></li>
<li><a href="maps" class="selected">Карта</a></li>
<li><a href="#"class="">Настройки</a></li>
</ul>  
    <div id="top_panel" style="width:900px; height:100px">
        <table border=0>
            <tr>
                <td>Дата счета:</td>
                
                <td>
                <input type="text" id="data_invoice" >
                </td>
                <td>Территория:</td>
                <td>
                    <select id="territory" multiple="">
                    <option value=1>Оренбург_Восточный</option>
                    <option value=2>Оренбург_Степной</option>
                    <option value=3>Оренбург_Физики</option>
                    <option value=4>Оренбург_Промышленный</option>
                </select>
                </td>
                <td>
                    <input type="button" id="get_address" value="Получить адреса" onclick="getAddress();">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button" onclick="getTest();" value="Рассчитать расстояния">
                </td>
           </tr>
        </table>
    </div>
    <div id="map" style="width:900px; height:900px"></div>
     </div>
</body>
</body>
</html>
</html><?php }} ?>