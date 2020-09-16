<?php

namespace App\Entity;

use App\Repository\LieuxRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LieuxRepository::class)
 */
class Lieux
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column (type="integer")
     */
    private $no_lieu;

    /**
     * @ORM\Column (type="string", length=30)
     */
    private $nom_lieu;

    /**
     * @ORM\Column (type="string", length=30, nullable=true)
     */
    private $rue;

    /**
     * @ORM\Column (type="decimal", precision=10, scale=8, nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column (type="decimal", precision=10, scale=8, nullable=true)
     */
    private $longitude;

    /**
     * @ORM\Column (type="integer")
     */
    private $villes_no_ville;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNoLieu()
    {
        return $this->no_lieu;
    }

    /**
     * @param mixed $no_lieu
     */
    public function setNoLieu($no_lieu): void
    {
        $this->no_lieu = $no_lieu;
    }

    /**
     * @return mixed
     */
    public function getNomLieu()
    {
        return $this->nom_lieu;
    }

    /**
     * @param mixed $nom_lieu
     */
    public function setNomLieu($nom_lieu): void
    {
        $this->nom_lieu = $nom_lieu;
    }

    /**
     * @return mixed
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * @param mixed $rue
     */
    public function setRue($rue): void
    {
        $this->rue = $rue;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getVillesNoVille()
    {
        return $this->villes_no_ville;
    }

    /**
     * @param mixed $villes_no_ville
     */
    public function setVillesNoVille($villes_no_ville): void
    {
        $this->villes_no_ville = $villes_no_ville;
    }



}
