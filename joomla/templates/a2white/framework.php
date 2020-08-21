<?php
defined('_JEXEC') or die('Restricted access');
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$logo = $this->params->get('logo');
$sitename = $app->getCfg('sitename');
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1.0' );
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/template.css', $type = 'text/css');
$left = $this->countModules('left');
$right = $this->countModules('right');
function getLayout ($left, $right){
if ($left && !$right) { $layout = "-left"; }
if ($right && !$left) { $layout = "-right"; }
if ($left && $right) { $layout = "-left-right"; }
if (!$left && !$right) { $layout = "-full"; }
return $layout; }
$modauser = ($this->countModules('user1')>0) + ($this->countModules('user2')>0) + ($this->countModules('user3')>0);
$modbuser = ($this->countModules('user4')>0) + ($this->countModules('user5')>0) + ($this->countModules('user6')>0);
$modcuser = ($this->countModules('user7')>0) + ($this->countModules('user8')>0) + ($this->countModules('user9')>0);
$modbottom = ($this->countModules('bottom1')>0) + ($this->countModules('bottom2')>0) + ($this->countModules('bottom3')>0) + ($this->countModules('bottom4')>0) + ($this->countModules('bottom5')>0);
$modfooter = ($this->countModules('footer1')>0) + ($this->countModules('footer2')>0) + ($this->countModules('footer3')>0) + ($this->countModules('footer4')>0) + ($this->countModules('footer5')>0);
?>