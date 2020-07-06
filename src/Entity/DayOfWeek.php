<?php

namespace App\Entity;

use App\Repository\DayOfWeekRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DayOfWeekRepository::class)
 */
class DayOfWeek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $day;

    /**
     * @ORM\Column(type="integer")
     */
    private $dayIndex;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(string $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function getDayIndex(): ?int
    {
        return $this->dayIndex;
    }

    public function setDayIndex(int $dayIndex): self
    {
        $this->dayIndex = $dayIndex;

        return $this;
    }
}
