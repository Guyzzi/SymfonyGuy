<?php

namespace Devschool\BiblioFilmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realisateur
 *
 * @ORM\Table(name="realisateur")
 * @ORM\Entity(repositoryClass="Devschool\BiblioFilmsBundle\Repository\RealisateurRepository")
 */
class Realisateur
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Bio", type="text")
     */
    private $bio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Age", type="datetime")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="Ses_films", type="string", length=255)
     */
    private $sesFilms;


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
     * @return Realisateur
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
     * Set bio
     *
     * @param string $bio
     *
     * @return Realisateur
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set age
     *
     * @param \DateTime $age
     *
     * @return Realisateur
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return \DateTime
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set sesFilms
     *
     * @param string $sesFilms
     *
     * @return Realisateur
     */
    public function setSesFilms($sesFilms)
    {
        $this->sesFilms = $sesFilms;

        return $this;
    }

    /**
     * Get sesFilms
     *
     * @return string
     */
    public function getSesFilms()
    {
        return $this->sesFilms;
    }
}

