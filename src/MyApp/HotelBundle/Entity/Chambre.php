<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MyApp\HotelBundle\Repository\ChambreRepository;



/**
 * Chambre
 * @ORM\Table(name="chambre", indexes={@ORM\Index(name="id_hotel_2", columns={"id_hotel"})})

 * @ORM\Entity(repositoryClass="MyApp\HotelBundle\Repository\ChambreRepository")
 */

class Chambre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_chambre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChambre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_place", type="integer", nullable=false)
     */
    private $nbrePlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean", nullable=false)
     */
    private $disponible;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hotel", referencedColumnName="id_hotel")
     * })
     */
    private $idHotel;

    /**
     * @return int
     */
    public function getIdChambre()
    {
        return $this->idChambre;
    }

    /**
     * @param int $idChambre
     */
    public function setIdChambre($idChambre)
    {
        $this->idChambre = $idChambre;
    }

    /**
     * @return int
     */
    public function getNbrePlace()
    {
        return $this->nbrePlace;
    }

    /**
     * @param int $nbrePlace
     */
    public function setNbrePlace($nbrePlace)
    {
        $this->nbrePlace = $nbrePlace;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return boolean
     */
    public function isDisponible()
    {
        return $this->disponible;
    }

    /**
     * @param boolean $disponible
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    }

    /**
     * @return \Hotel
     */
    public function getIdHotel()
    {
        return $this->idHotel;
    }

    /**
     * @param \Hotel $idHotel
     */
    public function setIdHotel($idHotel)
    {
        $this->idHotel = $idHotel;
    }



    public function __toString()
    {
        return $this->getIdHotel()."";
    }



    /**
     * Get disponible
     *
     * @return boolean
     */
    public function getDisponible()
    {
        return $this->disponible;
    }
}
