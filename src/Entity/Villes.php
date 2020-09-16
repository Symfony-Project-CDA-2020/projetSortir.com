<?php

namespace App\Entity;

use App\Repository\VillesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VillesRepository::class)
 */
class Villes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $no_ville;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nom_ville;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $code_postal;

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
    public function getNoVille()
    {
        return $this->no_ville;
    }

    /**
     * @param mixed $no_ville
     */
    public function setNoVille($no_ville): void
    {
        $this->no_ville = $no_ville;
    }

    /**
     * @return mixed
     */
    public function getNomVille()
    {
        return $this->nom_ville;
    }

    /**
     * @param mixed $nom_ville
     */
    public function setNomVille($nom_ville): void
    {
        $this->nom_ville = $nom_ville;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * @param mixed $code_postal
     */
    public function setCodePostal($code_postal): void
    {
        $this->code_postal = $code_postal;
    }

}
