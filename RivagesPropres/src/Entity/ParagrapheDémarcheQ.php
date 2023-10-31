<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ParagrapheDémarcheQRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParagrapheDémarcheQRepository::class)]
#[ApiResource]
class ParagrapheDémarcheQ
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $paragraphe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParagraphe(): ?string
    {
        return $this->paragraphe;
    }

    public function setParagraphe(string $paragraphe): static
    {
        $this->paragraphe = $paragraphe;

        return $this;
    }
}
