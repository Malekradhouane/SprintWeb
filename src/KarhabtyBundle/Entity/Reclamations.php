<?php

namespace KarhabtyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamations
 *
 * @ORM\Table(name="reclamations")
 * @ORM\Entity
 */
class Reclamations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="text", length=65535, nullable=true)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reclamation", type="date", nullable=true)
     */
    private $dateReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_rec", type="string", length=50, nullable=true)
     */
    private $etatRec;
    /**
     * @var string
     *
     * @ORM\Column(name="capture", type="string", length=50, nullable=true)
     */
    private $capture;



    /**
     * Get idReclamation
     *
     * @return integer
     */
    public function getIdReclamation()
    {
        return $this->idReclamation;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Reclamations
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Reclamations
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
     * Set description
     *
     * @param string $description
     *
     * @return Reclamations
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
     * Set dateReclamation
     *
     * @param \DateTime $dateReclamation
     *
     * @return Reclamations
     */
    public function setDateReclamation($dateReclamation)
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }

    /**
     * Get dateReclamation
     *
     * @return \DateTime
     */
    public function getDateReclamation()
    {
        return $this->dateReclamation;
    }

    /**
     * Set etatRec
     *
     * @param string $etatRec
     *
     * @return Reclamations
     */
    public function setEtatRec($etatRec)
    {
        $this->etatRec = $etatRec;

        return $this;
    }

    /**
     * Get etatRec
     *
     * @return string
     */
    public function getEtatRec()
    {
        return $this->etatRec;
    }

    /**
     * Set capture
     *
     * @param string $capture
     *
     * @return Reclamations
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;

        return $this;
    }

    /**
     * Get capture
     *
     * @return string
     */
    public function getCapture()
    {
        return $this->capture;
    }
}
