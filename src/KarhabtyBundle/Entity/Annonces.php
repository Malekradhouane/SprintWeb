<?php

namespace KarhabtyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Annonces
 *
 * @ORM\Table(name="annonces", indexes={@ORM\Index(name="fk_user", columns={"id_user"})})
 * @ORM\Entity(repositoryClass="AnnonceBundle\Repository\AnnoncesRepository")
 * @Vich\Uploadable
 */
class Annonces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_annonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonce;
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="KarhabtyBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=50, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=200, nullable=true)
     */
    private $image;


    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */

    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;
    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=50, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="garantie", type="integer", nullable=true)
     */
    private $garantie;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_places", type="integer", nullable=true)
     */
    private $nbrePlaces;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_portes", type="integer", nullable=true)
     */
    private $nbrePortes;

    /**
     * @var string
     *
     * @ORM\Column(name="energie", type="string", length=50, nullable=true)
     */
    private $energie;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_cylindres", type="integer", nullable=true)
     */
    private $nbreCylindres;

    /**
     * @var integer
     *
     * @ORM\Column(name="puissance", type="integer", nullable=true)
     */
    private $puissance;

    /**
     * @var float
     *
     * @ORM\Column(name="consomation_mixte", type="float", precision=10, scale=0, nullable=true)
     */
    private $consomationMixte;

    /**
     * @var integer
     *
     * @ORM\Column(name="vitesse_max", type="integer", nullable=true)
     */
    private $vitesseMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="performance", type="integer", nullable=true)
     */
    private $performance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="connectivite", type="boolean", nullable=true)
     */
    private $connectivite;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=70, nullable=true)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="Kilometrage", type="integer", nullable=true)
     */
    private $kilometrage;

    /**
     * @var Date
     *
     * @ORM\Column(name="mise_circulation", type="date", nullable=true)
     */
    private $miseCirculation;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel", type="string", nullable=true)
     */
    private $numTel;

    /**
     * Annonces constructor.
     * @param int $idUser
     * @param string $type
     * @param bool $connectivite
     */
    public function __construct($idUser, $type, $connectivite)
    {
        $this->idUser = $idUser;
        $this->type = $type;
        $this->connectivite = $connectivite;
    }

    /**
     * Annonces constructor.
     * @param int $idUser
     * @param string $type
     */


    /**
     * Annonces constructor.
     * @param string $type
     */

    /**
     * @return int
     */

    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @param int $idAnnonce
     */
    public function setIdAnnonce($idAnnonce)
    {
        $this->idAnnonce = $idAnnonce;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return Date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getGarantie()
    {
        return $this->garantie;
    }

    /**
     * @param int $garantie
     */
    public function setGarantie($garantie)
    {
        $this->garantie = $garantie;
    }

    /**
     * @return int
     */
    public function getNbrePlaces()
    {
        return $this->nbrePlaces;
    }

    /**
     * @param int $nbrePlaces
     */
    public function setNbrePlaces($nbrePlaces)
    {
        $this->nbrePlaces = $nbrePlaces;
    }

    /**
     * @return int
     */
    public function getNbrePortes()
    {
        return $this->nbrePortes;
    }

    /**
     * @param int $nbrePortes
     */
    public function setNbrePortes($nbrePortes)
    {
        $this->nbrePortes = $nbrePortes;
    }

    /**
     * @return string
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * @param string $energie
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;
    }

    /**
     * @return int
     */
    public function getNbreCylindres()
    {
        return $this->nbreCylindres;
    }

    /**
     * @param int $nbreCylindres
     */
    public function setNbreCylindres($nbreCylindres)
    {
        $this->nbreCylindres = $nbreCylindres;
    }

    /**
     * @return int
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param int $puissance
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    /**
     * @return float
     */
    public function getConsomationMixte()
    {
        return $this->consomationMixte;
    }

    /**
     * @param float $consomationMixte
     */
    public function setConsomationMixte($consomationMixte)
    {
        $this->consomationMixte = $consomationMixte;
    }

    /**
     * @return int
     */
    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }

    /**
     * @param int $vitesseMax
     */
    public function setVitesseMax($vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;
    }

    /**
     * @return int
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * @param int $performance
     */
    public function setPerformance($performance)
    {
        $this->performance = $performance;
    }

    /**
     * @return bool
     */
    public function isConnectivite()
    {
        return $this->connectivite;
    }

    /**
     * @param bool $connectivite
     */
    public function setConnectivite($connectivite)
    {
        $this->connectivite = $connectivite;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return int
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * @param int $kilometrage
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;
    }

    /**
     * @return Date
     */
    public function getMiseCirculation()
    {
        return $this->miseCirculation;
    }

    /**
     * @param Date $miseCirculation
     */
    public function setMiseCirculation($miseCirculation)
    {
        $this->miseCirculation = $miseCirculation;
    }

    /**
     * @return string
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * @param string $numTel
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }
    /**
     * @return mixed
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param mixed $imageFile
     */

    public function setImageFile(File $imageFile = null)
    {
        $this->imageFile = $imageFile;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($imageFile) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }


}

