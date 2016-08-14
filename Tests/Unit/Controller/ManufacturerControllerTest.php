<?php
namespace FFPI\FfpiRouter\Tests\Unit\Controller;
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
 * Test case for class FFPI\FfpiRouter\Controller\ManufacturerController.
 *
 * @author Kevin Quiatkowski <kevin@pinneberg.freifunk.net>
 */
class ManufacturerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \FFPI\FfpiRouter\Controller\ManufacturerController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('FFPI\\FfpiRouter\\Controller\\ManufacturerController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllManufacturersFromRepositoryAndAssignsThemToView()
	{

		$allManufacturers = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$manufacturerRepository = $this->getMock('FFPI\\FfpiRouter\\Domain\\Repository\\ManufacturerRepository', array('findAll'), array(), '', FALSE);
		$manufacturerRepository->expects($this->once())->method('findAll')->will($this->returnValue($allManufacturers));
		$this->inject($this->subject, 'manufacturerRepository', $manufacturerRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('manufacturers', $allManufacturers);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenManufacturerToView()
	{
		$manufacturer = new \FFPI\FfpiRouter\Domain\Model\Manufacturer();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('manufacturer', $manufacturer);

		$this->subject->showAction($manufacturer);
	}
}
