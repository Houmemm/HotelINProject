<?php

namespace MyApp\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forum
 *
 * @ORM\Table(name="forum")
 * @ORM\Entity
 */
class Forum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_forum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idForum;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=254, nullable=true)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=254, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=254, nullable=true)
     */
    private $video;



    /**
     * Get idForum
     *
     * @return integer
     */
    public function getIdForum()
    {
        return $this->idForum;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Forum
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Forum
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Forum
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }
}
