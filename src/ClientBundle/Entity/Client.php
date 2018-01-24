<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=255)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="jourNaissance", type="string", nullable=true)
     */
    private $jourNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="moisNaissance", type="string", nullable=true)
     */
    private $moisNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="anneeNaissance", type="string", nullable=true)
     */
    private $anneeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255,nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255,nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255,nullable=true)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="CodePostal", type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @var int
     *
     * @ORM\Column(name="remise", type="integer")
     */
    private $remise;

    /**
     * @var bool
     *
     * @ORM\Column(name="couleur", type="boolean")
     */
    private $couleur;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     *
     * @return Client
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Client
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set remise
     *
     * @param integer $remise
     *
     * @return Client
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return int
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set couleur
     *
     * @param boolean $couleur
     *
     * @return Client
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return bool
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    function __toString() {
        return $this->nom . ' ' . $this->prenom;
    }

    /**
     * Set jourNaissance
     *
     * @param string $jourNaissance
     *
     * @return Client
     */
    public function setJourNaissance($jourNaissance)
    {
        $this->jourNaissance = $jourNaissance;

        return $this;
    }

    /**
     * Get jourNaissance
     *
     * @return string
     */
    public function getJourNaissance()
    {
        return $this->jourNaissance;
    }

    /**
     * Set moisNaissance
     *
     * @param string $moisNaissance
     *
     * @return Client
     */
    public function setMoisNaissance($moisNaissance)
    {
        $this->moisNaissance = $moisNaissance;

        return $this;
    }

    /**
     * Get moisNaissance
     *
     * @return string
     */
    public function getMoisNaissance()
    {
        return $this->moisNaissance;
    }

    /**
     * Set anneeNaissance
     *
     * @param string $anneeNaissance
     *
     * @return Client
     */
    public function setAnneeNaissance($anneeNaissance)
    {
        $this->anneeNaissance = $anneeNaissance;

        return $this;
    }

    /**
     * Get anneeNaissance
     *
     * @return string
     */
    public function getAnneeNaissance()
    {
        return $this->anneeNaissance;
    }

    public function dateNaissance(){
        return $this->jourNaissance . "/" .$this->moisNaissance . "/" . $this->anneeNaissance;
    }
}
