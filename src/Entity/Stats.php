<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatsRepository")
 */
class Stats
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $paper;

    /**
     * @ORM\Column(type="integer")
     */
    private $scissors;

    /**
     * @ORM\Column(type="integer")
     */
    private $rock;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaper(): ?int
    {
        return $this->paper;
    }

    public function setPaper(int $paper): self
    {
        $this->paper = $paper;

        return $this;
    }

    public function getScissors(): ?int
    {
        return $this->scissors;
    }

    public function setScissors(int $scissors): self
    {
        $this->scissors = $scissors;

        return $this;
    }

    public function getRock(): ?int
    {
        return $this->rock;
    }

    public function setRock(int $rock): self
    {
        $this->rock = $rock;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
