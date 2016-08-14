<?php

namespace FFPI\FfpiRouter\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Kevin Quiatkowski <kevin@pinneberg.freifunk.net>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \FFPI\FfpiRouter\Domain\Model\Router.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Kevin Quiatkowski <kevin@pinneberg.freifunk.net>
 */
class RouterTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \FFPI\FfpiRouter\Domain\Model\Router
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \FFPI\FfpiRouter\Domain\Model\Router();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName()
	{
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getManufacturerReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setManufacturerForIntSetsManufacturer()
	{	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRadio2ReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getRadio2()
		);
	}

	/**
	 * @test
	 */
	public function setRadio2ForBoolSetsRadio2()
	{
		$this->subject->setRadio2(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'radio2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRadio5ReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getRadio5()
		);
	}

	/**
	 * @test
	 */
	public function setRadio5ForBoolSetsRadio5()
	{
		$this->subject->setRadio5(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'radio5',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOutdoorReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getOutdoor()
		);
	}

	/**
	 * @test
	 */
	public function setOutdoorForBoolSetsOutdoor()
	{
		$this->subject->setOutdoor(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'outdoor',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInternalAntennaReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setInternalAntennaForIntSetsInternalAntenna()
	{	}

	/**
	 * @test
	 */
	public function getExternalAntennaReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setExternalAntennaForIntSetsExternalAntenna()
	{	}

	/**
	 * @test
	 */
	public function getWanPortsReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setWanPortsForIntSetsWanPorts()
	{	}

	/**
	 * @test
	 */
	public function getLanPortsReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setLanPortsForIntSetsLanPorts()
	{	}

	/**
	 * @test
	 */
	public function getWanSpeedReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setWanSpeedForIntSetsWanSpeed()
	{	}

	/**
	 * @test
	 */
	public function getLanSpeedReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setLanSpeedForIntSetsLanSpeed()
	{	}

	/**
	 * @test
	 */
	public function getWlanSpeedReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setWlanSpeedForIntSetsWlanSpeed()
	{	}

	/**
	 * @test
	 */
	public function getMemoryReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setMemoryForIntSetsMemory()
	{	}

	/**
	 * @test
	 */
	public function getRamReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setRamForIntSetsRam()
	{	}

	/**
	 * @test
	 */
	public function getCpuReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setCpuForIntSetsCpu()
	{	}

	/**
	 * @test
	 */
	public function getPriceReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getPrice()
		);
	}

	/**
	 * @test
	 */
	public function setPriceForFloatSetsPrice()
	{
		$this->subject->setPrice(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'price',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getPriceLinkReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPriceLink()
		);
	}

	/**
	 * @test
	 */
	public function setPriceLinkForStringSetsPriceLink()
	{
		$this->subject->setPriceLink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'priceLink',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPictureReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPicture()
		);
	}

	/**
	 * @test
	 */
	public function setPictureForFileReferenceSetsPicture()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setPicture($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'picture',
			$this->subject
		);
	}
}
