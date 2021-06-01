<?php

// src/Repository/UserRepository.php

namespace Repository;

use Entity\User;
use PDO;

class UserRepository
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return User[]
     */
    public function findAll(): array
    {
        $sql = 'SELECT id, email, password, plainPassword FROM user';

        $statement = $this->connection->query($sql);

        $users = [];

        while (false !== $data = $statement->fetch()) {
            $users[] = $this->hydrate($data);
        }

        return $users;
    }

    public function findOneById(int $id): ?User
    {
        $sql = 'SELECT id, email, password, plainPassword FROM user WHERE id=:id LIMIT 1';

        $statement = $this->connection->prepare($sql);

        $statement->execute([
            'id' => $id,
        ]);

        if (false !== $data = $statement->fetch()) {
            return $this->hydrate($data);
        }

        return null;
    }

    private function hydrate(array $data): User
    {
        $user = new User();
        $user
            ->setId($data['id'])
            ->setEmail($data['email'])
            ->setpassword($data['password'])
            ->setplainPassword($data['plainPassword']);

        return $user;

    }
}




