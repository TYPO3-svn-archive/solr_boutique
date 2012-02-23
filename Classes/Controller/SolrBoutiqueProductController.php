<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Denis Sinner <denis.sinner@dkd.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package solr_boutique
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_SolrBoutique_Controller_SolrBoutiqueProductController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * solrBoutiqueProductRepository
	 *
	 * @var Tx_SolrBoutique_Domain_Repository_SolrBoutiqueProductRepository
	 */
	protected $solrBoutiqueProductRepository;

	/**
	 * injectSolrBoutiqueProductRepository
	 *
	 * @param Tx_SolrBoutique_Domain_Repository_SolrBoutiqueProductRepository $solrBoutiqueProductRepository
	 * @return void
	 */
	public function injectSolrBoutiqueProductRepository(Tx_SolrBoutique_Domain_Repository_SolrBoutiqueProductRepository $solrBoutiqueProductRepository) {
		$this->solrBoutiqueProductRepository = $solrBoutiqueProductRepository;
	}

	public function initializeView(Tx_Extbase_MVC_View_ViewInterface $view) {
		$this->response->addAdditionalHeaderData($this->wrapCssFile($this->settings['cssTemplate']));
	}

	/**
	 * Wrap css files inside <link> tag
	 *
	 * @param string $cssFile Path to file
	 * @return string <link.. string ready for <head> part
	 */
	public function wrapCssFile($cssFile) {
		$cssFile = t3lib_div::resolveBackPath($cssFile);
		$cssFile = t3lib_div::createVersionNumberedFilename($cssFile);
		return '<link rel="stylesheet" type="text/css" href="' . htmlspecialchars($cssFile) . '" media="screen" />';
	}

	/**
	 * action show
	 *
	 * @param $solrBoutiqueProduct
	 * @return void
	 */
	public function showAction(Tx_SolrBoutique_Domain_Model_SolrBoutiqueProduct $solrBoutiqueProduct) {
		$this->view->assign('solrBoutiqueProduct', $solrBoutiqueProduct);
	}

}
?>