<?php

namespace App\Entity;

use App\Repository\ApplicationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApplicationRepository::class)]
class Application
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\ManyToOne(inversedBy: 'applications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?JobOffer $jobOffer = null;


    #[ORM\Column]
    private ?bool $isApplicationStatus = null;

    #[ORM\ManyToOne(inversedBy: 'applications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Candidate $candidate = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateSubmittedAt = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobOffer(): ?JobOffer
    {
        return $this->jobOffer;
    }

    public function setJobOffer(?JobOffer $jobOffer): static
    {
        $this->jobOffer = $jobOffer;

        return $this;
    }


    public function isIsApplicationStatus(): ?bool
    {
        return $this->isApplicationStatus;
    }

    public function setIsApplicationStatus(bool $isApplicationStatus): static
    {
        $this->isApplicationStatus = $isApplicationStatus;

        return $this;
    }

    public function getCandidate(): ?Candidate
    {
        return $this->candidate;
    }

    public function setCandidate(?Candidate $candidate): static
    {
        $this->candidate = $candidate;

        return $this;
    }

    public function getDateSubmittedAt(): ?\DateTimeImmutable
    {
        return $this->dateSubmittedAt;
    }

    public function setDateSubmittedAt(\DateTimeImmutable $dateSubmittedAt): static
    {
        $this->dateSubmittedAt = $dateSubmittedAt;

        return $this;
    }


}
