<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture", indexes={@ORM\Index(name="id_admin", columns={"id_admin"}), @ORM\Index(name="id_admin_2", columns={"id_admin"})})
 * @ORM\Entity
 */
class Voiture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_voiture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255, nullable=false)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255, nullable=false)
     */
    private $marque;

    /**
     * @var integer
     *
     * @ORM\Column(name="puissance", type="integer", nullable=false)
     */
    private $puissance;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255, nullable=false)
     */
    private $couleur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponiblite", type="boolean", nullable=false)
     */
    private $disponiblite = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="NomVille", type="string", length=255, nullable=false)
     */
    private $nomville;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
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
     * Get numVoiture
     *
     * @return integer
     */
    public function getNumVoiture()
    {
        return $this->numVoiture;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Voiture
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Voiture
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set puissance
     *
     * @param integer $puissance
     *
     * @return Voiture
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return integer
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Voiture
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set disponiblite
     *
     * @param boolean $disponiblite
     *
     * @return Voiture
     */
    public function setDisponiblite($disponiblite)
    {
        $this->disponiblite = $disponiblite;

        return $this;
    }

    /**
     * Get disponiblite
     *
     * @return boolean
     */
    public function getDisponiblite()
    {
        return $this->disponiblite;
    }

    /**
     * Set nomville
     *
     * @param string $nomville
     *
     * @return Voiture
     */
    public function setNomville($nomville)
    {
        $this->nomville = $nomville;

        return $this;
    }

    /**
     * Get nomville
     *
     * @return string
     */
    public function getNomville()
    {
        return $this->nomville;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Voiture
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
     * @return Voiture
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
