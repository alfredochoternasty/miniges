<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Grupoprod2', 'doctrine');

/**
 * BaseGrupoprod2
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property Doctrine_Collection $Producto2
 * 
 * @method integer             getId()        Returns the current record's "id" value
 * @method string              getNombre()    Returns the current record's "nombre" value
 * @method Doctrine_Collection getProducto2() Returns the current record's "Producto2" collection
 * @method Grupoprod2          setId()        Sets the current record's "id" value
 * @method Grupoprod2          setNombre()    Sets the current record's "nombre" value
 * @method Grupoprod2          setProducto2() Sets the current record's "Producto2" collection
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGrupoprod2 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('grupoprod2');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Producto2', array(
             'local' => 'id',
             'foreign' => 'grupoprod_id'));
    }
}