{include file='header.tpl'}
<body>
{include file='menu.tpl'}    
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
        
    {foreach item=AccountData from=$data key=iter}
                  <tr>  
                      <td>{$AccountData.name}</td>  
                      <td>{$AccountData.address}</td>  
                      <td>{$AccountData.phone}</td>  
                  </tr>        
    {/foreach}
    
    </table>
    
</div>
 <div id="map" style="width:800px; height:800px"></div>
{include file='footer.tpl'} 