<?php /*%%SmartyHeaderCode:14103529c1c2b1bcfa6-50568041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbce09603ddc395a032aa792036ade5f388ffdf6' => 
    array (
      0 => 'application\\views\\templates\\maps\\maps.tpl',
      1 => 1385962536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14103529c1c2b1bcfa6-50568041',
  'variables' => 
  array (
    'PAGE_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529c1c2b243343_47819220',
  'cache_lifetime' => 86400,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529c1c2b243343_47819220')) {function content_529c1c2b243343_47819220($_smarty_tpl) {?><html>
    <head>
        <title>Контрагенты</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <script src="http://yandex.st/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    </head>
    <script type="text/javascript">
    ymaps.ready(init);
    var myMap;

    function init(){     
        myMap = new ymaps.Map ("map", {
            center: [51.76, 55.64],
            zoom: 7
        });
        var point2 = new Array('Оренбург','Орск');
        for (var i=0; i<point2.length; i++){
            var p = point2[i];
            for (var j=0; j<point2.length; j++)   {
                ymaps.route(new Array(p,point2[j])).then(
                    function (route) {
                        myMap.geoObjects.add(route);
                        
                        alert(route.getLength());
                    },
                    function (error) {
                        alert('Возникла ошибка: ' + error.message);
                    }

            );
            }
        }
    }
</script>
    <body>
    <div id="map" style="width: 600px; height: 400px"></div>
    </body>
</html><?php }} ?>