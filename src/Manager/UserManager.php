<?php

namespace Manager;

use Entity\User;
use PDO;

class UserManager {
    private PDO $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    /**
     * Insert un Utilisateur dans la base de données.
     *
     * @param User $user
     */
    public function insert(User $user) {
        //Use connection to insert
        $sql = 'INSERT INTO user(email, password, plainPassword) VALUES (:email, :password, :plainPassword)';

        //Prepare
        $insert = $this->connection->prepare($sql);

        //Execute
        $insert->execute([
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'plainPassword' => $user->getPlainPassword(),
        ]);


        $id=$this->connection->lastInsertId();
        $user->setId($id);

    }

    public function update(User $user){
        $sql = 'UPDATE user SET email=:email, password=:password_value, plainPassword=:plainPassword_value WHERE id=:id LIMIT 1';

        $update = $this->connection->prepare($sql);

        $update->execute([
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'plainPassword' => $user->getPlainPassword(),
        ]);
    }

    public function delete(User $user){
        $sql = 'DELETE FROM user WHERE id=:id_to_delete LIMIT 1';

        $delete = $this->connection->prepare($sql);

        $delete->execute([
            'id_to_delete' => $user->getId(),
        ]);
    }
}




