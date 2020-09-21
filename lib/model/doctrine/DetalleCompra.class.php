<?php

/**
 * DetalleCompra
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    odontopc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class DetalleCompra extends BaseDetalleCompra
{
  public function SimboloMoneda(){
    return $this->getCompra()->getMoneda()->getSimbolo();
  }
  
  public function PrecioFormato(){
    return sprintf($this->SimboloMoneda()." %01.2f", $this->getPrecio());
  }
  
  public function TotalFormato(){
    return sprintf($this->SimboloMoneda()." %01.2f", $this->getTotal());
  } 
  
  public function IvaFormato(){
    return sprintf($this->SimboloMoneda()." %01.2f", $this->getIva());
  } 
  
  public function SubTotalFormato(){
    return sprintf($this->SimboloMoneda()." %01.2f", $this->getSubTotal());
  }     
}