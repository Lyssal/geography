<?php
/**
 * This file is part of the Lyssal geography library.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\Geography\Model;

/**
 * A sub administrative area.
 */
class SubAdministrativeArea
{
    /**
     * @var integer The ID
     */
    protected $id;

    /**
     * @var \Lyssal\Geography\Model\AdministrativeArea The administrative area
     */
    protected $administrativeArea;

    /**
     * @var string The name
     */
    protected $name;

    /**
     * @var string The code
     */
    protected $code;

    /**
     * @var \Lyssal\Geography\Model\City[] The cities
     */
    protected $cities;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cities = [];
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return SubAdministrativeArea
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set administrativeArea
     *
     * @param \Lyssal\Geography\Model\AdministrativeArea $administrativeArea
     * @return SubAdministrativeArea
     */
    public function setAdministrativeArea(\Lyssal\Geography\Model\AdministrativeArea $administrativeArea)
    {
        $this->administrativeArea = $administrativeArea;

        return $this;
    }

    /**
     * Get administrativeArea
     *
     * @return \Lyssal\Geography\Model\AdministrativeArea
     */
    public function getAdministrativeArea()
    {
        return $this->administrativeArea;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return SubAdministrativeArea
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Add cities
     *
     * @param \Lyssal\Geography\Model\City $cities
     * @return SubAdministrativeArea
     */
    public function addCity(\Lyssal\Geography\Model\City $cities)
    {
        $this->cities[] = $cities;

        return $this;
    }

    /**
     * Get cities
     *
     * @return \Lyssal\Geography\Model\City[]
     */
    public function getCities()
    {
        return $this->cities;
    }


    /**
     * ToString.
     *
     * @return string Name du département
     */
    public function __toString()
    {
        return $this->getName();
    }
}
