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
class Tx_SolrBoutique_Domain_Model_SolrBoutiqueProduct extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Title of the product
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * Descripton of the product
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * Manufacturer of the product
	 *
	 * @var string
	 */
	protected $manufacturer;

	/**
	 * Keywords associated with the product
	 *
	 * @var string
	 */
	protected $keywords;

	/**
	 * Color the product has
	 *
	 * @var string
	 */
	protected $color;

	/**
	 * Price how much the product costs as Floating point.
	 *
	 * @var float
	 */
	protected $price;

	/**
	 * Image of the product
	 *
	 * @var string
	 */
	protected $image;

	/**
	 * Size of the product.
	 *
	 * @var string
	 */
	protected $size;

	/**
	 * Assigned categories to the product
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_SolrBoutique_Domain_Model_SolrBoutiqueCategory>
	 */
	protected $categories;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->categories = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the manufacturer
	 *
	 * @return string $manufacturer
	 */
	public function getManufacturer() {
		return $this->manufacturer;
	}

	/**
	 * Sets the manufacturer
	 *
	 * @param string $manufacturer
	 * @return void
	 */
	public function setManufacturer($manufacturer) {
		$this->manufacturer = $manufacturer;
	}

	/**
	 * Returns the keywords
	 *
	 * @return string $keywords
	 */
	public function getKeywords() {
		return $this->keywords;
	}

	/**
	 * Sets the keywords
	 *
	 * @param string $keywords
	 * @return void
	 */
	public function setKeywords($keywords) {
		$this->keywords = $keywords;
	}

	/**
	 * Returns the color
	 *
	 * @return string $color
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * Sets the color
	 *
	 * @param string $color
	 * @return void
	 */
	public function setColor($color) {
		$this->color = $color;
	}

	/**
	 * Returns the price
	 *
	 * @return float $price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets the price
	 *
	 * @param float $price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * Returns the image
	 *
	 * @return string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Returns the size
	 *
	 * @return string $size
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * Sets the size
	 *
	 * @param string $size
	 * @return void
	 */
	public function setSize($size) {
		$this->size = $size;
	}

	/**
	 * Adds a SolrBoutiqueCategory
	 *
	 * @param Tx_SolrBoutique_Domain_Model_SolrBoutiqueCategory $category
	 * @return void
	 */
	public function addCategory(Tx_SolrBoutique_Domain_Model_SolrBoutiqueCategory $category) {
		$this->categories->attach($category);
	}

	/**
	 * Removes a SolrBoutiqueCategory
	 *
	 * @param Tx_SolrBoutique_Domain_Model_SolrBoutiqueCategory $categoryToRemove The SolrBoutiqueCategory to be removed
	 * @return void
	 */
	public function removeCategory(Tx_SolrBoutique_Domain_Model_SolrBoutiqueCategory $categoryToRemove) {
		$this->categories->detach($categoryToRemove);
	}

	/**
	 * Returns the categories
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_SolrBoutique_Domain_Model_SolrBoutiqueCategory> $categories
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * Sets the categories
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_SolrBoutique_Domain_Model_SolrBoutiqueCategory> $categories
	 * @return void
	 */
	public function setCategories(Tx_Extbase_Persistence_ObjectStorage $categories) {
		$this->categories = $categories;
	}

}
?>