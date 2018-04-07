<?php
/**
 * This file is part of the Lyssal geography library.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\Geography\Model;

/**
 * A city postal code.
 */
class PostalCode
{
    /**
     * @var integer The ID
     */
    protected $id;

    /**
     * @var \Lyssal\Geography\Model\City[] The cities
     */
    protected $cities;

    /**
     * @var string The code
     */
    protected $code;

    /**
     * @var string The description
     */
    protected $description;


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
     * Set code
     *
     * @param string $code
     * @return \Lyssal\Geography\Model\PostalCode
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
     * Set description
     *
     * @param string $description
     * @return \Lyssal\Geography\Model\PostalCode
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
     * ToString.
     *
     * @return string Code postal
     */
    public function __toString()
    {
        return $this->code;
    }
}
