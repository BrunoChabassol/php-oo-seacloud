<?php

// src/Entity/Server.php

namespace Entity;

class Server
{
    public const STATE_PENDING = 0 ;
    public const STATE_STOPED = 1 ;
    public const STATE_READY = 2 ;
    private $id   = null;
    private $user   = null;
    private $location   = null;
    private $distribution   = null;
    private $name = null;
 //   private $state = self::STATE_PENDING;     // ce self n'est utilisable qu'à l'intérieur de ma classe (cf. this)
    private $state = Server::STATE_PENDING;     //Utilisable partout, mais à condition de mettre un use pour pouvoir utiliser cette classe Server
    private $cpu = 2;
    private $ram = 6;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Server
    {
        $this->id = $id;

        return $this;
    }

//    public function getUser(): User
//    {
//        return $this->user;
//    }

//    public function setUser(User $user) : Server
//    {
//        $this->user = $user;
//
//         return $this;
//    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location) : Server
    {
        $this->location = $location;

        return $this;
    }

    public function getDistribution(): string
    {
        return $this->distribution;
    }

    public function setDistribution(string $distribution) : Server
    {
        $this->distribution = $distribution;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Server
    {
        $this->name = $name;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(?int $state): Server
    {
        $this->state = $state;

        return $this;
    }

    public function getCpu(): ?int
    {
        return $this->cpu;
    }

    public function setCpu(?int $cpu): Server
    {
        $this->cpu = $cpu;

        return $this;
    }

    public function getRam(): ?int
    {
        return $this->ram;
    }

    public function setRam(?int $ram): Server
    {
        $this->ram = $ram;

        return $this;
    }


}





