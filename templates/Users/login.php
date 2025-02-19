<?php
	use Cake\Utility\Xml;

	ob_start();
	phpinfo();
	$phpinfo = ob_get_contents();
	ob_end_clean();

	$xml = Xml::loadHtml($phpinfo);

	$this->append('css');
	$style = preg_replace('~a:link.*\n~', '', $xml->head->style);
	echo $this->Html->tag('style', $style);
	$this->end();

	echo $xml->body->asXML();
