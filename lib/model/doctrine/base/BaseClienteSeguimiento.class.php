<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClienteSeguimiento', 'doctrine');

/**
 * BaseClienteSeguimiento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $cliente_id
 * @property date $fecha
 * @property string $hora
 * @property integer $tipo_contacto_id
 * @property integer $tipo_respuesta_id
 * @property string $comentario
 * @property date $prox_contac_fecha
 * @property string $prox_contac_hora
 * @property integer $prox_contac_tiempo
 * @property string $prox_contact_coment
 * @property string $usuario
 * @property integer $motivo_id
 * @property integer $realizada
 * @property Cliente $Cliente
 * @property TipoMotivo $TipoMotivo
 * @property TipoContacto $TipoContacto
 * @property TipoRespuesta $TipoRespuesta
 * @property TipoTiempoContac $TipoTiempoContac
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer            getId()                  Returns the current record's "id" value
 * @method integer            getClienteId()           Returns the current record's "cliente_id" value
 * @method date               getFecha()               Returns the current record's "fecha" value
 * @method string             getHora()                Returns the current record's "hora" value
 * @method integer            getTipoContactoId()      Returns the current record's "tipo_contacto_id" value
 * @method integer            getTipoRespuestaId()     Returns the current record's "tipo_respuesta_id" value
 * @method string             getComentario()          Returns the current record's "comentario" value
 * @method date               getProxContacFecha()     Returns the current record's "prox_contac_fecha" value
 * @method string             getProxContacHora()      Returns the current record's "prox_contac_hora" value
 * @method integer            getProxContacTiempo()    Returns the current record's "prox_contac_tiempo" value
 * @method string             getProxContactComent()   Returns the current record's "prox_contact_coment" value
 * @method string             getUsuario()             Returns the current record's "usuario" value
 * @method integer            getMotivoId()            Returns the current record's "motivo_id" value
 * @method integer            getRealizada()           Returns the current record's "realizada" value
 * @method Cliente            getCliente()             Returns the current record's "Cliente" value
 * @method TipoMotivo         getTipoMotivo()          Returns the current record's "TipoMotivo" value
 * @method TipoContacto       getTipoContacto()        Returns the current record's "TipoContacto" value
 * @method TipoRespuesta      getTipoRespuesta()       Returns the current record's "TipoRespuesta" value
 * @method TipoTiempoContac   getTipoTiempoContac()    Returns the current record's "TipoTiempoContac" value
 * @method sfGuardUser        getSfGuardUser()         Returns the current record's "sfGuardUser" value
 * @method ClienteSeguimiento setId()                  Sets the current record's "id" value
 * @method ClienteSeguimiento setClienteId()           Sets the current record's "cliente_id" value
 * @method ClienteSeguimiento setFecha()               Sets the current record's "fecha" value
 * @method ClienteSeguimiento setHora()                Sets the current record's "hora" value
 * @method ClienteSeguimiento setTipoContactoId()      Sets the current record's "tipo_contacto_id" value
 * @method ClienteSeguimiento setTipoRespuestaId()     Sets the current record's "tipo_respuesta_id" value
 * @method ClienteSeguimiento setComentario()          Sets the current record's "comentario" value
 * @method ClienteSeguimiento setProxContacFecha()     Sets the current record's "prox_contac_fecha" value
 * @method ClienteSeguimiento setProxContacHora()      Sets the current record's "prox_contac_hora" value
 * @method ClienteSeguimiento setProxContacTiempo()    Sets the current record's "prox_contac_tiempo" value
 * @method ClienteSeguimiento setProxContactComent()   Sets the current record's "prox_contact_coment" value
 * @method ClienteSeguimiento setUsuario()             Sets the current record's "usuario" value
 * @method ClienteSeguimiento setMotivoId()            Sets the current record's "motivo_id" value
 * @method ClienteSeguimiento setRealizada()           Sets the current record's "realizada" value
 * @method ClienteSeguimiento setCliente()             Sets the current record's "Cliente" value
 * @method ClienteSeguimiento setTipoMotivo()          Sets the current record's "TipoMotivo" value
 * @method ClienteSeguimiento setTipoContacto()        Sets the current record's "TipoContacto" value
 * @method ClienteSeguimiento setTipoRespuesta()       Sets the current record's "TipoRespuesta" value
 * @method ClienteSeguimiento setTipoTiempoContac()    Sets the current record's "TipoTiempoContac" value
 * @method ClienteSeguimiento setSfGuardUser()         Sets the current record's "sfGuardUser" value
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClienteSeguimiento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cliente_seguimiento');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('cliente_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('fecha', 'date', 25, array(
             'type' => 'date',
             'notnull' => true,
             'length' => 25,
             ));
        $this->hasColumn('hora', 'string', 5, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 5,
             ));
        $this->hasColumn('tipo_contacto_id', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 1,
             ));
        $this->hasColumn('tipo_respuesta_id', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 1,
             ));
        $this->hasColumn('comentario', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('prox_contac_fecha', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
        $this->hasColumn('prox_contac_hora', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             ));
        $this->hasColumn('prox_contac_tiempo', 'integer', 1, array(
             'type' => 'integer',
             'length' => 1,
             ));
        $this->hasColumn('prox_contact_coment', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('usuario', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('motivo_id', 'integer', 1, array(
             'type' => 'integer',
             'length' => 1,
             ));
        $this->hasColumn('realizada', 'integer', 1, array(
             'type' => 'integer',
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Cliente', array(
             'local' => 'cliente_id',
             'foreign' => 'id'));

        $this->hasOne('TipoMotivo', array(
             'local' => 'motivo_id',
             'foreign' => 'id'));

        $this->hasOne('TipoContacto', array(
             'local' => 'tipo_contacto_id',
             'foreign' => 'id'));

        $this->hasOne('TipoRespuesta', array(
             'local' => 'tipo_respuesta_id',
             'foreign' => 'id'));

        $this->hasOne('TipoTiempoContac', array(
             'local' => 'prox_contac_tiempo',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'usuario',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));
    }
}