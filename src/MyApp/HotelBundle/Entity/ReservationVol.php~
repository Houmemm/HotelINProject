<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationVol
 *
 * @ORM\Table(name="reservation_vol", indexes={@ORM\Index(name="FK_RESERVAT_ASSOCIATI_VOL", columns={"num_vol"}), @ORM\Index(name="FK_RESERVAT_ASSOCIATI_UTILISAT", columns={"id_client"})})
 * @ORM\Entity
 */
class ReservationVol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_rvol", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numRvol;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \Vol
     *
     * @ORM\ManyToOne(targetEntity="Vol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_vol", referencedColumnName="num_vol")
     * })
     */
    private $numVol;

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
     * Get numRvol
     *
     * @return integer
     */
    public function getNumRvol()
    {
        return $this->numRvol;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ReservationVol
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set numVol
     *
     * @param \MyApp\HotelBundle\Entity\Vol $numVol
     *
     * @return ReservationVol
     */
    public function setNumVol(\MyApp\HotelBundle\Entity\Vol $numVol = null)
    {
        $this->numVol = $numVol;

        return $this;
    }

    /**
     * Get numVol
     *
     * @return \MyApp\HotelBundle\Entity\Vol
     */
    public function getNumVol()
    {
        return $this->numVol;
    }

    /**
     * Set idClient
     *
     * @param \MyApp\HotelBundle\Entity\Client $idClient
     *
     * @return ReservationVol
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
