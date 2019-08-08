<?php

namespace App\Traits;

use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    /**
     * @var \Ramsey\Uuid\UuidInterface
     *
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    private $id;


    public function getId()
    {
        return $this->id;
    }
}
