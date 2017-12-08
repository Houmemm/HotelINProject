<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destination
 *
 * @ORM\Table(name="destination", indexes={@ORM\Index(name="FK_DESTINAT_ASSOCIATI_ADMIN", columns={"id_admin"}), @ORM\Index(name="FK_DESTINAT_ASSOCIATI_UTILISAT", columns={"id_client"})})
 * @ORM\Entity
 */
class Destination
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_destination", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDestination;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=254, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=254, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=254, nullable=true)
     */
    private $description;

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
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     * })
     */
    private $idClient;



    /**
     * Get idDestination
     *
     * @return integer
     */
    public function getIdDestination()
    {
        return $this->idDestination;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Destination
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Destination
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Destination
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set idAdmin
     *
     * @param \MyApp\HotelBundle\Entity\Admin $idAdmin
     *
     * @return Destination
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

    /**
     * Set idClient
     *
     * @param \MyApp\HotelBundle\Entity\Client $idClient
     *
     * @return Destination
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
