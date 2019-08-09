<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\IdTrait;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PictureRepository")
 */
class Picture
{
    use IdTrait;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="L'image est obligatoire.")
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Car", inversedBy="pictures")
     * 
     */
    private $car;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", cascade={"persist", "remove"})
     */
    private $user;

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getCar(): ?Car
    {
        return $this->car;
    }

    public function setCar(?Car $car): self
    {
        $this->car = $car;

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
