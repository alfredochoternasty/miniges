<?php

/**
 * DetallePedidoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DetallePedidoTable extends Doctrine_Table
{
	/**
	 * Returns an instance of this class.
	 *
	 * @return object DetallePedidoTable
	 */
	public static function getInstance()
	{
		return Doctrine_Core::getTable('DetallePedido');        
	}
	
  public function getOrdernadoCantidad($pid)
  {
    $q = $this->createQuery('dp')->where('dp.pedido_id = ?', $pid)->orderBy('dp.cantidad DESC');
    return $q->execute();
  }
	
/*
	public function retrieveConJoins(Doctrine_Query $q){
		$rootAlias = $q->getRootAlias();
		$q->leftJoin($rootAlias . '.DetallePedido d');
		$q->leftJoin($rootAlias . '.Cliente c');
	return $q;
	}	
*/
}