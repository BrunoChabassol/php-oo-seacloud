<?php

namespace Manager;

use Entity\Server;
use PDO;

class ServerManager {
    private PDO $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    /**
     * Insert un Serveur dans la base de données.
     *
     * @param Server $server
     */
    public function insert(Server $server) {
        //Use connection to insert
        $sql = 'INSERT INTO server( user, location, distribution, name, state, cpu, ram) VALUES ( :user, :location, :distribution, :name, :state, :cpu, :ram)';

        //Prepare
        $insert = $this->connection->prepare($sql);

        //Execute
        $insert->execute([
            'user' => $server->getUser(),
            'location' => $server->getLocation(),
            'distribution' => $server->getDistribution(),
            'name' => $server->getName(),
            'state' => $server->getState(),
            'cpu' => $server->getCpu(),
            'ram' => $server->getRam(),
        ]);


        $id=$this->connection->lastInsertId();
        $server->setId($id);

    }

    public function update(Server $server){
        $sql = 'UPDATE server SET user=:user_value, location=:location_value, distribution=:distribution_value, name=:name_value, state=:state_value, cpu=:cpu_value, ram=:ram_value WHERE id=:id LIMIT 1';

        $update = $this->connection->prepare($sql);

        $update->execute([
            'id' => $server->getId(),
            'user' => $server->getUser(),
            'location' => $server->getLocation(),
            'distribution' => $server->getDistribution(),
            'name' => $server->getName(),
            'state' => $server->getState(),
            'cpu' => $server->getCpu(),
            'ram' => $server->getRam(),
        ]);
    }

    public function delete(Server $server){
        $sql = 'DELETE FROM server WHERE id=:id_to_delete LIMIT 1';

        $delete = $this->connection->prepare($sql);

        $delete->execute([
            'id_to_delete' => $server->getId(),
        ]);
    }
}





