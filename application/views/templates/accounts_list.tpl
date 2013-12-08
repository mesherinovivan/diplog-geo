<!DOCTYPE html>
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
{literal}
function setLength(route){
    ////console.log(route.requestPoints[0]+" ::: "+route.requestPoints[1]+"::::"+route.getLength());
    $.get('/accounts/setpoint/'+route.requestPoints[0]+'/'+route.requestPoints[1]+'/'+
            route.getLength(),{},
    function(data){
        console.log(data);
    });
		
}
{/literal}
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
  <title>{$PAGE_TITLE}</title>
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
        
    {foreach item=AccountData from=$data key=iter}
                  <tr>  
                      <td>{$AccountData.name}</td>  
                      <td>{$AccountData.address}</td>  
                      <td>{$AccountData.phone}</td>  
                  </tr>        
    {/foreach}
    
    </table>
    

 <div id="map" style="width:500px; height:400px"></div>
    
</body>
</html>
<html>

</body>
</html>