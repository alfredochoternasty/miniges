<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ListadoVentas', 'doctrine');

/**
 * BaseListadoVentas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $resumen_id
 * @property integer $cliente_id
 * @property integer $producto_id
 * @property integer $grupoprod_id
 * @property integer $zona_id
 * @property date $fecha
 * @property string $nro_lote
 * @property integer $cantidad
 * @property integer $tipofactura_id
 * @property integer $det_remito_id
 * @property DetalleResumen $DetalleResumen
 * @property Resumen $Resumen
 * @property Cliente $Cliente
 * @property Producto $Producto
 * @property Grupoprod $Grupo
 * @property Zona $Zona
 * 
 * @method integer        getId()             Returns the current record's "id" value
 * @method integer        getResumenId()      Returns the current record's "resumen_id" value
 * @method integer        getClienteId()      Returns the current record's "cliente_id" value
 * @method integer        getProductoId()     Returns the current record's "producto_id" value
 * @method integer        getGrupoprodId()    Returns the current record's "grupoprod_id" value
 * @method integer        getZonaId()         Returns the current record's "zona_id" value
 * @method date           getFecha()          Returns the current record's "fecha" value
 * @method string         getNroLote()        Returns the current record's "nro_lote" value
 * @method integer        getCantidad()       Returns the current record's "cantidad" value
 * @method integer        getTipofacturaId()  Returns the current record's "tipofactura_id" value
 * @method integer        getDetRemitoId()    Returns the current record's "det_remito_id" value
 * @method DetalleResumen getDetalleResumen() Returns the current record's "DetalleResumen" value
 * @method Resumen        getResumen()        Returns the current record's "Resumen" value
 * @method Cliente        getCliente()        Returns the current record's "Cliente" value
 * @method Producto       getProducto()       Returns the current record's "Producto" value
 * @method Grupoprod      getGrupo()          Returns the current record's "Grupo" value
 * @method Zona           getZona()           Returns the current record's "Zona" value
 * @method ListadoVentas  setId()             Sets the current record's "id" value
 * @method ListadoVentas  setResumenId()      Sets the current record's "resumen_id" value
 * @method ListadoVentas  setClienteId()      Sets the current record's "cliente_id" value
 * @method ListadoVentas  setProductoId()     Sets the current record's "producto_id" value
 * @method ListadoVentas  setGrupoprodId()    Sets the current record's "grupoprod_id" value
 * @method ListadoVentas  setZonaId()         Sets the current record's "zona_id" value
 * @method ListadoVentas  setFecha()          Sets the current record's "fecha" value
 * @method ListadoVentas  setNroLote()        Sets the current record's "nro_lote" value
 * @method ListadoVentas  setCantidad()       Sets the current record's "cantidad" value
 * @method ListadoVentas  setTipofacturaId()  Sets the current record's "tipofactura_id" value
 * @method ListadoVentas  setDetRemitoId()    Sets the current record's "det_remito_id" value
 * @method ListadoVentas  setDetalleResumen() Sets the current record's "DetalleResumen" value
 * @method ListadoVentas  setResumen()        Sets the current record's "Resumen" value
 * @method ListadoVentas  setCliente()        Sets the current record's "Cliente" value
 * @method ListadoVentas  setProducto()       Sets the current record's "Producto" value
 * @method ListadoVentas  setGrupo()          Sets the current record's "Grupo" value
 * @method ListadoVentas  setZona()           Sets the current record's "Zona" value
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseListadoVentas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('listado_ventas');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('resumen_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('cliente_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('producto_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('grupoprod_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('zona_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('fecha', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
        $this->hasColumn('nro_lote', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('cantidad', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('tipofactura_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('det_remito_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DetalleResumen', array(
             'local' => 'id',
             'foreign' => 'id'));

        $this->hasOne('Resumen', array(
             'local' => 'resumen_id',
             'foreign' => 'id'));

        $this->hasOne('Cliente', array(
             'local' => 'cliente_id',
             'foreign' => 'id'));

        $this->hasOne('Producto', array(
             'local' => 'producto_id',
             'foreign' => 'id'));

        $this->hasOne('Grupoprod as Grupo', array(
             'local' => 'grupoprod_id',
             'foreign' => 'id'));

        $this->hasOne('Zona', array(
             'local' => 'zona_id',
             'foreign' => 'id'));
    }
}