<?php

$settings = array();

$tmp = array(
	'pdoTools.class' => array(
		'xtype' => 'textfield',
		'value' => 'pdotools.pdotools',
		'key' => 'pdoTools.class'
	),
	'pdoFetch.class' => array(
		'xtype' => 'textfield',
		'value' => 'pdotools.pdofetch',
		'key' => 'pdoFetch.class'
	),
	'pdoParser.class' => array(
		'xtype' => 'textfield',
		'value' => 'pdotools.pdoparser',
		'key' => 'pdoParser.class'
	),

	'fenom_default' => array(
		'xtype' => 'combo-boolean',
		'value' => true,
	),
	'fenom_parser' => array(
		'xtype' => 'combo-boolean',
		'value' => true,
	),
	'fenom_php' => array(
		'xtype' => 'combo-boolean',
		'value' => false,
	),
	'fenom_options' => array(
		'xtype' => 'textarea',
		'value' => '',
	),
);

foreach ($tmp as $k => $v) {
	/* @var modSystemSetting $setting */
	$setting = $modx->newObject('modSystemSetting');
	$setting->fromArray(array_merge(
		array(
			'key' => PKG_NAME_LOWER.'_'.$k,
			'namespace' => PKG_NAME_LOWER,
			'area' => 'pdotools_main',
		), $v
	),'',true,true);

	$settings[] = $setting;
}

unset($tmp);
return $settings;