<?php

class DmForgotPasswordStep1Form extends dmForm
{
  public function configure()
  {
    $this->widgetSchema['email'] = new sfWidgetFormInputText();
    $this->validatorSchema['email'] = new sfValidatorEmail();
    $this->validatorSchema['email']->setMessage('required','Podaj e-mail.');
    $this->validatorSchema['email']->setMessage('invalid','Podany został niepoprawny adres e-mail.');
    
    $this->validatorSchema->setPostValidator(new sfValidatorCallback(array(
      'callback' => array($this, 'validateEmail')
    )));

    $this->widgetSchema->setHelps(array(
      'email' => 'Na ten adres email zostanie wysłana wiadomość zawierająca odnośnik do strony gdzie będziesz mógł ustawić nowe hasło.',
    ));

    $this->widgetSchema->setLabels(array(
      'email' => 'E-mail',
    ));
    
    $this->widgetSchema['email']->setAttribute('title','E-mail');
    $this->widgetSchema['email']->setAttribute('class','text validoff');
    
    $this->setName('forgotform');
    
    $this->widgetSchema->addFormFormatter('register_div',new IvWidgetFormSchemaFormatterWoLabel($this->widgetSchema));
    $this->widgetSchema->setFormFormatterName('register_div');
  }

  public function validateEmail($validator, $values)
  {
    if ($values['email'] && !$this->getUserByEmail($values['email']))
    {
      throw new sfValidatorErrorSchema($validator, array('email' => new sfValidatorError($validator, 'Ten adres nie istnieje w naszej bazie.')));
    }

    return $values;
  }

  public function getUserByEmail($email)
  {
    return dmDb::table('DmUser')->retrieveByEmail($email);
  }

}