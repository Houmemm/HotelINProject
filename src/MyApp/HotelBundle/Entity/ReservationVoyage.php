<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationVoyage
 *
 * @ORM\Table(name="reservation_voyage", indexes={@ORM\Index(name="FK_RESERVAT_ASSOCIATI_VOYAGEOR", columns={"id_voyage"}), @ORM\Index(name="FK_RESERVAT_ASSOCIATI_UTILISAT", columns={"id_client"})})
 * @ORM\Entity
 */
class ReservationVoyage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_rvoyage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numRvoyage;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_personne", type="integer", nullable=false)
     */
    private $nbrePersonne;

    /**
     * @var \VoyageOrganiser
     *
     * @ORM\ManyToOne(targetEntity="VoyageOrganiser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_voyage", referencedColumnName="id_voyage")
     * })
     */
    private $idVoyage;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     * })
     */
    private $idClient;



    /**
     * Get numRvoyage
     *
     * @return integer
     */
    public function getNumRvoyage()
    {
        return $this->numRvoyage;
    }

    /**
     * Set nbrePersonne
     *
     * @param integer $nbrePersonne
     *
     * @return ReservationVoyage
     */
    public function setNbrePersonne($nbrePersonne)
    {
        $this->nbrePersonne = $nbrePersonne;

        return $this;
    }

    /**
     * Get nbrePersonne
     *
     * @return integer
     */
    public function getNbrePersonne()
    {
        return $this->nbrePersonne;
    }

    /**
     * Set idVoyage
     *
     * @param \MyApp\HotelBundle\Entity\VoyageOrganiser $idVoyage
     *
     * @return ReservationVoyage
     */
    public function setIdVoyage(\MyApp\HotelBundle\Entity\VoyageOrganiser $idVoyage = null)
    {
        $this->idVoyage = $idVoyage;

        return $this;
    }

    /**
     * Get idVoyage
     *
     * @return \MyApp\HotelBundle\Entity\VoyageOrganiser
     */
    public function getIdVoyage()
    {
        return $this->idVoyage;
    }

    /**
     * Set idClient
     *
     * @param \MyApp\HotelBundle\Entity\Client $idClient
     *
     * @return ReservationVoyage
     */
    public function setIdClient(\MyApp\HotelBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \MyApp\HotelBundle\Entity\Client
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
