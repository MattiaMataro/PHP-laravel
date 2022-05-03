<?php

namespace Andrea\Marketplace\Services;

use Andrea\Marketplace\Models\User;

class UserService
{
    private DatabaseService $_databaseService;
    private QueryService $_queryService;

    public User $user;

    public function __construct()
    {
        $this->_databaseService = new DatabaseService();
        $this->_queryService = new QueryService();
    }

    public function login(string $email, string $password): User
    {
        $sql = $this->_queryService->select('users')
            ->where('email', $email)
            ->finalize();
        
        $results = $this->_databaseService->query($sql);
        
        foreach ($results as $result) {
            $this->user = new User(
                $result['id'],
                $result['email'],
                $result['password']
            );
        }

        if (!$this->user) {
            return null;
        }

        $_SESSION['user'] = $this->user;

        return $this->user;
    }

    public function signup(string $email, string $password, string $name): void
    {
        $sql = $this->_queryService->insert('users', [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'role_id' => 3
        ])->finalize();

        try {
            $this->_databaseService->query($sql);
        } catch(\PDOException $e) {
            header('Location: /signup.php?error=true');
            return;
        }

        header('Location: /login.php');
        return;
    }
}