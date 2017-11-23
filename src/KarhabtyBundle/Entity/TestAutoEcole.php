<?php

namespace KarhabtyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestAutoEcole
 *
 * @ORM\Table(name="test_auto_ecole")
 * @ORM\Entity
 */
class TestAutoEcole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_test", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTest;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="questions", type="text", length=65535, nullable=true)
     */
    private $questions;

    /**
     * @var string
     *
     * @ORM\Column(name="reponses", type="text", length=65535, nullable=true)
     */
    private $reponses;

    /**
     * @var string
     *
     * @ORM\Column(name="fausse1", type="string", length=100, nullable=false)
     */
    private $fausse1;

    /**
     * @var string
     *
     * @ORM\Column(name="fausse2", type="string", length=100, nullable=false)
     */
    private $fausse2;

    /**
     * @var string
     *
     * @ORM\Column(name="fausse3", type="string", length=100, nullable=false)
     */
    private $fausse3;

    /**
     * @var string
     *
     * @ORM\Column(name="Path", type="string", length=500, nullable=false)
     */
    private $path;


}

