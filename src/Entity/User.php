<?php

// src/Entity/User.php

namespace Entity;

class User
{
    private $id   = null;
    private $email = null;
    private $password = null;
    private $plainPassword = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): User
    {
        $this->id = $id;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): User
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password ;
    }

    public function setPassword(?string $password ): User
    {
        $this->password  = $password ;

        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword ;
    }

    public function setPlainPassword(?string $plainPassword ): User
    {
        $this->plainPassword  = $plainPassword ;

        return $this;
    }
}




