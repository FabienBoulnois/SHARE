<?php

namespace App\Entity;

use App\Repository\FichierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FichierRepository::class)
 */
class Fichier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;


    /**
     * @ORM\Column(type="string", length=50)
     */
    private $extension;

    /**
     * @ORM\Column(type="float")
     */
    private $taille;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="fichiers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\ManyToMany(targetEntity=Theme::class, inversedBy="fichiers")
     */
    private $fichiers;

    /**
     * @ORM\OneToMany(targetEntity=Telechargement::class, mappedBy="fichier")
     */
    private $telechargements;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    public function __construct()
    {
        $this->fichiers = new ArrayCollection();
        $this->telechargements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom( $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * @return Collection|Theme[]
     */
    public function getFichiers(): Collection
    {
        return $this->fichiers;
    }

    public function addFichier(Theme $fichier): self
    {
        if (!$this->fichiers->contains($fichier)) {
            $this->fichiers[] = $fichier;
        }

        return $this;
    }

    public function removeFichier(Theme $fichier): self
    {
        if ($this->fichiers->contains($fichier)) {
            $this->fichiers->removeElement($fichier);
        }

        return $this;
    }

    /**
     * @return Collection|Telechargement[]
     */
    public function getTelechargements(): Collection
    {
        return $this->telechargements;
    }

    public function addTelechargement(Telechargement $telechargement): self
    {
        if (!$this->telechargements->contains($telechargement)) {
            $this->telechargements[] = $telechargement;
            $telechargement->setFichier($this);
        }

        return $this;
    }

    public function removeTelechargement(Telechargement $telechargement): self
    {
        if ($this->telechargements->contains($telechargement)) {
            $this->telechargements->removeElement($telechargement);
            // set the owning side to null (unless already changed)
            if ($telechargement->getFichier() === $this) {
                $telechargement->setFichier(null);
            }
        }

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
