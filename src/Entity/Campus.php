<?php

namespace App\Entity;

use App\Repository\CampusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CampusRepository::class)
 */
class Campus
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
    private $no_campus;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nom_campus;

    /**
     * @ORM\OneToMany(targetEntity=Sorties::class, mappedBy="campus")
     */
    private $sorties;

    public function __construct()
    {
        $this->sorties = new ArrayCollection();
    }

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
    public function getNoCampus()
    {
        return $this->no_campus;
    }

    /**
     * @param mixed $no_campus
     */
    public function setNoCampus($no_campus): void
    {
        $this->no_campus = $no_campus;
    }

    /**
     * @return mixed
     */
    public function getNomCampus()
    {
        return $this->nom_campus;
    }

    /**
     * @param mixed $nom_campus
     */
    public function setNomCampus($nom_campus): void
    {
        $this->nom_campus = $nom_campus;
    }

    /**
     * @return Collection|Sorties[]
     */
    public function getSorties(): Collection
    {
        return $this->sorties;
    }

    public function addSorty(Sorties $sorty): self
    {
        if (!$this->sorties->contains($sorty)) {
            $this->sorties[] = $sorty;
            $sorty->setCampus($this);
        }

        return $this;
    }

    public function removeSorty(Sorties $sorty): self
    {
        if ($this->sorties->contains($sorty)) {
            $this->sorties->removeElement($sorty);
            // set the owning side to null (unless already changed)
            if ($sorty->getCampus() === $this) {
                $sorty->setCampus(null);
            }
        }

        return $this;
    }

}
