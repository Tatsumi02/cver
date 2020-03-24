<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DatasRepository")
 */
class Datas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre_professionnel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intitule_de_post;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $employeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $departement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $travail_actuellement;

    /**
     * @ORM\Column(type="text")
     */
    private $description_responsabilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etablissement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diplome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $domaine_detude;

    /**
     * @ORM\Column(type="text")
     */
    private $competence;

    /**
     * @ORM\Column(type="text")
     */
    private $profil_professionnel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_de_debut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zone_geographique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_fin;

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTitreProfessionnel(): ?string
    {
        return $this->titre_professionnel;
    }

    public function setTitreProfessionnel(string $titre_professionnel): self
    {
        $this->titre_professionnel = $titre_professionnel;

        return $this;
    }

    public function getAdressePostal(): ?string
    {
        return $this->adresse_postal;
    }

    public function setAdressePostal(string $adresse_postal): self
    {
        $this->adresse_postal = $adresse_postal;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getIntituleDePost(): ?string
    {
        return $this->intitule_de_post;
    }

    public function setIntituleDePost(string $intitule_de_post): self
    {
        $this->intitule_de_post = $intitule_de_post;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

   
    public function getEmployeur(): ?string
    {
        return $this->employeur;
    }

    public function setEmployeur(string $employeur): self
    {
        $this->employeur = $employeur;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getTravailActuellement(): ?string
    {
        return $this->travail_actuellement;
    }

    public function setTravailActuellement(string $travail_actuellement): self
    {
        $this->travail_actuellement = $travail_actuellement;

        return $this;
    }

    public function getDescriptionResponsabilite(): ?string
    {
        return $this->description_responsabilite;
    }

    public function setDescriptionResponsabilite(string $description_responsabilite): self
    {
        $this->description_responsabilite = $description_responsabilite;

        return $this;
    }

    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    public function setEtablissement(string $etablissement): self
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    public function getDiplome(): ?string
    {
        return $this->diplome;
    }

    public function setDiplome(string $diplome): self
    {
        $this->diplome = $diplome;

        return $this;
    }

    public function getDomaineDetude(): ?string
    {
        return $this->domaine_detude;
    }

    public function setDomaineDetude(string $domaine_detude): self
    {
        $this->domaine_detude = $domaine_detude;

        return $this;
    }

    public function getCompetence(): ?string
    {
        return $this->competence;
    }

    public function setCompetence(string $competence): self
    {
        $this->competence = $competence;

        return $this;
    }

    public function getProfilProfessionnel(): ?string
    {
        return $this->profil_professionnel;
    }

    public function setProfilProfessionnel(string $profil_professionnel): self
    {
        $this->profil_professionnel = $profil_professionnel;

        return $this;
    }

    public function getDateDeDebut(): ?string
    {
        return $this->date_de_debut;
    }

    public function setDateDeDebut(string $date_de_debut): self
    {
        $this->date_de_debut = $date_de_debut;

        return $this;
    }

    public function getZoneGeographique(): ?string
    {
        return $this->zone_geographique;
    }

    public function setZoneGeographique(string $zone_geographique): self
    {
        $this->zone_geographique = $zone_geographique;

        return $this;
    }

    public function getDateFin(): ?string
    {
        return $this->date_fin;
    }

    public function setDateFin(string $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    
}
