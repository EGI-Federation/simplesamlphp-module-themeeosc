<?php
// Load SimpleSAMLphp, configuration
$config = SimpleSAML_Configuration::getInstance();

$t = new SimpleSAML_XHTML_Template($config, 'themeeosc:policy.tpl.php');
$t->data['pageid'] = 'policy';
$t->show();
