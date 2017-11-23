<?php

namespace KarhabtyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notes
 *
 * @ORM\Table(name="notes", indexes={@ORM\Index(name="id_voiture", columns={"id_voiture"})})
 * @ORM\Entity
 */
class Notes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_note", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_note", type="date", nullable=true)
     */
    private $dateNote;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="text", length=65535, nullable=true)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text", length=65535, nullable=true)
     */
    private $details;

    /**
     * @var \Voitures
     *
     * @ORM\ManyToOne(targetEntity="Voitures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_voiture", referencedColumnName="id_voiture")
     * })
     */
    private $idVoiture;


}

