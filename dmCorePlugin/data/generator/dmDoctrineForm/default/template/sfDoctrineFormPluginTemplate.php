[?php

/**
 * Plugin<?php echo $this->table->getOption('name') ?> form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id$
<<<<<<< HEAD
 * @generator  <?php echo 'Diem ', constant('DIEM_VERSION'), "\n"?>
=======
>>>>>>> c3a3392eeaaf609356f1a404ff87d4a5bf5a7ff3
 */
abstract class Plugin<?php echo $this->table->getOption('name') ?>Form extends Base<?php echo $this->table->getOption('name') ?>Form
{
  public function setup()
  {
    parent::setup();
    /*
     * Here, the plugin form code
     */
  }
}