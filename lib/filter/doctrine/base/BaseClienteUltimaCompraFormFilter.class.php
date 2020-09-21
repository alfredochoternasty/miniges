<?php

/**
 * ClienteUltimaCompra filter form base class.
 *
 * @package    odontopc
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClienteUltimaCompraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'apellido' => new sfWidgetFormFilterInput(),
      'nombre'   => new sfWidgetFormFilterInput(),
      'telefono' => new sfWidgetFormFilterInput(),
      'email'    => new sfWidgetFormFilterInput(),
      'celular'  => new sfWidgetFormFilterInput(),
      'fecha'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'apellido' => new sfValidatorPass(array('required' => false)),
      'nombre'   => new sfValidatorPass(array('required' => false)),
      'telefono' => new sfValidatorPass(array('required' => false)),
      'email'    => new sfValidatorPass(array('required' => false)),
      'celular'  => new sfValidatorPass(array('required' => false)),
      'fecha'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('cliente_ultima_compra_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClienteUltimaCompra';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'apellido' => 'Text',
      'nombre'   => 'Text',
      'telefono' => 'Text',
      'email'    => 'Text',
      'celular'  => 'Text',
      'fecha'    => 'Date',
    );
  }
}
