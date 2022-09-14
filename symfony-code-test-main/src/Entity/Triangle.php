<?php

namespace App\Entity;

use App\Repository\TriangleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TriangleRepository::class)
 */
class Triangle
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
    private $sideA;

    /**
     * @ORM\Column(type="float")
     */
    private $sideB;

    /**
     * @ORM\Column(type="float")
     */
    private $sideC;

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

    public function getSideA(): ?float
    {
        return $this->sideA;
    }

    public function setSideA(float $sideA): self
    {
        $this->sideA = $sideA;

        return $this;
    }

    public function getSideB(): ?float
    {
        return $this->sideB;
    }

    public function setSideB(float $sideB): self
    {
        $this->sideB = $sideB;

        return $this;
    }

    public function getSideC(): ?float
    {
        return $this->sideC;
    }

    public function setSideC(float $sideC): self
    {
        $this->sideC = $sideC;

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
