{include file='header.tpl'}
<body>
{include file='menu.tpl'}    
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
        
    {foreach item=InvoiceData from=$data key=iter}
                  <tr>  
                      <td>{$InvoiceData.accountname}</td>  
                      <td>{$InvoiceData.invoice_date}</td>  
                      <td>{$InvoiceData.amount}</td> 
                  </tr>        
    {/foreach}
    
    </table>
    
</div>
 <div id="map" style="width:800px; height:800px"></div>
{include file='footer.tpl'} 