<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $beginAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\ManyToMany(targetEntity=DayOfWeek::class, inversedBy="events")
     */
    private $daysOfWeek;

    public function __construct()
    {
        $this->daysOfWeek = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBeginAt(): ?\DateTimeInterface
    {
        return $this->beginAt;
    }

    public function setBeginAt(\DateTimeInterface $beginAt): self
    {
        $this->beginAt = $beginAt;

        return $this;
    }

    public function getEndAt(): ?\DateTimeInterface
    {
        return $this->endAt;
    }

    public function setEndAt(?\DateTimeInterface $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|DayOfWeek[]
     */
    public function getDaysOfWeek(): Collection
    {
        return $this->daysOfWeek;
    }

    public function addDaysOfWeek(DayOfWeek $daysOfWeek): self
    {
        if (!$this->daysOfWeek->contains($daysOfWeek)) {
            $this->daysOfWeek[] = $daysOfWeek;
        }

        return $this;
    }

    public function removeDaysOfWeek(DayOfWeek $daysOfWeek): self
    {
        if ($this->daysOfWeek->contains($daysOfWeek)) {
            $this->daysOfWeek->removeElement($daysOfWeek);
        }

        return $this;
    }
}
