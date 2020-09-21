<?php

/**
 * ControlStock
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ControlStock extends BaseControlStock
{
	public function getCantComprada(){
		$detalles_compras = Doctrine::getTable('DetalleCompra')->findByProductoIdAndNroLote($this->producto_id, $this->nro_lote);
		$cantidad = 0;
		foreach ($detalles_compras as $detalle) {
			if ($detalle->getCompra()->zona_id == $this->zona_id) $cantidad += $detalle->cantidad;
		}
		return $cantidad;
	}
	
	function getCantVendida()
	{
		$detalles_ventas = Doctrine::getTable('DetalleResumen')->findByProductoIdAndNroLote($this->producto_id, $this->nro_lote);
		$cantidad = 0;
		foreach ($detalles_ventas as $detalle) {
			if ($detalle->getResumen()->zona_id == $this->zona_id)
				if (($this->zona_id == 1 && empty($detalle->det_remito_id)) || ($this->zona_id != 1 && !empty($detalle->det_remito_id)))
					$cantidad += $detalle->cantidad;
		}
		return $cantidad - $this->getCantDevueltos();
	}
	
	function getCantDevueltos()
	{
		$devoluciones = Doctrine::getTable('DevProducto')->findByProductoIdAndNroLoteAndZonaId($this->producto_id, $this->nro_lote, $this->zona_id);
		$cantidad = 0;
		foreach ($devoluciones as $dev) {
			$detalles_resumen = $dev->getResumen()->getDetalle();
			$es_dev_de_remito = false;
			foreach ($detalles_resumen as $detalle) {
				if (!empty($detalle->det_remito_id)) $es_dev_de_remito = true;
			}
			if (!$es_dev_de_remito) $cantidad += $dev->cantidad;
		}
		return $cantidad;
	}
}