<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    
  @ORM\ManyToMany(targetEntity=Recette::class, mappedBy="ingredients")
 
private $recette;

  @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="recette", orphanRemoval=true)
 
private $commentaire;
    
  @ORM\ManyToMany(targetEntity=Ingredient::class, inversedBy="recettes")
  @ORM\JoinTable(name="recette_ingredient")
 
private $ingredients;



    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $texte = null;

    #[ORM\Column]
    private ?int $dure_totale = null;

    #[ORM\Column]
    private ?int $nbr_perso = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): static
    {
        $this->texte = $texte;

        return $this;
    }

    public function getDureTotale(): ?int
    {
        return $this->dure_totale;
    }

    public function setDureTotale(int $dure_totale): static
    {
        $this->dure_totale = $dure_totale;

        return $this;
    }

    public function getNbrPerso(): ?int
    {
        return $this->nbr_perso;
    }

    public function setNbrPerso(int $nbr_perso): static
    {
        $this->nbr_perso = $nbr_perso;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }
}
