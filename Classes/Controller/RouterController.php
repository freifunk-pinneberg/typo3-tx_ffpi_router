<?php
namespace FFPI\FfpiRouter\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Kevin Quiatkowski <kevin@pinneberg.freifunk.net>
 *
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
 * RouterController
 */
class RouterController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * routerRepository
     *
     * @var \FFPI\FfpiRouter\Domain\Repository\RouterRepository
     * @inject
     */
    protected $routerRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $routers = $this->routerRepository->findAll();
        $this->view->assign('routers', $routers);
    }
    
    /**
     * action show
     *
     * @param \FFPI\FfpiRouter\Domain\Model\Router $router
     * @return void
     */
    public function showAction(\FFPI\FfpiRouter\Domain\Model\Router $router)
    {
        $this->view->assign('router', $router);
    }

}