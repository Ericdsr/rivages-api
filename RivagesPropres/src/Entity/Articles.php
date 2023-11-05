<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\ArticlesRepository;


#[ORM\Entity(repositoryClass: ArticlesRepository::class)]
#[ApiResource]
class Articles
{
    #[ORM\ManyToOne(targetEntity: MediaObject::class, cascade: ["remove"])]
    #[ORM\JoinColumn(nullable: true)]
    #[ApiProperty(types: ['https://schema.org/image'])]
    public ?MediaObject $image = null;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $paragraph = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getParagraph(): ?string
    {
        return $this->paragraph;
    }

    public function setParagraph(string $paragraph): static
    {
        $this->paragraph = $paragraph;

        return $this;
    }
    
    #[ApiProperty(readableLink: true)]
    public function getImageFilePath(): ?string
    {
        if ($this->image) {
            return $this->image->getFilePath();
        }
        return null;
    }
    public function getImage(): ?MediaObject
    {
        return $this->image;
    }

    public function setImage(?MediaObject $image): void
    {
        $this->image = $image;
    }
}
