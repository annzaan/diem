<?php

/**
 * DmUser filter form base class.
 *
 * @package    retest
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDmUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
<<<<<<< HEAD


		if($this->needsWidget('id')){
			$this->setWidget('id', new sfWidgetFormDmFilterInput());
			$this->setValidator('id', new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'DmUser', 'column' => 'id')));
		}
		if($this->needsWidget('username')){
			$this->setWidget('username', new sfWidgetFormDmFilterInput());
			$this->setValidator('username', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('email')){
			$this->setWidget('email', new sfWidgetFormDmFilterInput());
			$this->setValidator('email', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('algorithm')){
			$this->setWidget('algorithm', new sfWidgetFormDmFilterInput());
			$this->setValidator('algorithm', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('salt')){
			$this->setWidget('salt', new sfWidgetFormDmFilterInput());
			$this->setValidator('salt', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('password')){
			$this->setWidget('password', new sfWidgetFormDmFilterInput());
			$this->setValidator('password', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('is_active')){
			$this->setWidget('is_active', new sfWidgetFormChoice(array('choices' => array('' => $this->getI18n()->__('yes or no', array(), 'dm'), 1 => $this->getI18n()->__('yes', array(), 'dm'), 0 => $this->getI18n()->__('no', array(), 'dm')))));
			$this->setValidator('is_active', new sfValidatorChoice(array('required' => false, 'choices' => array(0, 1))));
		}
		if($this->needsWidget('is_super_admin')){
			$this->setWidget('is_super_admin', new sfWidgetFormChoice(array('choices' => array('' => $this->getI18n()->__('yes or no', array(), 'dm'), 1 => $this->getI18n()->__('yes', array(), 'dm'), 0 => $this->getI18n()->__('no', array(), 'dm')))));
			$this->setValidator('is_super_admin', new sfValidatorChoice(array('required' => false, 'choices' => array(0, 1))));
		}
		if($this->needsWidget('last_login')){
			$this->setWidget('last_login', new sfWidgetFormChoice(array('choices' => array(
=======
    $this->setWidgets(array(
      'username'             => new sfWidgetFormDmFilterInput(),
      'email'                => new sfWidgetFormDmFilterInput(),
      'algorithm'            => new sfWidgetFormDmFilterInput(),
      'salt'                 => new sfWidgetFormDmFilterInput(),
      'password'             => new sfWidgetFormDmFilterInput(),
      'is_active'            => new sfWidgetFormChoice(array('choices' => array('' => $this->getI18n()->__('yes or no', array(), 'dm'), 1 => $this->getI18n()->__('yes', array(), 'dm'), 0 => $this->getI18n()->__('no', array(), 'dm')))),
      'is_super_admin'       => new sfWidgetFormChoice(array('choices' => array('' => $this->getI18n()->__('yes or no', array(), 'dm'), 1 => $this->getI18n()->__('yes', array(), 'dm'), 0 => $this->getI18n()->__('no', array(), 'dm')))),
      'last_login'           => new sfWidgetFormChoice(array('choices' => array(
>>>>>>> c3a3392eeaaf609356f1a404ff87d4a5bf5a7ff3
        ''      => '',
        'today' => $this->getI18n()->__('Today'),
        'week'  => $this->getI18n()->__('Past %number% days', array('%number%' => 7)),
        'month' => $this->getI18n()->__('This month'),
        'year'  => $this->getI18n()->__('This year')
      ))),
      'forgot_password_code' => new sfWidgetFormDmFilterInput(),
      'created_at'           => new sfWidgetFormChoice(array('choices' => array(
        ''      => '',
        'today' => $this->getI18n()->__('Today'),
        'week'  => $this->getI18n()->__('Past %number% days', array('%number%' => 7)),
        'month' => $this->getI18n()->__('This month'),
        'year'  => $this->getI18n()->__('This year')
      ))),
      'updated_at'           => new sfWidgetFormChoice(array('choices' => array(
        ''      => '',
        'today' => $this->getI18n()->__('Today'),
        'week'  => $this->getI18n()->__('Past %number% days', array('%number%' => 7)),
        'month' => $this->getI18n()->__('This month'),
        'year'  => $this->getI18n()->__('This year')
      ))),
      'groups_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DmGroup')),
      'permissions_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DmPermission')),
    ));

    $this->setValidators(array(
      'username'             => new sfValidatorPass(array('required' => false)),
      'email'                => new sfValidatorPass(array('required' => false)),
      'algorithm'            => new sfValidatorPass(array('required' => false)),
      'salt'                 => new sfValidatorPass(array('required' => false)),
      'password'             => new sfValidatorPass(array('required' => false)),
      'is_active'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_super_admin'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'last_login'           => new sfValidatorChoice(array('required' => false, 'choices' => array_keys($this->widgetSchema['last_login']->getOption('choices')))),
      'forgot_password_code' => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorChoice(array('required' => false, 'choices' => array_keys($this->widgetSchema['created_at']->getOption('choices')))),
      'updated_at'           => new sfValidatorChoice(array('required' => false, 'choices' => array_keys($this->widgetSchema['updated_at']->getOption('choices')))),
      'groups_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DmGroup', 'required' => false)),
      'permissions_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DmPermission', 'required' => false)),
    ));
    

    $this->widgetSchema->setNameFormat('dm_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addGroupsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query->leftJoin('r.DmUserGroup DmUserGroup')
          ->andWhereIn('DmUserGroup.dm_group_id', $values);
  }

  public function addPermissionsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query->leftJoin('r.DmUserPermission DmUserPermission')
          ->andWhereIn('DmUserPermission.dm_permission_id', $values);
  }

  public function getModelName()
  {
    return 'DmUser';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'username'             => 'Text',
      'email'                => 'Text',
      'algorithm'            => 'Text',
      'salt'                 => 'Text',
      'password'             => 'Text',
      'is_active'            => 'Boolean',
      'is_super_admin'       => 'Boolean',
      'last_login'           => 'Date',
      'forgot_password_code' => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
      'groups_list'          => 'ManyKey',
      'permissions_list'     => 'ManyKey',
    );
  }
}
