<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Productinfo',
	'Solr Boutique Product Info'
);


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Solr Boutique');


t3lib_extMgm::addLLrefForTCAdescr('tx_solrboutique_domain_model_solrboutiqueproduct', 'EXT:solr_boutique/Resources/Private/Language/locallang_csh_tx_solrboutique_domain_model_solrboutiqueproduct.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_solrboutique_domain_model_solrboutiqueproduct');
$TCA['tx_solrboutique_domain_model_solrboutiqueproduct'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiqueproduct',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group'
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/SolrBoutiqueProduct.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_solrboutique_domain_model_solrboutiqueproduct.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_solrboutique_domain_model_solrboutiquecategory', 'EXT:solr_boutique/Resources/Private/Language/locallang_csh_tx_solrboutique_domain_model_solrboutiquecategory.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_solrboutique_domain_model_solrboutiquecategory');
$TCA['tx_solrboutique_domain_model_solrboutiquecategory'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:solr_boutique/Resources/Private/Language/locallang_db.xml:tx_solrboutique_domain_model_solrboutiquecategory',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/SolrBoutiqueCategory.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_solrboutique_domain_model_solrboutiquecategory.gif'
	),
);

?>