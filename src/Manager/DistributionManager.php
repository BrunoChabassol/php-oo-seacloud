<?php

namespace Manager;

use Entity\Distribution;
use PDO;

class DistributionManager {
    private PDO $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    /**
     * Insert une Distribution dans la base de données.
     *
     * @param Distribution $distribution
     */
    public function insert(Distribution $distribution) {
        //Use connection to insert
        $sql = 'INSERT INTO distribution(name, code) VALUES (:name, :code)';

        //Prepare
        $insert = $this->connection->prepare($sql);

        //Execute
        $insert->execute([
            'name' => $distribution->getName(),
            'code' => $distribution->getCode(),
        ]);


        $id=$this->connection->lastInsertId();
        $distribution->setId($id);

    }

    public function update(Distribution $distribution){
        $sql = 'UPDATE distribution SET name=:name, code=:code_value WHERE id=:id LIMIT 1';

        $update = $this->connection->prepare($sql);

        $update->execute([
            'id' => $distribution->getId(),
            'name' => $distribution->getName(),
            'code_value' => $distribution->getCode(),
        ]);
    }

    public function delete(Distribution $distribution){
        $sql = 'DELETE FROM distribution WHERE id=:id_to_delete LIMIT 1';

        $delete = $this->connection->prepare($sql);

        $delete->execute([
            'id_to_delete' => $distribution->getId(),
        ]);
    }
}



