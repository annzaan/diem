<?php

class DmForgotPasswordStep2Form extends dmForm
{
  protected $user;

  public function __construct(DmUser $user, array $options = array())
  {
    $this->user = $user;

    parent::__construct(array(), $options);
  }
  
  public function configure()
  {
  
    $this->widgetSchema->setHelps(array(
      'password' => 'Wpisz hasło. Hasło ze względów bezpieczeństwa powinien posiadać minimum 6 znaków.',
      'password_again' => 'Wpisz hasło raz jeszcze.',
    ));
    
    $this->getWidgetSchema()->setLabels(
      array(
        'password' => 'Hasło',
        'password_again' => 'Hasło (ponownie)',
      )
    );      
  
    $this->widgetSchema['password'] = new sfWidgetFormInputPassword(array(), array(
      'autocomplete' => 'off'
    ));
    $this->validatorSchema['password'] = new sfValidatorString(array('max_length' => 128));
    
    $this->widgetSchema['password_again'] = new sfWidgetFormInputPassword(array(
      'label' => 'Password (again)'
    ), array(
      'autocomplete' => 'off'
    ));
    $this->validatorSchema['password_again'] = clone $this->validatorSchema['password'];
    
    $this->mergePostValidator(new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_again', array(), array('invalid' => 'The two passwords must be the same.')));
    
    $this->widgetSchema['password']->setAttribute('title','Hasło');
    $this->widgetSchema['password']->setAttribute('class','text');
    $this->widgetSchema['password_again']->setAttribute('title','Ponownie hasło');
    $this->widgetSchema['password_again']->setAttribute('class','text');    
    
    $this->setName('forgotform');
    
    $this->widgetSchema->addFormFormatter('register_div',new IvWidgetFormSchemaFormatterDivRegister($this->widgetSchema));
    $this->widgetSchema->setFormFormatterName('register_div');    
  }

  /**
   * @return DmUser
   */
  public function getUser()
  {
    return $this->user;
  }
}