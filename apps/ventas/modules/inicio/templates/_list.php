<div style="position:relative" class="sf_admin_list ui-grid-table ui-widget ui-corner-all ui-helper-reset ui-helper-clearfix">
<?php
	$base_url = $sf_user->getVarConfig('base_url');
	if (!$sf_user->getGuardUser()->es_cliente) {
		// if ($zona_id > 1) {
			// echo '<div style="width:100%;margin-top:10%;text-align:center;"><img src="'.$base_url.'/images/home.png"></div>';
		// } else {
			if ($sf_user->hasCredential('Stock Minimo')) include_partial('stock_minimo', array('pager' => $pager));
			
			$modulo_pedidos = $sf_user->getVarConfig('modulo_pedidos');
			if (!empty($pager2) && $modulo_pedidos == 'S' && $sf_user->hasCredential('Nuevos Pedidos')) include_partial('ped_pend', array('pager2' => $pager2));
			
			if ($sf_user->hasCredential('Ventas Actuales')) include_partial('ventas', array('ventas' => $ventas, 'zona_id' => $zona_id));
			if ($sf_user->hasCredential('Cantidad Clientes')) include_partial('clientes', array('clientes' => $clientes));
			if ($sf_user->hasCredential('Clientes Nuevos') && $modulo_pedidos == 'S') include_partial('clientes_web', array('clientes' => $clientes, 'helper' => $helper));
			if ($sf_user->hasCredential('Ventas por Pedido') && $modulo_pedidos == 'S') include_partial('tipo_ventas', array('tipo_ventas' => $tipo_ventas));
		// }
	} else {
		echo '<div style="width:100%;margin-top:10%;text-align:center;"><img src="'.$base_url.'/images/home.png"></div>';
	}
?>
</div>