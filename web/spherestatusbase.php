<h2 class="text2">%SERVNAME% Status Page</h2>
<div class="content">
<p>This information is updated in real time from the server every minute.</p>
<p>Last update time %RTIME%</p>

<center>
<table border="1" cellpadding="2">
  <tr>
    <td nowrap colspan="2" class="text5">Statistics</td>
  </tr>
  <tr>
    <td>NPCs</td>
    <td width="100">%CHARS%</td>
  </tr>
  <tr>
    <td>Items</td>
    <td width="100">%ITEMS%</td>
  </tr>
  <tr>
    <td>Guilds</td>
    <td width="100">%GUILDS%</td>
  </tr>
  <tr>
    <td>Clients</td>
    <td width="100">%CLIENTS%</td>
  </tr>
</table>

<div style="clear: both; height: 30px;">&nbsp;</div>

<table border="1" cellpadding="2">
  <tr>
    <td nowrap width="150" class="text5">Clients</td>
    <td nowrap width="150" class="text5">Title</td>
  </tr>
  <script language="Sphere">CLIENTLIST <tr><td>%NAME%</td><td>%TITLE%</td></tr></script>
</table>
</center>
</div>



