<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Configuracion', 'doctrine');

/**
 * BaseConfiguracion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id
 * @property string $valor
 * @property string $observacion
 * 
 * @method string        getId()          Returns the current record's "id" value
 * @method string        getValor()       Returns the current record's "valor" value
 * @method string        getObservacion() Returns the current record's "observacion" value
 * @method Configuracion setId()          Sets the current record's "id" value
 * @method Configuracion setValor()       Sets the current record's "valor" value
 * @method Configuracion setObservacion() Sets the current record's "observacion" value
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseConfiguracion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('configuracion');
        $this->hasColumn('id', 'string', 200, array(
             'type' => 'string',
             'primary' => true,
             'length' => 200,
             ));
        $this->hasColumn('valor', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('observacion', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}