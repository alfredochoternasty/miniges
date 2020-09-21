<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ProductoTraza', 'doctrine');

/**
 * BaseProductoTraza
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $resumen_id
 * @property date $fecha_venta
 * @property integer $cliente_id
 * @property integer $producto_id
 * @property string $nro_lote
 * @property date $fecha_vto
 * @property integer $vendidos
 * @property integer $devueltos
 * @property Cliente $Cliente
 * @property Producto $Producto
 * @property Resumen $Resumen
 * 
 * @method integer       getId()          Returns the current record's "id" value
 * @method integer       getResumenId()   Returns the current record's "resumen_id" value
 * @method date          getFechaVenta()  Returns the current record's "fecha_venta" value
 * @method integer       getClienteId()   Returns the current record's "cliente_id" value
 * @method integer       getProductoId()  Returns the current record's "producto_id" value
 * @method string        getNroLote()     Returns the current record's "nro_lote" value
 * @method date          getFechaVto()    Returns the current record's "fecha_vto" value
 * @method integer       getVendidos()    Returns the current record's "vendidos" value
 * @method integer       getDevueltos()   Returns the current record's "devueltos" value
 * @method Cliente       getCliente()     Returns the current record's "Cliente" value
 * @method Producto      getProducto()    Returns the current record's "Producto" value
 * @method Resumen       getResumen()     Returns the current record's "Resumen" value
 * @method ProductoTraza setId()          Sets the current record's "id" value
 * @method ProductoTraza setResumenId()   Sets the current record's "resumen_id" value
 * @method ProductoTraza setFechaVenta()  Sets the current record's "fecha_venta" value
 * @method ProductoTraza setClienteId()   Sets the current record's "cliente_id" value
 * @method ProductoTraza setProductoId()  Sets the current record's "producto_id" value
 * @method ProductoTraza setNroLote()     Sets the current record's "nro_lote" value
 * @method ProductoTraza setFechaVto()    Sets the current record's "fecha_vto" value
 * @method ProductoTraza setVendidos()    Sets the current record's "vendidos" value
 * @method ProductoTraza setDevueltos()   Sets the current record's "devueltos" value
 * @method ProductoTraza setCliente()     Sets the current record's "Cliente" value
 * @method ProductoTraza setProducto()    Sets the current record's "Producto" value
 * @method ProductoTraza setResumen()     Sets the current record's "Resumen" value
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProductoTraza extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('producto_traza');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('resumen_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('fecha_venta', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
        $this->hasColumn('cliente_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('producto_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('nro_lote', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('fecha_vto', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
        $this->hasColumn('vendidos', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('devueltos', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Cliente', array(
             'local' => 'cliente_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('Producto', array(
             'local' => 'producto_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('Resumen', array(
             'local' => 'resumen_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));
    }
}