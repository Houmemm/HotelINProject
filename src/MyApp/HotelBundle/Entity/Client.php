<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="FK_UTILISAT_ASSOCIATI_ADMIN", columns={"id_admin"}), @ORM\Index(name="FK_UTILISAT_ASSOCIATI_FORUM", columns={"id_forum"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=254, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=254, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=254, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=254, nullable=true)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="blob", nullable=false)
     */
    private $photo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat = '1';

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
     * @var \Forum
     *
     * @ORM\ManyToOne(targetEntity="Forum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forum", referencedColumnName="id_forum")
     * })
     */
    private $idForum;

    /**
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param int $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param string $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return boolean
     */
    public function isEtat()
    {
        return $this->etat;
    }

    /**
     * @param boolean $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return \Admin
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * @param \Admin $idAdmin
     */
    public function setIdAdmin($idAdmin)
    {
        $this->idAdmin = $idAdmin;
    }

    /**
     * @return \Forum
     */
    public function getIdForum()
    {
        return $this->idForum;
    }

    /**
     * @param \Forum $idForum
     */
    public function setIdForum($idForum)
    {
        $this->idForum = $idForum;
    }

    /**
     * toString
     * @return string
     */
    public function __toString()
    {
        return $this->getNom();
    }


    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
