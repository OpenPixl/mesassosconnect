<?php

namespace App\Entity\Admin;

use App\Entity\Gestion\Adhesion;
use App\Entity\Gestion\typeAdhesion;
use App\Repository\Admin\AssociationRepository;
use Cocur\Slugify\Slugify;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssociationRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Association
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $object = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $isRna = false;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $numRna = null;

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

    /**
     * @var Collection<int, Adhesion>
     */
    #[ORM\OneToMany(targetEntity: Adhesion::class, mappedBy: 'asso')]
    private Collection $adhesions;

    /**
     * @var Collection<int, typeAdhesion>
     */
    #[ORM\OneToMany(targetEntity: typeAdhesion::class, mappedBy: 'Asso', cascade: ['persist'])]
    private Collection $typeAdhesions;

    #[ORM\Column(type: 'string', nullable: true)]
    private $logoName = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $logoSize = null;

    #[ORM\Column(type: 'string', nullable: true)]
    private $logoExt= null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updateAt = null;

    public function __construct()
    {
        $this->adhesions = new ArrayCollection();
        $this->typeAdhesions = new ArrayCollection();
    }

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

    /**
     * Permet d'initialiser le slug !
     * Utilisation de slugify pour transformer une chaine de caractères en slug
     */
    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function initializeSlug() {
        $slugify = new Slugify();
        $this->slug = $slugify->slugify($this->name);
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): static
    {
        $this->slug = $slug;

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

    public function SetIsRna(bool $isRna): static
    {
        $this->isRna = $isRna;

        return $this;
    }

    public function getNumRna(): ?string
    {
        return $this->numRna;
    }

    public function setNumRna(?string $numRna): static
    {
        $this->numRna = $numRna;

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

    public function getLogoName(): ?string
    {
        return $this->logoName;
    }

    public function setLogoName(?string $logoName): static
    {
        $this->logoName = $logoName;

        return $this;
    }

    public function getLogoSize(): ?string
    {
        return $this->logoSize;
    }

    public function setLogoSize(?string $logoSize): static
    {
        $this->logoSize = $logoSize;

        return $this;
    }

    public function getLogoExt(): ?string
    {
        return $this->logoExt;
    }

    public function setLogoExt(?string $logoExt): static
    {
        $this->logoExt = $logoExt;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    #[ORM\PrePersist]
    public function setCreateAt(): self
    {
        $this->createAt = new \DateTime();

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function setUpdateAt(): static
    {
        $this->updateAt = new \DateTime();

        return $this;
    }

    /**
     * @return Collection<int, Adhesion>
     */
    public function getAdhesions(): Collection
    {
        return $this->adhesions;
    }

    public function addAdhesion(Adhesion $adhesion): static
    {
        if (!$this->adhesions->contains($adhesion)) {
            $this->adhesions->add($adhesion);
            $adhesion->setAsso($this);
        }

        return $this;
    }

    public function removeAdhesion(Adhesion $adhesion): static
    {
        if ($this->adhesions->removeElement($adhesion)) {
            // set the owning side to null (unless already changed)
            if ($adhesion->getAsso() === $this) {
                $adhesion->setAsso(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, typeAdhesion>
     */
    public function getTypeAdhesions(): Collection
    {
        return $this->typeAdhesions;
    }

    public function addTypeAdhesion(typeAdhesion $typeAdhesion): static
    {
        if (!$this->typeAdhesions->contains($typeAdhesion)) {
            $this->typeAdhesions->add($typeAdhesion);
            $typeAdhesion->setAsso($this);
        }

        return $this;
    }

    public function removeTypeAdhesion(typeAdhesion $typeAdhesion): static
    {
        if ($this->typeAdhesions->removeElement($typeAdhesion)) {
            // set the owning side to null (unless already changed)
            if ($typeAdhesion->getAsso() === $this) {
                $typeAdhesion->setAsso(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
