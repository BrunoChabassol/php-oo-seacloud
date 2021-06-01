<?php

// src/Entity/Server.php

namespace Entity;

class Server
{
    private $id   = null;
    private $name = null;
    private $state = null;
    private $cpu = null;
    private $ram = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Server
    {
        $this->id = $id;

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





