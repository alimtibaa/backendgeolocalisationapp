<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NumTel;

    /**
     * @ORM\Column(type="float")
     */
    private $LAT;

    /**
     * @ORM\Column(type="float")
     */
    private $LON;

    /**
     * @ORM\Column(type="float")
     */
    private $MAXLAT;

    /**
     * @ORM\Column(type="float")
     */
    private $MINLAT;

    /**
     * @ORM\Column(type="float")
     */
    private $MAXLON;

    /**
     * @ORM\Column(type="float")
     */
    private $MINLON;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Password;

    /**
   * @ORM\Column(type="json")
   */
  private $roles = [];

    public function getId()
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->NumTel;
    }

    public function setNumTel(?int $NumTel): self
    {
        $this->NumTel = $NumTel;

        return $this;
    }

    public function getLAT(): ?float
    {
        return $this->LAT;
    }

    public function setLAT(float $LAT): self
    {
        $this->LAT = $LAT;

        return $this;
    }

    public function getLON(): ?float
    {
        return $this->LON;
    }

    public function setLON(float $LON): self
    {
        $this->LON = $LON;

        return $this;
    }

    public function getMAXLAT(): ?float
    {
        return $this->MAXLAT;
    }

    public function setMAXLAT(float $MAXLAT): self
    {
        $this->MAXLAT = $MAXLAT;

        return $this;
    }

    public function getMINLAT(): ?float
    {
        return $this->MINLAT;
    }

    public function setMINLAT(float $MINLAT): self
    {
        $this->MINLAT = $MINLAT;

        return $this;
    }

    public function getMAXLON(): ?float
    {
        return $this->MAXLON;
    }

    public function setMAXLON(float $MAXLON): self
    {
        $this->MAXLON = $MAXLON;

        return $this;
    }

    public function getMINLON(): ?float
    {
        return $this->MINLON;
    }

    public function setMINLON(float $MINLON): self
    {
        $this->MINLON = $MINLON;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }
    public function getRoles(): array
  	{
  		$roles = $this->roles;

  		if (empty($roles)) {
  			$roles[] = 'ROLE_USER';
  		}

  		return array_unique($roles);
  	}

  	public function setRoles(array $roles): void
  	{
  		$this->roles = $roles;
  	}

  	public function getSalt(): ?string
  	{
  		return null;
  	}

  	public function eraseCredentials(): void
  	{

  	}
  }
