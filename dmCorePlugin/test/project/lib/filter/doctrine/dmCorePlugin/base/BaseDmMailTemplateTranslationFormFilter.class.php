<?php

/**
 * DmMailTemplateTranslation filter form base class.
 *
 * @package    retest
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDmMailTemplateTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'description'     => new sfWidgetFormDmFilterInput(),
      'subject'         => new sfWidgetFormDmFilterInput(),
      'body'            => new sfWidgetFormDmFilterInput(),
      'from_email'      => new sfWidgetFormDmFilterInput(),
      'to_email'        => new sfWidgetFormDmFilterInput(),
      'cc_email'        => new sfWidgetFormDmFilterInput(),
      'bcc_email'       => new sfWidgetFormDmFilterInput(),
      'reply_to_email'  => new sfWidgetFormDmFilterInput(),
      'sender_email'    => new sfWidgetFormDmFilterInput(),
      'list_unsuscribe' => new sfWidgetFormDmFilterInput(),
      'is_html'         => new sfWidgetFormChoice(array('choices' => array('' => $this->getI18n()->__('yes or no', array(), 'dm'), 1 => $this->getI18n()->__('yes', array(), 'dm'), 0 => $this->getI18n()->__('no', array(), 'dm')))),
      'is_active'       => new sfWidgetFormChoice(array('choices' => array('' => $this->getI18n()->__('yes or no', array(), 'dm'), 1 => $this->getI18n()->__('yes', array(), 'dm'), 0 => $this->getI18n()->__('no', array(), 'dm')))),
    ));

<<<<<<< HEAD

		if($this->needsWidget('description')){
			$this->setWidget('description', new sfWidgetFormDmFilterInput());
			$this->setValidator('description', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('subject')){
			$this->setWidget('subject', new sfWidgetFormDmFilterInput());
			$this->setValidator('subject', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('body')){
			$this->setWidget('body', new sfWidgetFormDmFilterInput());
			$this->setValidator('body', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('from_email')){
			$this->setWidget('from_email', new sfWidgetFormDmFilterInput());
			$this->setValidator('from_email', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('to_email')){
			$this->setWidget('to_email', new sfWidgetFormDmFilterInput());
			$this->setValidator('to_email', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('cc_email')){
			$this->setWidget('cc_email', new sfWidgetFormDmFilterInput());
			$this->setValidator('cc_email', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('bcc_email')){
			$this->setWidget('bcc_email', new sfWidgetFormDmFilterInput());
			$this->setValidator('bcc_email', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('reply_to_email')){
			$this->setWidget('reply_to_email', new sfWidgetFormDmFilterInput());
			$this->setValidator('reply_to_email', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('sender_email')){
			$this->setWidget('sender_email', new sfWidgetFormDmFilterInput());
			$this->setValidator('sender_email', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('list_unsuscribe')){
			$this->setWidget('list_unsuscribe', new sfWidgetFormDmFilterInput());
			$this->setValidator('list_unsuscribe', new sfValidatorSchemaFilter('text', new sfValidatorString(array('required' => false))));
		}
		if($this->needsWidget('is_html')){
			$this->setWidget('is_html', new sfWidgetFormChoice(array('choices' => array('' => $this->getI18n()->__('yes or no', array(), 'dm'), 1 => $this->getI18n()->__('yes', array(), 'dm'), 0 => $this->getI18n()->__('no', array(), 'dm')))));
			$this->setValidator('is_html', new sfValidatorChoice(array('required' => false, 'choices' => array(0, 1))));
		}
		if($this->needsWidget('is_active')){
			$this->setWidget('is_active', new sfWidgetFormChoice(array('choices' => array('' => $this->getI18n()->__('yes or no', array(), 'dm'), 1 => $this->getI18n()->__('yes', array(), 'dm'), 0 => $this->getI18n()->__('no', array(), 'dm')))));
			$this->setValidator('is_active', new sfValidatorChoice(array('required' => false, 'choices' => array(0, 1))));
		}
		if($this->needsWidget('lang')){
			$this->setWidget('lang', new sfWidgetFormDmFilterInput());
			$this->setValidator('lang', new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'DmMailTemplateTranslation', 'column' => 'lang')));
		}



		if($this->needsWidget('dm_mail_template_list')){
			$this->setWidget('dm_mail_template_list', new sfWidgetFormDoctrineChoice(array('multiple' => false, 'model' => 'DmMailTemplate', 'expanded' => false)));
			$this->setValidator('dm_mail_template_list', new sfValidatorDoctrineChoice(array('multiple' => false, 'model' => 'DmMailTemplate', 'required' => true)));
		}

=======
    $this->setValidators(array(
      'description'     => new sfValidatorPass(array('required' => false)),
      'subject'         => new sfValidatorPass(array('required' => false)),
      'body'            => new sfValidatorPass(array('required' => false)),
      'from_email'      => new sfValidatorPass(array('required' => false)),
      'to_email'        => new sfValidatorPass(array('required' => false)),
      'cc_email'        => new sfValidatorPass(array('required' => false)),
      'bcc_email'       => new sfValidatorPass(array('required' => false)),
      'reply_to_email'  => new sfValidatorPass(array('required' => false)),
      'sender_email'    => new sfValidatorPass(array('required' => false)),
      'list_unsuscribe' => new sfValidatorPass(array('required' => false)),
      'is_html'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_active'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));
>>>>>>> c3a3392eeaaf609356f1a404ff87d4a5bf5a7ff3
    

    $this->widgetSchema->setNameFormat('dm_mail_template_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DmMailTemplateTranslation';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'description'     => 'Text',
      'subject'         => 'Text',
      'body'            => 'Text',
      'from_email'      => 'Text',
      'to_email'        => 'Text',
      'cc_email'        => 'Text',
      'bcc_email'       => 'Text',
      'reply_to_email'  => 'Text',
      'sender_email'    => 'Text',
      'list_unsuscribe' => 'Text',
      'is_html'         => 'Boolean',
      'is_active'       => 'Boolean',
      'lang'            => 'Text',
    );
  }
}
