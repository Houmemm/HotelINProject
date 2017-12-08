<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vol
 *
 * @ORM\Table(name="vol", indexes={@ORM\Index(name="FK_VOL_ASSOCIATI_ADMIN", columns={"id_admin"})})
 * @ORM\Entity
 */
class Vol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_vol", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numVol;

    /**
     * @var string
     *
     * @ORM\Column(name="compagnie_aerienne", type="string", length=50, nullable=false)
     */
    private $compagnieAerienne;

    /**
     * @var string
     *
     * @ORM\Column(name="aereport_depart", type="string", length=50, nullable=false)
     */
    private $aereportDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="aereport_arrive", type="string", length=50, nullable=true)
     */
    private $aereportArrive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=false)
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_retour", type="date", nullable=false)
     */
    private $dateRetour;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true)
     */
    private $prix;

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
     * Get numVol
     *
     * @return integer
     */
    public function getNumVol()
    {
        return $this->numVol;
    }

    /**
     * Set compagnieAerienne
     *
     * @param string $compagnieAerienne
     *
     * @return Vol
     */
    public function setCompagnieAerienne($compagnieAerienne)
    {
        $this->compagnieAerienne = $compagnieAerienne;

        return $this;
    }

    /**
     * Get compagnieAerienne
     *
     * @return string
     */
    public function getCompagnieAerienne()
    {
        return $this->compagnieAerienne;
    }

    /**
     * Set aereportDepart
     *
     * @param string $aereportDepart
     *
     * @return Vol
     */
    public function setAereportDepart($aereportDepart)
    {
        $this->aereportDepart = $aereportDepart;

        return $this;
    }

    /**
     * Get aereportDepart
     *
     * @return string
     */
    public function getAereportDepart()
    {
        return $this->aereportDepart;
    }

    /**
     * Set aereportArrive
     *
     * @param string $aereportArrive
     *
     * @return Vol
     */
    public function setAereportArrive($aereportArrive)
    {
        $this->aereportArrive = $aereportArrive;

        return $this;
    }

    /**
     * Get aereportArrive
     *
     * @return string
     */
    public function getAereportArrive()
    {
        return $this->aereportArrive;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return Vol
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Vol
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     *
     * @return Vol
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Vol
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set idAdmin
     *
     * @param \MyApp\HotelBundle\Entity\Admin $idAdmin
     *
     * @return Vol
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
