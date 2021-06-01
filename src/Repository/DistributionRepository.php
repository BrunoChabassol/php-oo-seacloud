<?php

// src/Repository/DistributionRepository.php

namespace Repository;

use Entity\Distribution;
use PDO;

class DistributionRepository
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return Distribution[]
     */
    public function findAll(): array
    {
        $sql = 'SELECT id, name, code FROM distribution';

        $statement = $this->connection->query($sql);

        $distributions = [];

        while (false !== $data = $statement->fetch()) {
            $distributions[] = $this->hydrate($data);
        }

        return $distributions;
    }

    public function findOneById(int $id): ?Distribution
    {
        $sql = 'SELECT id, name, code FROM distribution WHERE id=:id LIMIT 1';

        $statement = $this->connection->prepare($sql);

        $statement->execute([
            'id' => $id,
        ]);

        if (false !== $data = $statement->fetch()) {
            return $this->hydrate($data);
        }

        return null;
    }

    private function hydrate(array $data): Distribution
    {
        $distribution = new Distribution();
        $distribution
            ->setId($data['id'])
            ->setName($data['name'])
            ->setCode($data['code']);

        return $distribution;

    }
}



