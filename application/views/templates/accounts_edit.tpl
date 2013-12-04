<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>{$PAGE_TITLE}</title>
</head>
<body>
    <form method="POST" action="save">
        <table>
            <tr>
                <td>Наименование</td>
                <td>
                    <input name = 'Name' type="text"/>
                </td>
            </tr>
            <tr>
                <td>ИНН</td>
                <td>
                    <input name = 'INN' type="text"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input name = 'send' type="submit" value="Отправить"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>