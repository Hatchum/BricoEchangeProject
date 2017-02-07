<?php

namespace Brico\BackBundle\Entity;

/**
 * TypeAnnonce
 */
class TypeAnnonce
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $annonces;

    /**
     * @return int
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }

    /**
     * @param int $annonces
     */
    public function setAnnonces($annonces)
    {
        $this->annonces = $annonces;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TypeAnnonce
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
}

