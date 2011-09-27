<?php

/**
 * PluginDmSetting
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5925 2009-06-22 21:27:17Z jwage $
 */
abstract class PluginDmSetting extends BaseDmSetting
{
  
  public function preInsert($event)
  {
    parent::preInsert($event);
    
    if(!$this->get('value') && $this->get('default_value'))
    {
      $this->set('value', $this->get('default_value'));
    }
  }

  // Get a value from the options array
  public function getParam($name, $required = false)
  {
    $config = $this->getParamsArray();
    
    if ($required && !isset($config[$name])) 
    {
      throw new sfException(sprintf('Missing required option "%s" in setting %s', $name, $this->name));
    }
    
    return isset($config[$name]) ? $config[$name] : false;
  }
  
  // convert the options text area to an array
  public function getParamsArray()
  {
    return $this->get('params') ? sfToolkit::stringToArray($this->get('params')) : array();
  }
}