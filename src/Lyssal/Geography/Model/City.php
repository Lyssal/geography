<?php
/**
 * This file is part of the Lyssal geography library.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\Geography\Model;

/**
 * A city.
 */
class City
{
    /**
     * @var integer The ID
     */
    protected $id;

    /**
     * @var string The name
     */
    protected $name;

    /**
     * @var \Lyssal\Geography\Model\SubAdministrativeArea The sub-administrative area
     */
    protected $subAdministrativeArea;

    /**
     * @var \Lyssal\Geography\Model\PostalCode[] The postal codes
     */
    protected $postalCodes;

    /**
     * @var string The code
     */
    protected $code;

    /**
     * @var number The latitude
     */
    protected $latitude;

    /**
     * @var number The longitude
     */
    protected $longitude;

    /**
     * @var string The description
     */
    protected $description;

    /**
     * @var string The website
     */
    protected $website;

    /**
     * @var string The gentile
     */
    protected $gentile;


    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->postalCodes = [];
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
     * @return City
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
     * Set subAdministrativeArea
     *
     * @param \Lyssal\Geography\Model\SubAdministrativeArea $subAdministrativeArea
     * @return City
     */
    public function setSubAdministrativeArea(\Lyssal\Geography\Model\SubAdministrativeArea $subAdministrativeArea)
    {
        $this->subAdministrativeArea = $subAdministrativeArea;

        return $this;
    }

    /**
     * Get subAdministrativeArea
     *
     * @return \Lyssal\Geography\Model\SubAdministrativeArea
     */
    public function getSubAdministrativeArea()
    {
        return $this->subAdministrativeArea;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return City
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
     * Set latitude
     *
     * @param string $latitude
     * @return City
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return City
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return City
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return City
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set gentile
     *
     * @param string $gentile
     * @return City
     */
    public function setGentile($gentile)
    {
        $this->gentile = $gentile;

        return $this;
    }

    /**
     * Get gentile
     *
     * @return string
     */
    public function getGentile()
    {
        return $this->gentile;
    }


    /**
     * ToString.
     *
     * @return string Name de la city
     */
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Equals.
     *
     * @param \Lyssal\Geography\Model\City $otherCity The city
     *
     * @return boolean Equals
     */
    public function equals(City $otherCity)
    {
        return ($this->id === $otherCity->getId());
    }
}
