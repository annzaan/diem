<?php foreach ($this->configuration->getValue('list.display') as $name => $field): ?>
<?php echo $this->addCredentialCondition(sprintf(<<<EOF
<td class="sf_admin_%s sf_admin_list_td_%s">
  [?php echo %s ?]
</td>

EOF
, strtolower($field->getType()), $name, $this->renderField($field)), $field->getConfig()) ?>
<?php endforeach; ?>
<?php // ZAAN ?>
[?php include_partial('<?php echo $this->getModuleName() ?>/list_td_actions', array('helper' => $helper, '<?php echo $this->getSingularName()?>'=> $<?php echo $this->getSingularName()?>)) ?]