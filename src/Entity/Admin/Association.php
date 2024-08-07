<?php

namespace App\Entity\Admin;

use App\Repository\Admin\AssociationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssociationRepository::class)]
class Association
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $object = null;

    #[ORM\Column]
    private ?bool $isRna = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $rna = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $bisAddress = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $zipcode = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(length: 14, nullable: true)]
    private ?string $contactPhone = null;

    #[ORM\Column(length: 50)]
    private ?string $contactEmail = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $site = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $linkFb = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $linkInst = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $linkGoo = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updateAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(?string $Object): static
    {
        $this->object = $Object;

        return $this;
    }

    public function isRna(): ?bool
    {
        return $this->isRna;
    }

    public function getRna(): ?string
    {
        return $this->rna;
    }

    public function setRna(?string $rna): static
    {
        $this->rna = $rna;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getBisAddress(): ?string
    {
        return $this->bisAddress;
    }

    public function setBisAddress(?string $bisAddress): static
    {
        $this->bisAddress = $bisAddress;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(?string $zipcode): static
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    public function setContactPhone(?string $contactPhone): static
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(string $contactEmail): static
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): static
    {
        $this->site = $site;

        return $this;
    }

    public function getLinkFb(): ?string
    {
        return $this->linkFb;
    }

    public function setLinkFb(?string $linkFb): static
    {
        $this->linkFb = $linkFb;

        return $this;
    }

    public function getLinkInst(): ?string
    {
        return $this->linkInst;
    }

    public function setLinkInst(?string $linkInst): static
    {
        $this->linkInst = $linkInst;

        return $this;
    }

    public function getLinkGoo(): ?string
    {
        return $this->linkGoo;
    }

    public function setLinkGoo(?string $linkGoo): static
    {
        $this->linkGoo = $linkGoo;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeInterface $createAt): static
    {
        $this->createAt = $createAt;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(?\DateTimeInterface $updateAt): static
    {
        $this->updateAt = $updateAt;

        return $this;
    }
}
