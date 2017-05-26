<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Sc.' . $_EXTKEY,
	'Pi1',
	array(
		'Ts3view' => 'show',
		
	),
	// non-cacheable actions
	array(
        'Ts3view' => 'show',
	)
);

