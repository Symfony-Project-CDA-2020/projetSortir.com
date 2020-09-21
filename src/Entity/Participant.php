<?php

namespace App\Entity;

use App\Repository\ParticipantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * @ORM\Entity(repositoryClass=ParticipantRepository::class)
 */
class Participant implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
/*TODO ici il y a des unique qui pourront deranger plus tard*/

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=30, unique=true)
     */
    private $last_name;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $admin;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="integer")
     */
    private $campus_num_campus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getAdmin(): ?bool
    {
        return $this->admin;
    }

    public function setAdmin(bool $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getCampusNumCampus(): ?int
    {
        return $this->campus_num_campus;
    }

    public function setCampusNumCampus(int $campus_num_campus): self
    {
        $this->campus_num_campus = $campus_num_campus;

        return $this;
    }
    public function getRoles()
    {
        if ($this->getAdmin()!=0){
            return[
                'ROLE_ADMIN'
            ];
        }
        return[
                'ROLE_USER'
            ];
    }
    //Obligé de faire ces 2 fonctions vides pour pouvoir utiliser getRoles
    public function getSalt(){}
    public function eraseCredentials(){}
    //Pour utiliser Serialiaze
    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->last_name,
            $this->first_name,
            $this->telephone,
            $this->email,
            $this->password,
            $this->admin,
            $this->active,
            $this->campus_num_campus

        ]);
    }
    public function unserialize($string)
    {
        list(
            $this->id,
            $this->username,
            $this->last_name,
            $this->first_name,
            $this->telephone,
            $this->email,
            $this->password,
            $this->admin,
            $this->active,
            $this->campus_num_campus
            ) = unserialize($string, ['allowed_classes' => false]);
    }


}
