<?php
namespace FFPI\FfpiRouter\Domain\Model;

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
 * RouterVersion
 */
class RouterVersion extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Router ID
     *
     * @var \FFPI\FfpiRouter\Domain\Model\Router
     * @inject
     */
    protected $router = 0;
    
    /**
     * Router Version
     *
     * @var string
     * @validate NotEmpty
     */
    protected $version = '';
    
    /**
     * picture
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $picture = null;
    
    /**
     * Returns the router
     *
     * @return \FFPI\FfpiRouter\Domain\Model\Router $router
     */
    public function getRouter()
    {
        return $this->router;
    }
    
    /**
     * Sets the router
     *
     * @param int $router
     * @return void
     */
    public function setRouter($router)
    {
        $this->router = $router;
    }
    
    /**
     * Returns the version
     *
     * @return string $version
     */
    public function getVersion()
    {
        return $this->version;
    }
    
    /**
     * Sets the version
     *
     * @param string $version
     * @return void
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }
    
    /**
     * Returns the picture
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     */
    public function getPicture()
    {
        return $this->picture;
    }
    
    /**
     * Sets the picture
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     * @return void
     */
    public function setPicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $picture)
    {
        $this->picture = $picture;
    }

}