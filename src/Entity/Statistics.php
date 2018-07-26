<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatisticsRepository")
 */
class Statistics
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
    private $ID_U;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date;

    /**
     * @ORM\Column(type="time")
     */
    private $Time;

    /**
     * @ORM\Column(type="float")
     */
    private $Nbr_client;

    public function getId()
    {
        return $this->id;
    }

    public function getIDU(): ?int
    {
        return $this->ID_U;
    }

    public function setIDU(int $ID_U): self
    {
        $this->ID_U = $ID_U;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->Time;
    }

    public function setTime(\DateTimeInterface $Time): self
    {
        $this->Time = $Time;

        return $this;
    }

    public function getNbrClient(): ?float
    {
        return $this->Nbr_client;
    }

    public function setNbrClient(float $Nbr_client): self
    {
        $this->Nbr_client = $Nbr_client;

        return $this;
    }
}
