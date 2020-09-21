<?php

/**
 * Traza2Table
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Traza2Table extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Traza2Table
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Traza2');
    }
    
    public function retrieveConJoins(Doctrine_Query $q){
      $rootAlias = $q->getRootAlias();
      $q->leftJoin($rootAlias . '.Cliente c');
      $q->leftJoin($rootAlias . '.Producto2 p');
      return $q;
    }
}