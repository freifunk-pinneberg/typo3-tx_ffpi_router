<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,manufacturer,description,radio2,radio5,outdoor,internal_antenna,external_antenna,wan_ports,lan_ports,wan_speed,lan_speed,wlan_speed,memory,ram,cpu,price,price_link,picture,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('ffpi_router') . 'Resources/Public/Icons/tx_ffpirouter_domain_model_router.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, manufacturer, description, radio2, radio5, outdoor, internal_antenna, external_antenna, wan_ports, lan_ports, wan_speed, lan_speed, wlan_speed, memory, ram, cpu, price, price_link, picture',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, manufacturer, description, radio2, radio5, outdoor, internal_antenna, external_antenna, wan_ports, lan_ports, wan_speed, lan_speed, wlan_speed, memory, ram, cpu, price, price_link, picture, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_ffpirouter_domain_model_router',
				'foreign_table_where' => 'AND tx_ffpirouter_domain_model_router.pid=###CURRENT_PID### AND tx_ffpirouter_domain_model_router.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'manufacturer' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.manufacturer',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			)
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'radio2' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.radio2',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'radio5' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.radio5',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'outdoor' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.outdoor',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'internal_antenna' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.internal_antenna',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'external_antenna' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.external_antenna',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'wan_ports' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.wan_ports',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'lan_ports' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.lan_ports',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'wan_speed' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.wan_speed',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'lan_speed' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.lan_speed',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'wlan_speed' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.wlan_speed',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'memory' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.memory',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'ram' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.ram',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'cpu' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.cpu',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'price' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.price',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			)
		),
		'price_link' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.price_link',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'picture' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:ffpi_router/Resources/Private/Language/locallang_db.xlf:tx_ffpirouter_domain_model_router.picture',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'picture',
				array(
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					),
					'maxitems' => 1
				),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		
	),
);