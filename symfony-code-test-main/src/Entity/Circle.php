<?php

namespace App\Entity;

use App\Repository\CircleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CircleRepository::class)
 */
class Circle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $radius;

    /**
     * @ORM\Column(type="float")
     */
    private $surface;

    /**
     * @ORM\Column(type="float")
     */
    private $circumference;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRadius(): ?float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getCircumference(): ?float
    {
        return $this->circumference;
    }

    public function setCircumference(float $circumference): self
    {
        $this->circumference = $circumference;

        return $this;
    }
}
