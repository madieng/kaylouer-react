<?php

namespace App\Entity;

use App\Traits\IdTrait;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Groups({"ad_read"})
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Car", inversedBy="pictures")
     * 
     */
    private $car;

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
}
