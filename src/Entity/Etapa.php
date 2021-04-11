<?php

namespace App\Entity;

use App\Repository\EtapaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtapaRepository::class)
 */
class Etapa
{
    public function __construct() {      
        $this->caminoEtapa = new ArrayCollection();
        $this->userCaminoEtapa = new ArrayCollection();         
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;   

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $start;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $finish;

    /**
     * @ORM\Column(type="float")
     */
    private $km;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;

    /**
     * Una Etapa tiene muchos caminoEtapa
     * @ORM\OneToMany(targetEntity="CaminoEtapa", mappedBy="etapa")
     */
    private $caminoEtapa;

    /**
     * Un camino tiene muchos CaminoEtapa
     * @ORM\OneToMany(targetEntity="CaminoEtapa", mappedBy="camino")
     */
    private $camino;

    /**
     * Una etapa tiene muchos UsuarioCaminoEtapa
     * @ORM\OneToMany(targetEntity="UsuarioCaminoEtapa", mappedBy="etapa")
     */
    private $userCaminoEtapa;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(string $start): self
    {
        $this->start = $start;
        return $this;
    }

    public function getFinish(): ?string
    {
        return $this->finish;
    }

    public function setFinish(string $finish): self
    {
        $this->finish = $finish;

        return $this;
    }

    public function getKm(): ?float
    {
        return $this->km;
    }

    public function setKm(float $km): self
    {
        $this->km = $km;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
}