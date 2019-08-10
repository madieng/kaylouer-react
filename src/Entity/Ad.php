<?php

namespace App\Entity;

use App\Traits\IdTrait;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *  normalizationContext={"groups"={"ad_read"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\AdRepository")
 */
class Ad
{
    use IdTrait;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\Date(message="La date de départ doit être au format 'Y-m-d'")
     * @Assert\NotBlank(message="La date de départ est obligatoire.")
     * @Groups({"ad_read"})
     */
    private $departureDate;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\Date(message="La date d'arrivée doit être au format 'Y-m-d'")
     * @Assert\NotBlank(message="La date d'arrivée est obligatoire.")
     * @Groups({"ad_read"})
     */
    private $arrivalDate;

    /**
     * @ORM\Column(type="time")
     * @Assert\Time(message="L'heure de départ doit être au format 'H:i:s'")
     * @Assert\NotBlank(message="L'heure de départ est obligatoire.")
     * @Groups({"ad_read"})
     */
    private $departureHour;

    /**
     * @ORM\Column(type="time")
     * @Assert\Time(message="L'heure d'arrivée foit être au format 'H:i:s'")
     * @Assert\NotBlank(message="L'heure d'arrivée est obligatoire.")
     * @Groups({"ad_read"})
     */
    private $arrivalHour;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"ad_read"})
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime(message="La date de création doit être au format 'Y-m-d H:i:s'")
     * @Assert\NotBlank(message="La date de création est obligatoire.")
     * @Groups({"ad_read"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\DateTime(message="La date de modification doit être au format 'Y-m-d H:i:s'")
     * @Groups({"ad_read"})
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Type(
     *  type="integer",
     *  message="Le nombre de places doit être un nombre."
     * )
     * @Assert\NotBlank(message="Le nombre de places est obligatoire.")
     * @Groups({"ad_read"})
     */
    private $nbrPlaces;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="ads")
     * @Groups({"ad_read"})
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La ville de départ est obligatoire.")
     * @Groups({"ad_read"})
     */
    private $departure;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La ville d'arrivée est obligatoire.")
     * @Groups({"ad_read"})
     */
    private $arrival;

    public function getDepartureDate(): ?\DateTimeInterface
    {
        return $this->departureDate;
    }

    public function setDepartureDate(\DateTimeInterface $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    public function getArrivalDate(): ?\DateTimeInterface
    {
        return $this->arrivalDate;
    }

    public function setArrivalDate(\DateTimeInterface $arrivalDate): self
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getDepartureHour(): ?\DateTimeInterface
    {
        return $this->departureHour;
    }

    public function setDepartureHour(\DateTimeInterface $departureHour): self
    {
        $this->departureHour = $departureHour;

        return $this;
    }

    public function getArrivalHour(): ?\DateTimeInterface
    {
        return $this->arrivalHour;
    }

    public function setArrivalHour(\DateTimeInterface $arrivalHour): self
    {
        $this->arrivalHour = $arrivalHour;

        return $this;
    }

    public function getDeparture(): ?string
    {
        return $this->departure;
    }

    public function setDeparture(string $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    public function getArrival(): ?string
    {
        return $this->arrival;
    }

    public function setArrival(string $arrival): self
    {
        $this->arrival = $arrival;

        return $this;
    }
}
