<html>
<head>
</head>
<body>
<h2>Listado de Stock</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
  <tr>
    <th style="background: #CCC;">Grupo</th>
    <th style="background: #CCC;">Nombre</th>
    <th style="background: #CCC;">Lote</th>
    <th style="background: #CCC;">Zona</th>
    <th style="background: #CCC;">Stock Actual</th>
    <th style="background: #CCC;">Stock M&iacute;nimo</th>
  </tr>
  <?php 
    foreach($stock as $prod):?>
  <tr>
    <td><?php echo $prod->getProducto()->getGrupo() ?></td>
    <td><?php echo $prod->getProducto() ?></td>
    <td><?php echo $prod->getNroLote() ?></td>
    <td><?php echo $prod->getZona() ?></td>
    <td><?php echo $prod->getStock() ?></td>
    <td><?php echo $prod->getProducto()->getMinimoStock() ?></td>
  </tr>
  <?php endforeach; ?>
</table>
<p>&nbsp;</p>
<p style="text-align: right; width: 100%; "><b>Fecha de Impresi&oacute;n:</b>&nbsp;&nbsp;<?php echo date("d/m/Y") ?></p>
</body>
<html>
