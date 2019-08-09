<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\IdTrait;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CarRepository")
 */
class Car
{
    use IdTrait;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La marque de la voiture est obligatoire.")
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le modèle de la voiture est obligatoire.")
     */
    private $modele;

    /**
     * @ORM\Column(type="datetime")
     */
    private $year;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Type(
     *  type="integer",
     *  message="Le nombre de places doit être un nombre."
     * )
     * @Assert\NotBlank(message="Le nombre de places est obligatoire.")
     */
    private $nbrPlaces;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Picture", mappedBy="car")
     */
    private $pictures;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="cars")
     */
    private $user;

    public function __construct()
    {
        $this->pictures = new ArrayCollection();
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getYear(): ?\DateTimeInterface
    {
        return $this->year;
    }

    public function setYear(\DateTimeInterface $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getNbrPlaces(): ?int
    {
        return $this->nbrPlaces;
    }

    public function setNbrPlaces(?int $nbrPlaces): self
    {
        $this->nbrPlaces = $nbrPlaces;

        return $this;
    }

    /**
     * @return Collection|Picture[]
     */
    public function getPictures(): Collection
    {
        return $this->pictures;
    }

    public function addPicture(Picture $picture): self
    {
        if (!$this->pictures->contains($picture)) {
            $this->pictures[] = $picture;
            $picture->setCar($this);
        }

        return $this;
    }

    public function removePicture(Picture $picture): self
    {
        if ($this->pictures->contains($picture)) {
            $this->pictures->removeElement($picture);
            // set the owning side to null (unless already changed)
            if ($picture->getCar() === $this) {
                $picture->setCar(null);
            }
        }

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
}
