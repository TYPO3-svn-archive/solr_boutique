<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_solrboutique_domain_model_solrboutiqueproduct'] = array(
	'ctrl' => $TCA['tx_solrboutique_domain_model_solrboutiqueproduct']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, description, manufacturer, keywords, color, price, image, size, categories',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, description, manufacturer, keywords, color, price, image, size, categories,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime, fe_group'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_solrboutique_domain_model_solrboutiqueproduct',
				'foreign_table_where' => 'AND tx_solrboutique_domain_model_solrboutiqueproduct.pid=###CURRENT_PID### AND tx_solrboutique_domain_model_solrboutiqueproduct.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
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
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
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
		'fe_group' => Array (
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.fe_group',
			'config' => Array (
				'type' => 'select',
				'size' => 5,
				'maxitems' => 20,
				'items' => Array (
					Array('LLL:EXT:lang/locallang_general.php:LGL.hide_at_login', -1),
					Array('LLL:EXT:lang/locallang_general.php:LGL.any_login', -2),
					Array('LLL:EXT:lang/locallang_general.php:LGL.usergroups', '--div--')
				),
				'exclusiveKeys' => '-1,-2',
				'foreign_table' => 'fe_groups'
			)
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiqueproduct.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiqueproduct.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
			'defaultExtras' => 'richtext[*]'
		),
		'manufacturer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiqueproduct.manufacturer',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'keywords' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiqueproduct.keywords',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'color' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiqueproduct.color',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'price' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiqueproduct.price',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'image' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiqueproduct.image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_solrboutique',
				'show_thumbs' => 1,
				'size' => 1,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'size' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiqueproduct.size',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'categories' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiqueproduct.categories',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_solrboutique_domain_model_solrboutiquecategory',
				'MM' => 'tx_solrboutique_solrboutiqueproduct_solrboutiquecategory_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_solrboutique_domain_model_solrboutiquecategory',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
	),
);
?>