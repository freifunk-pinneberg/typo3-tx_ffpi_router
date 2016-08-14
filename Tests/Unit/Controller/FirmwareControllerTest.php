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
 * Test case for class FFPI\FfpiRouter\Controller\FirmwareController.
 *
 * @author Kevin Quiatkowski <kevin@pinneberg.freifunk.net>
 */
class FirmwareControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \FFPI\FfpiRouter\Controller\FirmwareController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('FFPI\\FfpiRouter\\Controller\\FirmwareController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllFirmwaresFromRepositoryAndAssignsThemToView()
	{

		$allFirmwares = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$firmwareRepository = $this->getMock('FFPI\\FfpiRouter\\Domain\\Repository\\FirmwareRepository', array('findAll'), array(), '', FALSE);
		$firmwareRepository->expects($this->once())->method('findAll')->will($this->returnValue($allFirmwares));
		$this->inject($this->subject, 'firmwareRepository', $firmwareRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('firmwares', $allFirmwares);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenFirmwareToView()
	{
		$firmware = new \FFPI\FfpiRouter\Domain\Model\Firmware();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('firmware', $firmware);

		$this->subject->showAction($firmware);
	}
}
