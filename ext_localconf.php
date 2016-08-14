<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'FFPI.' . $_EXTKEY,
	'Manufacturer',
	array(
		'Manufacturer' => 'list, show'
	),
	// non-cacheable actions
	array(
		'Manufacturer' => ''
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'FFPI.' . $_EXTKEY,
	'Router',
	array(
		'Router' => 'list, show'
	),
	// non-cacheable actions
	array(
		'Router' => ''
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'FFPI.' . $_EXTKEY,
	'Routerversions',
	array(
		'RouterVersion' => 'list, show'
	),
	// non-cacheable actions
	array(
		'RouterVersion' => ''
	)
);
