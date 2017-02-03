<?php

namespace Devschool\BiblioFilmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="Devschool\BiblioFilmsBundle\Repository\FilmRepository")
 */
class Film
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text")
     */
    private $synopsis;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date_sortie", type="date")
     */
    private $dateSortie;

    /**
     * @var int
     *
     * @ORM\Column(name="realisateur_id", type="integer", length=255)
     */
    private $realisateurId;

    /**
    * @ORM\ManyToOne(targetEntity="Genres", inversedBy="films")
    */
    private $genres;

    /**
    * @ORM\ManyToOne(targetEntity="Realisateur", inversedBy="films")
    */
    private $realisateur;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Film
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set realisateur
     *
     * @param string $realisateur
     *
     * @return Film
     */
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    /**
     * Get realisateur
     *
     * @return string
     */
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    /**
     * Set dateSortie
     *
     * @param \Date $dateSortie
     *
     * @return Film
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \Date
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set realisateurID
     *
     * @param int $realisateurID
     *
     * @return Film
     */
    public function setRealisateurID($realisateurID)
    {
        $this->realisateurID = $realisateurID;

        return $this;
    }

    /**
     * Get realisateurID
     *
     * @return int
     */
    public function getRealisateurID()
    {
        return $this->realisateurID;
    }


    /**
     * Set genres
     *
     * @param \Devschool\BiblioFilmsBundle\Entity\Genres $genres
     *
     * @return Film
     */
    public function setGenres(\Devschool\BiblioFilmsBundle\Entity\Genres $genres = null)
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * Get genres
     *
     * @return \Devschool\BiblioFilmsBundle\Entity\Genres
     */
    public function getGenres()
    {
        return $this->genres;
    }
}
