<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BoxeurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoxeurRepository::class)]
#[ApiResource]
class Boxeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Formedeboxe = null;

    #[ORM\Column(length: 255)]
    private ?string $palmares = null;

    #[ORM\OneToOne(inversedBy: 'boxeur', cascade: ['persist', 'remove'])]
    private ?Licence $numlicence = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormedeboxe(): ?string
    {
        return $this->Formedeboxe;
    }

    public function setFormedeboxe(string $Formedeboxe): static
    {
        $this->Formedeboxe = $Formedeboxe;

        return $this;
    }

    public function getPalmares(): ?string
    {
        return $this->palmares;
    }

    public function setPalmares(string $palmares): static
    {
        $this->palmares = $palmares;

        return $this;
    }

    public function getNumlicence(): ?Licence
    {
        return $this->numlicence;
    }

    public function setNumlicence(?Licence $numlicence): static
    {
        $this->numlicence = $numlicence;

        return $this;
    }
}
