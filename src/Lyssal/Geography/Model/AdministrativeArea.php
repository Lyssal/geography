<?php
/**
 * This file is part of the Lyssal geography library.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\Geography\Model;

/**
 * An administrative area.
 */
class AdministrativeArea
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
     * @var \Lyssal\Geography\Model\Country The country
     */
    protected $country;

    /**
     * @var \Lyssal\Geography\Model\SubAdministrativeArea[] The sub-administrative areas
     */
    protected $subAdministrativeAreas;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subAdministrativeAreas = [];
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
     * @return AdministrativeArea
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
     * Set country
     *
     * @param \Lyssal\Geography\Model\Country $country
     * @return AdministrativeArea
     */
    public function setCountry(\Lyssal\Geography\Model\Country $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Lyssal\Geography\Model\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add subAdministrativeAreas
     *
     * @param \Lyssal\Geography\Model\SubAdministrativeArea $subAdministrativeAreas
     * @return AdministrativeArea
     */
    public function addSubAdministrativeArea(\Lyssal\Geography\Model\SubAdministrativeArea $subAdministrativeAreas)
    {
        $this->subAdministrativeAreas[] = $subAdministrativeAreas;

        return $this;
    }

    /**
     * Get subAdministrativeAreas
     *
     * @return \Lyssal\Geography\Model\SubAdministrativeArea
     */
    public function getSubAdministrativeAreas()
    {
        return $this->subAdministrativeAreas;
    }


    /**
     * ToString.
     *
     * @return string Nom de la région
     */
    public function __toString()
    {
        return $this->getName();
    }
}
