<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('FactCompra', 'doctrine');

/**
 * BaseFactCompra
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $proveedor_id
 * @property integer $numero
 * @property integer $tipofactura_id
 * @property date $fecha
 * @property integer $moneda_id
 * @property string $observacion
 * @property Proveedor $Proveedor
 * @property Doctrine_Collection $Detalle
 * @property TipoFactura $Tipofactura
 * @property TipoMoneda $Moneda
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method integer             getProveedorId()    Returns the current record's "proveedor_id" value
 * @method integer             getNumero()         Returns the current record's "numero" value
 * @method integer             getTipofacturaId()  Returns the current record's "tipofactura_id" value
 * @method date                getFecha()          Returns the current record's "fecha" value
 * @method integer             getMonedaId()       Returns the current record's "moneda_id" value
 * @method string              getObservacion()    Returns the current record's "observacion" value
 * @method Proveedor           getProveedor()      Returns the current record's "Proveedor" value
 * @method Doctrine_Collection getDetalle()        Returns the current record's "Detalle" collection
 * @method TipoFactura         getTipofactura()    Returns the current record's "Tipofactura" value
 * @method TipoMoneda          getMoneda()         Returns the current record's "Moneda" value
 * @method FactCompra          setId()             Sets the current record's "id" value
 * @method FactCompra          setProveedorId()    Sets the current record's "proveedor_id" value
 * @method FactCompra          setNumero()         Sets the current record's "numero" value
 * @method FactCompra          setTipofacturaId()  Sets the current record's "tipofactura_id" value
 * @method FactCompra          setFecha()          Sets the current record's "fecha" value
 * @method FactCompra          setMonedaId()       Sets the current record's "moneda_id" value
 * @method FactCompra          setObservacion()    Sets the current record's "observacion" value
 * @method FactCompra          setProveedor()      Sets the current record's "Proveedor" value
 * @method FactCompra          setDetalle()        Sets the current record's "Detalle" collection
 * @method FactCompra          setTipofactura()    Sets the current record's "Tipofactura" value
 * @method FactCompra          setMoneda()         Sets the current record's "Moneda" value
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFactCompra extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('fact_compra');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('proveedor_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('numero', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('tipofactura_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('fecha', 'date', 25, array(
             'type' => 'date',
             'notnull' => true,
             'length' => 25,
             ));
        $this->hasColumn('moneda_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('observacion', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Proveedor', array(
             'local' => 'proveedor_id',
             'foreign' => 'id'));

        $this->hasMany('DetFactCompra as Detalle', array(
             'local' => 'id',
             'foreign' => 'factcompra_id'));

        $this->hasOne('TipoFactura as Tipofactura', array(
             'local' => 'tipofactura_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('TipoMoneda as Moneda', array(
             'local' => 'moneda_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));
    }
}