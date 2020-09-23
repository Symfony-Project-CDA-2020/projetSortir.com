<?php

namespace App\Entity;

use App\Repository\LieuxRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LieuxRepository::class)
 */
class Location
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column (type="string", length=30)
     */
    private $name_location;

    /**
     * @ORM\Column (type="string", length=30, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column (type="decimal", precision=10, scale=8, nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column (type="decimal", precision=10, scale=8, nullable=true)
     */
    private $longitude;

    /**
     * @ORM\ManyToOne(targetEntity=City::class, inversedBy="locations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $city;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumLocation()
    {
        return $this->no_location;
    }

    /**
     * @param mixed $no_location
     */
    public function setNumLocation($no_location): void
    {
        $this->no_location = $no_location;
    }

    /**
     * @return mixed
     */
    public function getNameLocation()
    {
        return $this->name_location;
    }

    /**
     * @param mixed $name_location
     */
    public function setNameLocation($name_location): void
    {
        $this->name_location = $name_location;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
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

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

}