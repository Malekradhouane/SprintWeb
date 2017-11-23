<?php

namespace KarhabtyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualites
 *
 * @ORM\Table(name="actualites", indexes={@ORM\Index(name="fk_usr", columns={"id_user"})})
 * @ORM\Entity
 */
class Actualites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_actualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActualite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=65535, nullable=true)
     */
    private $texte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_postule", type="date", nullable=false)
     */
    private $datePostule;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=100, nullable=true)
     */
    private $nomEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_event", type="date", nullable=true)
     */
    private $dateEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_event", type="string", length=50, nullable=true)
     */
    private $lieuEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=100, nullable=true)
     */
    private $photo;


}

