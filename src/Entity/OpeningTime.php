<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(
 *     name="opening_time",
 *     indexes={
 *          @ORM\Index(name="idx_ff575877b092a811",columns={"store_id"}),
 *     }
 * )
 */
class OpeningTime
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
     * @ORM\Column(type="string",nullable=false,length=10)
     *
     * @var string
     */
    private string $day;

    /**
     * @ORM\ManyToOne(
     *     targetEntity="App\Entity\Store",
     *     inversedBy="openingTimes"
     * )
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     *
     * @var Store
     */
    private Store $store;

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
     * Get day
     *
     * @return string
     */
    public function getDay(): ?string
    {
        return $this->day;
    }

    /**
     * Set day
     *
     * @param string $day
     * @return $this
     */
    public function setDay(?string $day): self
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get store
     *
     * @return Store
     */
    public function getStore(): Store
    {
        return $this->store;
    }

    /**
     * Set store
     *
     * @param Store $store
     * @return $this
     */
    public function setStore(Store $store): self
    {
        $this->store = $store;

        return $this;
    }
}
