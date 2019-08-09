<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\IdTrait;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\BookingRepository")
 */
class Booking
{
    use IdTrait;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Ad", cascade={"persist", "remove"})
     * @Assert\NotBlank(message="L'annonce est obligatoire pour pouvoir réserver.")
     */
    private $ad;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", cascade={"persist", "remove"})
     * @Assert\NotBlank(message="L'utilisateur est obligatoire.")
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Vous devez renseigner le nombre de places que vous souhaitez réserver.")
     * @Assert\Type(
     *  type="integer",
     *  message="Le nombre de places doit être un nombre."
     * )
     */
    private $nbrPlaces;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="La date de réservation est obligatoire.")
     */
    private $bookedAt;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le statut est obligatoire.")
     */
    private $status;

    public function getAd(): ?Ad
    {
        return $this->ad;
    }

    public function setAd(?Ad $ad): self
    {
        $this->ad = $ad;

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

    public function getNbrPlaces(): ?int
    {
        return $this->nbrPlaces;
    }

    public function setNbrPlaces(int $nbrPlaces): self
    {
        $this->nbrPlaces = $nbrPlaces;

        return $this;
    }

    public function getBookedAt(): ?\DateTimeInterface
    {
        return $this->bookedAt;
    }

    public function setBookedAt(\DateTimeInterface $bookedAt): self
    {
        $this->bookedAt = $bookedAt;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
