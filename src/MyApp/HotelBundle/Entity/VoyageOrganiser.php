<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoyageOrganiser
 *
 * @ORM\Table(name="voyage_organiser", indexes={@ORM\Index(name="id_admin", columns={"id_admin"})})
 * @ORM\Entity
 */
class VoyageOrganiser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_voyage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVoyage;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=254, nullable=true)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedepart", type="date", nullable=false)
     */
    private $datedepart;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreplace", type="integer", nullable=false)
     */
    private $nbreplace;

    /**
     * @var float
     *
     * @ORM\Column(name="prixper", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixper;

    /**
     * @var \Admin
     *
     * @ORM\ManyToOne(targetEntity="Admin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admin", referencedColumnName="id_admin")
     * })
     */
    private $idAdmin;



    /**
     * Get idVoyage
     *
     * @return integer
     */
    public function getIdVoyage()
    {
        return $this->idVoyage;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return VoyageOrganiser
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return VoyageOrganiser
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set datedepart
     *
     * @param \DateTime $datedepart
     *
     * @return VoyageOrganiser
     */
    public function setDatedepart($datedepart)
    {
        $this->datedepart = $datedepart;

        return $this;
    }

    /**
     * Get datedepart
     *
     * @return \DateTime
     */
    public function getDatedepart()
    {
        return $this->datedepart;
    }

    /**
     * Set nbreplace
     *
     * @param integer $nbreplace
     *
     * @return VoyageOrganiser
     */
    public function setNbreplace($nbreplace)
    {
        $this->nbreplace = $nbreplace;

        return $this;
    }

    /**
     * Get nbreplace
     *
     * @return integer
     */
    public function getNbreplace()
    {
        return $this->nbreplace;
    }

    /**
     * Set prixper
     *
     * @param float $prixper
     *
     * @return VoyageOrganiser
     */
    public function setPrixper($prixper)
    {
        $this->prixper = $prixper;

        return $this;
    }

    /**
     * Get prixper
     *
     * @return float
     */
    public function getPrixper()
    {
        return $this->prixper;
    }

    /**
     * Set idAdmin
     *
     * @param \MyApp\HotelBundle\Entity\Admin $idAdmin
     *
     * @return VoyageOrganiser
     */
    public function setIdAdmin(\MyApp\HotelBundle\Entity\Admin $idAdmin = null)
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return \MyApp\HotelBundle\Entity\Admin
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }
}
