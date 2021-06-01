<?php

// src/Repository/ServerRepository.php

namespace Repository;

use Entity\Server;
use PDO;

class ServerRepository
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return Server[]
     */
    public function findAll(): array
    {
        $sql = 'SELECT id, STATE_PENDING, STATE_STOPED, STATE_READY, user, location, distribution, name, state, cpu, ram FROM server';

        $statement = $this->connection->query($sql);

        $servers = [];

        while (false !== $data = $statement->fetch()) {
            $servers[] = $this->hydrate($data);
        }

        return $servers;
    }

    public function findOneById(int $id): ?Server
    {
        $sql = 'SELECT id, STATE_PENDING, STATE_STOPED, STATE_READY, user, location, distribution, name, state, cpu, ram FROM server WHERE id=:id LIMIT 1';

        $statement = $this->connection->prepare($sql);

        $statement->execute([
            'id' => $id,
        ]);

        if (false !== $data = $statement->fetch()) {
            return $this->hydrate($data);
        }

        return null;
    }

    private function hydrate(array $data): Server
    {
        $server = new Server();
        $server
            ->setId($data['id'])
            ->setUser($data['user'])
            ->setlocation($data['location'])
            ->setdistribution($data['distribution'])
            ->setName($data['name'])
            ->setState($data['state'])
            ->setCpu($data['cpu'])
            ->setRam($data['ram']);

        return $server;

    }
}





