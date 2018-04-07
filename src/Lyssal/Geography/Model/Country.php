<?php
/**
 * This file is part of the Lyssal geography library.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\Geography\Model;

/**
 * A country.
 */
class Country
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
     * @var string The code alpha 2
     */
    protected $codeAlpha2;

    /**
     * @var string The code alpha 3
     */
    protected $codeAlpha3;

    /**
     * @var \Lyssal\Geography\Model\AdministrativeArea[] The administrative areas
     */
    protected $administrativeAreas;

    /**
     * @var \Lyssal\Geography\Model\Language[] The languages
     */
    protected $languages;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->administrativeAreas = [];
        $this->languages = [];
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
     * @return Country
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
     * Set codeAlpha2
     *
     * @param string $codeAlpha2
     * @return Country
     */
    public function setCodeAlpha2($codeAlpha2)
    {
        $this->codeAlpha2 = $codeAlpha2;

        return $this;
    }

    /**
     * Get codeAlpha2
     *
     * @return string
     */
    public function getCodeAlpha2()
    {
        return $this->codeAlpha2;
    }

    /**
     * Set codeAlpha3
     *
     * @param string $codeAlpha3
     * @return Country
     */
    public function setCodeAlpha3($codeAlpha3)
    {
        $this->codeAlpha3 = $codeAlpha3;

        return $this;
    }

    /**
     * Get codeAlpha3
     *
     * @return string
     */
    public function getCodeAlpha3()
    {
        return $this->codeAlpha3;
    }

    /**
     * Add administrativeAreas
     *
     * @param \Lyssal\Geography\Model\AdministrativeArea $administrativeAreas
     * @return \Lyssal\Geography\Model\Country
     */
    public function addAdministrativeArea(\Lyssal\Geography\Model\AdministrativeArea $administrativeAreas)
    {
        $this->administrativeAreas[] = $administrativeAreas;

        return $this;
    }

    /**
     * Get administrativeAreas
     *
     * @return \Lyssal\Geography\Model\AdministrativeArea[]
     */
    public function getAdministrativeAreas()
    {
        return $this->administrativeAreas;
    }

    /**
     * Add language
     *
     * @param \Lyssal\Geography\Model\Language $language
     * @return \Lyssal\Geography\Model\Country
     */
    public function addLanguage(\Lyssal\Geography\Model\Language $language)
    {
        $this->languages[] = $language;

        return $this;
    }

    /**
     * Get languages
     *
     * @return \Lyssal\Geography\Model\Language[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }



    /**
     * ToString.
     *
     * @return string Name du country
     */
    public function __toString()
    {
        return $this->getName();
    }
}
