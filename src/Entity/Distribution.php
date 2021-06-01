<?php

// src/Entity/Distribution.php

namespace Entity;

class Distribution
{
    private $id   = null;
    private $name = null;
    private $code = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Distribution
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Distribution
    {
        $this->name = $name;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): Distribution
    {
        $this->code = $code;

        return $this;
    }
}




