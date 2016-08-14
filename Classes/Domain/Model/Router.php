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
 * Router
 */
class Router extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * The name of the router
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';
    
    /**
     * Manufacturer id
     *
     * @var \FFPI\FfpiRouter\Domain\Model\Manufacturer
     * @inject
     */
    protected $manufacturer = 0;
    
    /**
     * Router description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * Has 2,4 Ghz wifi
     *
     * @var bool
     */
    protected $radio2 = false;
    
    /**
     * Has 5 Ghz wifi
     *
     * @var string
     */
    protected $radio5 = '';
    
    /**
     * Intended for outdoor use
     *
     * @var bool
     */
    protected $outdoor = false;
    
    /**
     * Number of internal/fixed Antennas
     *
     * @var int
     */
    protected $internalAntenna = 0;
    
    /**
     * Number of external/detachable Antennas
     *
     * @var int
     */
    protected $externalAntenna = 0;
    
    /**
     * Number of WAN ports
     *
     * @var int
     */
    protected $wanPorts = 0;
    
    /**
     * Number of LAN Ports
     *
     * @var int
     */
    protected $lanPorts = 0;
    
    /**
     * Speed of the WAN Ports in mbit/s
     *
     * @var int
     */
    protected $wanSpeed = 0;
    
    /**
     * Speed of the LAN Ports in mbit/s
     *
     * @var int
     */
    protected $lanSpeed = 0;
    
    /**
     * Max wifi speed in mbit/s
     *
     * @var int
     */
    protected $wlanSpeed = 0;
    
    /**
     * Flash storage in MB
     *
     * @var int
     */
    protected $memory = 0;
    
    /**
     * RAM in MB
     *
     * @var int
     */
    protected $ram = 0;
    
    /**
     * CPU Clock in Mhz
     *
     * @var int
     */
    protected $cpu = 0;
    
    /**
     * €
     *
     * @var float
     */
    protected $price = 0.0;
    
    /**
     * Link to a price comparison site or shop
     *
     * @var string
     */
    protected $priceLink = '';
    
    /**
     * a photo from the router
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $picture = null;
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the manufacturer
     *
     * @return int $manufacturer
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
    
    /**
     * Sets the manufacturer
     *
     * @param int $manufacturer
     * @return void
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the radio2
     *
     * @return bool $radio2
     */
    public function getRadio2()
    {
        return $this->radio2;
    }
    
    /**
     * Sets the radio2
     *
     * @param bool $radio2
     * @return void
     */
    public function setRadio2($radio2)
    {
        $this->radio2 = $radio2;
    }
    
    /**
     * Returns the boolean state of radio2
     *
     * @return bool
     */
    public function isRadio2()
    {
        return $this->radio2;
    }
    
    /**
     * Returns the radio5
     *
     * @return string $radio5
     */
    public function getRadio5()
    {
        return $this->radio5;
    }
    
    /**
     * Sets the radio5
     *
     * @param string $radio5
     * @return void
     */
    public function setRadio5($radio5)
    {
        $this->radio5 = $radio5;
    }
    
    /**
     * Returns the outdoor
     *
     * @return bool $outdoor
     */
    public function getOutdoor()
    {
        return $this->outdoor;
    }
    
    /**
     * Sets the outdoor
     *
     * @param bool $outdoor
     * @return void
     */
    public function setOutdoor($outdoor)
    {
        $this->outdoor = $outdoor;
    }
    
    /**
     * Returns the boolean state of outdoor
     *
     * @return bool
     */
    public function isOutdoor()
    {
        return $this->outdoor;
    }
    
    /**
     * Returns the internalAntenna
     *
     * @return int $internalAntenna
     */
    public function getInternalAntenna()
    {
        return $this->internalAntenna;
    }
    
    /**
     * Sets the internalAntenna
     *
     * @param string $internalAntenna
     * @return void
     */
    public function setInternalAntenna($internalAntenna)
    {
        $this->internalAntenna = $internalAntenna;
    }
    
    /**
     * Returns the externalAntenna
     *
     * @return int $externalAntenna
     */
    public function getExternalAntenna()
    {
        return $this->externalAntenna;
    }
    
    /**
     * Sets the externalAntenna
     *
     * @param int $externalAntenna
     * @return void
     */
    public function setExternalAntenna($externalAntenna)
    {
        $this->externalAntenna = $externalAntenna;
    }
    
    /**
     * Returns the wanPorts
     *
     * @return int $wanPorts
     */
    public function getWanPorts()
    {
        return $this->wanPorts;
    }
    
    /**
     * Sets the wanPorts
     *
     * @param int $wanPorts
     * @return void
     */
    public function setWanPorts($wanPorts)
    {
        $this->wanPorts = $wanPorts;
    }
    
    /**
     * Returns the lanPorts
     *
     * @return int $lanPorts
     */
    public function getLanPorts()
    {
        return $this->lanPorts;
    }
    
    /**
     * Sets the lanPorts
     *
     * @param int $lanPorts
     * @return void
     */
    public function setLanPorts($lanPorts)
    {
        $this->lanPorts = $lanPorts;
    }
    
    /**
     * Returns the wanSpeed
     *
     * @return int $wanSpeed
     */
    public function getWanSpeed()
    {
        return $this->wanSpeed;
    }
    
    /**
     * Sets the wanSpeed
     *
     * @param int $wanSpeed
     * @return void
     */
    public function setWanSpeed($wanSpeed)
    {
        $this->wanSpeed = $wanSpeed;
    }
    
    /**
     * Returns the lanSpeed
     *
     * @return int $lanSpeed
     */
    public function getLanSpeed()
    {
        return $this->lanSpeed;
    }
    
    /**
     * Sets the lanSpeed
     *
     * @param int $lanSpeed
     * @return void
     */
    public function setLanSpeed($lanSpeed)
    {
        $this->lanSpeed = $lanSpeed;
    }
    
    /**
     * Returns the wlanSpeed
     *
     * @return int $wlanSpeed
     */
    public function getWlanSpeed()
    {
        return $this->wlanSpeed;
    }
    
    /**
     * Sets the wlanSpeed
     *
     * @param int $wlanSpeed
     * @return void
     */
    public function setWlanSpeed($wlanSpeed)
    {
        $this->wlanSpeed = $wlanSpeed;
    }
    
    /**
     * Returns the memory
     *
     * @return int $memory
     */
    public function getMemory()
    {
        return $this->memory;
    }
    
    /**
     * Sets the memory
     *
     * @param int $memory
     * @return void
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }
    
    /**
     * Returns the ram
     *
     * @return int $ram
     */
    public function getRam()
    {
        return $this->ram;
    }
    
    /**
     * Sets the ram
     *
     * @param int $ram
     * @return void
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
    }
    
    /**
     * Returns the cpu
     *
     * @return int $cpu
     */
    public function getCpu()
    {
        return $this->cpu;
    }
    
    /**
     * Sets the cpu
     *
     * @param int $cpu
     * @return void
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }
    
    /**
     * Returns the price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * Sets the price
     *
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * Returns the priceLink
     *
     * @return string $priceLink
     */
    public function getPriceLink()
    {
        return $this->priceLink;
    }
    
    /**
     * Sets the priceLink
     *
     * @param string $priceLink
     * @return void
     */
    public function setPriceLink($priceLink)
    {
        $this->priceLink = $priceLink;
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