<?php

namespace Manager;

use Entity\DataCenter;
use PDO;

class DataCenterManager {
    private PDO $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    /**
     * Insert un DataCenter dans la base de données.
     *
     * @param DataCenter $dataCenter
     */
    public function insert(DataCenter $dataCenter) {
        //Use connection to insert
        $sql = 'INSERT INTO dataCenter(name, code) VALUES (:name, :code)';

        //Prepare
        $insert = $this->connection->prepare($sql);

        //Execute
        $insert->execute([
            'name' => $dataCenter->getName(),
            'code' => $dataCenter->getCode(),
        ]);


        $id=$this->connection->lastInsertId();
        $dataCenter->setId($id);

    }

    public function update(DataCenter $dataCenter){
        $sql = 'UPDATE dataCenter SET name=:name, code=:code_value WHERE id=:id LIMIT 1';

        $update = $this->connection->prepare($sql);

        $update->execute([
            'id' => $dataCenter->getId(),
            'name' => $dataCenter->getName(),
            'code_value' => $dataCenter->getCode(),
        ]);
    }

    public function delete(DataCenter $dataCenter){
        $sql = 'DELETE FROM dataCenter WHERE id=:id_to_delete LIMIT 1';

        $delete = $this->connection->prepare($sql);

        $delete->execute([
            'id_to_delete' => $dataCenter->getId(),
        ]);
    }
}


