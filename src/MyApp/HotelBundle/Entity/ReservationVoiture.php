<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationVoiture
 *
 * @ORM\Table(name="reservation_voiture", indexes={@ORM\Index(name="num_voiture", columns={"num_voiture", "id_client"}), @ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="IDX_8E773A8A2CE19BE6", columns={"num_voiture"})})
 * @ORM\Entity
 */
class ReservationVoiture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_rvoiture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numRvoiture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_jours", type="integer", nullable=false)
     */
    private $nbreJours;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total;

    /**
     * @var \Voiture
     *
     * @ORM\ManyToOne(targetEntity="Voiture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_voiture", referencedColumnName="num_voiture")
     * })
     */
    private $numVoiture;

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
     * Get numRvoiture
     *
     * @return integer
     */
    public function getNumRvoiture()
    {
        return $this->numRvoiture;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ReservationVoiture
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
     * Set nbreJours
     *
     * @param integer $nbreJours
     *
     * @return ReservationVoiture
     */
    public function setNbreJours($nbreJours)
    {
        $this->nbreJours = $nbreJours;

        return $this;
    }

    /**
     * Get nbreJours
     *
     * @return integer
     */
    public function getNbreJours()
    {
        return $this->nbreJours;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return ReservationVoiture
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set numVoiture
     *
     * @param \MyApp\HotelBundle\Entity\Voiture $numVoiture
     *
     * @return ReservationVoiture
     */
    public function setNumVoiture(\MyApp\HotelBundle\Entity\Voiture $numVoiture = null)
    {
        $this->numVoiture = $numVoiture;

        return $this;
    }

    /**
     * Get numVoiture
     *
     * @return \MyApp\HotelBundle\Entity\Voiture
     */
    public function getNumVoiture()
    {
        return $this->numVoiture;
    }

    /**
     * Set idClient
     *
     * @param \MyApp\HotelBundle\Entity\Client $idClient
     *
     * @return ReservationVoiture
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
