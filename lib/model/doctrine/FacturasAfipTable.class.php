<?php

/**
 * FacturasAfipTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class FacturasAfipTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object FacturasAfipTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('FacturasAfip');
    }
		
    public function retrieveConJoins(Doctrine_Query $q){
      $rootAlias = $q->getRootAlias();
      $q->orderBy($rootAlias . '.nro_factura desc');
      return $q;
    }
}