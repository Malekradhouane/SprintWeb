<?php

namespace KarhabtyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depenses
 *
 * @ORM\Table(name="depenses", indexes={@ORM\Index(name="id_voiture", columns={"id_voiture"})})
 * @ORM\Entity
 */
class Depenses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_depense", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDepense;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="cout", type="integer", nullable=true)
     */
    private $cout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

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

