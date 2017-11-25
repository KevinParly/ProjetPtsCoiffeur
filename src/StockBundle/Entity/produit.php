<?php

namespace StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="StockBundle\Repository\produitRepository")
 */
class produit
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
     * @ORM\Column(name="libele", type="string", length=255)
     */
    private $libele;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="stockBase", type="integer")
     */
    private $stockBase;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreVendu", type="integer")
     */
    private $nombreVendu;

    /**
     * @var int
     *
     * @ORM\Column(name="stockDisponible", type="integer")
     */
    private $stockDisponible;

    /**
     * @var string
     *
     * @ORM\Column(name="typeProduit", type="string", length=255)
     */
    private $typeProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;


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
     * Set libele
     *
     * @param string $libele
     *
     * @return produit
     */
    public function setLibele($libele)
    {
        $this->libele = $libele;

        return $this;
    }

    /**
     * Get libele
     *
     * @return string
     */
    public function getLibele()
    {
        return $this->libele;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set stockBase
     *
     * @param integer $stockBase
     *
     * @return produit
     */
    public function setStockBase($stockBase)
    {
        $this->stockBase = $stockBase;

        return $this;
    }

    /**
     * Get stockBase
     *
     * @return int
     */
    public function getStockBase()
    {
        return $this->stockBase;
    }

    /**
     * Set nombreVendu
     *
     * @param integer $nombreVendu
     *
     * @return produit
     */
    public function setNombreVendu($nombreVendu)
    {
        $this->nombreVendu = $nombreVendu;

        return $this;
    }

    /**
     * Get nombreVendu
     *
     * @return int
     */
    public function getNombreVendu()
    {
        return $this->nombreVendu;
    }

    /**
     * Set stockDisponible
     *
     * @param integer $stockDisponible
     *
     * @return produit
     */
    public function setStockDisponible($stockDisponible)
    {
        $this->stockDisponible = $stockDisponible;

        return $this;
    }

    /**
     * Get stockDisponible
     *
     * @return int
     */
    public function getStockDisponible()
    {
        return $this->stockDisponible;
    }

    /**
     * Set typeProduit
     *
     * @param string $typeProduit
     *
     * @return produit
     */
    public function setTypeProduit($typeProduit)
    {
        $this->typeProduit = $typeProduit;

        return $this;
    }

    /**
     * Get typeProduit
     *
     * @return string
     */
    public function getTypeProduit()
    {
        return $this->typeProduit;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return produit
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}

