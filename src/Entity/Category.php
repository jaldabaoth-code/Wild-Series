<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Serie", mappedBy="category")
     */
    private $series;

    public function __construct()
    {
        $this->series = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Serie[]
     */
    public function getSeries(): Collection
    {
        return $this->series;
    }

    /**
     * @param Serie $serie
     * @return Category
     */
    public function addSerie(Serie $serie): self
    {
        if (!$this->series->contains($serie)) {
            $this->series[] = $serie;
            $serie->setCategory($this);
        }
        return $this;
    }

    /**
     * @param Serie $serie
     * @return Category
     */

    public function removeSerie(Serie $serie): self
    {
        if ($this->series->contains($serie)) {
            $this->series->removeElement($serie);
            // set the owning side to null (unless already changed)
            if ($serie->getCategory() === $this) {
                $serie->setCategory(null);
            }
        }
        return $this;
    }
}
