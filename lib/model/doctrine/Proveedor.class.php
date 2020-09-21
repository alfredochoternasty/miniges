<?php

/**
 * Proveedor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Proveedor extends BaseProveedor
{
	public function __toString()
	{
		$val = $this->getRazonSocial();
		return empty($val)? '' : $val;
	}
  
  public function getSaldoCtaCte($p_cuenta){
    $q = Doctrine_Query::create()
          ->select('sum(debe - haber) as saldo')
          ->from('CtaCteProv p')
          ->where('proveedor_id = ?', $this->getId())
          ->where('cuenta_id = ?', $p_cuenta);
    $saldo = $q->execute();
    if($saldo[0]['saldo'] == '')
      return 0;
    else
      return $saldo[0]['saldo'];
  }
	
  public function getProxRemito(){
    $q = Doctrine_Query::create()
          ->select('max(id) as id')
          ->from('Compra c')
          ->where('proveedor_id = ?', $this->getId())
          ->andWhere('tipofactura_id in (4, 1)');
    $rs = $q->execute();
	
    $q = Doctrine_Query::create()
          ->select('numero')
          ->from('Compra c')
          ->where('id = '.$rs[0]['id']);
    $rs = $q->execute();
	  
    return $rs[0]['numero'] + 1;
	}
}