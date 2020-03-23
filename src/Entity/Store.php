<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(
 *     name="store"
 * )
 */
class Store
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private int $id;

    /**
     * @ORM\Column(type="string",nullable=false,length=255)
     *
     * @var string
     */
    private string $name;

    /**
     * @ORM\OneToMany(
     *     targetEntity="App\Entity\OpeningTime",
     *     mappedBy="store"
     * )
     * @var Collection
     */
    private Collection $openingTimes;

    /**
     * Partner constructor.
     */
    public function __construct()
    {
        $this->openingTimes = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param int $id
     * @return $this
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get openingTimes
     *
     * @return Collection
     */
    public function getOpeningTimes(): ?Collection
    {
        return $this->openingTimes;
    }

    /**
     * Set openingTimes
     *
     * @param Collection $openingTimes
     * @return $this
     */
    public function setOpeningTimes(?Collection $openingTimes): self
    {
        $this->openingTimes = $openingTimes;

        return $this;
    }
}
