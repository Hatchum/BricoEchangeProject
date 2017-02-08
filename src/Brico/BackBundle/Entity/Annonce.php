<?php

namespace Brico\BackBundle\Entity;

/**
 * Annonce
 */
class Annonce
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
    private $type_annonce;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $marque;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var bool
     */
    private $publique;

    /**
     * @var string
     */
    //private $email_annonceur;


    private $categories;


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
     * @return Annonce
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
     * Set image
     *
     * @param string $image
     *
     * @return Annonce
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Annonce
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Annonce
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set publique
     *
     * @param boolean $publique
     *
     * @return Annonce
     */
    public function setPublique($publique)
    {
        $this->publique = $publique;

        return $this;
    }

    /**
     * Get publique
     *
     * @return bool
     */
    public function getPublique()
    {
        return $this->publique;
    }

    /**
     * @return mixed
     */
    public function getTypeAnnonce()
    {
        return $this->type_annonce;
    }

    /**
     * @param mixed $type_annonce
     */
    public function setTypeAnnonce($type_annonce)
    {
        $this->type_annonce = $type_annonce;
    }

/*    /**
     * @return mixed
     */
/*    public function getEmailAnnonceur()
    {
        return $this->email_annonceur;
    }

    /**
     * @param mixed $email_annonceur
     */
/*  public function setEmailAnnonceur($email_annonceur)
    {
        $this->email_annonceur = $email_annonceur;
    }
*/

    public function getCategories()
    {
        return $this->categories;
    }


    public function setCategories($categories)
    {
        $this->categories = $categories;
    }
}

