<?php

/**
 * Cliente
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Cliente extends BaseCliente
{
  public function __toString(){
    $val = $this->getApellido().' '.$this->getNombre();
    return empty($val)? '' : $val;
  }

  public function getDescAfip(){
		$val = $this->getApellido().' '.$this->getNombre();
		$val .= ' - ('.$this->getZona().')';
		$val .= ' - CUIT: '.$this->getCuit().' ('.$this->getCondfiscal().')';
		return empty($val)? '' : $val;
  }
  
  public function getListaPrecio(){
	$lista = $this->getListaId();
	if(empty($lista)){
		$listas = Doctrine::getTable('ListaPrecio')->findByDefecto(1);
		$lista = $listas[0]->getId();
	}
	return $lista;
  }
	
  public function getSaldoCtaCte($moneda = 0, $fecha_fin = null, $formato=true){
    $q = Doctrine_Query::create()
          ->select('sum(debe - haber) as saldo')
          ->from('CtaCte c')
          ->where('cliente_id = ?', $this->getId())
          ->andWhere('moneda_id = ?', $moneda);
    
    if(!empty($fecha_fin)) $q->andWhere('fecha < ?', $fecha_fin);
   
    $saldo = $q->execute();
    
    if($saldo[0]['saldo'] == '')
      return 0;
    elseif($formato)
      return sprintf(" %01.2f", $saldo[0]['saldo']);
		else
			return $saldo[0]['saldo'];
  }

  function getTelefonos() {
	  return trim($this->getTelefono()).'/'.trim($this->getCelular());
  }
	
	public function getTiposFacturas(){
		$tipo_facts = Doctrine::getTable('TipoFactura')->createQuery()->execute();
		$options = array();
		foreach ($tipo_facts as $tipo_fact) {
			$fact_cond_fiscales = explode(',', $tipo_fact->cond_fiscales);
			if (in_array($this->condicionfiscal_id, $fact_cond_fiscales)) $options[$tipo_fact->id] = $tipo_fact->nombre;
		}
		return $options;
	}
	
	public function getFacturas(){
		return Doctrine::getTable('FacturasAfip')
			->createQuery()
			->where('cliente_id = ?', $this->id)
			->orderBy('id desc')
			->execute();
	}
}