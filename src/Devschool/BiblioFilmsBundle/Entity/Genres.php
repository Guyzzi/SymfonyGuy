<?php

namespace Devschool\BiblioFilmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genres
 *
 * @ORM\Table(name="genres")
 * @ORM\Entity(repositoryClass="Devschool\BiblioFilmsBundle\Repository\GenresRepository")
 */
class Genres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
    * @ORM\OneToMany(targetEntity="Film", mappedBy="genres")
    */
    private $films;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Genres
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add film
     *
     * @param \Devschool\BiblioFilmsBundle\Entity\Film $film
     *
     * @return Genres
     */
    public function addFilm(\Devschool\BiblioFilmsBundle\Entity\Film $film)
    {
        $this->films[] = $film;

        return $this;
    }

    /**
     * Remove film
     *
     * @param \Devschool\BiblioFilmsBundle\Entity\Film $film
     */
    public function removeFilm(\Devschool\BiblioFilmsBundle\Entity\Film $film)
    {
        $this->films->removeElement($film);
    }

    /**
     * Get films
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilms()
    {
        return $this->films;
    }
}
