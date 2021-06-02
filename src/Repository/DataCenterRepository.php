<?php

// src/Repository/DataCenterRepository.php

namespace Repository;

use Entity\DataCenter;
use PDO;

class DataCenterRepository
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return DataCenter[]
     */
    public function findAll(): array
    {
        $sql = "SELECT id, `name`, code FROM datacenter";

        $statement = $this->connection->query($sql);

        $dataCenters = [];

        while (false !== $data = $statement->fetch()) {
            $dataCenters[] = $this->hydrate($data);
        }

        return $dataCenters;
    }

    public function findOneById(int $id): ?DataCenter
    {
        $sql = "SELECT id, `name`, code FROM datacenter WHERE id=:id LIMIT 1";

        $statement = $this->connection->prepare($sql);

        $statement->execute([
            'id' => $id,
        ]);

        if (false !== $data = $statement->fetch()) {
            return $this->hydrate($data);
        }

        return null;
    }

    private function hydrate(array $data): DataCenter
    {
        $dataCenter = new DataCenter();
        $dataCenter
            ->setId($data['id'])
            ->setName($data['name'])
            ->setCode($data['code']);

        return $dataCenter;

    }
}


