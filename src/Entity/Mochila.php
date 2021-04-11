<?php

namespace App\Entity;

use App\Repository\MochilaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MochilaRepository::class)
 */
class Mochila {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;   
    
     /**
     * Muchas mochilas tienen un usuario.
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="backpack")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     */
    private $user;

    /**
     * Muchas mochilas tienen un camino. 
     * @ORM\ManyToOne(targetEntity="Camino", inversedBy="backpack")
     * @ORM\JoinColumn(name="id_camino", referencedColumnName="id")
     */
    private $camino;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $object;

    /**
     * @ORM\Column(type="integer")
     */
    private $item;   
    
    
    public function getId(): ?int {
        return $this->id;
    }     

    public function getObject(): ?string {
        return $this->object;
    }

    public function setObject(string $object): self {
        $this->object = $object;
        return $this;
    }

    public function getItem(): ?int {
        return $this->item;
    }

    public function setItem(int $item): self {
        $this->item = $item;
        return $this;
    } 
    
}