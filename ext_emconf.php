<?php

########################################################################
# Extension Manager/Repository config file for ext "solr_boutique".
#
# Auto generated 23-02-2012 18:17
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Solr Boutique',
	'description' => 'Shop data example for Solr',
	'category' => 'plugin',
	'author' => 'Denis Sinner',
	'author_email' => 'denis.sinner@dkd.de',
	'author_company' => 'dkd Internet Service GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-0.0.0',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:32:{s:21:"ExtensionBuilder.json";s:4:"d9ed";s:12:"ext_icon.gif";s:4:"11e4";s:17:"ext_localconf.php";s:4:"992f";s:14:"ext_tables.php";s:4:"a7f9";s:14:"ext_tables.sql";s:4:"78a3";s:52:"Classes/Controller/SolrBoutiqueProductController.php";s:4:"675e";s:45:"Classes/Domain/Model/SolrBoutiqueCategory.php";s:4:"6d91";s:44:"Classes/Domain/Model/SolrBoutiqueProduct.php";s:4:"2119";s:59:"Classes/Domain/Repository/SolrBoutiqueProductRepository.php";s:4:"f4d0";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"b27b";s:42:"Configuration/TCA/SolrBoutiqueCategory.php";s:4:"a3a0";s:41:"Configuration/TCA/SolrBoutiqueProduct.php";s:4:"e959";s:38:"Configuration/TypoScript/constants.txt";s:4:"3d3e";s:34:"Configuration/TypoScript/setup.txt";s:4:"77f8";s:40:"Resources/Private/Language/locallang.xml";s:4:"3d99";s:94:"Resources/Private/Language/locallang_csh_tx_solrboutique_domain_model_solrboutiquecategory.xml";s:4:"46cf";s:93:"Resources/Private/Language/locallang_csh_tx_solrboutique_domain_model_solrboutiqueproduct.xml";s:4:"226e";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"3be1";s:38:"Resources/Private/Layouts/Default.html";s:4:"502d";s:62:"Resources/Private/Partials/SolrBoutiqueProduct/Properties.html";s:4:"372b";s:59:"Resources/Private/SampleData/SolrBoutiqueSampleProducts.t3d";s:4:"92bf";s:57:"Resources/Private/Templates/SolrBoutiqueProduct/Show.html";s:4:"8c70";s:53:"Resources/Private/Templates/SolrResults/Imagelist.htm";s:4:"890d";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:76:"Resources/Public/Icons/tx_solrboutique_domain_model_solrboutiquecategory.gif";s:4:"1103";s:75:"Resources/Public/Icons/tx_solrboutique_domain_model_solrboutiqueproduct.gif";s:4:"905a";s:42:"Resources/Public/css/singleProductView.css";s:4:"d10e";s:40:"Resources/Public/css/solrProductList.css";s:4:"54fa";s:59:"Tests/Unit/Controller/SolrBoutiqueProductControllerTest.php";s:4:"cb39";s:52:"Tests/Unit/Domain/Model/SolrBoutiqueCategoryTest.php";s:4:"f268";s:51:"Tests/Unit/Domain/Model/SolrBoutiqueProductTest.php";s:4:"275a";s:14:"doc/manual.sxw";s:4:"d2b9";}',
);

?>