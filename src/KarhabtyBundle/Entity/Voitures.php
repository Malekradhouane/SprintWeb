<?php

namespace KarhabtyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voitures
 *
 * @ORM\Table(name="voitures", indexes={@ORM\Index(name="fk_userV", columns={"id_user"})})
 * @ORM\Entity
 */
class Voitures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_voiture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVoiture;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=50, nullable=true)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=50, nullable=true)
     */
    private $matricule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_vignette", type="date", nullable=true)
     */
    private $dateVignette;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_visite", type="date", nullable=true)
     */
    private $dateVisite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_assurance", type="date", nullable=true)
     */
    private $dateAssurance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_vidange", type="date", nullable=true)
     */
    private $dateVidange;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mc", type="date", nullable=true)
     */
    private $dateMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="kilometrage_actuel", type="integer", nullable=true)
     */
    private $kilometrageActuel;


}

