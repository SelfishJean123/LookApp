<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $statement = $this->database->connect()->prepare('
            SELECT * FROM users u LEFT JOIN users_details ud 
            ON u.id_user_details = ud.id WHERE email = :email
        ');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            return null;
        }

        return new User(
            $user['name'],
            $user['surname'],
            $user['mobile'],
            $user['role'],
            $user['email'],
            $user['password']
        );
    }

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_details (name, surname, mobile, role)
            VALUES (?, ?, ?, ?)
        ');
        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getMobile(),
            $user->getRole()
        ]);
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password, id_user_details)
            VALUES (?, ?, ?)
        ');
        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $this->getUserDetailsId($user)
        ]);
    }

    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users_details WHERE name = :name AND surname = :surname AND mobile = :mobile AND role = :role
        ');
        $stmt->bindParam(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindParam(':surname', $user->getSurname(), PDO::PARAM_STR);
        $stmt->bindParam(':mobile', $user->getMobile(), PDO::PARAM_STR);
        $stmt->bindParam(':role', $user->getRole(), PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id'];
    }
}