<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MyApp\HotelBundle\Repository\ChambreRepository;
use MyApp\HotelBundle\Entity\Chambre;

/**
 * ReservationHotel
 *
 * @ORM\Table(name="reservation_hotel", indexes={@ORM\Index(name="FK_RESERVAT_ASSOCIATI_UTILISAT", columns={"id_client"}), @ORM\Index(name="id_chambre", columns={"id_chambre"})})
 * @ORM\Entity
 */
class ReservationHotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_res_hotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResHotel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var \Chambre
     *
     * @ORM\ManyToOne(targetEntity="Chambre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chambre", referencedColumnName="id_chambre")
     * })
     */
    private $idChambre;

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
     * @return int
     */
    public function getIdResHotel()
    {
        return $this->idResHotel;
    }

    /**
     * @param int $idResHotel
     */
    public function setIdResHotel($idResHotel)
    {
        $this->idResHotel = $idResHotel;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return \Chambre
     */
    public function getIdChambre()
    {
        return $this->idChambre;
    }

    /**
     * @param \Chambre $idChambre
     */
    public function setIdChambre($idChambre)
    {
        $this->idChambre = $idChambre;
    }

    /**
     * @return \Client
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param \Client $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }





}
