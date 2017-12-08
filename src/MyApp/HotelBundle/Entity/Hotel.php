<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 * @ORM\Entity(repositoryClass="MyApp\HotelBundle\Repository\HotelRepository")
 * @ORM\Table(name="hotel")

 */

class Hotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_hotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHotel;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=254, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=254, nullable=true)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="etoile", type="integer", nullable=false)
     */
    private $etoile;

    /**
     * @return int
     */
    public function getIdHotel()
    {
        return $this->idHotel;
    }

    /**
     * @param int $idHotel
     */
    public function setIdHotel($idHotel)
    {
        $this->idHotel = $idHotel;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return int
     */
    public function getEtoile()
    {
        return $this->etoile;
    }

    /**
     * @param int $etoile
     */
    public function setEtoile($etoile)
    {
        $this->etoile = $etoile;
    }


    /**
     * toString
     * @return string
     */
    public function __toString()
    {
        return $this->getNom();
    }

}
