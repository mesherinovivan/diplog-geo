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
    

    <div style="background:url(img/AccountsNormal.png) no-repeat; padding-top: 30px; width: 90px; height: 30px; border-radius:10px; border-width: 1px; border-style: solid;border-color: #453678;">Контагенты</div>
    
    <table class="" border=1>
        <tr><td><b>Название</b></td></tr>
        
    {foreach item=AccountData from=$AccountsData key=iter}
                  <tr>  <td>{$AccountsData[$iter].Name}</td>  </tr>        
    {/foreach}
    
    </table>
    <a href="http://www.geo-spd.ru/accounts/welcome/edit">Добавить</a>
</body>
</html>