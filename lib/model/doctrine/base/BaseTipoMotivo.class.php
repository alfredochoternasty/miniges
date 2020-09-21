<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TipoMotivo', 'doctrine');

/**
 * BaseTipoMotivo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property Doctrine_Collection $ClienteSeguimiento
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method string              getNombre()             Returns the current record's "nombre" value
 * @method Doctrine_Collection getClienteSeguimiento() Returns the current record's "ClienteSeguimiento" collection
 * @method TipoMotivo          setId()                 Sets the current record's "id" value
 * @method TipoMotivo          setNombre()             Sets the current record's "nombre" value
 * @method TipoMotivo          setClienteSeguimiento() Sets the current record's "ClienteSeguimiento" collection
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoMotivo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_motivo');
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
        $this->hasMany('ClienteSeguimiento', array(
             'local' => 'id',
             'foreign' => 'motivo_id'));
    }
}