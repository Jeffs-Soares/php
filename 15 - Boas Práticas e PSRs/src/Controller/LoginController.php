<?php

namespace Alura\Mvc\Controller;

use Alura\Mvc\Helper\FlashMessageTrait;

class LoginController implements Controller
{
    use FlashMessageTrait;
    private \PDO $pdo;

    public function __construct()
    {
        $host = "localhost";
        $port = "5432";
        $dbname = "alura";
        $user = "postgres";
        $password = "root";

        try {
            $this->pdo = new \PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }


    public function processaRequisicao(): void
    {

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        $sql = "SELECT * FROM users WHERE email = ?;";

        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $email);
        $statement->execute();
        
        $userData = $statement->fetch(\PDO::FETCH_ASSOC);
        $correctPassword = password_verify($password, $userData['password'] ?? '');
        
        if ($correctPassword) {

            if (password_needs_rehash($userData['password'], PASSWORD_ARGON2ID)) {
                $statement = $this->pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
                $statement->bindValue(1, password_hash($password, PASSWORD_ARGON2ID));
                $statement->bindValue(2, $userData['id']);
                $statement->execute();

            }
            
            $_SESSION['logado'] = true;
            header('Location: /');
        } else {
            
            $this->addErrorMessage('Usuário e/ou senha inválidos.');
            header('Location: /login');
        }

    }
}

?>