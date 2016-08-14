<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'FFPI.' . $_EXTKEY,
	'Manufacturer',
	'Manufacturer'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'FFPI.' . $_EXTKEY,
	'Router',
	'Router'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'FFPI.' . $_EXTKEY,
	'Routerversions',
	'Router hardware Versions'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Freifunk Pinneberg Router');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ffpirouter_domain_model_manufacturer', 'EXT:ffpi_router/Resources/Private/Language/locallang_csh_tx_ffpirouter_domain_model_manufacturer.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ffpirouter_domain_model_manufacturer');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ffpirouter_domain_model_router', 'EXT:ffpi_router/Resources/Private/Language/locallang_csh_tx_ffpirouter_domain_model_router.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ffpirouter_domain_model_router');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ffpirouter_domain_model_routerversion', 'EXT:ffpi_router/Resources/Private/Language/locallang_csh_tx_ffpirouter_domain_model_routerversion.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ffpirouter_domain_model_routerversion');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ffpirouter_domain_model_firmware', 'EXT:ffpi_router/Resources/Private/Language/locallang_csh_tx_ffpirouter_domain_model_firmware.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ffpirouter_domain_model_firmware');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ffpirouter_domain_model_download', 'EXT:ffpi_router/Resources/Private/Language/locallang_csh_tx_ffpirouter_domain_model_download.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ffpirouter_domain_model_download');
