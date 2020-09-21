<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Banco', 'doctrine');

/**
 * BaseBanco
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property Doctrine_Collection $Cobros
 * @property Doctrine_Collection $PagoComision
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method string              getNombre()       Returns the current record's "nombre" value
 * @method Doctrine_Collection getCobros()       Returns the current record's "Cobros" collection
 * @method Doctrine_Collection getPagoComision() Returns the current record's "PagoComision" collection
 * @method Banco               setId()           Sets the current record's "id" value
 * @method Banco               setNombre()       Sets the current record's "nombre" value
 * @method Banco               setCobros()       Sets the current record's "Cobros" collection
 * @method Banco               setPagoComision() Sets the current record's "PagoComision" collection
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBanco extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('banco');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 250,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Cobro as Cobros', array(
             'local' => 'id',
             'foreign' => 'banco_id'));

        $this->hasMany('PagoComision', array(
             'local' => 'id',
             'foreign' => 'banco_id'));
    }
}