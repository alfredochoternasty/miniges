<?php

/**
 * VtaFact
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class VtaFact extends BaseVtaFact
{
	public function get_comision_a_pagar() {

		
		if (!empty($this->grupo_porc_desc)) {
			$total = $this->getDetalleResumen()->sub_total * $this->grupo_porc_desc / 100;
		} elseif (!empty($this->prod_porc_desc)) {
			$total = $this->getDetalleResumen()->sub_total * $this->prod_porc_desc / 100;
		} elseif (!empty($this->grupo_precio_desc)) {
			$total = $this->grupo_precio_desc;
		} elseif (!empty($this->prod_precio_desc)) {
			$total = $this->prod_precio_desc;
		} else {
			$total = 0;
		}
		return $total;
	}
	
	public function descuento_aplicado() {
		if (!empty($this->grupo_porc_desc)) {
			$descuento = $this->grupo_porc_desc.' %';
		} elseif (!empty($this->prod_porc_desc)) {
			$descuento = $this->prod_porc_desc.' %';
		} elseif (!empty($this->grupo_precio_desc)) {
			$descuento = $this->grupo_precio_desc;
		} elseif (!empty($this->prod_precio_desc)) {
			$descuento = $this->prod_precio_desc;
		} else {
			$descuento = 0;
		}
		return $descuento;
	}
}