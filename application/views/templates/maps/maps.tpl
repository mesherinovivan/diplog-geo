<html>
    <head>
        <title>{$PAGE_TITLE}</title>
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
</html>