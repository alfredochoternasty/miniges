<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CondicionFiscal', 'doctrine');

/**
 * BaseCondicionFiscal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property integer $cod_tipo_afip
 * @property Doctrine_Collection $Clientes
 * @property Doctrine_Collection $Proveedores
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method string              getNombre()        Returns the current record's "nombre" value
 * @method integer             getCodTipoAfip()   Returns the current record's "cod_tipo_afip" value
 * @method Doctrine_Collection getClientes()      Returns the current record's "Clientes" collection
 * @method Doctrine_Collection getProveedores()   Returns the current record's "Proveedores" collection
 * @method CondicionFiscal     setId()            Sets the current record's "id" value
 * @method CondicionFiscal     setNombre()        Sets the current record's "nombre" value
 * @method CondicionFiscal     setCodTipoAfip()   Sets the current record's "cod_tipo_afip" value
 * @method CondicionFiscal     setClientes()      Sets the current record's "Clientes" collection
 * @method CondicionFiscal     setProveedores()   Sets the current record's "Proveedores" collection
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCondicionFiscal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('condicion_fiscal');
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
        $this->hasColumn('cod_tipo_afip', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Cliente as Clientes', array(
             'local' => 'id',
             'foreign' => 'condicionfiscal_id'));

        $this->hasMany('Proveedor as Proveedores', array(
             'local' => 'id',
             'foreign' => 'condicionfiscal_id'));
    }
}