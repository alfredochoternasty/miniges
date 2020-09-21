<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('UsuarioZona', 'doctrine');

/**
 * BaseUsuarioZona
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $zona_id
 * @property integer $usuario
 * @property Zona $Zona
 * @property sfGuardUser $Usuario
 * 
 * @method integer     getId()      Returns the current record's "id" value
 * @method integer     getZonaId()  Returns the current record's "zona_id" value
 * @method integer     getUsuario() Returns the current record's "usuario" value
 * @method Zona        getZona()    Returns the current record's "Zona" value
 * @method sfGuardUser getUsuario() Returns the current record's "Usuario" value
 * @method UsuarioZona setId()      Sets the current record's "id" value
 * @method UsuarioZona setZonaId()  Sets the current record's "zona_id" value
 * @method UsuarioZona setUsuario() Sets the current record's "usuario" value
 * @method UsuarioZona setZona()    Sets the current record's "Zona" value
 * @method UsuarioZona setUsuario() Sets the current record's "Usuario" value
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuarioZona extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuario_zona');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('zona_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('usuario', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Zona', array(
             'local' => 'zona_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('sfGuardUser as Usuario', array(
             'local' => 'usuario',
             'foreign' => 'id'));
    }
}