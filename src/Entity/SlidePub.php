<?php

namespace App\Entity;

use App\Repository\SlidePubRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SlidePubRepository::class)
 */
class SlidePub
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageSlidePub;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageSlidePub(): ?string
    {
        return $this->imageSlidePub;
    }

    public function setImageSlidePub(string $imageSlidePub): self
    {
        $this->imageSlidePub = $imageSlidePub;

        return $this;
    }
}
