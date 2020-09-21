<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TipoInscripcion', 'doctrine');

/**
 * BaseTipoInscripcion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property Doctrine_Collection $CursoInscripcion
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method string              getNombre()           Returns the current record's "nombre" value
 * @method Doctrine_Collection getCursoInscripcion() Returns the current record's "CursoInscripcion" collection
 * @method TipoInscripcion     setId()               Sets the current record's "id" value
 * @method TipoInscripcion     setNombre()           Sets the current record's "nombre" value
 * @method TipoInscripcion     setCursoInscripcion() Sets the current record's "CursoInscripcion" collection
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoInscripcion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_inscripcion');
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
        $this->hasMany('CursoInscripcion', array(
             'local' => 'id',
             'foreign' => 'tipo_insc_id'));
    }
}