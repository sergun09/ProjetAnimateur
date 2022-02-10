<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActiviteRepository::class)]
class Activite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Nom;

    #[ORM\Column(type: 'text')]
    private $Description;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'activites')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'ActivitesInscrit')]
    private $userInscrit;

    public function __construct()
    {
        $this->userInscrit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUserInscrit(): Collection
    {
        return $this->userInscrit;
    }

    public function addUserInscrit(User $userInscrit): self
    {
        if (!$this->userInscrit->contains($userInscrit)) {
            $this->userInscrit[] = $userInscrit;
        }

        return $this;
    }

    public function removeUserInscrit(User $userInscrit): self
    {
        $this->userInscrit->removeElement($userInscrit);

        return $this;
    }
}
