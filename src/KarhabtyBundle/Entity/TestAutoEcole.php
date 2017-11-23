<?php

namespace KarhabtyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * TestAutoEcoleType
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
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    /**
     * @return int
     */
    public function getIdTest()
    {
        return $this->idTest;
    }

    /**
     * @param int $idTest
     */
    public function setIdTest($idTest)
    {
        $this->idTest = $idTest;
    }



    /**
     * @return string
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * @param string $questions
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;
    }

    /**
     * @return string
     */
    public function getReponses()
    {
        return $this->reponses;
    }

    /**
     * @param string $reponses
     */
    public function setReponses($reponses)
    {
        $this->reponses = $reponses;
    }

    /**
     * @return string
     */
    public function getFausse1()
    {
        return $this->fausse1;
    }

    /**
     * @param string $fausse1
     */
    public function setFausse1($fausse1)
    {
        $this->fausse1 = $fausse1;
    }

    /**
     * @return string
     */
    public function getFausse2()
    {
        return $this->fausse2;
    }

    /**
     * @param string $fausse2
     */
    public function setFausse2($fausse2)
    {
        $this->fausse2 = $fausse2;
    }

    /**
     * @return string
     */
    public function getFausse3()
    {
        return $this->fausse3;
    }

    /**
     * @param string $fausse3
     */
    public function setFausse3($fausse3)
    {
        $this->fausse3 = $fausse3;
    }


    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }
    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/';
    }
    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->path = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

}

