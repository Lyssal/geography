<?php
/**
 * This file is part of the Lyssal geography library.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\Geography\Model;

/**
 * A language.
 */
class Language
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
     * @var string The code
     */
    protected $code;

    /**
     * @var string The culture
     */
    protected $culture;


    /**
     * Constructor
     */
    public function __construct()
    {

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
     * @return Language
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
     * @return Language
     */
    public function setCountry(Country $country)
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
     * Set code
     *
     * @param string $code
     * @return Language
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
     * Set culture
     *
     * @param string $culture
     * @return Language
     */
    public function setCulture($culture)
    {
        $this->culture = $culture;

        return $this;
    }

    /**
     * Get culture
     *
     * @return string
     */
    public function getCulture()
    {
        return $this->culture;
    }


    /**
     * ToString.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
